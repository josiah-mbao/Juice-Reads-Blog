<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // For now, we'll use placeholder data. Later, this can be replaced with dynamic data from the database.
        
        // Placeholder data for books
        $currentlyReading = [
            'The Pragmatic Programmer',
            'Clean Code',
            'The Lean Startup'
        ];

        $finishedBooks = [
            ['title' => 'Atomic Habits', 'review_url' => '/reviews/1'],
            ['title' => 'Deep Work', 'review_url' => '/reviews/2'],
            ['title' => 'The Subtle Art of Not Giving a F*ck', 'review_url' => '/reviews/3']
        ];

        // Example goals or stats (placeholders)
        $readingGoal = 10; // User's reading goal
        $booksFinished = 8; // Number of books they've finished this year
        $progress = ($booksFinished / $readingGoal) * 100; // Progress percentage
        
        return view('dashboard', compact('currentlyReading', 'finishedBooks', 'readingGoal', 'booksFinished', 'progress'));
    }
}