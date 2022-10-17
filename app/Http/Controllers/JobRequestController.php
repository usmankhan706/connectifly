<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobRequest;
use App\Models\Conversation;
use Illuminate\Http\Request;

class JobRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:user");
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            "job"=> ['required', 'numeric'],
            "message" => ['required', 'string']
        ]);

        $company=Job::with('company')->find($request->job);

        Conversation::create([
            "job_id"=> $request->job,
            "sender"=> "user",
            "company_id"=>$company->company->id,
            "user_id"=> auth('user')->user()->id,
            "message"=> $request->message,
        ]);

        return back();
        
    }
}
