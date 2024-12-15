<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index(){
        return view('dashboard.faculty.index');
    }

    public function create(){
        return view('dashboard.faculty.create');
    }
}
