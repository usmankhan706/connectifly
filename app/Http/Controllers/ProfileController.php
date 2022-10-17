<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Middleware\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Facade\FlareClient\Http\Response;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);

    }

    public function index(User $user)
    {

        // Mail::to(auth()->user()->email);
        $recomended= Job::where("title", "Like", "%".auth("user")->user()->title."%")
        ->with(['company'])
        ->limit(4)
        ->get();
        // dd($recomended);
        return view("users.user_profile")->with("jobs", $recomended);

    }

    public function profile(Request $request)
    {
        $this->validate($request, [
            'profile' => ['required', 'image', 'mimes:png,jpg,jpeg,svg', 'max:5120']
        ]);

        $pro_image = time() . '.' . ($request['profile'])->extension();
        if ($request->file('profile')->move(public_path('profile_images'), $pro_image)) {

            auth()->guard('user')->user()->update([
                'profile' => $pro_image,
            ]);
        }

        return redirect()->route("profile");
    }

    public function cover(Request $request)
    {

        $this->validate($request, [
            'cover' => ['required', 'image', 'mimes:png,jpg,jpeg,svg', 'max:5120']
        ]);
        $cover_image = time() . '.' . ($request['cover'])->extension();

        if ($request->file('cover')->move(public_path('cover_images'), $cover_image)) {

            auth()->guard('user')->user()->update([
                'cover' => $cover_image,
            ]);
            return redirect()->route("profile");
        }
    }

    public function about(Request $request)
    {

        $this->validate($request, [
            'title' => ['string', 'nullable'],
            'company' => ['string', 'nullable'],
            'city' => ['string', 'nullable'],
            'country' => ['string', 'nullable'],
            'phone' => ['string', 'nullable'],
            'about' => ['string', 'nullable'],
        ]);

        auth('user')->user()->update([
            'title' => $request->title,
            'company' => $request->company,
            'city' => $request->city,
            'country' => $request->country,
            'phone' => $request->phone,
            'about' => $request->about,
        ]);
        return redirect()->route("profile");
    }

    public function names(Request $request)
    {

        $this->validate($request, [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string']
        ]);

        auth()->guard('user')->user()->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);
        return redirect()->route("profile");
    }

    public function experience(Request $request)
    {


        if (!empty($request->left)) {
            $left = $request->left;

            $this->validate($request, [
                'title' => ['required', 'string'],
                'company' => ['required', 'string'],
                'joined' => ['required', 'date', 'before:' . $left],
                'left' => ['before_or_equal:today'],
            ]);

        } else {
            $this->validate($request, [
                'title' => ['required', 'string'],
                'company' => ['required', 'string'],
                'joined' => ['required', 'date', 'before:today'],
            ]);
        }

        Experience::create([
            'user_id' => auth()->guard('user')->user()->id,
            'job_title' => $request->title,
            'company' => $request->company,
            'joined' => $request->joined,
            'left' => $request->left,
        ]);

        return redirect()->route("profile");
    }

    public function experience_delete(Experience $skill,Request $request)
    {

        Experience::destroy($request->exp_id);


        return redirect()->route("profile");
    }

    public function skills(Request $request)
    {

        $this->validate($request, [
            'skill' => ['required', 'string'],
            'stars' => ['required']
        ]);

        Skill::create([
            'user_id' => auth()->guard('user')->user()->id,
            'skill' => $request->skill,
            'ratings' => $request->stars,
        ]);

        return redirect()->route("profile");
    }

    public function skills_delete(Skill $skill,Request $request)
    {

        Skill::destroy($request->id);


        return redirect()->route("profile");
    }

    public function get_comapny(Request $request)
    {

        $companies=DB::table('companies')->select()->where("name", "LIKE", "%".$request->term."%")->latest()->limit(6)->get();
        return response()->json([
            "status"=>true,
            'companies'=>$companies,
        ]);

    }
}
