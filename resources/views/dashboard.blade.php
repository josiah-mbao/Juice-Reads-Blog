@extends('app')

@section('content')
<div class="py-12">
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    <!-- Reading Progress Section -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
        <h2 class="text-xl font-semibold mb-4">Reading Goal</h2>
        <p>You have finished {{ $booksFinished }} out of {{ $readingGoal }} books this year.</p>
        <div class="w-full bg-gray-200 rounded-full h-4">
            <div class="bg-indigo-600 h-4 rounded-full" style="width: {{ $progress }}%"></div>
        </div>
    </div>

    <!-- Currently Reading Section -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
        <h2 class="text-xl font-semibold mb-4">Currently Reading</h2>
        <ul class="list-disc list-inside">
            @foreach ($currentlyReading as $book)
                <li>{{ $book }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Finished Books Section -->
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Books You've Finished</h2>
        <ul class="list-disc list-inside">
            @foreach ($finishedBooks as $book)
                <li><a href="{{ $book['review_url'] }}" class="text-indigo-600 hover:underline">{{ $book['title'] }}</a></li>
            @endforeach
        </ul>
    </div>

    <!-- Add Book Button -->
    <div class="mt-6">
        <a href="/add-book" class="bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700">Add a Book</a>
    </div>
</div>
@endsection
