<?php

namespace App\Http\Controllers\auth;

use App\Models\Company;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Mail\CompanyVerification;
use Mollie\Laravel\Facades\Mollie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CompanyRegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:company')->except("logout");
    }

    public function index()
    {
        $service = Service::all();
        return view("auth.bussiness_signup")->with('services', $service);
    }

    public function store(Request $data)
    {

        $this->validate($data, [
            "name" => ['required', 'string'],
            "description" => ['required', 'string'],
            "size" => ['required', "numeric"],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies,email'],
            'phone' => ['required', 'string', 'min:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'website' => ['unique:companies,website']
        ]);

        if ($data->hasFile('portfolio')) {
            $pro_image = time() . '.' . $data->file('portfolio')->getClientOriginalExtension();
            $data->file('portfolio')->move(public_path('profile_images'), $pro_image);
        }

        $company = Company::create([
            'name' => $data->name,
            'email' => $data->email,
            'phone' => $data->phone,
            'description' => $data->description,
            'size' => $data->size,
            'portfolio' => $data->portfolio,
            'password' => Hash::make($data->password),
            'website' => $data->website,
            'country' => $data->country,
            'city' => $data->city,
        ]);


        Mail::to($data->email)->send(new CompanyVerification($data->email));

        if (Auth::guard('company')->attempt($data->only('email', 'password'))) {
            return redirect()->route("package");
        }
    }
}



// if (Auth::guard('company')->attempt($data->only('email', 'password'))) {
//     return redirect()->route("company.profile");
// }
