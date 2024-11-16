<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_title' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'review_text' => 'required|string',
        ]);

        Post::create([
            'user_id' => Auth::id(),
            'book_title' => $request->book_title,
            'duration' => $request->duration,
            'review_text' => $request->review_text,
        ]);

        return redirect('/dashboard')->with('success', 'Post created successfully!');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
?>