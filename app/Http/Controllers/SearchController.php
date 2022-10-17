<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class SearchController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['loggedin']);
    }

    public function find(Request $request){

        
        if ((auth('company')->check() && empty(auth('company')->user()->subscribed)) || auth('user')->check()) {
            // return redirect()->route('home');
            $jobs=Job::with(['company'])
            ->where("title", "LIKE", "%".$request->service."%")
            ->orderBy('created_at', 'DESC')
            ->paginate(6);

            $jobs->appends(['service' => $request->service]);
            return view('users.company_search')->with('jobs',$jobs);
        }
        if (empty($request->company) and !empty($request->service)) {

            $jobs=Job::with(['company'])
            ->where("title", "LIKE", "%".$request->service."%")
            ->orderBy('created_at', 'DESC')
            ->paginate(6);

            $jobs->appends(['service' => $request->service]);

        } else if(!empty($request->company)) {

            $company_name=$request->company;
            $jobs=Job::with(['company'])
            ->whereHas('company', function ($query) use ($company_name)
            {
                $query->where('name', "LIKE", "%".$company_name."%");
            })
            ->where("title", "LIKE", "%".$request->service."%")
            ->latest()->paginate(6);

            $jobs->appends(['company' => $company_name,'service' => $request->service]);

        } else {

            $jobs=Job::select()->with(['company'])->limit(8)->orderBy('created_at', 'DESC')->paginate(6);
            
        }

        return view('users.company_search')->with('jobs',$jobs);
    }

    public function company(Request $request)
    {
        $company=Company::with(['service', 'jobs'])
        ->withCount(['follower'])
        ->find($request->company);

        // dd($company->cover);
        return view("users.company_view")->with("company", $company);
    }
}
