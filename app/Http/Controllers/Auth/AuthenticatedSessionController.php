<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        // dd($request->user());
        $request->session()->regenerate();

        switch (true) {
            case $request->user()->is_admin == 1:
            return redirect()->to('/admin')->with('success', 'Welcome back, Admin!');
            case $request->user()->role == 'student':
            return redirect()->intended(route('user.dashboard', absolute: false))->with('success', 'Welcome back, ' . $request->user()->name . '!');
            case $request->user()->role == 'faculty':
            return redirect()->intended(route('faculty.dashboard'))->with('success', 'Welcome back, ' . $request->user()->name . '!');
            default:
            return redirect()->intended(route('home'))->with('success', 'Welcome back, ' . $request->user()->name . '!');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('home'))->with('success','');
    }
}
