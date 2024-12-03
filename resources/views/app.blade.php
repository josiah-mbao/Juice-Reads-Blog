<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juice Reads</title>
    <meta name="description" content="Juice Reads - Discover and share amazing book reviews.">
    @vite('resources/css/app.css')
    <style>
        /* Branding colors inspired by Spotify */
        :root {
            --primary-color: #1DB954; /* Spotify Green */
            --secondary-color: #191414; /* Spotify Black */
            --text-color: #FFFFFF;     /* White */
        }
    </style>
</head>
<body class="bg-gray-900 text-white font-sans">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <header class="py-4">
            <nav class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="text-2xl font-bold text-primary">Juice Reads</a>
                
                <!-- Mobile Menu Toggle -->
                <div x-data="{ open: false }" class="lg:hidden">
                    <button @click="open = !open" class="text-white">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                    <ul x-show="open" class="absolute right-0 mt-2 w-48 bg-secondary rounded-lg shadow-lg">
                        <li><a href="/" class="block px-4 py-2 text-white hover:bg-primary">Home</a></li>
                        @auth
                            <li><a href="/profile" class="block px-4 py-2 text-white hover:bg-primary">Profile</a></li>
                            <li><a href="/dashboard" class="block px-4 py-2 text-white hover:bg-primary">Dashboard</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 text-white hover:bg-primary">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}" class="block px-4 py-2 text-white hover:bg-primary">Login</a></li>
                            <li><a href="{{ route('register') }}" class="block px-4 py-2 text-white hover:bg-primary">Register</a></li>
                        @endauth
                    </ul>
                </div>

                <!-- Desktop Links -->
                <ul class="hidden lg:flex space-x-6">
                    <li><a href="/" class="text-white hover:text-primary">Home</a></li>
                    @auth
                        <li><a href="/profile" class="text-white hover:text-primary">Profile</a></li>
                        <li><a href="/dashboard" class="text-white hover:text-primary">Dashboard</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="text-white hover:text-primary">Logout</button>
                            </form>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-white hover:text-primary">Login</a></li>
                        <li><a href="{{ route('register') }}" class="text-white hover:text-primary">Register</a></li>
                    @endauth
                </ul>
            </nav>
        </header>

        <!-- Main Content -->
        <main id="main-content" class="mt-6">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="py-6 text-center">
            <p class="text-gray-400">&copy; 2024 Juice Reads. All rights reserved.</p>
        </footer>
    </div>

    @vite('resources/js/app.js')
</body>
</html>