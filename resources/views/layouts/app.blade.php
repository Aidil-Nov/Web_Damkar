<!-- layouts/app.blade.php -->
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>

    <body class="font-display h-full bg-no-repeat bg-cover bg-center">
        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </body>

</html>