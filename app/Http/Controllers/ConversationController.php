<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\Conversation;
use App\Models\JobRequest;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['loggedin']);
    }

    public function show()
    {
        
        if ((auth('company')->check() && empty(auth('company')->user()->subscribed)) || auth('user')->check()) {
            // return redirect()->route('home');
            $user = auth('user')->user()->id;
            $users = Company::has('conversation')
                ->whereHas('conversation', function ($query) use ($user) {
                    $query->where("user_id", $user);
                })
                ->with(['conversation' => function ($query) use ($user) {
                    $query->where("user_id", $user);
                }])
                ->withCount(['conversation' => function ($query) use ($user) {
                    $query->where("user_id", $user)
                        ->where("read", null)
                        ->where("sender", 'company');
                }])
                ->get();
        }
        
        if (auth("company")->check()) {

            $company = auth('company')->user()->id;

            $users = User::has('conversation')
                ->whereHas('conversation', function ($query) use ($company) {
                    $query->where("company_id", $company);
                })
                ->with(['conversation' => function ($query) use ($company) {
                    $query->where("company_id", $company);
                }])
                ->withCount(['conversation' => function ($query) use ($company) {
                    $query->where("company_id", $company)
                        ->where("read", null)
                        ->where("sender", 'user');
                }])
                ->get();
        } elseif (auth("user")->check()) {

            $user = auth('user')->user()->id;
            $users = Company::has('conversation')
                ->whereHas('conversation', function ($query) use ($user) {
                    $query->where("user_id", $user);
                })
                ->with(['conversation' => function ($query) use ($user) {
                    $query->where("user_id", $user);
                }])
                ->withCount(['conversation' => function ($query) use ($user) {
                    $query->where("user_id", $user)
                        ->where("read", null)
                        ->where("sender", 'company');
                }])
                ->get();
        }

        return view('mutual.chat')->with('users', $users);
    }


    public function get_chat(Request $request, $id)
    {
        
        if (auth("company")->check()) {

            // getting current selected chat
            $company = auth('company')->user()->id;
            $jobs = User::with(['conversation' => function ($query) use ($company) {
                $query->where("company_id", $company);
            }])
                ->find($id);

            // updating read messages
            auth("company")->user()->conversation()->where('user_id', $id)->where('read', null)->where('sender', 'user')->update([
                'read' => date("Y/m/d H:i:s"),
            ]);

            //refreshing chat users
            $users = User::has('conversation')
                ->whereHas('conversation', function ($query) use ($company) {
                    $query->where("company_id", $company);
                })
                ->with(['conversation' => function ($query) use ($company) {
                    $query->where("company_id", $company);
                }])
                ->withCount(['conversation' => function ($query) use ($company) {
                    $query->where("company_id", $company)
                        ->where("read", null)
                        ->where("sender", 'user');
                }])
                ->get();
        } elseif (auth("user")->check()) {
            $user = auth('user')->user()->id;
            $jobs = Company::with(['conversation' => function ($query) use ($user) {
                $query->where("user_id", $user);
            }])
                ->find($id);


            auth("user")->user()->conversation()->where('company_id', $id)->where('read', null)->where('sender', 'company')->update([
                'read' => date("Y/m/d H:i:s"),
            ]);

            //refreshing chat users
            $users = Company::has('conversation')
                ->whereHas('conversation', function ($query) use ($user) {
                    $query->where("user_id", $user);
                })
                ->with(['conversation' => function ($query) use ($user) {
                    $query->where("user_id", $user);
                }])
                ->withCount(['conversation' => function ($query) use ($user) {
                    $query->where("user_id", $user)
                        ->where("read", null)
                        ->where("sender", 'company');
                }])
                ->get();
        }


        return response()->json([
            "status" => true,
            'jobs' => $jobs,
            'users' => $users,
        ]);
    }

    public function send(Request $request)
    {

        if (auth("company")->check()) {
            $user_id = $request['sender_id'];
            $company_id = auth('company')->user()->id;
        } elseif (auth("user")->check()) {
            $user_id = auth('user')->user()->id;
            $company_id = $request['sender_id'];
        }

        if (!empty($request['attachment'])) {
            $pro_image = rand(1, 10000) . $request->file('attachment')->getClientOriginalName();

            if ($request->file('attachment')->move(public_path('chat_files'), $pro_image)) {

                Conversation::create([
                    'user_id' => $user_id,
                    'company_id' => $company_id,
                    'sender' => $request['me'],
                    'message' => $request['message'],
                    'file' => $pro_image,
                ]);
            }
        } else {

            Conversation::create([
                'user_id' => $user_id,
                'company_id' => $company_id,
                'sender' => $request['me'],
                'message' => $request['message'],
                'file' => null,
            ]);
        }


        return response()->json([
            "status" => "message sent",
        ]);
    }

    public function unread(Request $request, $id)
    {
        if (auth("company")->check()) {

            // getting current selected chat
            $company = auth('company')->user()->id;

            $unread = Conversation::where("company_id", $company)
            ->where("read", null)
            ->where("sender", "user")
            ->count();

        } elseif (auth("user")->check()) {
            $user = auth('user')->user()->id;

            $unread = Conversation::where("user_id", $user)
            ->where("read", null)
            ->where("sender", "company")
            ->count();
        }


        return response()->json([
            "status" => true,
            'unread' => $unread,
        ]);
    }
}
