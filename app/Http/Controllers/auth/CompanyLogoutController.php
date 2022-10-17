<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyLogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:company'])->except('logout');
    }

    public function logout(Request $request)
    {
        auth('company')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route("home");
    }
}
