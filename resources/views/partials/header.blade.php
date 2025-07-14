<header id="main-header" class="py-4 fixed z-[1000] w-full transition-all duration-500 ease-in-out top-0 ">
    <div class="absolute flex flex-wrap items-center justify-between w-full mt-8">

        <div class="flex items-center left-4 sm:left-4 md:left-7 lg:left-15 absolute">
            <img src="/assets/images/logo png.png" alt="Logo" class="h-12 ">
        </div>


        <nav class="hidden md:block rounded-full px-6 py-3 fixed top-8 left-1/2 -translate-x-1/2 bg-white shadow ">
            <ul class="flex items-center text-sm gap-2">
                <li>
                    <a href="{{ route('Home') }}" class="px-4 py-2 rounded-full  hover:border-red-700 hover:border-[1px] transition 
                      {{ request()->routeIs('Home') ? 'bg-red-600 text-white' : '' }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('Layanan') }}" class="px-4 py-2 rounded-full hover:border-red-700 hover:border-[1px] transition
                      {{ request()->routeIs('Layanan') ? 'bg-red-600 text-white' : '' }}">
                        Layanan
                    </a>
                </li>
                <li>
                    <a href="{{ route('Lokasi') }}" class="px-4 py-2 rounded-full  hover:border-red-700 hover:border-[1px] transition
                      {{ request()->routeIs('Lokasi') ? 'bg-red-600 text-white' : '' }}">
                        Lokasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('Galeri') }}" class="px-4 py-2 rounded-full  hover:border-red-700 hover:border-[1px] transition
                      {{ request()->routeIs('Galeri') ? 'bg-red-600 text-white' : '' }}">
                        Galeri
                    </a>
                </li>
                <li>
                    <a href="{{ route('Kontak') }}" class="px-4 py-2 rounded-full  hover:border-red-700 hover:border-[1px] transition
                      {{ request()->routeIs('Kontak') ? 'bg-red-600 text-white' : '' }}">
                        Kontak
                    </a>
                </li>
            </ul>
        </nav>
        <div class="flex items-center right-4 absolute sm:right-4 md:right-7 lg:right-15">
            <button id="searchButton" class="text-red-600 p-2 rounded-full transition duration-300 hover:scale-150">
                <i class="ri-search-line text-2xl"></i>
                </svg>
            </button>
            <button id="hamburgerButton" class="md:hidden text-red-600 rounded-full hover:scale-150 transition">
                <i class="ri-menu-line text-2xl"></i>
            </button>


            <div id="searchModal" class="fixed inset-0 transition bg-opacity-50 items-center z-[9990] hidden">
                <div class="bg-white rounded-4xl mx-8 p-6 mt-7">
                    <div class="flex justify-end items-center mb-4">
                        <button id="closeButton" class="hover:scale-150 transition">
                            <i class="ri-close-line text-2xl "></i>
                        </button>
                    </div>


                    <div class="relative px-6">
                        <form action="POST">
                            <input type="text" placeholder="Cari"
                                class="w-full px-4 py-4 bg-gray-200 border border-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-black">
                            <button type="submit"
                                class="absolute right-8 top-1.5 text-white bg-red-600 rounded-full p-4 px-6 py-3 z-50">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>

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

        <div id="mobileMenu" class="md:hidden fixed top-0 bg-white rounded-b-xl shadow-lg p-10 w-full z-[999] hidden">
            <ul class="space-y-3 text-sm font-medium pt-10">
                <button id="closenavButton"
                    class="md:hidden text-red-600 absolute top-5 right-10 hover:scale-150 transition">
                    <i class="ri-close-line text-2xl"></i>
                </button>
                <li>
                    <a href="{{ route('Home') }}"
                        class="block px-4 py-2 rounded-full hover:bg-red-600 shadow hover:text-white {{ request()->routeIs('Home') ? 'bg-red-600 text-white ' : '' }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('Layanan') }}"
                        class="block px-4 py-2 rounded-full hover:bg-red-600 shadow hover:text-white {{ request()->routeIs('Layanan') ? 'bg-red-600 text-white' : '' }}">
                        Layanan
                    </a>
                </li>
                <li>
                    <a href="{{ route('Lokasi') }}"
                        class="block px-4 py-2 rounded-full hover:bg-red-600 shadow hover:text-white {{ request()->routeIs('Lokasi') ? 'bg-red-600 text-white' : '' }}">
                        Lokasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('Galeri') }}"
                        class="block px-4 py-2 rounded-full hover:bg-red-600 shadow hover:text-white {{ request()->routeIs('Galeri') ? 'bg-red-600 text-white' : '' }}">
                        Galeri
                    </a>
                </li>
                <li>
                    <a href="{{ route('Kontak') }}"
                        class="block px-4 py-2 rounded-full hover:bg-red-600 shadow hover:text-white {{ request()->routeIs('Kontak') ? 'bg-red-600 text-white' : '' }}">
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
            header.style.transform = "translateY(-9999%)";
        } else {
            header.style.transform = "translateY(0)";
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });

    // SCRIPT BARU UNTUK MENU MOBILE
    const hamburgerButton = document.getElementById("hamburgerButton");
    const closenavButton = document.getElementById("closenavButton");

    const mobileMenu = document.getElementById("mobileMenu");

    hamburgerButton?.addEventListener("click", () => {
        mobileMenu?.classList.toggle("hidden");
    });
    closenavButton?.addEventListener("click", () => {
        mobileMenu?.classList.toggle("hidden");
    });
</script>