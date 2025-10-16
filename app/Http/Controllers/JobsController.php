<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        // Load jobs with their related department
        $jobs = Job::with('department')->get();

        // Pass jobs to the view
        return view('jobs.index', compact('jobs'));
    }

    public function show($id)
    {
        $job = Job::with('department')->findOrFail($id);
        return view('jobs.show', compact('job'));
    }
}
