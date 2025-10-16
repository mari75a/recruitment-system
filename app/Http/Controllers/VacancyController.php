<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    // Show all job vacancies
    public function index()
    {
        $vacancies = Job::with('department')->get();
        return view('dashboard.vacancies', compact('vacancies'));
    }

    // Show a single job details page
    public function show($id)
    {
        $job = Job::with('department')->findOrFail($id);
        return view('dashboard.show', compact('job'));
    }
}
