<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLogoutController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:admin'])->except('logout');
    }

    public function logout(Request $request)
    {
        auth('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route("admin.login");
    }
}
