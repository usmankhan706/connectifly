<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserLogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:user'])->except('logout');
    }

    public function logout(Request $request)
    {
        auth('user')->logout();
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route("home");
    }
}
