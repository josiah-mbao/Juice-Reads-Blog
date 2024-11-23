<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home page route
Route::view('/', 'home')->name('home');

// Show the dashboard, only for authenticated users
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// Show the profile page, only for authenticated users
Route::view('profile', 'profile')
    ->middleware('auth')
    ->name('profile');

// Authentication routes for login, registration, and logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Show the registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::middleware(['auth'])->group(function() {
    // Display the form for creating a post
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    
    // Store a new post
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    
    // Show a single post
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    
    // Display the form for editing a post
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    
    // Update an existing post
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    
    // Delete a post
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});




// Default Laravel authentication routes (if using built-in Auth)
require __DIR__.'/auth.php';