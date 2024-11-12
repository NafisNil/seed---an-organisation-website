<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use App\Http\Requests\MissionRequest;
class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mission = Mission::orderBy('id', 'desc')->first();
        $missionCount = Mission::count();

        return view('backend.mission.index',['mission'=>$mission, 'missionCount' => $missionCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.mission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MissionRequest $request)
    {
        //
        $mission = Mission::create($request->all());
      
        return redirect()->route('mission.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mission $mission)
    {
        //
        return view('backend.mission.edit',[
            'edit' => $mission
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MissionRequest $request, Mission $mission)
    {
        //
        $mission->update($request->all());
   
        return redirect()->route('mission.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mission $mission)
    {
        //
        $mission->delete();
     
        return redirect()->route('mission.index')->with('status','Data deleted successfully!');
    }
}
