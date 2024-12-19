<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index(){
        $user = Auth::user();
        $testimonial = Testimonials::where('user_id', $user->id)->first();
        // dd($testimonials);
        return view('dashboard.testimonial.index', compact('testimonial'));
    }

    public function create(){
        return view('dashboard.testimonial.create');
    }

    public function edit(){
        $testimonial = Testimonials::where('user_id', Auth::user()->id)->first();
        return view('dashboard.testimonial.edit', compact('testimonial'));
    }
}
