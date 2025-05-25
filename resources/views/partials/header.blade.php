<header id="main-header" class="py-4 fixed z-[1000] w-full transition-all duration-500 ease-in-out top-0">
    <div class="absolute flex flex-wrap items-center justify-between px-10 w-full mt-3">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="/assets/images/logo png.png" alt="Logo" class="h-12">
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:block rounded-full px-6 py-3 fixed top-8 left-1/2 -translate-x-1/2 bg-white shadow">
            <ul class="flex items-center text-sm ">
                <li>
                    <a href="{{ route('Home') }}" class="px-4 py-2 rounded-full hover:bg-red-700 hover:text-white transition 
                      {{ request()->routeIs('Home') ? 'bg-red-600 text-white' : '' }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('Layanan') }}" class="px-4 py-2 rounded-full hover:bg-red-700 hover:text-white transition
                      {{ request()->routeIs('Layanan') ? 'bg-red-600 text-white' : '' }}">
                        Layanan
                    </a>
                </li>
                <li>
                    <a href="{{ route('Lokasi') }}" class="px-4 py-2 rounded-full hover:bg-red-700 hover:text-white transition
                      {{ request()->routeIs('Lokasi') ? 'bg-red-600 text-white' : '' }}">
                        Lokasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('Galeri') }}" class="px-4 py-2 rounded-full hover:bg-red-700 hover:text-white transition
                      {{ request()->routeIs('Galeri') ? 'bg-red-600 text-white' : '' }}">
                        Galeri
                    </a>
                </li>
                <li>
                    <a href="{{ route('Kontak') }}" class="px-4 py-2 rounded-full hover:bg-red-700 hover:text-white transition
                      {{ request()->routeIs('Kontak') ? 'bg-red-600 text-white' : '' }}">
                        Kontak
                    </a>
                </li>
            </ul>
        </nav>
        <div class="flex items-center space-x-4 right-0 px-10 absolute">
            <button id="searchButton"
                class="text-red-600 p-2 rounded-full shadow-md transition duration-300 hover:scale-200">
                <i class="ri-search-line"></i>
                </svg>
            </button>
            <button id="hamburgerButton" class="md:hidden text-red-600 p-2 rounded-full shadow-md">
                <i class="ri-menu-line text-2xl"></i>
            </button>

            <!-- Modal Pencarian (Hidden by default) -->
            <div id="searchModal" class="fixed inset-0 transition bg-opacity-50 items-center z-50 hidden">
                <div class="bg-white rounded-4xl mx-8 p-6 mt-8 ">
                    <div class="flex justify-end items-center mb-4">
                        <!-- Tombol Close -->
                        <button id="closeButton">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>

                    <!-- Search Input -->
                    <div class="relative px-6">
                        <input type="text" placeholder="Cari"
                            class="w-full px-4 py-4 bg-gray-200 border border-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-black">
                        <button type="submit"
                            class="absolute right-8 top-1.5 text-white bg-red-600 rounded-full p-4 px-6 py-3 z-50">
                            <i class="ri-search-line"></i>
                        </button>
                    </div>
                    <div
                        class="p-4 sm:p-6 md:p-8 lg:p-12 flex flex-col sm:flex-row items-start sm:items-center gap-2 sm:gap-4">
                        <h2 class="font-bold text-base sm:text-lg whitespace-nowrap">Kata Kunci</h2>
                        <div class="flex flex-wrap items-center gap-1 sm:gap-2 text-sm sm:text-base">
                            <a href="{{ route('Home') }}" class="hover:text-red-600 transition-colors">Beranda</a>
                            <span class="text-gray-400">/</span>
                            <a href="{{ route('Layanan') }}" class="hover:text-red-600 transition-colors">Layanan</a>
                            <span class="text-gray-400">/</span>
                            <a href="{{ route('Lokasi') }}" class="hover:text-red-600 transition-colors">Lokasi</a>
                            <span class="text-gray-400">/</span>
                            <a href="{{ route('Kontak') }}" class="hover:text-red-600 transition-colors">Kontak</a>
                            <span class="text-gray-400">/</span>
                            <a href="{{ route('Galeri') }}" class="hover:text-red-600 transition-colors">Galeri</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <!-- Menu Navigasi Mobile -->
        <div id="mobileMenu"
            class="md:hidden fixed top-20 right-4 bg-white rounded-xl shadow-lg p-4 w-52 hidden z-[999]">
            <ul class="space-y-2 text-sm font-medium">
                <li>
                    <a href="{{ route('Home') }}"
                        class="block px-4 py-2 rounded-full hover:bg-red-600 hover:text-white {{ request()->routeIs('Home') ? 'bg-red-600 text-white' : '' }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('Layanan') }}"
                        class="block px-4 py-2 rounded-full hover:bg-red-600 hover:text-white {{ request()->routeIs('Layanan') ? 'bg-red-600 text-white' : '' }}">
                        Layanan
                    </a>
                </li>
                <li>
                    <a href="{{ route('Lokasi') }}"
                        class="block px-4 py-2 rounded-full hover:bg-red-600 hover:text-white {{ request()->routeIs('Lokasi') ? 'bg-red-600 text-white' : '' }}">
                        Lokasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('Galeri') }}"
                        class="block px-4 py-2 rounded-full hover:bg-red-600 hover:text-white {{ request()->routeIs('Galeri') ? 'bg-red-600 text-white' : '' }}">
                        Galeri
                    </a>
                </li>
                <li>
                    <a href="{{ route('Kontak') }}"
                        class="block px-4 py-2 rounded-full hover:bg-red-600 hover:text-white {{ request()->routeIs('Kontak') ? 'bg-red-600 text-white' : '' }}">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>

</header>

<script>
    let lastScrollTop = 0;
    const header = document.getElementById("main-header");

    window.addEventListener("scroll", function () {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scroll ke bawah -> sembunyikan
            header.style.transform = "translateY(-500%)";
        } else {
            // Scroll ke atas -> tampilkan
            header.style.transform = "translateY(0)";
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });

    
    // SCRIPT BARU UNTUK MENU MOBILE
    const hamburgerButton = document.getElementById("hamburgerButton");
    const mobileMenu = document.getElementById("mobileMenu");

    hamburgerButton?.addEventListener("click", () => {
        mobileMenu?.classList.toggle("hidden");
    });
</script>