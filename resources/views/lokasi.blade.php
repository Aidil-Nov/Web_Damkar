@extends('layouts.app')

@section('title', 'Lokasi')

@section('content')

    <section class="bg-white py-12 px-4 md:px-8 lg:px-16">

    <div class=" mb-12 pt-12">     
            <h2 class="text-5xl font-sec inline-block pb-2 relative ">
                Lokasi Kami
            </h2>
        </div>

        <div class="grid">

            <div class="">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.815889811015!2d109.30541527477625!3d-0.06324289993613172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d595d4aa6b035%3A0xa745174c88c2d74f!2sJl.%20Kurnia%2C%20Kota%20Baru%2C%20Kec.%20Pontianak%20Sel.%2C%20Kota%20Pontianak%2C%20Kalimantan%20Barat%2078115!5e0!3m2!1sid!2sid!4v1748078560215!5m2!1sid!2sid"
                    class="w-full h-64" style="border:0;" allowfullscreen="true" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="rounded-md shadow-md overflow-hidden">
                    <div class="h-48 bg-cover bg-center">
                        <div class="p-6 space-y-2">
                            <h3 class="text-xl font-semibold">Pos Pemadam Pusat</h3>
                            <p class="">Pos utama dengan peralatan lengkap dan personel siaga 24 jam.</p>
                            <div class="text-sm  space-y-1">
                                <p><span class="mr-2">📍</span> Jl. Prof. M. Yamin - Jl. Kurnia</p>
                                <p><span class="mr-2">📞</span>(+62) 81254475004</p>
                                <p><span class="mr-2">⏰</span>Beroperasi 24 Jam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>

@endsection