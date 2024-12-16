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

        $user = null;
        switch (Auth::user()->role) {
            case 'student':
                $user = User::with('student')->find(Auth::id());
                break;
            case 'faculty':
                $user = User::with('faculty')->find(Auth::id());
                // dd($user);
                break;
            case 'HoD':
                $user = User::with('hod')->find(Auth::id());
                // dd($user);
                break;
            case 'Principle':
                $user = User::with('principle')->find(Auth::id());
                // dd($user);
                break;
            default:
                // Code for default case
                break;
        }
        

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
