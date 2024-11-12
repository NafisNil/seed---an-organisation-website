<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Http\Request;
use App\Http\Requests\VisionRequest;
class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vision = Vision::orderBy('id', 'desc')->first();
        $visionCount = Vision::count();

        return view('backend.vision.index',['vision'=>$vision, 'visionCount' => $visionCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.vision.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VisionRequest $request)
    {
        //
        $vision = Vision::create($request->all());
      
        return redirect()->route('vision.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vision $vision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vision $vision)
    {
        //
        return view('backend.vision.edit',[
            'edit' => $vision
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VisionRequest $request, Vision $vision)
    {
        //
        $vision->update($request->all());
   
        return redirect()->route('vision.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vision $vision)
    {
        //
        $vision->delete();
     
        return redirect()->route('vision.index')->with('status','Data deleted successfully!');
    }
}
