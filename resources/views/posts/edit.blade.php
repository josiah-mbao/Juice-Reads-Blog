@extends('app')

@section('content')
    <div class="max-w-3xl mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Edit Post</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ old('title', $post->title) }}" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <div class="mb-4">
                <label for="duration" class="block text-gray-700 font-medium mb-2">Duration</label>
                <input 
                    type="text" 
                    name="duration" 
                    id="duration" 
                    value="{{ old('duration', $post->duration) }}" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <div class="mb-6">
                <label for="content" class="block text-gray-700 font-medium mb-2">Content</label>
                <textarea 
                    name="content" 
                    id="content" 
                    required 
                    rows="6" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">{{ old('content', $post->content) }}</textarea>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('dashboard') }}" class="text-sm text-gray-500 hover:underline">
                    Cancel
                </a>
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    Update Post
                </button>
            </div>
        </form>
    </div>
@endsection