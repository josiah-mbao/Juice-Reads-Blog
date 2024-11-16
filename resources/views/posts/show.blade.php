@extends('app')

@section('content')
<div class="max-w-4xl mx-auto py-12">
    <h1 class="text-3xl font-bold mb-6">{{ $post->book_title }}</h1>
    <p class="text-gray-600 mb-2">Duration: {{ $post->duration }}</p>
    <p class="text-gray-700">{{ $post->review_text }}</p>
    <a href="/dashboard" class="mt-4 inline-block text-indigo-600">Back to Dashboard</a>
</div>
@endsection

