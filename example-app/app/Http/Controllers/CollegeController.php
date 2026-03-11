<?php

namespace App\Http\Controllers;

use App\Models\college;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // reserve for index page of the entity
        $colleges = college::get();
        return view('college.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('college.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'University_id'   =>  $request->input('University_id'),
            'college_name'   =>  $request->input('college_name'),
            'course'   =>  $request->input('course')
        ];

        college::firstOrCreate($data);

        return redirect (route('college.index'));
    }


    /**
     * Display the specified resource.
     */
    public function show(college $college)
    {
        //
        return view('college.show', compact('college'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(college $college)
    {
        // dd('$college');
        return view('college.edit', compact('college'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, college $college)
    {
        // dd('hello update');
        $data = [
        'University_id'   =>  $request->input('University_id'),
        'college_name'   =>  $request->input('college_name'),
        'course'   =>  $request->input('course')
        ];

        $college->update($data);

       return redirect (route('college.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(college $college)
    {
        // dd('hello delete');
        $college->delete();
        return redirect (route('college.index'));
    }
}
