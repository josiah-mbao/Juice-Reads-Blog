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
        <h2 class="text-xl font-semibold mb-4">Your reviews</h2>
        @if($currentlyReading->isEmpty())
            <p>You are not currently reading any books. Add a new book to your reading list!</p>
        @else
            <ul class="list-disc list-inside">
                @foreach ($currentlyReading as $book)
                    <li>
                        <strong>{{ $book->title }}</strong><br>
                        <span class="text-gray-600">Duration: {{ $book->duration }} days</span><br>
                        <p>{{ Str::limit($book->content, 100) }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <!-- Finished Books Section -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
        <h2 class="text-xl font-semibold mb-4">Books You've Finished</h2>
        @if($finishedBooks->isEmpty())
            <p>You have not finished any books yet. Start reading and reviewing your books!</p>
        @else
            <ul class="list-disc list-inside">
                @foreach ($finishedBooks as $book)
                    <li>
                        <strong>{{ $book->title }}</strong> - Published on {{ $book->published_at->format('M d, Y') }}<br>
                        <p>{{ Str::limit($book->content, 100) }}</p>
                        <a href="{{ route('posts.show', $book->id) }}" class="text-indigo-600 hover:underline">Read full review</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <!-- Add Book Button -->
    <div class="mt-6">
        <a href="{{ route('posts.create') }}" class="bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700">Add a Review</a>
    </div>
</div>
@endsection
