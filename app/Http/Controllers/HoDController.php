<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\HoD;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HoDController extends Controller
{
    public function index(){
        $hods = HoD::where('college_id', Auth::user()->principle->college_id)->get();
        // dd($hods);
        return view('dashboard.hod.index', compact('hods'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('dashboard.hod.create', compact('departments'));
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'Principle') {
                // $request->merge([
                //     'status' => $request->has('status') ? true : false,
                //     'is_cordinator' => $request->has('is_cordinator') ? true : false,
                // ]);

                $validated = $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|string|min:8|confirmed',
                    'phone' => 'required|string',
                    'address' => 'required|string',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                    'college' => 'required|exists:colleges,id',
                    'branch' => 'required|exists:departments,id',
                    // 'designation' => 'required|string',
                    'qualification' => 'required|array',
                    'expierience' => 'required|string',
                    'specialization' => 'required|array',
                    'join_date' => 'required|date',
                    'leave_date' => 'nullable|date|after:join_date',
                    // 'status' => 'nullable|boolean',
                    // 'is_cordinator' => 'nullable|boolean'
                ]);

                try {
                    DB::beginTransaction();

                    $imagePath = null;
                    if ($request->hasFile('image')) {
                        $file = $request->file('image');
                        $originalFileName = $file->getClientOriginalName();
                        $fileName = time() . '-' . $originalFileName;

                        $imagePath = $file->storeAs('users', $fileName, 'public');
                    }

                    $user = User::create([
                        'name' => $validated['name'],
                        'email' => $validated['email'],
                        'password' => Hash::make($validated['password']),
                        'phone' => $validated['phone'],
                        'address' => $validated['address'],
                        'image' => $imagePath,
                        'role' => 'HoD',
                    ]);

                    $hod = HoD::create([
                        'user_id' => $user->id,
                        'college_id' => $validated['college'],
                        'department_id' => $validated['branch'],
                        // 'designation' => $validated['designation'],
                        'qualification' => $validated['qualification'],
                        'experience' => $validated['expierience'],
                        'specialization' => $validated['specialization'],
                        'joining_date' => $validated['join_date'],
                        'leaving_date' => $validated['leave_date'] ?? null,
                        // 'status' => $request->has('status'),
                        // 'is_cordinator' => $request->has('is_cordinator'),
                    ]);

                    DB::commit();

                    return redirect()->route('hod')->with('success', 'Faculty member created successfully');

                } catch (\Exception $e) {
                    DB::rollBack();
                    return redirect()->back()->with('error', 'Failed to create faculty member');
                }
            } else {
                return redirect()->route('user.faculty')->with('error', 'You are not authorized to add faculty');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
