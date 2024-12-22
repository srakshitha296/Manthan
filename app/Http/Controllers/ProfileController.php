<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\College;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function viewProfile()
    {

        $user = null;
        $user = match (Auth::user()->role) {
            'student' => User::with('student')->find(Auth::id()),
            'faculty' => User::with('faculty')->find(Auth::id()),
            'HoD' => User::with('hod')->find(Auth::id()),
            'Principle' => User::with('principle')->find(Auth::id()),
            default => User::find(Auth::id()),
        };


        return view('dashboard.profile.index', compact('user'));
    }

    public function editProfile()
    {

        $user = null;
        $user = match (Auth::user()->role) {
            'student' => User::with('student')->find(Auth::id()),
            'faculty' => User::with('faculty')->find(Auth::id()),
            'HoD' => User::with('hod')->find(Auth::id()),
            'Principle' => User::with('principle')->find(Auth::id()),
            default => User::find(Auth::id()),
        };

        $college = College::all();
        $departments = Department::all();

        // dd($college);
        // dd($user->student->college->id);
        return view('dashboard.profile.edit', compact('user', 'college', 'departments'));
    }
    // public function edit(Request $request): View
    // {
    //     return view('profile.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    public function updateProfile(Request $request)
{
    if (Auth::check()) {
        if(Auth::user()->role == 'student'){
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:10',
                'address' => 'nullable|string|max:255',
                'usn' => 'nullable|string|max:20',
                'college' => 'required|exists:colleges,id',
                'branch' => 'required|exists:departments,id',
                'semester' => 'nullable|integer|min:1|max:8',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        
            $user = User::findOrFail(Auth::id());
        
            if ($request->hasFile('image')) {
                // dd("called");
               
                if ($user->image) {
                    Storage::disk('public')->delete($user->image);
                }
        
                $file = $request->file('image');    
                $originalFileName = $file->getClientOriginalName();
                $fileName = time() . '-' . $originalFileName;
        
                $path = $file->storeAs('users', $fileName, 'public');
        
                $user->image = $path;
            }
        
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);
        
            if ($user->student) {
                $user->student->update([
                    'college_id' => $request->college,
                    'department_id' => $request->branch,
                    'usn' => $request->usn,
                    'semester' => $request->semester,
                ]);
            } else {
                $user->student()->create([
                    'college_id' => $request->college,
                    'department_id' => $request->branch,
                    'usn' => $request->usn,
                    'semester' => $request->semester,
                ]);
            }
        
            return redirect()->route('user.view.profile')->with('status', 'Profile updated successfully');
        }
        else if(Auth::user()->role == 'faculty' || Auth::user()->role == 'HoD' || Auth::user()->role == 'Principle'){
            dd($request->all());
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|digits:10',
                'college' => 'required|exists:colleges,id',
                'branch' => 'required|integer|exists:departments,id',
                'expierience' => 'required|integer|min:0',
                'join_date' => 'required|date|before_or_equal:today',
                'leave_date' => 'nullable|date|after:join_date',
                'qualification' => 'required|array|min:1',
                'qualification.*' => 'string|max:255',
                'search_terms' => 'nullable|string|max:255',
                'specialization' => 'required|array|min:1',
                'specialization.*' => 'string|max:255',
                'address' => 'required|string|max:2000',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'designation' => 'required|integer',
            ]);

            $user = User::findOrFail(Auth::id());
        
            if ($request->hasFile('image')) {
                // dd("called");
               
                if ($user->image) {
                    Storage::disk('public')->delete($user->image);
                }
        
                $file = $request->file('image');    
                $originalFileName = $file->getClientOriginalName();
                $fileName = time() . '-' . $originalFileName;
        
                $path = $file->storeAs('users', $fileName, 'public');
        
                $user->image = $path;
            }
        
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);

            if($user->faculty){
                $user->faculty->update([
                    'college_id' => $request->college,
                    'department_id' => $request->branch,
                    'expierience' => $request->expierience,
                    'joining_date' => $request->join_date,
                    'leaving_date' => $request->leave_date,
                    'qualification' => $request->qualification,
                    'specialization' => $request->specialization,
                    'designation' => $request->de,
                ]);
            }else{
                $user->faculty()->create([
                    'college_id' => $request->college,
                    'department_id' => $request->branch,
                    'expierience' => $request->expierience,
                    'joining_date' => $request->join_date,
                    'leaving_date' => $request->leave_date,
                    'qualification' => $request->qualification,
                    'specialization' => $request->specialization,
                    'search_terms' => $request->search_terms,
                ]);
            }
            return redirect()->route('user.view.profile')->with('status', 'Profile updated successfully');
        }
    }
   
}


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
