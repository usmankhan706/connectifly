<?php

use App\Models\Job;
use App\Models\User;
use App\Mail\ContactUs;
use App\Models\Company;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Middleware\Admin;
use App\Mail\CompanyPasswordReset;
use Illuminate\Auth\Events\Logout;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\MollieController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\JobRequestController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\auth\UserLoginController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\HowitworksController;


use App\Http\Controllers\auth\AdminLoginController;
use App\Http\Controllers\auth\UserLogoutController;
use App\Http\Controllers\auth\AdminLogoutController;
use App\Http\Controllers\auth\CompanyLoginController;
use App\Http\Controllers\auth\UserRegisterController;
use App\Http\Controllers\auth\CompanyLogoutController;
use App\Http\Controllers\auth\CompanyRegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/policies',[PolicyController::class,'policy'])->name('policy');
Route::get('/terms&condition',[TermController::class,'term'])->name('term');


Route::get('/', function () {
    $jobs = Job::with("company")
        ->limit("6")
        ->get();

    $companies = Company::with("jobs")
        ->has('subscribed')
        ->withCount('follower')
        ->limit("12")
        ->latest()
        ->get();

    return view('users.home', compact("jobs", "companies"));
})->name('home');


Route::get('contact', function () {
    return view("mutual.contact");
})->name("contact");

Route::post('contact', function (Request $request) {

    $request->validate([
        'name' => "required",
        'email' => "required|email",
        'message' => "required|min:100",
    ]);

    $to = "abidnoman888@gmail.com";

    Mail::to($to)->send(new ContactUs($request));
    return back()->with("message", "message sent successfully");
});

// Auth::routes(['verify'=>true]);
Route::prefix('user')->group(function () {

    Route::middleware(['guest:user'])->group(function () {
        Route::get('/sign_up', [UserRegisterController::class, 'index'])->name('user_register');
        Route::post('/sign_up', [UserRegisterController::class, 'store']);


        Route::get('/sign_in', [UserLoginController::class, 'index'])->name('user_login');
        Route::post('/sign_in', [UserLoginController::class, 'login']);
    });

    Route::middleware(['auth:user'])->group(function () {

        Route::get('/details', function () {
            return view("auth.details");
        })->name("user.detail");


        Route::post('/details', [DetailsController::class, "user_store"])->name("user.add_details");

        Route::post('/sign_out', [UserLogoutController::class, 'logout'])->name("logout");

        Route::get('/profile', [ProfileController::class, 'index'])->name("profile");
        Route::post('/profile', [ProfileController::class, 'get_comapny']);
        Route::put('/profile/profile_image', [ProfileController::class, 'profile'])->name("profile.picture");
        Route::put('/profile/cover_image', [ProfileController::class, 'cover'])->name("profile.cover");
        Route::put('/profile/about', [ProfileController::class, 'about'])->name("profile.about");
        Route::put('/profile/names', [ProfileController::class, 'names'])->name("profile.names");
        Route::put('/profile/experience', [ProfileController::class, 'experience'])->name("profile.experience");
        Route::delete('/profile/experience', [ProfileController::class, 'experience_delete']);
        Route::put('/profile/skills', [ProfileController::class, 'skills'])->name("profile.skills");
        Route::delete('/profile/skills', [ProfileController::class, 'skills_delete']);


        Route::post('/request', [JobRequestController::class, 'send'])->name("send.request");

        Route::post('/company/follow', [FollowerController::class, 'follow'])->name("follow");
        Route::post('/company/unfollow', [FollowerController::class, 'unfollow'])->name("unfollow");
    });

    Route::get("/verify/{token}", function($token, Request $request){
        $request->validate([
            'email' => ["required", "exists:users,email"]
        ]);

        User::where("email", $request->email)
        ->update([
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->route("home");
    });
});

//prefeix grouping
Route::prefix('company')->group(function () {


    Route::middleware(['guest:company'])->group(function () {
        Route::get('/sign_up', [CompanyRegisterController::class, 'index'])->name('company_register');
        Route::post('/sign_up', [CompanyRegisterController::class, 'store']);

        Route::get('/sign_in', [CompanyLoginController::class, 'index'])->name('comapny_login');
        Route::post('/sign_in', [CompanyLoginController::class, 'login']);
        Route::get('/hoe_werkt_het', [HowitworksController::class, 'hoe_werkt_het'])->name('hoe_werkt_het');

    });

    //middleware grouping
    Route::group(['middleware' => ['auth:company'], 'as' => 'company.'], function(){

        //named grouping
        // Route::get('/details', function () {
        //     return view("auth.user_signup");
        // })->name("detail");
        Route::view('/details', "auth.user_signup")->name("personal");
        Route::post('/details', [DetailsController::class, "company_store"])->name("add_details");

        Route::post('/jobs/save', [JobsController::class, 'save'])->name('jobs.save');

        Route::put('/profile/profile_image', [CompanyProfileController::class, 'profile'])->name("profile.picture");
        Route::put('/profile/cover_image', [CompanyProfileController::class, 'cover'])->name("profile.cover");
        Route::put('/profile/about', [CompanyProfileController::class, 'about'])->name("profile.about");
        Route::put('/profile/names', [CompanyProfileController::class, 'names'])->name("profile.names");
        Route::get('/profile', [CompanyProfileController::class, 'index'])->name("profile");
        Route::post('/sign_out', [CompanyLogoutController::class, 'logout'])->name("logout");
    });


    Route::get("/verify/{token}", function($token, Request $request){
        $request->validate([
            'email' => ["required", "exists:companies,email"]
        ]);

        Company::where("email", $request->email)
        ->update([
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->route("home");
    });
});

// Route::post('job/search', [SearchController::class, 'index'])->name("search");
Route::get('job/search', [SearchController::class, 'find'])->name("search");
Route::get('job/search/{company}', [SearchController::class, 'company'])->name("company.view");
Route::view('/how-it-works', 'users.how-it-works')->name("how-it-works");
Route::view('/how-its-begin', 'users.how-its-begin')->name("how-its-begin");


Route::get('/chats', [ConversationController::class, 'show'])->name("chats")->middleware('loggedin');
Route::get('/chats/new', [ConversationController::class, 'refresh'])->name("refresh")->middleware('loggedin');
Route::get('/chats/{id}', [ConversationController::class, 'get_chat'])->name("get.chat")->middleware('loggedin');
Route::post('/chats', [ConversationController::class, 'send'])->name("send.chat")->middleware('loggedin');
Route::post('/chats/unread/{user}', [ConversationController::class, 'unread'])->name("unread")->middleware('loggedin');

//user forgot password
Route::view('/forgot-password', 'auth.forgot-password')->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('user_login')->with('status', __($status))
        : back()->withErrors(['email' => ["Invalid token!"]]);
})->middleware('guest')->name('password.update');

//company forgot password
Route::prefix('company')->group(function () {

    Route::name("company.")->group(function () {

        Route::view('/forgot-password', 'auth.company-forgot-password')->middleware('guest')->name('password.request');

        Route::post('/forgot-password', function (Request $request) {
            $request->validate(['email' => 'required|email|exists:companies,email']);

            Mail::to($request->email)->send(new CompanyPasswordReset($request->email));

            return back()->with(['status' => "Email Sent Successfully"]);
        })->middleware('guest')->name('password.email');

        Route::get('/reset-password/{token}', function ($token) {
            return view('auth.company-reset-password', ['token' => $token]);
        })->middleware('guest')->name('password.reset');

        Route::post('/reset-password', function (Request $request) {

            $request->validate([
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|confirmed',
            ]);

            Company::where("email", $request->email)
            ->update([
                "password" => Hash::make($request->password),
            ]);

            $status = "Password Changed Successfully Login Now";
            return redirect()->route("comapny_login")->with('status', $status);

        })->middleware('guest')->name('password.update');

    });
});

Route::prefix('/admin')->group(function () {

    Route::name("admin.")->group(function () {

        Route::middleware(['guest:admin'])->group(function () {
            Route::get('/login', [AdminLoginController::class, 'index'])->name("login");
            Route::post('/login', [AdminLoginController::class, 'login']);
        });

        Route::middleware(['admin'])->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name("dashboard");
            Route::post('/logout', [AdminLogoutController::class, 'logout'])->name("logout");

            //services page
            Route::get("/services", [ServiceController::class, "index"])->name("services");
            Route::get("/services/{id?}", function ($id) {
                if ($id == "add-new") {
                    return view("admin.service-form");
                } elseif ($id > 0) {
                    $service = Service::find($id);

                    return view("admin.service-form", compact("service"));
                }
            })->name("service-manage");

            Route::post("/services", [ServiceController::class, "save"]);
            Route::put("/services", [ServiceController::class, "update"]);
            Route::delete("/services", [ServiceController::class, "destroy"]);

            Route::get("/companies", function(){
                $companies = Company::latest()
                ->with("service")
                ->withCount("jobs")
                ->get();

                return view("admin.companies")->with("companies", $companies);
            })->name("all-companies");

            Route::get("/companies/{id}", function($id){
                $company = Company::with("service")
                ->withCount("jobs")
                ->with("jobs")
                ->withCount("follower")
                ->find($id);

                return view("admin.company-detail")->with("company", $company);
            })->name("view-company");

            Route::get("/users", function(){
                $users = User::latest()
                ->get();

                return view("admin.users")->with("users", $users);
            })->name("all-users");

            Route::get("/jobs", function(){
                $jobs = Job::latest()
                ->with("company")
                ->get();

                return view("admin.jobs")->with("jobs", $jobs);
            })->name("all-jobs");
        });
    });
});

Route::get('/company/subscription',[MollieController::class,'preparePayment'])->name("company.payment");
Route::get('/company/cancel',[MollieController::class,'cancel_sbscription'])->name("company.cancel_sbscription");
Route::get('/company/subscription/{package}',[MollieController::class,'preparePayment'])->name("company.payment.package");
Route::get('/jobs/mollie-paymnet',[MollieController::class,'preparePayment'])->name('mollie.payment');
Route::get('payment-success',[MollieController::class, 'paymentSuccess'])->name('payment.success');
Route::get('/company/payment-fail',[MollieController::class, 'paymentFail'])->name('payment.fail');

Route::get('/package',[MollieController::class,'package'])->name('package');




