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

        // Fetch the user's posts from the database
        $currentlyReading = Post::where('user_id', $user->id)->whereNull('published_at')->get(); // Posts that are not published yet
        $finishedBooks = Post::where('user_id', $user->id)->whereNotNull('published_at')->get(); // Published posts

        // Example reading goal and books finished (you can replace with actual logic if needed)
        $readingGoal = 10; // User's reading goal
        $booksFinished = $finishedBooks->count(); // Number of books they've finished
        $progress = ($booksFinished / $readingGoal) * 100; // Progress percentage
        
        return view('dashboard', compact('currentlyReading', 'finishedBooks', 'readingGoal', 'booksFinished', 'progress'));
    }
}
