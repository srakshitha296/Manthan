<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoDController extends Controller
{
    public function index(){
        return view('dashboard.hod.index');
    }

    public function create(){
        return view('dashboard.hod.create');
    }
}
