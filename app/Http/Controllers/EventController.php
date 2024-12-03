<?php

namespace App\Http\Controllers;

use App\Models\Program;
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

        return view('events.show', compact('program'));
    }
}
