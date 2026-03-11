<?php

namespace App\Http\Controllers;

use App\Models\VST_attendance_record;
use Illuminate\Http\Request;

class VSTAttendanceRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // reserve for the index page of the entity
        $record = VST_Attendance_Record::all();

        return view('attendance.index', compact('record'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendance.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'session_id'   =>  $request->input('session_id'),
            'training_date'   =>  $request->input('training_date'),
            'training_time'   =>  $request->input('training_time')
        ];

        VST_attendance_record::firstOrCreate($data);

        return redirect (route('attendance.index'));
    }

    /**
     * Display the specified resource.
     */
public function show($session_id)
{
    // 1. Retrieve the Eloquent Model object
    $model_record = VST_attendance_record::find($session_id);

    // 2. !!! CRUCIAL STEP !!! Convert the model object to a pure PHP array
    // This allows you to use $record['column_name'] in the view.
    $record = $model_record->toArray(); 

    return view('attendance.show', compact('record'));
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($session_id) // Accept the raw ID from the URL
{
    // Use findOrFail() to ensure a 404 if the record doesn't exist
    $record = VST_attendance_record::findOrFail($session_id); 
    
    // Pass the full Eloquent object to the view
    return view('attendance.edit', compact('record')); 
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VST_attendance_record $attendance)
    {
       // dd('hello update');
       $data = [
        'session_id'   =>  $request->input('session_id'),
        'training_date'   =>  $request->input('training_date'),
        'training_time'   =>  $request->input('training_time')
       ];
       $attendance->update($data);

       return redirect (route('attendance.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VST_attendance_record $session_id)
    {
         // dd('hello delete');
         $session_id->delete();
         return redirect (route('attendance.index'));
    }
}
