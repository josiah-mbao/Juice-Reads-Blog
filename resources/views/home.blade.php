@extends('app')

@section('content')
<div class="py-12">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-lg shadow-lg p-8 mb-12">
        <h1 class="text-4xl font-bold mb-4">Welcome to Juice Reads</h1>
        <p class="text-lg">Discover and share amazing book reviews from readers around the world.</p>
    </section>

    <!-- Latest Blog Posts -->
    <section>
        <h2 class="text-3xl font-bold mb-6">Latest Blog Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Example blog post card -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Blog Post Title</h3>
                <p class="text-gray-600 mb-4">A brief description of the blog post that gives readers a sneak peek...</p>
                <a href="#" 
                   class="inline-block px-4 py-2 bg-indigo-600 text-white font-medium rounded-md shadow hover:bg-indigo-700 transition">
                   Read More
                </a>
            </div>
            <!-- Add more posts here -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Another Blog Post</h3>
                <p class="text-gray-600 mb-4">A different post description for variety and interest...</p>
                <a href="#" 
                   class="inline-block px-4 py-2 bg-indigo-600 text-white font-medium rounded-md shadow hover:bg-indigo-700 transition">
                   Read More
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
