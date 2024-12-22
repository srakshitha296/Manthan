<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        $students = Student::where('college_id', Auth::user()->faculty->college_id)
            ->where('department_id', Auth::user()->faculty->department_id)
            ->get();

        // dd($students);
        return view('dashboard.student.index' , compact('students'));
    }

    public function create(){

        $colleges = College::all();
        $branches = Department::all();
        // $users = User::where('role', 'student')->get();
        $users = User::where('role', 'student')->whereDoesntHave('student')->get();

        return view('dashboard.student.create', compact('colleges', 'branches', 'users'));
    }

    public function store(Request $request){

        // dd($request->all());

        if(Auth::check()){
            if(Auth::user()->role == 'faculty' || Auth::user()->role == 'HoD' || Auth::user()->role == 'Principle'){
                $request->validate([
                    'name' => 'required|exists:users,id',
                    'email' => 'required|email|max:255',
                    'phone' => 'required|string|max:10',
                    'address' => 'nullable|string|max:255',
                    'usn' => 'nullable|string|max:20',
                    'college' => 'required|exists:colleges,id',
                    'department' => 'required|exists:departments,id',
                    'semester' => 'nullable|integer|min:1|max:8',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
                ]);
        
                $student = new Student();
        
                if(Student::find($request->name)){
                    return redirect()->back()->with('error', 'Student already exists');
                }
        
                if ($request->hasFile('image')) {
                    // dd("called");
            
                    $file = $request->file('image');    
                    $originalFileName = $file->getClientOriginalName();
                    $fileName = time() . '-' . $originalFileName;
            
                    $path = $file->storeAs('users', $fileName, 'public');
            
                    $student->image = $path;
                }
        
                $student->create([
                    'user_id' => $request->name,
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'college_id' => $request->college,
                    'department_id' => $request->department,
                    'semester' => $request->semester,
                    'usn' => $request->usn,
                    'address' => $request->address,
                    'image' => $student->image,
                ]);
            }else{
                return redirect()->back()->with('error', 'You are not authorized to add student');
            }
        }

        // dd("saved student");

        return redirect()->route('user.students')->with('status', 'Student added successfully');

    }
}
