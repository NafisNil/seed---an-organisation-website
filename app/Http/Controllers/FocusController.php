<?php

namespace App\Http\Controllers;

use App\Models\Focus;
use Illuminate\Http\Request;
use App\Http\Requests\FocusRequest;
use Image;
class FocusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $focus = Focus::orderBy('id', 'desc')->get();
        return view('backend.focus.index',['focus'=>$focus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.focus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FocusRequest $request)
    {
        //
        $focus = Focus::create($request->all());
        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $focus);
        }

        return redirect()->route('focus.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Focus $focus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $focus = Focus::find($id);
        return view('backend.focus.edit',[
            'edit' => $focus
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FocusRequest $request,  $id)
    {
        //
        $focus = Focus::find($id);
        $focus->update($request->all());
        if ($request->hasFile('photo')) {
            @unlink('storage/'.$focus->photo);
            $this->_uploadImage($request, $focus);
        }

        return redirect()->route('focus.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $focus = Focus::find($id);
        $focus->delete();
        if(!empty($focus->photo));
        @unlink('storage/'.$focus->photo);

        return redirect()->route('focus.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('photo') ) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(100, 100)->save('storage/' . $filename);
            $about->photo = $filename;
            $about->save();
        }

    }


}
