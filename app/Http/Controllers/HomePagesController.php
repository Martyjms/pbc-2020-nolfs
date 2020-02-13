<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePagesController extends Controller
{
    public function home(){
        return view('landing.home');
    }
    public function map(){
        return view('landing.map');
    }
}
