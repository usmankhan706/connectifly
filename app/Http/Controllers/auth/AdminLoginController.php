<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(["guest:admin"]);
    }

    public function index()
    {
        return view("admin.login");
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route("admin.dashboard");
        }


        return back()->with('status', 'invalid login details');
    }
}
