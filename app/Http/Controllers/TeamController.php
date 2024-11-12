<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\TeamRequest;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $team = Team::orderBy('id', 'desc')->get();
        return view('backend.team.index',['team'=>$team]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        //
        $team = Team::create($request->all());
        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $team);
        }

        return redirect()->route('team.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
        return view('backend.team.edit',[
            'edit' => $team
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, Team $team)
    {
        //
        $team->update($request->all());
        if ($request->hasFile('photo')) {
            @unlink('storage/'.$team->photo);
            $this->_uploadImage($request, $team);
        }

        return redirect()->route('team.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
        $team->delete();
        if(!empty($team->photo));
        @unlink('storage/'.$team->photo);

        return redirect()->route('team.index')->with('status','Data deleted successfully!');
    }

    
    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('photo') ) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(658, 486)->save('storage/' . $filename);
            $about->photo = $filename;
            $about->save();
        }

    }
}
