<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // reserve for index page of the entity
        $userrole = UserRole::get();
        return view('userrole.index', compact('userrole'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('userrole.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'role_id'   =>  $request->input('role_id'),
            'role_title'   =>  $request->input('role_title'),
            'UserProfile_user_id'   =>  $request->input('UserProfile_user_id'),
            'UserProfile_University_id'   =>  $request->input('UserProfile_University_id')
        ];

        UserRole::firstOrCreate($data);

        return redirect (route('userrole.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(UserRole $userrole)
    {
        //
        return view('userrole.show', compact('userrole'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserRole $userrole)
    {
        //
        return view('userrole.edit', compact('userrole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserRole $userrole)
    {
        //
        $data = [
            'role_id'   =>  $request->input('role_id'),
            'role_title'   =>  $request->input('role_title'),
            'UserProfile_user_id'   =>  $request->input('UserProfile_user_id'),
            'UserProfile_University_id'   =>  $request->input('UserProfile_University_id')
        ];

        $userrole->update($data);

       return redirect (route('userrole.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserRole $userrole)
    {
        //
        $userrole->delete();
        return redirect (route('userrole.index'));
    }
}
