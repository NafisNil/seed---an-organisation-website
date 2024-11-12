<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Requests\HeroRequest;
use Image;
class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hero = Hero::orderBy('id', 'desc')->get();
        return view('backend.hero.index',['hero'=>$hero]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HeroRequest $request)
    {
        //
        $hero = Hero::create($request->all());
        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $hero);
        }

        return redirect()->route('hero.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        //
        return view('backend.hero.edit',[
            'edit' => $hero
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HeroRequest $request, Hero $hero)
    {
        //
        $hero->update($request->all());
        if ($request->hasFile('photo')) {
            @unlink('storage/'.$hero->photo);
            $this->_uploadImage($request, $hero);
        }

        return redirect()->route('hero.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        //
        $hero->delete();
        if(!empty($hero->photo));
        @unlink('storage/'.$hero->photo);

        return redirect()->route('hero.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('photo') ) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1600, 900)->save('storage/' . $filename);
            $about->photo = $filename;
            $about->save();
        }

    }
}
