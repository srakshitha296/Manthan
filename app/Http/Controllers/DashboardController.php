<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view("dashboard.index");
    }

    public function viewProfile(){
        return view('dashboard.profile.index');
    }

    public function editProfile(){
        return view('dashboard.profile.edit');
    }
}
