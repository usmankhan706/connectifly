<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin']);
    }

    public function index()
    {
        $allServices=Service::latest()
        ->get();
        return view("admin.services", compact("allServices"));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'service'=> ['required', 'unique:services,service']
        ]);

        Service::create([
            'service' => $request->service,
        ]);

        $allServices=Service::latest()
        ->get();
        $message = "Service Added";

        return view("admin.services", compact("allServices", "message"));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'service'=> ['required']
        ]);

        Service::where("id", $request->id)
        ->update([
            'service' => $request->service,
        ]);

        $allServices=Service::latest()
        ->get();
        $message = "Service Updated";

        return view("admin.services", compact("allServices", "message"));
    }

    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id'=> ['required']
        ]);

        Service::where("id", $request->id)
        ->delete();

        $allServices=Service::latest()
        ->get();
        $message = "Service Deleted";

        return view("admin.services", compact("allServices", "message"));
    }
}
