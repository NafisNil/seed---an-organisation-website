<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\TestimonialRequest;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $testimonial = Testimonial::orderBy('id', 'desc')->get();
        return view('backend.testimonial.index',['testimonial'=>$testimonial]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialRequest $request)
    {
        //
        $testimonial = Testimonial::create($request->all());
        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $testimonial);
        }

        return redirect()->route('testimonial.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
        return view('backend.testimonial.edit',[
            'edit' => $testimonial
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        //
        $testimonial->update($request->all());
        if ($request->hasFile('photo')) {
            @unlink('storage/'.$testimonial->photo);
            $this->_uploadImage($request, $testimonial);
        }

        return redirect()->route('testimonial.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        $testimonial->delete();
        if(!empty($testimonial->photo));
        @unlink('storage/'.$testimonial->photo);

        return redirect()->route('testimonial.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('photo') ) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(108, 112)->save('storage/' . $filename);
            $about->photo = $filename;
            $about->save();
        }

    }
}
