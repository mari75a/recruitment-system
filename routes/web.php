<?php

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

// Protected routes
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', fn() => view('dashboard.user'))->name('dashboard');

    Route::get('/dashboard/vacancies', [VacancyController::class, 'index'])->name('vacancies.index');
    Route::get('/dashboard/vacancy/{id}', [VacancyController::class, 'show'])->name('vacancies.show');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});
