<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedback.index',compact('feedbacks') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'video' => 'nullable|mimes:mp4,mov,avi|max:20480', // 20MB max video file
        ]);

        $feedback = new Feedback();
        $feedback->comment = $request->comment;

        if ($request->hasFile('video')) {
            $feedback->video = $request->file('video')->store('fvideo' , 'public');
        }

        $feedback->save();

        return redirect()->route('feedbacks.index')->with('success', 'Feedback added successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        return view('admin.feedback.edit',compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        
        $request->validate([
            'comment' => 'required|string',
             'video' => 'nullable|mimes:mp4,mov,avi|max:20480'
        ]);
        if ($request->hasFile('video')) {
            // Delete old video if it exists
            if ($feedback->video) {
                Storage::delete('public/' . $feedback->video);
            }
    
            // Store the new video
            $videoPath = $request->file('video')->store('fvideo', 'public');
    
            // Update the video path in the database
            $feedback->video = $videoPath;
            
        }
        $feedback->comment = $request->comment;
        // Save the updated feedback
        $feedback->save();
      

        return redirect()->route('feedbacks.index')->with('success', 'Feedback added successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        if ($feedback->video) {
            Storage::delete('public/'. $feedback->video);
        }

        $feedback->delete();

        return redirect()->route('feedbacks.index')->with('success', 'Feedback deleted successfully.');
    
    }
}
