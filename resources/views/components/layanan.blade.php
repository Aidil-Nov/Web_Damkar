<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Judul -->
        <div class="text-center mb-12">     
            <h2 class="text-3xl font-bold text-blue-900 inline-block pb-2 relative ">
                Layanan
                <span class="absolute bottom-0 left-1/4 w-1/2 h-1 bg-red-600 transition"></span>
            </h2>
        </div>

        <!-- Grid Layanan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Kartu Layanan 1 -->
            <a href="{{ route('Layanan') }}" ><div class="bg-white shadow-md hover:shadow-xl transition rounded-lg overflow-hidden">
                <div class="h-48 bg-cover bg-center" style="background-image: url('/assets/images/1.jpeg');"></div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-red-700 mb-2">Pemadaman Kebakaran</h3>
                    <p class="text-gray-700">Tim kami terlatih untuk menangani berbagai jenis kebakaran dengan respons yang 
                        cepat untuk meminimalisir kerugian.</p>
                </div>
            </div>  </a>
            

            <!-- Kartu Layanan 2 -->
               <a href="{{ route('Layanan') }}" > <div class="bg-white shadow-md hover:shadow-xl transition rounded-lg overflow-hidden">
                <div class="h-48 bg-cover bg-center" style="background-image: url('/assets/images/anggota.jpg');"></div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-red-700 mb-2">Penyelamatan dan Evakuasi</h3>
                    <p class="text-gray-700">Layanan penyelamatan dan evakuasi untuk situasi darurat seperti bencana
                        alam, kecelakaan, atau kondisi berbahaya lainnya.</p>
                </div>
            </div> </a>

            <!-- Kartu Layanan 3 -->
             <a href="{{ route('Layanan') }}" > 
            <div class="bg-white shadow-md hover:shadow-xl transition rounded-lg overflow-hidden">
                <div class="h-48 bg-cover bg-center" style="background-image: url('/assets/images/pembersihan saluran air 3.jpg');"></div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-red-700 mb-2">Pencegahan dan Edukasi</h3>
                    <p class="text-gray-700">Program-program edukasi dan pelatihan untuk masyarakat tentang cara
                        mencegah kebakaran dan penanganan kondisi darurat.</p>
                </div>
            </div></a>

        </div>
    </div>
</section>