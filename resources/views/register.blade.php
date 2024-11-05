<!-- resources/views/auth/register.blade.php -->

@extends('app')

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input id="password" type="password" name="password" required class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
            @error('password')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
        </div>

        <!-- Submit Button -->
        <div class="mb-4">
            <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-lg font-semibold">Register</button>
        </div>
    </form>
</div>
@endsection
