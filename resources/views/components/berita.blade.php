<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Judul -->
        <div class=" mb-12">     
            <h2 class="text-5xl font-sec inline-block pb-2 relative ">
                Berita Terbaru
            </h2>
        </div>

        <!-- Grid Layanan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Kartu Layanan 1 -->
            <a href="{{ route('Layanan') }}" ><div class="bg-white shadow-md hover:shadow-xl transition rounded-lg overflow-hidden">
                <div class="h-48 bg-cover bg-center" style="background-image: url('/assets/images/nyiram.jpg');"></div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Pemadaman di Karhutla</h3>
                    <p class="text-gray-700">18 Febuari 2024.</p>
                </div>
            </div>  </a>
            

            <!-- Kartu Layanan 2 -->
               <a href="{{ route('Layanan') }}" > <div class="bg-white shadow-md hover:shadow-xl transition rounded-lg overflow-hidden">
                <div class="h-48 bg-cover bg-center" style="background-image: url('/assets/images/rescue sarang tawon 2.jpg');"></div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold  mb-2">Rescue Sarang Tawon</h3>
                    <p class="text-gray-700">23 Desember 2024.</p>
                </div>
            </div> </a>

            <!-- Kartu Layanan 3 -->
             <a href="{{ route('Layanan') }}" > 
            <div class="bg-white shadow-md hover:shadow-xl transition rounded-lg overflow-hidden">
                <div class="h-48 bg-cover bg-center" style="background-image: url('/assets/images/pembersihan saluran air 3.jpg');"></div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold  mb-2">Pembersihan Saluran Air</h3>
                    <p class="text-gray-700">8 Desember 2024.</p>
                </div>
            </div></a>

        </div>
    </div>
</section>