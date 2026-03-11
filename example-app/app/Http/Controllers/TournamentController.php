<?php

namespace App\Http\Controllers;

use App\Models\tournament;
use Illuminate\Http\Request;


class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tournament = tournament::get();
        return view('tournament.index', compact('tournament'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tournament.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'a_record_swimmer_id'   =>  $request->input('a_record_swimmer_id'),
            'T_date'   =>  $request->input('T_date'),
            'T_location'   =>  $request->input('T_location'),
            'T_event'   =>  $request->input('T_event'),
            'T_result'   =>  $request->input('T_result'),
            'T_Place'   =>  $request->input('T_Place')
        ];

        tournament::firstOrCreate($data);

        return redirect (route('tournament.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(tournament $tournament)
    {
        return view('tournament.show', compact('tournament'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tournament $tournament)
    {
         return view('tournament.edit', compact('tournament'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tournament $tournament)
    {
        $data = [
            'a_record_swimmer_id'   =>  $request->input('a_record_swimmer_id'),
            'T_date'   =>  $request->input('T_date'),
            'T_location'   =>  $request->input('T_location'),
            'T_event'   =>  $request->input('T_event'),
            'T_result'   =>  $request->input('T_result'),
            'T_Place'   =>  $request->input('T_Place')
        ];

        $tournament->update($data);

       return redirect (route('tournament.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tournament $tournament)
    {
        $tournament->delete();
        return redirect (route('tournament.index'));
    }
}
