<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\RegisteredEvents;
use App\Models\Speakers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function events(){
        $programs = Program::all();
        return view('events.index',compact('programs'));
    }

    public function show($id){
        $program = Program::find($id);
        if(!$program){
            abort(404);
        }

        $speakers = Speakers::where('program_id',$id)->get();

        if(Auth::check()){
            $userId = Auth::id(); 
            $registeredPrograms = RegisteredEvents::with('program')->where('user_id', $userId)->where('program_id', $id)->get(); 
            // dd($registeredPrograms);    
            if (count($registeredPrograms)) {
                // dd('more than 0');
                return view('events.show', compact('program', 'speakers', 'registeredPrograms'));
            }
            // dd('less than 0');
            $registeredPrograms = 0;
            return view('events.show', compact('program', 'speakers', 'registeredPrograms'));
        }else{
            return view('events.show', compact('program', 'speakers'));
        }
    }

    public function register($id){
        $program = Program::find($id);
        if(!$program){
            abort(404);
        }

        // dd('called');

        if(Auth::check()){
            $alreadyRegistered = RegisteredEvents::where('program_id',$id)->where('user_id',Auth::user()->id)->first();

            if($alreadyRegistered){
                // dd('already registered');
                return redirect()->route('events.show',$id)->with('error', 'You have already registered for this event.');
            }

            $registered = RegisteredEvents::create([
                'program_id' => $id,
                'user_id'=> Auth::user()->id,
                'is_paid'=> 0,
                'registration_date' => now(),
                'is_attended' => 0,
            ]);

            // dd('done');
            return redirect()->route('events.show', $id)->with('success', 'You have successfully registered for the event.');
        } 
    }

    public function viewEvents(){
        switch (Auth::user()->role) {
            case 'student':
                // Code for student
                $events = Program::where('event_date', '>=', now())->where('type', '!=', 'FDP')->get();
                break;
            case 'faculty':
                // Code for faculty
                $events = Program::where('event_date', '>=', now())->where('type', '!=', 'SDP')->get();
                break;
            case 'HoD':
                // Code for HoD
                $events = Program::where('event_date', '>=', now())->where('type', '!=', 'SDP')->get();
                break;
            case 'Principle':
                $events = Program::where('event_date', '>=', now())->where('type', '!=', 'SDP')->get();
                break;
            default:
                // Code for default case
                break;
        }
        // dd($events);
        return view('dashboard.events.index', compact('events'));
    }

    public function myEvents(){
        return view('dashboard.events.events');
    }
}
