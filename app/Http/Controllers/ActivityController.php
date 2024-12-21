<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityType;
use App\Models\ProgramExpectedOutcomes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'student') {
                if (Auth::user()->student) {
                    // dd('student');
                    $activities = Activity::with('student', 'activityType', 'programExpectedOutcomes')
                        ->where('student_id', Auth::user()->student->id)
                        ->get();
                    // dd(vars: $activities);
                } else {
                    dd('not student');
                }
            } else {
                dd('not student');
            }
        } else {
            return redirect()->route('login');
        }
        return view('dashboard.activity.index', compact('activities'));
    }

    public function create()
    {
        return view('dashboard.activity.create');
    }

    public function edit($id)
    {

        if (Auth::check()) {
            if (Auth::user()->role == 'student') {
                if (Auth::user()->student) {
                    $activity = Activity::with('student', 'activityType', 'programExpectedOutcomes')
                        ->where('student_id', Auth::user()->student->id)->where('id', $id)->first();
                    // dd(vars: $activity);
                } else {
                    dd('no data found');
                }
            } else {
                dd('not student');
            }
        } else {
            return redirect()->route('login');
        }

        $activityTypes = ActivityType::all();
        $peos = ProgramExpectedOutcomes::all();

        // dd($peos);

        return view('dashboard.activity.edit', compact('activity', 'activityTypes', 'peos'));
    }

    public function update(Request $request, $id)
    {

        $activity = Activity::find($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'activity_type' => 'required|integer|exists:activity_types,id',
            'peo' => 'required|integer|exists:program_expected_outcomes,id',
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'hours' => 'required|integer|min:1',
            'description' => 'required|string',
            'report' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'certificate' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        // dd($request->all(),);

        if ($request->hasFile('report')) {
            if ($activity->file) {
                Storage::disk('public')->delete($activity->file);
            }

            $file = $request->file('report');
            $originalFileName = $file->getClientOriginalName();
            $fileName = time() . '-' . $originalFileName;

            $path = $file->storeAs('activities/report', $fileName, 'public');
            $activity->file = $path;
        }

        if ($request->hasFile('certificate')) {
            if ($activity->certificate) {
                Storage::disk('public')->delete($activity->certificate);
            }

            $file = $request->file('certificate');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = $file->storeAs('activities/certificate', $fileName, 'public');
            $activity->certificate = $path;
        }

        $activity->update([
            'title' => $request->title,
            'activity_type_id' => $request->activity_type,
            'program_expected_outcomes_id' => $request->peo,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'hours' => $request->hours,
            'description' => $request->description,
        ]);

        // dd("done update");   
        return redirect()->route('user.activity.index')->with('success', 'Activity updated successfully');
    }
}