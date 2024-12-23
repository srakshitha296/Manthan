<?php

namespace App\Http\Controllers;

use App\Models\RegisteredEvents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->id == 1){
            return redirect()->to('/admin');
        }
        $eventCompletions = RegisteredEvents::select('programs.type', DB::raw('count(*) as count'))
        ->join('programs', 'registered_events.program_id', '=', 'programs.id')
        ->groupBy('programs.type')
        ->get()
        ->mapWithKeys(function ($item) {
            return [$item->type => $item->count];
        });

    // dd($eventCompletions);
        return view("dashboard.index", compact('eventCompletions'));
    }
}
