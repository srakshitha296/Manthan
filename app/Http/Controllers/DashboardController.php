<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        
        $user = User::with('student')->find(Auth::id());

        return view('dashboard.profile.index', compact('user'));
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
