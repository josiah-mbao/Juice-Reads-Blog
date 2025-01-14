@extends('app')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-4xl font-bold text-center text-white-800 mb-6">User Profile</h1>

    <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6 border-b pb-2">Profile Information</h2>
        <div class="mb-5">
            <label class="block text-gray-600 font-medium mb-1">Name</label>
            <input 
                type="text" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 text-gray-800 bg-gray-50" 
                value="{{ auth()->user()->name }}" 
                readonly>
        </div>
        <div class="mb-5">
            <label class="block text-gray-600 font-medium mb-1">Email</label>
            <input 
                type="email" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 text-gray-800 bg-gray-50" 
                value="{{ auth()->user()->email }}" 
                readonly>
        </div>

        <div class="flex justify-between items-center mt-6">
            <a href="{{ route('profile') }}" 
               class="text-indigo-600 font-medium hover:underline hover:text-indigo-800 transition">
               Edit Profile
            </a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" 
                        class="text-gray-600 font-medium hover:text-red-600 transition">
                        Sign out
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
