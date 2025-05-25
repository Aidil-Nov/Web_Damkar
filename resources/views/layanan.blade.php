@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <section class="bg-white py-12 px-4 md:px-8 lg:px-16">

        <div class="h-full grid grid-cols-2 grid-rows-2 gap-8 mb-12 pt-12">
            <div class="row-span-2">
                <div class="bg-cover bg-center rounded-2xl h-full"
                    style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/images/1.jpeg');">
                    <p class="text-white text-5xl p-8 font-sec">Tim kami terlatih untuk menangani berbagai jenis kebakaran.
                    </p>

                    <button class="btn-red ml-8">Kaka Anjing?</button>
                </div>
            </div>
            <div>
                <div class="bg-cover bg-center rounded-2xl h-full"
                    style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),url('/assets/images/anggota.jpg');">
                    <h1 class="text-white text-4xl font-medium p-8 w-2 ">Garda Terdepan.
                    </h1>
                    <p class="text-white p-8 w-10/12">Kaka Garda Paling depan yang laen jage jak dari belakang hahahahahaha.
                    </p>
                </div>
            </div>
            <div class="col-start-2">
                <div class="bg-cover bg-center rounded-2xl h-full"
                    style="background-image:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/images/1.jpeg');">
                    <h1 class="text-white text-4xl font-medium p-8 w-2 ">Judul Cik.
                    </h1>
                    <p class="text-white p-8 w-10/12">Kaka Garda Paling depan yang laen jage jak dari belakang hahahahahaha.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection