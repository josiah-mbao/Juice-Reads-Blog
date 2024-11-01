@extends('app')

@section('content')
<div class="py-12">
    <h1 class="text-3xl font-bold mb-6">Latest Blog Posts</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Example blog post card -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold mb-2">Blog Post Title</h2>
            <p class="text-gray-700">A brief description of the blog post...</p>
            <a href="#" class="text-indigo-600 mt-4 inline-block">Read More</a>
        </div>
        <!-- Add more posts here -->
    </div>
</div>
@endsection
