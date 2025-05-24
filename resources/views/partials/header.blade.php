<header x-data="{ open: false }" class="py-4">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between px-6">
        <!-- Logo -->
        <div>
            <img src="/assets/images/logo png.png" alt="Logo" class="h-12">
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:block bg-white rounded-full shadow px-6 py-3">
            <ul class="flex items-center space-x-1 font-medium text-sm">
                <li><a href="#" class="text-black px-4 py-2 rounded-full  hover:bg-red-700 hover:text-white">Beranda</a></li>
                <li>
                    <a href="#" class=" text-black px-4 py-2 rounded-full  hover:bg-red-700 hover:text-white">
                        Layanan
                    </a>
                </li>
                <li><a href="#" class="text-black px-4 py-2 rounded-full  hover:bg-red-700 hover:text-white">Lokasi</a></li>
                <li><a href="#" class="text-black px-4 py-2 rounded-full  hover:bg-red-700 hover:text-white">Galeri</a></li>
                <li><a href="#" class="text-black px-4 py-2 rounded-full  hover:bg-red-700 hover:text-white">Kontak</a></li>
            </ul>
        </nav>

        <!-- Right Side -->
        <div class="flex items-center space-x-4 px-4 py-2">
            <!-- Search Icon -->
            <button class="flex items-center space-x-4 bg-white">
                <i class="ri-search-line text-red-600 text-xl hover:scale-110 transition-transform"></i>
            </button>

            <!-- Hamburger -->
            <button @click="open = !open"
                class="w-12 h-12 bg-white rounded-full shadow flex items-center justify-center md:hidden">
                <i class="ri-menu-line text-red-600 text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition class="md:hidden bg-white rounded-xl shadow mx-4 mt-4 p-4">
        <ul class="space-y-2 font-medium text-sm">
            <li><a href="#" class="block hover:text-red-600">ホーム</a></li>
            <li>
                <a href="#" class="block bg-red-600 text-white px-4 py-2 rounded-full shadow hover:bg-red-700">
                    商品を探す
                </a>
            </li>
            <li><a href="#" class="block hover:text-red-600">マガジン</a></li>
            <li><a href="#" class="block hover:text-red-600">サポート</a></li>
            <li><a href="#" class="block hover:text-red-600">企業情報</a></li>
            <li><a href="#" class="block hover:text-red-600">お問い合わせ</a></li>
        </ul>
    </div>
</header>