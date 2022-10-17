<?php

namespace App\Http\Controllers;

use App\Mail\Followed;
use App\Models\Company;
use App\Models\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FollowerController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:user");
    }

    public function follow(Request $request)
    {
        $this->validate($request, [
            'id' => ['required', 'numeric']
        ]);

        Follower::create([
            'company_id' => $request->id,
            'user_id' => auth("user")->user()->id,
        ]);

        $company_mail= Company::find($request->id);

        Mail::to($company_mail->email)->send(new Followed);

        return back();
    }

    public function unfollow(Request $request)
    {
        $this->validate($request, [
            'id' => ['required', 'numeric']
        ]);

        $request->user()->following()->where('company_id', $request->id)->delete();
        return back();
    }
}
