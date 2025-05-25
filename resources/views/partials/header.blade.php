<header id="main-header" class="py-4 fixed z-[1000] w-full transition-all duration-500 ease-in-out top-0">
    <div class="absolute flex flex-wrap items-center justify-between px-6 w-full mt-3">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="/assets/images/logo png.png" alt="Logo" class="h-12">
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:block rounded-full px-6 py-3 fixed top-8 left-1/2 -translate-x-1/2 bg-white shadow">

            <ul class="flex items-center text-sm">
                <li><a href="{{ route('Home') }}"
                        class=" px-4 py-2 rounded-full  hover:bg-red-700 hover:text-white transition">Beranda</a></li>
                <li>
                    <a href="{{ route('Layanan') }}"
                        class="  px-4 py-2 rounded-full  hover:bg-red-700 hover:text-white transition">
                        Layanan
                    </a>
                </li>
                <li><a href="{{ route('Lokasi') }}"
                        class=" px-4 py-2 rounded-full  hover:bg-red-700 hover:text-white transition">Lokasi</a></li>
                <li><a href="{{ route('Galeri') }}"
                        class=" px-4 py-2 rounded-full  hover:bg-red-700 hover:text-white transition">Galeri</a></li>
                <li><a href="{{ route('Kontak') }}"
                        class=" px-4 py-2 rounded-full  hover:bg-red-700 hover:text-white transition">Kontak</a></li>
            </ul>
        </nav>

        <div class="flex items-center space-x-4 right-0 absolute">
            <button
                clas="flex items-center space-x-4 hover:scale-110 transition-transform rounded-full justify-center p-1 bg-white hover:text-white">
                <i class="ri-searcsh-line text-xl"></i>
                <input type="text" >
            </button>
            <button @click="open = !open"
                class="w-12 h-12 bg-white rounded-full shadow flex items-center justify-center md:hidden">
                <i class="ri-menu-line text-red-600 text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden bg-white rounded-xl shadow mx-4 mt-4 p-4" style="display: none;">
        <ul class="space-y-2 font-medium text-sm">
            <li><a href="#"
                    class="block text-black px-4 py-2 rounded-full  hover:bg-red-600 hover:text-white">Beranda</a>
            </li>
            <li>
                <a href="#" class="block text-black px-4 py-2 rounded-full  hover:bg-red-600 hover:text-white">
                    Layanan
                </a>
            </li>
            <li><a href="#"
                    class="block text-black px-4 py-2 rounded-full  hover:bg-red-600 hover:text-white">Lokasi</a></li>
            <li><a href="#"
                    class="block text-black px-4 py-2 rounded-full  hover:bg-red-600 hover:text-white">Galeri</a></li>
            <li><a href="#"
                    class="block text-black px-4 py-2 rounded-full  hover:bg-red-600 hover:text-white">Kontak</a></li>
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
</script>