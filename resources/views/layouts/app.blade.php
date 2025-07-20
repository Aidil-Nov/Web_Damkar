<!DOCTYPE html>
<<<<<<< HEAD
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="flex">
    <!-- Sidebar -->
    <div class="w-64 h-screen bg-gray-800 text-white p-5">
        <h3 class="text-2xl font-semibold text-center mb-6">Admin Panel</h3>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}" class="block py-2 hover:bg-gray-700 px-3 rounded">Dashboard</a></li>
            <li><a href="{{ route('admin.contact') }}" class="block py-2 hover:bg-gray-700 px-3 rounded">Pesan Kontak</a></li>
            <li><a href="{{ route('admin.news.index') }}" class="block py-2 hover:bg-gray-700 px-3 rounded">Berita</a></li>
            <li><a href="{{ route('admin.gallery.index') }}" class="block py-2 hover:bg-gray-700 px-3 rounded">Galeri</a></li>
            <li><a href="{{ route('admin.visitors.index') }}" class="block py-2 hover:bg-gray-700 px-3 rounded">Pengunjung</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <!-- Navbar -->
        <nav class="bg-white shadow-sm p-4 flex justify-between items-center">
            <div>
                <a href="{{ route('admin.dashboard') }}" class="font-bold text-xl text-gray-800">Admin Dashboard</a>
            </div>
            <div>
                <a href="{{ route('logout') }}" class="text-red-500">Logout</a>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="mt-6">
            @yield('content')
        </div>
    </div>
</div>

</body>
=======
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
>>>>>>> origin/aidil
</html>
