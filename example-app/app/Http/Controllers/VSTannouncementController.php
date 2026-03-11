<?php

namespace App\Http\Controllers;

use App\Models\VSTannouncement;
use Illuminate\Http\Request;

class VSTannouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // reserve for the index page of the entity
        $vst_announcement = VSTannouncement::get();

        // dd($VSTannouncement);
        return view('announcement.index', compact('vst_announcement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [

            'announcement_id'   =>  $request->input('announcement_id'),
            'meeting_date'   =>  $request->input('meeting_date'),
            'meeting_location'   =>  $request->input('meeting_location'),
            'meeting_details'   =>  $request->input('meeting_details')
        
        ];

        VSTannouncement::firstOrCreate($data);

        return redirect (route('announcement.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $vst_announcement = VSTannouncement::findOrFail($id);
    

    return view('announcement.show', compact('vst_announcement'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    
    $vst_announcement = VSTannouncement::findOrFail($id);
    

    return view('announcement.edit', compact('vst_announcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VSTannouncement $vst_announcement)
{
    $data = [
        'announcement_id'  => $request->input('announcement_id'), 
        'meeting_date'     => $request->input('meeting_date'),    
        'meeting_location' => $request->input('meeting_location'),
        'meeting_details'  => $request->input('meeting_details'), 
    ];

    $vst_announcement->update($data);

    return redirect (route('announcement.index'));
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VSTannouncement $vst_announcement)
    {
        // dd('hello delete');
        $vst_announcement->delete();
        return redirect (route('announcement.index'));
    }
}
