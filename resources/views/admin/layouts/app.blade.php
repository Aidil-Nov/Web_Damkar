<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100 text-gray-800">

        <!-- Sidebar -->
        <div class="fixed top-0 left-0 h-full w-64 bg-gray-800 text-white p-5">
            <h3 class="text-center text-2xl font-bold mb-6">Admin Damkar Kurnia Kobar</h3>
            <nav class="space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Dashboard</a>
                <a href="{{ route('admin.contact') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Pesan
                    Kontak</a>
                <a href="{{ route('admin.news.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Berita</a>
                <a href="{{ route('admin.gallery.index') }}"
                    class="block px-4 py-2 rounded hover:bg-gray-700">Gallery</a>

            </nav>
        </div>

        <!-- Main Content -->
        <div class="ml-64 min-h-screen flex flex-col">
            <!-- Navbar -->
            <header class="bg-gray-800 text-white py-4 px-6 flex justify-between items-center">
                <h1 class="text-xl font-semibold">Admin Dashboard</h1>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-red-500 hover:text-red-700">Logout</button>
                </form>
            </header>

            <!-- Main Section -->
            <main class="flex-grow p-6">
                @yield('content') <!-- Konten dinamis dari setiap halaman -->
            </main>

            <!-- Footer -->
            <footer class="bg-gray-800 text-white text-center py-4">
                <p>&copy; 2025 Admin Panel Damkar Kurnia Kobar. All rights reserved.</p>
            </footer>
        </div>

    </body>

</html>