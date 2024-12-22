<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityType;
use App\Models\ProgramExpectedOutcomes;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if(Auth::user()->role == 'student'){
                $client_college_id = Auth::user()->student->college_id;
                $client_department_id = Auth::user()->student->department_id;
            }

            if(Auth::user()->role == 'faculty'){
                $client_college_id = Auth::user()->faculty->college_id;
                $client_department_id = Auth::user()->faculty->department_id;
            }

            if(Auth::user()->role == 'HoD'){
                $client_college_id = Auth::user()->hod->college_id;
                $client_department_id = Auth::user()->hod->department_id;
            }

            if(Auth::user()->role == 'Principle'){
                $client_college_id = Auth::user()->principle->college_id;
                $client_department_id = Auth::user()->principle->department_id;
            }
            
            $activities = Activity::with('student', 'activityType', 'programExpectedOutcomes')
                    ->whereHas('student', function ($query) use ($client_college_id, $client_department_id) {
                        $query->where('college_id', $client_college_id)
                            ->where('department_id', $client_department_id);
                    })->get();
            }
         else {
            return redirect()->route('login');
        }

        // dd(Auth::user()->faculty->is_cordinator);
        return view('dashboard.activity.index', compact('activities'));
    }

    public function create()
    {
        $activityTypes = ActivityType::all();
        $peos = ProgramExpectedOutcomes::all();
        return view('dashboard.activity.create', compact('activityTypes', 'peos'));
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

    public function store(Request $request)
    {
        // dd($request->all());

        if (Auth::check()) {
            if (Auth::user()->role == 'student') {
                if (Auth::user()->student) {
                    $request->validate([
                        'title' => 'required|string|max:255',
                        'activity_type' => 'required|integer|exists:activity_types,id',
                        'peo' => 'required|integer|exists:program_expected_outcomes,id',
                        'start_date' => 'required|date|before_or_equal:end_date',
                        'end_date' => 'required|date|after_or_equal:start_date',
                        'hours' => 'required|integer|min:1',
                        'description' => 'required|string',
                        'report' => 'required|file|mimes:pdf,doc,docx|max:20480',
                        'certificate' => 'required|file|mimes:pdf,doc,docx,jpg,png|max:20480',
                    ]);

                    $activity = new Activity();

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

                    $activity->create([
                        'student_id' => Auth::user()->student->id,
                        'title' => $request->title,
                        'activity_type_id' => $request->activity_type,
                        'program_expected_outcomes_id' => $request->peo,
                        'start_date' => $request->start_date,
                        'end_date' => $request->end_date,
                        'hours' => $request->hours,
                        'description' => $request->description,
                        'status' => 'pending',
                        'file' => $activity->file,
                        'certificate' => $activity->certificate,
                    ]);

                } else {
                    dd('no data found');
                }
            }
        } else {
            return redirect()->route('login');
        }
        return redirect()->route('user.activity.index')->with('success', 'Activity added successfully');
    }

    public function destroy($id)
    {
        $activity = Activity::find($id);
        if ($activity) {
            if ($activity->file) {
                Storage::disk('public')->delete($activity->file);
            }
            if ($activity->certificate) {
                Storage::disk('public')->delete($activity->certificate);
            }
            $activity->delete();
            return redirect()->route('user.activity.index')->with('success', 'Activity deleted successfully');
        } else {
            return redirect()->route('user.activity.index')->with('error', 'Activity not found');
        }
    }

    public function status($id, $status)
    {

        $activity = Activity::find($id);

        if (Auth::check()) {
            if (Auth::user()->role == 'faculty' && Auth::user()->faculty->is_cordinator == 1) {
                switch ($status) {
                    case 1:
                        $status = 'approved';
                        break;
                    case 2:
                        $status = 'rejected';
                        break;
                    default:
                        $status = 'pending';
                        break;
                }

                // dd($status);

                if ($activity) {
                    $activity->update([
                        'status' => $status,
                    ]);

                    return redirect()->route('user.activity.index')->with('status', 'Student status updated successfully');
                } else {
                    return redirect()->route('user.activity.index')->with('error', 'no Student activity found');
                }
            } else {
                return redirect()->route('user.activity.index')->with('error', 'You are not authorized to perform this action');
            }
        } else {
            return redirect()->route('login');
        }
    }
}