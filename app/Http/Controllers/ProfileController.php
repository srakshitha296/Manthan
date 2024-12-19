<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
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

        
        return view('dashboard.profile.edit', compact('user'));
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

    public function update(){
        // daaa
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
