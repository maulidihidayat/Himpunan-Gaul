@extends('layouts.app')

@section('title', 'Hmps Pendidikan Informatika')

@section('content')
    {{-- Main --}}
    <div class="relative flex items-center justify-around min-h-screen mx-auto -mt-10">
        <!-- Konten Teks dan Tombol -->
        <div class="relative z-10 space-x-2 text-left">
            <h1 class="text-6xl font-bold text-[#18181B] max-w-2xl">
                HMPS Pendidikan Informatika <span class="text-orange-500">Universitas Hamzanwadi</span>
            </h1>

            <!-- GIF -->
            <img src="images/gif.gif" alt="gif" class="absolute z-0 -mt-40 pointer-events-none left-12 w-80 h-80">

            <p class="mt-6 text-lg">Yuk cari tau lebih dalam tentang kami</p>

            <!-- Tombol -->
            <div class="mt-10 space-x-2">
                <a href="{{ route('filament.admin.auth.login') }}"
                    class="font-bold text-[16px] bg-[#F75801] text-white px-6 py-3 rounded-xl border-[2px] border-b-[4px] border-[#18181B] transition">
                    Masuk
                </a>
                <a href="#hallo"
                    class="font-bold text-[16px] bg-white text-[#18181B] px-6 py-3 rounded-xl border-[2px] border-b-[4px] border-[#18181B] transition">
                    Selengkapnya
                </a>
            </div>
        </div>

        <!-- Logo -->
        <img src="{{ asset('images/logo/Mainlogo.png') }}" alt="Logo" class="object-contain w-[300px] -mt-10"
            width="1000" height="1000">
    </div>


    </div>

    {{-- Support --}}
    <div id="section2" class="p-2 lg:p-5 mt-14 bg-orange-500 border-b-4 border-[#18181B]">
        <div class="flex flex-col items-center">
            <h1 class="text-[18px] text-white font-semibold text-center">
                Partnership kami:
            </h1>
            <div class="flex flex-wrap justify-center gap-4 mt-4">
                <img src="/images/logo/Mainlogo.png" alt="logoFmipa" width="50" height="50" width="1000"
                    height="1000" />
                <img src="/images/logo/logo.png" alt="logoFmipa" width="50" height="50" width="1000"
                    height="1000" />
                <img src="/images/logo/Mainlogo.png" alt="logoFmipa" width="50" height="50" width="1000"
                    height="1000" />
                <img src="/images/logo/Mainlogo.png" alt="logoFmipa" width="50" height="50" width="1000"
                    height="1000" />
            </div>
        </div>
    </div>
    @include('partials.hallo')
    {{-- Faq --}}
    @php
        $items = [
            [
                'question' => 'Apa sih Hmps Pendidikan Informatika itu?',
                'answer' =>
                    'HMPS Pendidikan Informatika Universitas Hamzanwadi adalah Himpunan Mahasiswa Program Studi...',
            ],
            [
                'question' => 'Gimana cara join Himpunan ini?',
                'answer' => '
                    <ul class="pl-5 space-y-1 list-disc">
                        <li>Tunggu Open Recruitment (Oprec) HMPS biasanya buka pendaftaran anggota baru setiap periode tertentu...</li>
                        <li>Isi Formulir Pendaftaran, biasanya Google Form...</li>
                        <li>Ikut Wawancara / Seleksi...</li>
                        <li>Pengumuman Anggota Baru...</li>
                        <li>Langsung Aktif & Berkontribusi...</li>
                    </ul>',
            ],
            [
                'question' => 'Apa persyaratan untuk menjadi anggota Himpunan?',
                'answer' =>
                    'Syarat Gabung HMPS Pendidikan Informatika Mahasiswa Aktif Wajib terdaftar sebagai mahasiswa aktif Prodi Pendidikan Informatika (minimal semester 2 ya, biar udah agak paham dunia kampus 😄).Punya Semangat & Komitmen Siap belajar, aktif, dan kontribusi buat kegiatan HMPS. Bukan yang cuma numpang nama doang ya! Bisa Kerja Sama Tim Karena di HMPS itu kerjanya bareng-bareng, jadi penting banget punya sikap yang asik dan bisa diajak kerja sama. Bersedia Mengikuti Seluruh Proses Oprec Mulai dari isi formulir, ikut wawancara, sampai pengumuman—semua harus diikuti. Niat & Punya Rasa Kepedulian Punya rasa peduli sama prodi sendiri dan pengin ikut berkontribusi bikin kampus jadi lebih hidup.',
            ],
            [
                'question' => 'Berapa biaya keanggotaan Himpunan ini?',
                'answer' => 'Gratis! Kami sudah terlalu malas untuk membuat sistem pembayaran.',
            ],
            [
                'question' => 'Apa benefit jadi anggota Himpunan ini?',
                'answer' =>
                    'Benefit gabung HMPS Pendidikan Informatika banyak banget, nih! Kamu bakal dapat pengalaman organisasi yang seru, nambah skill komunikasi dan teamwork, dapat akses pelatihan atau workshop eksklusif, serta peluang buat networking sama temen-temen seprodi sampai dosen. Selain itu, kamu juga bisa lebih percaya diri dan punya bekal berharga buat karier atau studi lanjut di masa depan. Pokoknya, join HMPS bikin kamu makin siap hadapi dunia nyata!',
            ],
            [
                'question' => 'Aktivitas apa saja yang dilakukan di Himpunan ini?',
                'answer' => '<li>
            Ngadain workshop, pelatihan coding, desain, video editing, atau
            hal-hal kekinian yang relate sama dunia Informatika.
          </li>
          <li>
            Undang pemateri keren buat bahas topik-topik seputar teknologi,
            pendidikan, dan pengembangan diri.
          </li>
          <li>
            Ada juga acara seru kayak upgrading, makrab (malam keakraban), atau
            game bareng biar makin solid dan akrab.
          </li>
          <li>
            Tiap divisi punya proker masing-masing, kayak divisi humas yang
            ngurus media sosial, atau divisi pendidikan yang ngatur pelatihan
            dan diskusi.
          </li>
          <li>
            Ikut turun ke masyarakat lewat pengabdian, bakti sosial, atau
            kampanye digital edukatif.
          </li>',
            ],
        ];
    @endphp
    @include('partials.faq', ['items' => $items])
    {{-- @include('partials.marquee') --}}
    @include('partials.yotube')
    @include('partials.tiktok')

    {{-- Navbar --}}

@endsection
