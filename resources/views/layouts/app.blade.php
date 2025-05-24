<!-- layouts/app.blade.php -->
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>

    <body class="font-display h-full bg-no-repeat bg-cover bg-center"
        style="background-image: url('/assets/images/TKK lahan kobar ujung2.jpg');">
        @include('partials.header')

        <div>
            @yield('content')
        </div>

        @include('partials.footer')
    </body>

</html>