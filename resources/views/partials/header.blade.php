<header class="bg-red-600 text-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between py-4 gap-4">

            <!-- Logo -->
            <div class="flex items-center gap-4">
                <img src="{{ asset('assets/images/logo.jpeg') }}" alt="Logo Pemadam Kebakaran"
                    class="w-14 h-14 object-contain" />
                <h1 class="text-lg font-semibold sm:text-xl">Dinas Pemadam Kebakaran</h1>
            </div>

            <!-- Navigation Menu -->
            <nav class="w-full md:w-auto">
                <ul class="flex flex-wrap justify-center md:justify-end gap-4 md:gap-6 text-sm md:text-base">
                    <li><a href="{{ route('Home') }}" class="block p-2 rounded hover:bg-red-800 transition">Beranda</a>
                    </li>
                    <li><a href="{{ route('Layanan') }}"
                            class="block p-2 rounded hover:bg-red-800 transition">Layanan</a></li>
                    <li><a href="{{ route('Lokasi') }}" class="block p-2 rounded hover:bg-red-800 transition">Lokasi</a>
                    </li>
                    <li><a href="{{ route('Galeri') }}" class="block p-2 rounded hover:bg-red-800 transition">Galeri</a>
                    </li>
                    <li><a href="{{ route('Kontak') }}" class="block p-2 rounded hover:bg-red-800 transition">Kontak</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</header>