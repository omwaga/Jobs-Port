<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\TeamManagement;

class TeamManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employer');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = TeamManagement::where('employer_id', auth()->user()->id)->get();

        return view('employer-dashboard.team', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer-dashboard.add-member');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3',
            'designation' => 'nullable|min:3',
            'phone_number' => 'nullable|min:3',
            'email' => 'required|email|unique:team_management',
            'password' => 'required|string|min:6',
        ]);

        $attributes['password'] = Hash::make($attributes['password']);

        TeamManagement::create($attributes + ['employer_id' => auth()->user()->id, 'username' => $request->email]);

        return redirect(route('teams.index'))->with('message', 'Team member added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamManagement $team)
    {
        return view('employer-dashboard.edit-team', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamManagement $team)
    {
        $team->update(request(['name', 'designation', 'phone_number', 'email', 'password']));

        return redirect(route('teams.index'))->with('message', 'Team member details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamManagement $team)
    {
        $team->delete();

        return back()->with('message', 'Team member details deleted successfully');
    }
}
