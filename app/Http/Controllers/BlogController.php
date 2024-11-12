<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\BlogRequest;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blog = Blog::orderBy('id', 'desc')->get();
        return view('backend.blog.index',['blog'=>$blog]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        //
        $blog = Blog::create($request->all());
        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $blog);
        }

        return redirect()->route('blog.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        return view('backend.blog.edit',[
            'edit' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        //
        $blog->update($request->all());
        if ($request->hasFile('photo')) {
            @unlink('storage/'.$blog->photo);
            $this->_uploadImage($request, $blog);
        }

        return redirect()->route('blog.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();
        if(!empty($blog->photo));
        @unlink('storage/'.$blog->photo);

        return redirect()->route('blog.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('photo') ) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1024, 678)->save('storage/' . $filename);
            $about->photo = $filename;
            $about->save();
        }

    }
}
