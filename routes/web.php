<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VacancyController;

// Public routes
Route::get('/', fn() => view('index'));

Route::get('/login', fn() => view('auth.login'))->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', fn() => view('auth.register'))->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::middleware(['auth'])->group(function () {
    Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.index');
    Route::get('/applications/{application}', [ApplicationController::class, 'show'])->name('applications.show');
    Route::post('/jobs/{job}/apply', [ApplicationController::class, 'store'])->name('applications.store');
});
// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::get('/my-applications', [ApplicationController::class, 'index'])
        ->middleware('auth')
        ->name('applications.index');
    Route::get('/applications/{id}', [ApplicationController::class, 'show'])->name('applications.show');


    // Vacancies
    Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancies.index');

    // Profile
    // Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/dashboard', fn() => view('dashboard.user'))->name('dashboard');
    Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancies.index');
    Route::get('/vacancies/{id}', [VacancyController::class, 'show'])->name('vacancies.show');

    Route::get('/dashboard/vacancies', [VacancyController::class, 'index'])->name('vacancies.index');
    Route::get('/dashboard/vacancy/{id}', [VacancyController::class, 'show'])->name('vacancies.show');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});
