<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\UserVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class DetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['loggedin']);
    }

    public function user_store(Request $request)
    {
        $this->validate($request, [
            'title'=> ['string', 'nullable'],
            'company'=> ['string', 'nullable'],
            'website'=>['url', 'nullable'],
            'country'=> ['string', 'nullable'],
            'city'=> ['string', 'nullable'],
        ]);

        auth('user')->user()->update([
            'title'=> $request->title,
            'company'=> $request->company,
            'website'=> $request->website,
            'country'=> $request->country,
            'city'=> $request->city,
        ]);

        return redirect()->route("profile");
    }

    public function company_store(Request $request)
    {
        $this->validate($request, [
            "first_name" => ['required', 'string', 'max:255'],
            "last_name" => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'min:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'company_id' => auth('company')->id()
        ]);

        Mail::to($request->email)->send(new UserVerification($request->email));
        return redirect()->route("company.profile");
    }
}
