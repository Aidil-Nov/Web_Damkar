<!-- layouts/app.blade.php -->
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap");
            @import url("https://fonts.googleapis.com/css2?family=  +Serif:ital,wght@0,300..900;1,300..900&display=swap");
            @import "tailwindcss";
            @source '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php';
            @source '../../storage/framework/views/*.php';
            @source '../**/*.blade.php';
            @source '../**/*.js';

            @theme {
                --font-display: "Montserrat", sans-serif;
                --font-sec: "Ancizar Serif", serif;
            }


            .btn-red {
                @apply bg-red-700 text-white px-6 py-3 rounded-full hover:bg-red-700 transition;
            }


            @keyframes scrollHorizontalKiri {
                0% {
                    transform: translateX(0%);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            @keyframes scrollHorizontalKanan {
                0% {
                    transform: translateX(-50%);
                }

                100% {
                    transform: translateX(0%);
                }
            }

            .scrolling-text-container {
                overflow: hidden;
                white-space: nowrap;
            }

            .scrolling-text-kanan {
                display: inline-block;
                animation: scrollHorizontalKanan 50s linear infinite;
            }

            .scrolling-text-kiri {
                display: inline-block;
                animation: scrollHorizontalKiri 50s linear infinite;
            }

            .scrolling-text:hover {
                animation-play-state: paused;
            }
        </style>
        @vite('resources/js/app.js')
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>

    <body class="font-display h-full bg-no-repeat bg-cover bg-center  ">
        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </body>
    <script>
        // JavaScript untuk mengontrol modal
        const searchButton = document.getElementById("searchButton");
        const closeButton = document.getElementById("closeButton");
        const searchModal = document.getElementById("searchModal");
        const body = document.body;

        // Fungsi untuk membuka modal
        function openModal() {
            searchModal.classList.remove("hidden");
            body.style.overflow = "hidden";
            body.style.position = "fixed";
            body.style.width = "100%";
        }

        // Fungsi untuk menutup modal
        function closeModal() {
            searchModal.classList.add("hidden");
            body.style.overflow = "";
            body.style.position = "";
            body.style.width = "";
        }

        // Buka modal saat tombol search diklik
        searchButton.addEventListener("click", openModal);

        // Tutup modal saat tombol close diklik
        closeButton.addEventListener("click", closeModal);

        // Tutup modal saat klik di luar area modal
        searchModal.addEventListener("click", (e) => {
            if (e.target === searchModal) {
                closeModal();
            }
        });

    </script>

</html>