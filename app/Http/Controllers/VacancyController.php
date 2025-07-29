<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    public function index()
{
    $vacancies = Vacancy::latest()->get();
    return view('dashboard.vacancies', compact('vacancies'));
}

    public function show($id)
{
    $vacancy = Vacancy::findOrFail($id);
    return view('dashboard.vacancy-show', compact('vacancy'));
}
}