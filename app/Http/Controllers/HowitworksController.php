<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowitworksController extends Controller
{
    public function hoe_werkt_het(){
        return view('auth.hoe_werkt_het');
    }
}
