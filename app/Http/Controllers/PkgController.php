<?php

namespace App\Http\Controllers;

use App\Models\Pkg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PkgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pkgs = Pkg::all();
        return view('admin.pkg.index' , compact('pkgs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pkg.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120' ,
            'location' => 'required|min:2|max:20',
            'day' => 'required|min:1|max:20',
            'content' => 'required|min:2|max:250',

        ]);
        // dd($request);
        //handle the req
        $imgpath = Null;
        if($request->hasfile('image')){
            $imgpath = $request->file('image')->store('pkgimg','public');
        }
       

        Pkg::create([ 
            'image' => $imgpath,
        'location' => $request->input('location'),
        'day' => $request->input('day'),
        'content' => $request->input('content')
                 ]);

         return redirect()->route('pkgs.index')->with('success' , 'Pakage created successfully! ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pkg $pkg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pkg $pkg)
    {
        return view('admin.pkg.edit' ,compact('pkg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pkg $pkg)
    {

        // if()
        $request->validate([
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120' ,
            'location' => 'required|min:2|max:20',
            'day' => 'required|min:1|max:20',
            'content' => 'required|min:2|max:250',

        ]);
        
       

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Optional image validation
            ]);
            
            // Delete the old image if needed
            if ($pkg->image) {
                Storage::delete('public/pkimg/' . $pkg->image);
            }
    
            // Save the new image
            $imagePath = $request->file('image')->store('public/pkimg');
            $pkg->image = basename($imagePath); // Save only the filename
        }
    
        // Update other fields
        $pkg->location = $request->location;
        $pkg->day = $request->day;
        $pkg->content = $request->content;
    
        // Save the updated package
        $pkg->save();
    
    
         return redirect()->route('pkgs.index')->with('success' , 'Pakage created successfully! ');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pkg $pkg)
    {
        if ($pkg->image) {
            Storage::delete( $pkg->image);
        }
    
        // Delete the user record
        $pkg->delete();
        // $pkg->destroy();
        return redirect()->route('pkgs.index')->with('delete' , ' Pakage Deleted successfull!');
    }
}
