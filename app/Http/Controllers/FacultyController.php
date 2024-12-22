<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::where('college_id', Auth::user()->hod->college_id)
            ->where('department_id', Auth::user()->hod->department_id)
            ->get();

        // dd($faculties);
        return view('dashboard.faculty.index', compact('faculties'));
    }

    public function create()
    {
        $college = College::all();
        $departments = Department::all();
        $users = User::where('role', 'faculty')->whereDoesntHave('faculty')->get();
        return view('dashboard.faculty.create', compact('college', 'departments', 'users'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        if (Auth::check()) {
            if (Auth::user()->role == 'HoD' || Auth::user()->role == 'Principle') {
                // dd("hod bahi");
                $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'phone' => 'required|unique|digits:10',
                    'college' => 'required|exists:colleges,id',
                    'branch' => 'required|integer|exists:departments,id',
                    'expierience' => 'required|integer|min:0',
                    'join_date' => 'required|date|before_or_equal:today',
                    'leave_date' => 'nullable|date|after:join_date',
                    'qualification' => 'required|array|min:1',
                    'qualification.*' => 'string|max:255',
                    'specialization' => 'required|array|min:1',
                    'specialization.*' => 'string|max:255',
                    'address' => 'required|string|max:2000',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'designation' => 'required|string|max:255',
                ]);

                $faculty = new Faculty();

                if(Faculty::find($request->name)){
                    return redirect()->back()->with('error', 'Faculty already exists');
                }

                dd('not found');

                $user = User::find($request->user_id);

                dd($user);

                if(!$user){
                    $user = new User();
                    $user->create([
                        'id' => $request->user_id,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'role' => 'faculty',
                    ]);
                }

                if($request->hasFile('image')){
                    // dd("called");
                    $file = $request->file('image');
                    $originalFileName = $file->getClientOriginalName();
                    $fileName = time() . '-' . $originalFileName;

                    $path = $file->storeAs('users', $fileName, 'public');

                    $user->image = $path;   
                }

                $faculty->create([
                    'user_id' => $request->user_id,
                    'college_id' => $request->college,
                    'department_id' => $request->branch,
                    'experience' => $request->expierience,
                    'joining_date' => $request->join_date,
                    'leaving_date' => $request->leave_date,
                    'qualification' => $request->qualification,
                    'specialization' => $request->specialization,
                    'address' => $request->address,
                    'designation' => $request->designation,
                ]);

                // dd("saved faculty");
            }else{
                return redirect()->route('user.faculty')->with('error', 'You are not authorized to add faculty');
            }
        }else{
            return redirect()->route('login');
        }
        // dd("saved student");

        return redirect()->route('user.faculty')->with('status', 'Faculty added successfully');
    }
}
