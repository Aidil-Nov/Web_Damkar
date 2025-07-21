<footer class="bg-gray-900 text-white px-6 py-10">
  <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
    <!-- Tentang Kami Section -->
    <div>
      <h3 class="text-xl font-semibold mb-4" id="tentang">Tentang Kami</h3>
      <p class="text-sm leading-relaxed">
        Dinas Pemadam Kebakaran hadir untuk melindungi keselamatan dan properti masyarakat dari bahaya kebakaran dan
        bencana lainnya.
      </p>
    </div>

    <!-- Tautan Cepat Section -->
    <div>
      <h3 class="text-xl font-semibold mb-4">Tautan Cepat</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="{{ route('home') }}" class="hover:underline">Beranda</a></li>
        <li><a href="{{ route('berita') }}" class="hover:underline">Berita</a></li>
        <li><a href="{{ route('layanan') }}" class="hover:underline">Layanan</a></li>
        <li><a href="{{ route('lokasi') }}" class="hover:underline">Lokasi</a></li>
        <li><a href="{{ route('galeri') }}" class="hover:underline">Galeri</a></li>
        <li><a href="{{ route('kontak') }}" class="hover:underline">Kontak</a></li>
      </ul>
    </div>

    <!-- Layanan Section -->
    <div>
      <h3 class="text-xl font-semibold mb-4">Layanan</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="{{ route('layanan') }}" class="hover:underline">Pemadaman Kebakaran</a></li>
        <li><a href="{{ route('layanan') }}" class="hover:underline">Penyelamatan</a></li>
        <li><a href="{{ route('layanan') }}" class="hover:underline">Pencegahan</a></li>
        <li><a href="{{ route('layanan') }}" class="hover:underline">Pelatihan</a></li>
        <li><a href="{{ route('layanan') }}" class="hover:underline">Inspeksi Keselamatan</a></li>
      </ul>
    </div>

    <!-- Hubungi Kami Section -->
    <div>
      <h3 class="text-xl font-semibold mb-4">Hubungi Kami</h3>
      <ul class="text-sm space-y-2">
        <li>Nomor Darurat: <span class="font-semibold"><a href="tel:+6283126075724">+62 831-2607-5724</a> <b>Fikri
              Adriansyah</b></span></li>
        <li>Kantor: <a href="tel:+6281256720395">+62 812-5672-0395</a> <b>Mujahidah</b></li>
        <li>Email: <a href="mailto:kurniakobarofficial@gmail.com" class="underline">kurniakobarofficial@gmail.com</a></li>
        <li>Instagram: <a href="https://www.instagram.com/kurniakobarofficial/" class="underline">@kurniakobarofficial</a></li>
      </ul>
    </div>
  </div>

  <!-- Footer Bottom Text -->
  <div class="mt-10 text-center text-sm text-white/80">
    &copy; 2025 Posko Damkar Kurnia Kobar. Hak Cipta Dilindungi.
  </div>
</footer>
