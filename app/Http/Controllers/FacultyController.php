<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{
    public function index(){
        $faculties = Faculty::where('college_id', Auth::user()->hod->college_id)
        ->where('department_id', Auth::user()->hod->department_id)
        ->get();

        // dd($faculties);
        return view('dashboard.faculty.index', compact('faculties'));
    }

    public function create(){
        return view('dashboard.faculty.create');
    }
}
