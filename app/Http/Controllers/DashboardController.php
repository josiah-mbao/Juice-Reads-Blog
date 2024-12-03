<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->withErrors('You must be logged in to view the dashboard.');
        }

        // Fetch the user's posts
        $currentlyReading = Post::where('user_id', $user->id)->whereNull('published_at')->get(); // Unpublished posts
        $finishedBooks = Post::where('user_id', $user->id)->whereNotNull('published_at')->get(); // Published posts

        // User's reading goal and finished books count
        $readingGoal = 10; // Replace with dynamic data if stored in the user profile
        $booksFinished = $finishedBooks->count(); 
        $progress = ($booksFinished / $readingGoal) * 100; // Progress percentage
        
        return view('dashboard', compact('currentlyReading', 'finishedBooks', 'readingGoal', 'booksFinished', 'progress'));
    }
}
