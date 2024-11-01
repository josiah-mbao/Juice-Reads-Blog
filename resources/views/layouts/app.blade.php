<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A blog-based platform for detailed book reports, reviews, and summaries.">
    <meta name="author" content="Your Name">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Book Report Blog</title>

    <!-- Fonts and Stylesheets -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Add a custom stylesheet for your project -->
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')


    <!-- Optionally, you can include a Google Font or other font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Header / Navbar -->
    <header class="blog-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">Book Report Blog</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/books') }}">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/reviews') }}">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main content section -->
    <main role="main" class="container">
        <!-- Flash messages (optional) -->
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <!-- Dynamic content that will be unique to each page -->
        <div class="content">
            @yield('content')
        </div>
    </main>

    <!-- Footer section -->
    <footer class="blog-footer">
        <p>&copy; 2024 Book Report Blog by Your Name.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>

    <!-- Include JavaScript files -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
