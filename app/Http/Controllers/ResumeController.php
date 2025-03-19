<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function showUploadForm()
    {
        return view('auth.resume-upload');
    }

    public function uploadResume(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048', // Allow only PDF, DOC, DOCX (max 2MB)
        ]);

        // Store resume in 'public/resumes' directory
        $resumePath = $request->file('resume')->store('resumes', 'public');

        return redirect()->back()->with('success', 'Resume uploaded successfully!');
    }
}
