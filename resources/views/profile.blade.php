@extends('app')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-3xl font-bold mb-4">User Profile</h1>
    
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Profile Information</h2>
        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" value="{{ auth()->user()->name }}" readonly>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" value="{{ auth()->user()->email }}" readonly>
        </div>
        
        <a href="{{ route('profile.edit') }}" class="text-blue-500 hover:underline">Edit Profile</a>
    </div>
</div>
@endsection
