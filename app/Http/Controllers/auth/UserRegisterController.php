<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\UserVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;

class UserRegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view("auth.user_signup");
    }

    public function store(Request $data)
    {

        $this->validate($data, [
            "first_name" => ['required', 'string', 'max:255'],
            "last_name" => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'min:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'email' => $data->email,
            'phone' => $data->phone,
            'password' => Hash::make($data->password),
        ]);

        if (Auth::guard('user')->attempt($data->only('email', 'password'))) {

            Mail::to($data->email)->send(new UserVerification($data->email));
            return redirect()->route("user.detail");
        }

        return back();
    }
}
