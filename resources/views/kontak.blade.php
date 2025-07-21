@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <section class="bg-white py-12 px-4 md:px-8 lg:px-16" id="kontak">

        <div class="mb-12 pt-12">
            <h2 class="text-5xl font-sec inline-block pb-2 relative">
                Kontak Kami
            </h2>
        </div>

        <div class="max-w-7xl mx-auto flex flex-wrap px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
                <div class="space-y-4 w-full">
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-gray-800">Informasi Kontak</h3>
                        <p class="flex items-center gap-2"><span><i class="ri-map-pin-line"></i></span> Jl. Prof. M. Yamin -
                            Jl. Kurnia</p>
                        <p class="flex items-center gap-2"><span><i class="ri-alarm-warning-line"></i></span> Nomor Darurat:
                            <a href="tel:+6283126075724">+62 831-2607-5724</a> <B>Fikri Adriansyah</B>
                        </p>
                        <p class="flex items-center gap-2"><span><i class="ri-customer-service-2-line"></i></span> Kantor:
                            <a href="tel:+6281256720395">+62 812-5672-0395</a> <b>Mujahidah</b>
                        </p>
                        <p class="flex items-center gap-2"><span><i class="ri-instagram-line"></i></span>
                            <a href="https://www.instagram.com/kurniakobarofficial/">@kurniakobarofficial</a>
                        </p>
                    </div>
                </div>

                <div class="w-full">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Kirim Pesan</h3>

                        <form method="POST" action="{{ route('kontak.store') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="block mb-1 font-medium">Nama Lengkap</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    placeholder="Masukan Nama" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block mb-1 font-medium">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    placeholder="Masukan Email" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="block mb-1 font-medium">Nomor Telepon (opsional)</label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                    placeholder="Masukan Nomor Telepon"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                            </div>

                            <div class="mb-4">
                                <label for="message" class="block mb-1 font-medium">Pesan</label>
                                <textarea id="message" name="message" rows="4" placeholder="Masukan Pesan Anda" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">{{ old('message') }}</textarea>
                            </div>

                            <button type="submit"
                                class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-700 transition duration-300">
                                Kirim Pesan
                            </button>

                            @if(session('success'))
                                <p class="font-bold text-green-600 mt-4">{{ session('success') }}</p>
                            @endif

                            @if($errors->any())
                                <ul class="text-red-600 mt-2">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection