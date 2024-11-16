@extends('app')

@section('content')
<div class="max-w-4xl mx-auto py-12">
    <h1 class="text-3xl font-bold mb-6">Create a Book Review</h1>

    @if ($errors->any())
        <div class="mb-6">
            <ul class="bg-red-100 text-red-700 px-4 py-3 rounded">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Book Title</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <div class="mb-4">
            <label for="duration" class="block text-sm font-medium text-gray-700">Duration (e.g., Jan 1 - Jan 13)</label>
            <input type="text" name="duration" id="duration" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <div class="mb-4">
            <label for="review_text" class="block text-sm font-medium text-gray-700">Review</label>
            <textarea name="content" id="review_text" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
        </div>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-indigo-500">Create Review</button>
    </form>
</div>
@endsection

@if (session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif


