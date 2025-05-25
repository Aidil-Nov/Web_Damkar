<footer class="bg-gray-900 text-white px-6 py-10">
  <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">


    <div>
      <h3 class="text-xl font-semibold mb-4" id="tentang">Tentang Kami</h3>
      <p class="text-sm leading-relaxed">
        Dinas Pemadam Kebakaran hadir untuk melindungi keselamatan dan properti masyarakat dari bahaya kebakaran dan
        bencana lainnya.
      </p>
    </div>


    <div>
      <h3 class="text-xl font-semibold mb-4">Tautan Cepat</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="{{ route('Home') }}" class="hover:underline">Beranda</a></li>
        <li><a href="{{ route('Layanan') }}" class="hover:underline">Layanan</a></li>
        <li><a href="{{ route('Lokasi') }}" class="hover:underline">Lokasi</a></li>
        <li><a href="{{ route('Galeri') }}" class="hover:underline">Galeri</a></li>
        <li><a href="{{ route('Kontak') }}" class="hover:underline">Kontak</a></li>
      </ul>
    </div>


    <div>
      <h3 class="text-xl font-semibold mb-4">Layanan</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="{{ route(name: 'Layanan') }}" class="hover:underline">Pemadaman Kebakaran</a></li>
        <li><a href="{{ route(name: 'Layanan') }}" class="hover:underline">Penyelamatan</a></li>
        <li><a href="{{ route(name: 'Layanan') }}" class="hover:underline">Pencegahan</a></li>
        <li><a href="{{ route(name: 'Layanan') }}" class="hover:underline">Pelatihan</a></li>
        <li><a href="{{ route(name: 'Layanan') }}" class="hover:underline">Inspeksi Keselamatan</a></li>
      </ul>
    </div>

    <div>
      <h3 class="text-xl font-semibold mb-4">Hubungi Kami</h3>
      <ul class="text-sm space-y-2">
        <li>Nomor Darurat: <span class="font-semibold"><a href="tel: +62 831-2607-5724"> +62 831-2607-5724</a> <B>Fikri
              Adriansyah</B></span></li>
        <li>Kantor: <a href="tel:+62 812-5672-0395">+62 812-5672-0395</a> <b>Mujahidah</b></li>
        <li>email: <a href="mailto:kurniakobarofficial@gmail.com" class="underline">@kurniakobarofficial</a></li>
        <li>Insta: <a href="https://www.instagram.com/kurniakobarofficial/" class="underline">@kurniakobarofficial</a>
        </li>
      </ul>
    </div>
  </div>


  <div class="mt-10 text-center text-sm text-white/80">
    &copy; 2025 Posko Damkar Kurnia Kobar. Hak Cipta Dilindungi.
  </div>
</footer>