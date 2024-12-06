<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home()
    {
        $eventTypes = ['SDP', 'FDP', 'STTP', 'Workshop', 'Seminar', 'Conference', 'Webinar', 'Hackathon', 'Bootcamp', 'Other'];
        $events = Program::orderBy('created_at','desc')->with('speakers')->limit(4)->get();

        // dd($events);
        return view('home.index', compact('eventTypes', 'events'));
    }

    public function about(){
        return view('about.index');
    }

    public function contact(){
        return view('contact.index');
    }
}
