<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Blog</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        nav a { margin-right: 15px; }
        .container { max-width: 800px; margin: auto; }
    </style>
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