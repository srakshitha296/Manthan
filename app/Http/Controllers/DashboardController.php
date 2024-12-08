<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->id == 1){
            return redirect()->to('/admin');
        }
        return view("dashboard.index");
    }

    public function viewProfile(){
        return view('dashboard.profile.index');
    }

    public function editProfile(){
        return view('dashboard.profile.edit');
    }

    public function viewEvents(){
        return view('dashboard.events.index');
    }

    public function myEvents(){
        return view('dashboard.events.events');
    }
}
