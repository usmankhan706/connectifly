<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use phpDocumentor\Reflection\Types\Null_;

class CompanyLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:company')->except("logout");
        $this->middleware('guest:user')->except("logout");
    }

    public function index()
    {
        return view("auth.bussiness_signin");
    }


    public function login(Request $request)
    {
        $this->validate($request, [
            "email" => ['required', 'string', 'email'],
            "password" => ['required'],
        ]);
        $current_email=$request->email;
        
        $serv_id=Company::select('service_id')->where('email', $current_email)
        ->pluck('service_id')
        ->first();


        session(['service_id' => $serv_id]);

        $new_session=session()->get("service_id");
        // dd($new_session);
//         var_dump($new_session);
// 
//         if($new_session===NULL)
//         {
//             dd("session is null");
//         }
//         else
//         {
//             dd("session is not null");
//         }


        if (Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password]) && $serv_id===NUll){
            return redirect(route('package'));
        }
        else
        {
            return redirect(route('company.profile'));
        }

        return back()->with('status', 'invalid login details');
    }
}
