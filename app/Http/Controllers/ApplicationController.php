<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Application;
use App\Models\Job;

class ApplicationController extends Controller
{
    /**
     * Display all applications of the logged-in applicant.
     */
    public function index()
    {
        $applications = Application::where('user_id', Auth::id())
            ->with('job')
            ->latest()
            ->get();

        return view('my-applications', compact('applications'));
    }

    /**
     * Show the application form for a specific job.
     */
    public function create($job_id)
    {
        $job = Job::findOrFail($job_id);
        return view('apply', compact('job'));
    }

    /**
     * Store a new job application.
     */
    public function store(Request $request, $job_id)
    {
        $request->validate([
            'qualification' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'skills' => 'required|string|max:255',
            'document' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $job = Job::findOrFail($job_id);

        // Upload resume/document
        $path = $request->file('document')->store('documents', 'public');

        Application::create([
            'user_id' => Auth::id(),
            'job_id' => $job->id,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'skills' => $request->skills,
            'document_path' => $path,
            'submitted_at' => now(),
        ]);

        return redirect()->route('applications.index')->with('success', 'Application submitted successfully!');
    }

    /**
     * Show details of a single application.
     */
    public function show($id)
    {
        $application = Application::with('job')
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        return view('application-detail', compact('application'));
    }
}
