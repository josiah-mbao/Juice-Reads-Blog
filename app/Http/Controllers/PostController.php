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
            'title' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'duration' => $request->duration,
            'content' => $request->content,
        ]);

        return redirect('/dashboard')->with('success', 'Post created successfully!');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        // Ensure the user can only edit their own posts
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        // Ensure the user can only update their own posts
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->update([
            'title' => $request->title,
            'duration' => $request->duration,
            'content' => $request->content,
        ]);

        return redirect('/dashboard')->with('success', 'Post updated successfully!');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Ensure the user can only delete their own posts
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $post->delete();
        

        return redirect('/dashboard')->with('success', 'Post deleted successfully!');
    }
}
?>