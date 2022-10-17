<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\Job;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(["admin"]);
    }

    public function index()
    {
        $services = Service::count();
        $users = User::count();
        $companies = Company::count();
        $jobs = Job::count();
        return view("admin.index", compact("services", "users", "companies", "jobs"));
    }

}
