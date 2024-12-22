<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        if (Auth::check()) {
            if (Auth::user()->role == 'HoD' || Auth::user()->role == 'Principle') {
                $request->merge([
                    'status' => $request->has('status') ? true : false,
                    'is_cordinator' => $request->has('is_cordinator') ? true : false,
                ]);

                $validated = $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|string|min:8|confirmed',
                    'phone' => 'required|string',
                    'address' => 'required|string',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                    'college' => 'required|exists:colleges,id',
                    'branch' => 'required|exists:departments,id',
                    'designation' => 'required|string',
                    'qualification' => 'required|array',
                    'expierience' => 'required|string',
                    'specialization' => 'required|array',
                    'join_date' => 'required|date',
                    'leave_date' => 'nullable|date|after:join_date',
                    'status' => 'nullable|boolean',
                    'is_cordinator' => 'nullable|boolean'
                ]);
            
                try {
                    DB::beginTransaction();
            
                    // Handle image upload if present
                    $imagePath = null;
                    if ($request->hasFile('image')) {
                        $imagePath = $request->file('image')->store('profile-photos', 'public');
                    }
            
                    // Create user
                    $user = User::create([
                        'name' => $validated['name'],
                        'email' => $validated['email'],
                        'password' => Hash::make($validated['password']),
                        'phone' => $validated['phone'],
                        'address' => $validated['address'],
                        'image' => $imagePath,
                        'role' => 'faculty', // Set the role as faculty
                    ]);
            
                    // Create faculty
                    $faculty = Faculty::create([
                        'user_id' => $user->id,
                        'college_id' => $validated['college'],
                        'department_id' => $validated['branch'],
                        'designation' => $validated['designation'],
                        'qualification' => $validated['qualification'],
                        'experience' => $validated['expierience'],
                        'specialization' => $validated['specialization'],
                        'joining_date' => $validated['join_date'],
                        'leaving_date' => $validated['leave_date'] ?? null,
                        'status' => $request->has('status'),
                        'is_cordinator' => $request->has('is_cordinator'),
                    ]);
            
                    DB::commit();
            
                    return redirect()
                        ->route('user.faculty')->with('success', 'Faculty member created successfully');

                } catch (\Exception $e) {
                    DB::rollBack();
                    return redirect()
                        ->back()
                        ->with('error', 'Failed to create faculty member');
                }
            } else {
                return redirect()->route('user.faculty')->with('error', 'You are not authorized to add faculty');
            }
        } else {
            return redirect()->route('login');
        }
    }

}
