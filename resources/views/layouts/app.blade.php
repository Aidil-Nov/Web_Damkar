<!DOCTYPE html>
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
</html>
