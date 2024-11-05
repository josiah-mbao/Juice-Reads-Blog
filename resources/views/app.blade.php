<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto">
        <!-- Header -->
        <header class="py-6">
            <nav class="flex justify-between items-center">
                <a href="/" class="text-xl font-bold text-indigo-600">Juice Reads</a>
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-gray-600 hover:text-indigo-600">Home</a></li>
                    <li><a href="/profile" class="text-gray-600 hover:text-indigo-600">Profile</a></li>
                    <li><a href="/dashboard" class="text-gray-600 hover:text-indigo-600">Dashboard</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="py-6 text-center text-gray-500">
            &copy; 2024 My Blog. All rights reserved.
        </footer>
    </div>

    @vite('resources/js/app.js')
</body>
</html>

