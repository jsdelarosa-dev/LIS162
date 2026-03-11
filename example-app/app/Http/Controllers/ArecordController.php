<?php

namespace App\Http\Controllers;

use App\Models\arecord;
use Illuminate\Http\Request;

class ArecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arecord = arecord::get();
        return view('arecord.index', compact('arecord'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('arecord.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'swimmer_id'   =>  $request->input('swimmer_id'),
            'main_stroke'   =>  $request->input('main_stroke'),
        ];

        arecord::firstOrCreate($data);

        return redirect (route('arecord.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(arecord $arecord)
    {
        //
         return view('arecord.show', compact('arecord'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(arecord $arecord)
    {
        //
        return view('arecord.edit', compact('arecord'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, arecord $arecord)
    {
        $data = [
            'swimmer_id'   =>  $request->input('swimmer_id'),
            'main_stroke'   =>  $request->input('main_stroke'),
        ];

        $arecord->update($data);

        return redirect (route('arecord.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(arecord $arecord)
    {
        $arecord->delete();
        return redirect (route('arecord.index'));
    }
}
