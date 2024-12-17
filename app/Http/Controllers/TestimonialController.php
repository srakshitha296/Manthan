<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index(){
        $user = Auth::user();
        $testimonials = Testimonials::where('user_id', $user->id)->first();
        // dd($testimonials);
        return view('dashboard.testimonial.index', compact('testimonials'));
    }

    public function create(){
        return view('dashboard.testimonial.create');
    }
}
