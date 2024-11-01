@extends('app')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-3xl font-bold mb-4">Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold">Statistics</h2>
            <p>Here you can show user-specific statistics or any relevant data.</p>
        </div>
        
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold">Recent Activity</h2>
            <p>List of recent activities or events relevant to the user.</p>
        </div>
        
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold">Settings</h2>
            <p>Quick access to settings and preferences.</p>
        </div>
    </div>
</div>
@endsection
