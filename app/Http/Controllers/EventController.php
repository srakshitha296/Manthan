<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Speakers;
use Illuminate\Http\Request;

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

        return view('events.show', compact('program', 'speakers'));
    }
}
