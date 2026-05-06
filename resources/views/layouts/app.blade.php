<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <nav>
            <a href="/">Home</a>
            <a href="/posts">Blog</a>
        </nav>
        <hr>
        @yield('content')
    </div>
</body>
</html>