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
}
