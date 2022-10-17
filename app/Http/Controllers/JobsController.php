<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Mail\JobPosted;
use App\Models\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:company"); 
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'title'=>['required', 'string'],
            'description'=> ['required','string']
        ]);

        $request->user()->jobs()->create([
                'title'=> $request->title,
                'description' => $request->description,
        ]);


        foreach (auth("company")->user()->follower as $follower) {

            Mail::to($follower->user->email)->send(new JobPosted());
        }
        return back();
    }
}
