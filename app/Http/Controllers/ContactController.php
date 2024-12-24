<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $contacts = Contact::all(); // Fetch all contacts
        // dd($contacts);
        return view('admin.contactindex', compact('contacts')); 
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|max:20',
            'email'=> 'required|max:40|',
            'subject'=> 'max:40',
            'message'=> 'max:250',
        ]);
        Contact::create($request->all());
         return redirect()->back()->with('success','Message has been Sent');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact  )
    {
        $contact->delete();
        }
}
