<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermController extends Controller
{
    public function term(){
        return view('users.terms-condition');
    }
}
