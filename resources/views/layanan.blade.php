@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <section class="bg-white py-12 px-4 md:px-8 lg:px-16">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12 pt-12">
            <div class="md:row-span-2">
                <div class="bg-cover bg-center rounded-2xl h-full"
                    style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/images/1.jpeg');">
                    <p class="text-white text-3xl md:text-5xl p-4 md:p-8 font-sec">Tim kami terlatih untuk menangani berbagai jenis kebakaran.
                    </p>
                    <a href="{{ route('Home') }}">
                        <button class="btn-red ml-4 mb-4 md:ml-8">Hubungi Kami</button>
                    </a>
                </div>
            </div>
            <div>
                <div class="bg-cover bg-center rounded-2xl h-full"
                    style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),url('/assets/images/oto.jpg');">
                    <h1 class="text-white text-3xl md:text-4xl font-medium p-4 md:p-8">Garda Terdepan.
                    </h1>
                    <p class="text-white p-4 md:p-8">Saat api mengancam, kami datang cepat dan sigap. Dari rumah hingga hutan, tim kami terlatih untuk memadamkan api, menyelamatkan korban, dan memastikan keamanan area.
                    </p>
                </div>
            </div>
            <div class="md:col-start-2">
                <div class="bg-cover bg-center rounded-2xl h-full"
                    style="background-image:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/images/pembersihan saluran air.jpg');">
                    <h1 class="text-white text-3xl md:text-4xl font-medium p-4 md:p-8">Siap Melayani.
                    </h1>
                    <p class="text-white p-4 md:p-8">Lebih dari sekadar api, kami adalah penyelamat serbaguna. Mulai dari kecelakaan lalu lintas, orang terjebak di ketinggian atau air, hingga penanganan bahan berbahaya, kami selalu siap membantu dan mengevakuasi Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection