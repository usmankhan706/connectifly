<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Service;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:company']);
    }

    public function index()
    {
        $services = Service::all();
        $session = session('service_id');
        // dd($session);
        if (!auth()->user()->subscribed) {
            return redirect(route('package'));

        } else {

            return view("company.company_profile")->with("services", $services);
        }

        // dd($session);

        // dd($services);

    }

    public function show()
    {
        $companies = Company::all();
        // $companies = Company::latest()->get();

        return view("admin.companies")->with("companies", $companies);
    }

    public function profile(Request $request)
    {
        $this->validate($request, [
            'logo' => ['required', 'image', 'mimes:png,jpg,jpeg,svg', 'max:5120'],
        ]);

        $pro_image = time() . '.' . ($request['logo'])->extension();
        if ($request->file('logo')->move(public_path('company_logos'), $pro_image)) {

            auth('company')->user()->update([
                'logo' => $pro_image,
            ]);
        }

        return redirect()->route("company.profile");
    }

    public function cover(Request $request)
    {

        $this->validate($request, [
            'cover' => ['required', 'image', 'mimes:png,jpg,jpeg,svg', 'max:5120'],
        ]);
        $cover_image = time() . '.' . ($request['cover'])->extension();

        if ($request->file('cover')->move(public_path('company_cover_images'), $cover_image)) {

            auth('company')->user()->update([
                'cover' => $cover_image,
            ]);
            return redirect()->route("company.profile");
        }
    }

    public function about(Request $request)
    {

        $this->validate($request, [
            'service' => ['numeric', 'nullable'],
            'website' => ['url', 'nullable'],
            'country' => ['string', 'nullable'],
            'city' => ['string', 'nullable'],
            'phone' => ['string', 'nullable'],
            'size' => ['numeric', 'nullable'],
            'about' => ['string', 'nullable'],
        ]);

        auth('company')->user()->update([
            'service_id' => $request->service,
            'website' => $request->website,
            'country' => $request->country,
            'city' => $request->city,
            'phone' => $request->phone,
            'size' => $request->size,
            'description' => $request->about,
        ]);
        return redirect()->route("company.profile");
    }

    public function names(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string'],
        ]);

        auth('company')->user()->update([
            'name' => $request->name,
        ]);
        return redirect()->route("company.profile");
    }

}
