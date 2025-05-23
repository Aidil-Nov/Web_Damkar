@extends('layouts.app')

@section('title', 'Galeri')

@section('Galeri')
    <section class="gallery" id="galeri">
        <div class="container">
            <div class="section-title">
                <h2>Galeri Foto</h2>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="/api/placeholder/300/300" alt="Tim Pemadam Kebakaran">
                    <div class="gallery-caption">Tim Pemadam dalam Aksi</div>
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/300/300" alt="Armada Mobil Pemadam">
                    <div class="gallery-caption">Armada Mobil Pemadam Terbaru</div>
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/300/300" alt="Latihan Penanggulangan Kebakaran">
                    <div class="gallery-caption">Latihan Rutin Tim</div>
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/300/300" alt="Edukasi Masyarakat">
                    <div class="gallery-caption">Program Edukasi Masyarakat</div>
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/300/300" alt="Personel Bersiaga">
                    <div class="gallery-caption">Personel Siap Siaga</div>
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/300/300" alt="Pemadaman Kebakaran">
                    <div class="gallery-caption">Pemadaman Kebakaran Gedung</div>
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/300/300" alt="Peralatan Pemadam">
                    <div class="gallery-caption">Peralatan Modern</div>
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/300/300" alt="Simulasi Evakuasi">
                    <div class="gallery-caption">Simulasi Evakuasi</div>
                </div>
            </div>
        </div>
    </section>
@endsection