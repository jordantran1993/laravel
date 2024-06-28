<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <!-- Add your header content here -->
</header>

<main>
    @yield('content')
</main>

<footer>
    <!-- Add your footer content here -->
</footer>

<!-- Add your JS scripts here -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
