<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function about(){
        return view('');
    }

    public function contact(){
        return view('');
    }

    public function events(){
        return view('events.index');
    }
}
