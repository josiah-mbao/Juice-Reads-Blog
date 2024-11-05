<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::view('/', 'home');

Route::view('dashboard', 'dashboard')
    //->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Show the registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Handle the form submission
Route::post('/register', [RegisterController::class, 'register']);


require __DIR__.'/auth.php';
