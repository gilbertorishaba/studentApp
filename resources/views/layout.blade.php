<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Add your CSS files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app">
        <!-- Header Section -->
        <header>
            @include('partials.header') <!-- Assuming you have a header partial -->
        </header>

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer Section -->
        <footer>
            @include('partials.footer') <!-- Assuming you have a footer partial -->
        </footer>
    </div>

    <!-- Add your JavaScript files here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
