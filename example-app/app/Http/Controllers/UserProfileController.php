<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $userprofile = UserProfile::get();

        return view('userprofile.index', compact('userprofile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('userprofile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'user_id'   =>  $request->input('user_id'),
            'username'   =>  $request->input('username'),
            'first_name'   =>  $request->input('first_name'),
            'last_name'   =>  $request->input('last_name'),
            'email'   =>  $request->input('email'),
            'user_age'   =>  $request->input('user_age'),
            'batch_year'   =>  $request->input('batch_year'),
            'Gender'   =>  $request->input('Gender'),
            'University_id'   =>  $request->input('University_id')
        ];

        UserProfile::firstOrCreate($data);

        return redirect (route('userprofile.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(UserProfile $userprofile)
    {
        //
        return view('userprofile.show', compact('userprofile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserProfile $userprofile)
    {
        //
        return view('userprofile.edit', compact('userprofile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserProfile $userprofile)
    {
        //
        $data = [
            'user_id'   =>  $request->input('user_id'),
            'username'   =>  $request->input('username'),
            'first_name'   =>  $request->input('first_name'),
            'last_name'   =>  $request->input('last_name'),
            'email'   =>  $request->input('email'),
            'user_age'   =>  $request->input('user_age'),
            'batch_year'   =>  $request->input('batch_year'),
            'Gender'   =>  $request->input('Gender'),
            'University_id'   =>  $request->input('University_id')
        ];

        $userprofile->update($data);

       return redirect (route('userprofile.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProfile $userprofile)
    {
        //
        $userprofile->delete();
        return redirect (route('userprofile.index'));
    }
}
