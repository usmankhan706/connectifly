<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:user'])->except("logout");
        $this->middleware(['guest:company'])->except("logout");
    }

    public function index()
    {
        return view("auth.user_signin");
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            "email" => ['required', 'string', 'email'],
            "password" => ['required', 'min:8'],
        ]);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }


        return back()->with('status', 'invalid login details');
    }
}
