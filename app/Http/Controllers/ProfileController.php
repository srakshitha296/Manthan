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
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function viewProfile(){

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

    public function editProfile(){

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

    public function updateProfile(Request $request){

        $result = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.Auth::id(),
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'college_id' => 'required|integer',
            'department_id' => 'required|integer',
            'usn' => 'required|string|regex:/^[0-9]{1}[A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{3}$/',
        ]);

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
