<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.indexadmin' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createadmin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
            'email' => 'required|unique:users',
            'cnic' => 'min:13|max:16',
            'contact' => 'min:11|max:13',
            'address' => 'max:90',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'role' => 'in:1,2', 
            'password' => 'required|max:25',
            
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' =>$request->role
        ]);
        return redirect()->route('users.index')->with('success','user added successfully');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.editadmin', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , User $user)
    {
    //     dd($request);
   
     $request->validate([
        'name' => 'required|max:25',
        'email' => 'required|email',
        'cnic' => 'nullable|min:13|max:16',
        'contact' => 'nullable|min:11|max:13',
        'address' => 'nullable|max:90',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'role' => 'in:1,2',
        'password' => 'nullable|max:25',
    ]);
        
        // $data = $request->all();
        
        $data = $request->only(['name', 'email', 'cnic', 'contact', 'address', 'role']);
        if($request->hasfile('image')){
            if ($user->image && Storage::exists('public/' . $user->image)) {
                Storage::delete('public/' . $user->image);
         
        }
        $imagepath = $request->file('image')->store('userImg','public');
        $data['image'] = $imagepath;
    }
         if($request->filled('password')){
            $data['password'] = Hash::make($request->password);
         }
        $user->update($data);
        return redirect()->route('users.index')->with('success' , 'successfully updated ');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( User $user)
    {
        if ($user->image && Storage::exists('public/' . $user->image)) {
            Storage::delete('public/' . $user->image);
        }
    
        // Delete the user record
        $user->delete();
        
        return redirect()->route('users.index')->with('success', ' user succefully deleted');
    }
}
