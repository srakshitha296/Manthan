<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){
        return view('dashboard.activity.index');
    }

    public function create(){
        return view('dashboard.activity.create');
    }

    public function edit(){
        return view('dashboard.activity.edit');
    }
}
