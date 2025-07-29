@extends('layouts.app')

@section('title', 'Hmps Pendidikan Informatika')

@section('content')
    <div
        class="relative grid items-center min-h-screen grid-cols-1 gap-10 px-6 py-10 md:grid-cols-2 md:gap-20 md:px-32 lg:px-20">

        <!-- Logo -->
        <div class="flex justify-center order-1 md:justify-end md:order-2">
            <img src="{{ asset('images/logo/Mainlogo.png') }}" alt="Logo" class="object-contain w-56 md:w-72 lg:w-[320px]"
                width="1000" height="1000">
        </div>

        <!-- Teks -->
        <div class="relative z-10 justify-center order-2 max-w-xl mx-auto text-center md:text-left md:order-1 md:px-4">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#18181B] leading-snug">
                HMPS Pendidikan Informatika <span class="text-orange-500">Universitas Hamzanwadi</span>
            </h1>

            <!-- GIF (hanya desktop) -->
            <img src="images/gif.gif" alt="gif" class="absolute left-0 z-0 -mt-40 pointer-events-none w-80 h-80">

            <p class="mt-6 text-base text-gray-700 md:text-lg">Yuk cari tau lebih dalam tentang kami</p>

            <!-- Tombol -->
            <div class="flex flex-wrap justify-center gap-4 mt-8 md:justify-start">
                <a href="{{ route('filament.admin.auth.login') }}"
                    class="font-bold text-base md:text-lg bg-[#F75801] text-white px-6 py-3 rounded-xl border-2 border-b-4 border-[#18181B] shadow-md hover:bg-orange-600 transition">
                    Masuk
                </a>
                <a href="#hallo"
                    class="font-bold text-base md:text-lg bg-white text-[#18181B] px-6 py-3 rounded-xl border-2 border-b-4 border-[#18181B] shadow-md hover:bg-gray-100 transition">
                    Selengkapnya
                </a>
            </div>
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
    <section class="container px-3 py-10 mx-auto mt-10 md:px-10 md:mt-20 md:-mt-2">
        <img src="/images/emote/Emoticon Vibes (2).svg" alt="emote"
            class="absolute z-10 hidden w-12 h-12 mb-20 right-1/5">
        <img src="/images/emote/tail.svg" alt="emote" class="absolute z-10 hidden w-20 h-20 mb-2 md:block ml-80">
        <h2 class="mb-6 text-3xl font-bold text-[#18181B]">
            Highlight <span class="text-orange-500">Pencapaian</span>
        </h2>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($highlightPencapaians as $pencapaian)
                <a href="{{ route('pencapaian.show', $pencapaian->slug) }}"
                    class="overflow-hidden transition-all duration-300 bg-white border-[#18181B] border-3 rounded-3xl hover:shadow-lg group-2 p-4 hover:bg-orange-50 max-w-md hover:shadow-md hover:border-b-7 hover:-translate-y-1">
                    <img src="{{ asset('storage/' . $pencapaian->image) }}" alt="Thumbnail"
                        class="object-cover w-full h-40 mb-2 rounded-xl" />

                    <h3 class="text-lg font-bold text-[#18181B]">
                        {{ $pencapaian->title }}
                    </h3>

                    <p class="mt-2 text-sm text-[#52525B]">
                        <i class="mr-1 far fa-calendar"></i>
                        {{ $pencapaian->publish_date->format('d M Y') }}
                    </p>
                </a>
            @endforeach
        </div>

        <div class="mt-6 text-right">
            <a href="{{ route('pencapaian.index') }}" class="font-medium text-orange-500 hover:underline">
                Selengkapnya →
            </a>
        </div>
    </section>
    {{-- Pencapaian --}}
    <section class="container px-3 py-10 mx-auto md:px-10">
        <img src="/images/emote/Emoticon Vibes (2).svg" alt="emote"
            class="absolute z-10 hidden w-12 h-12 mb-20 right-1/5 mt-96 md:block">
        {{-- <img src="/images/emote/tail.svg" alt="emote" class="absolute z-10 w-20 h-20 mb-2 ml-80"> --}}
        <h2 class="mb-6 text-3xl font-bold text-[#18181B]">
            Highlight <span class="text-orange-500">Artikel</span>
        </h2>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($highlightArtikels as $artikel)
                <a href="{{ route('artikel.show', $artikel->slug) }}"
                    class="overflow-hidden transition-all duration-300 bg-white border-[#18181B] border-3 rounded-3xl hover:shadow-lg group-2 p-4 hover:bg-orange-50 max-w-md hover:shadow-md hover:border-b-7 hover:-translate-y-1">
                    <img src="{{ asset('storage/' . $artikel->image) }}" alt="Thumbnail"
                        class="object-cover w-full h-40 mb-2 rounded-xl" />

                    <h3 class="text-lg font-bold text-[#18181B]">
                        {{ $artikel->title }}
                    </h3>

                    <p class="mt-2 text-sm text-[#52525B]">
                        <i class="mr-1 far fa-calendar"></i>
                        {{ $artikel->publish_date->format('d M Y') }}
                    </p>
                </a>
            @endforeach
        </div>

        <div class="mt-6 text-right">
            <a href="{{ route('artikel.index') }}" class="font-medium text-orange-500 hover:underline">
                Selengkapnya →
            </a>
        </div>
    </section>


    {{-- Beasiswa start --}}
    <section class="container px-3 py-10 mx-auto md:px-10 ">

        <h2 class="mb-6 text-3xl font-bold text-[#18181B]">
            Highlight Info<span class="text-orange-500">Beasiswa</span>
        </h2>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($highlightBeasiswas as $beasiswa)
                <a href="{{ route('beasiswa.show', $beasiswa->slug) }}"
                    class="overflow-hidden transition-all duration-300 bg-white border-[#18181B] border-3 rounded-3xl hover:shadow-lg group-2 p-4 hover:bg-orange-50 max-w-md hover:shadow-md hover:border-b-7 hover:-translate-y-1">
                    <img src="{{ asset('storage/' . $beasiswa->image) }}" alt="Thumbnail"
                        class="object-cover w-full h-40 mb-2 rounded-xl" />

                    <h3 class="text-lg font-bold text-[#18181B]">
                        {{ $beasiswa->title }}
                    </h3>

                    <p class="mt-2 text-sm text-[#52525B]">
                        <i class="mr-1 far fa-calendar"></i>
                        {{ $beasiswa->publish_date->format('d M Y') }}
                    </p>
                </a>
            @endforeach
        </div>

        <div class="mt-6 text-right">
            <a href="{{ route('beasiswa.index') }}" class="font-medium text-orange-500 hover:underline">
                Selengkapnya →
            </a>
        </div>
    </section>

    {{-- Saran & Komentar Start --}}
    <section class="container relative px-3 py-10 mx-auto mt-20 mb-20 md:mt-32 md:px-10">
        {{-- Emote Kiri Atas --}}
        <img src="/images/emote/Emoticon Vibes-2.svg" alt="emote"
            class="absolute top-0 z-10 hidden w-12 h-12 left-20 md:block md:w-20 md:h-20">

        <h2 class="mb-10 text-[26px] md:text-[40px] font-black text-[#18181B] text-center">
            Feedback dan pesan dari sahabat <span class="text-orange-500">Informatics!</span>
        </h2>

        @if ($recentFeedbacks->count())
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($recentFeedbacks as $feedback)
                    {{-- Emote Kanan Tengah --}}
                    <img src="/images/emote/star.svg" alt="emote"
                        class="absolute right-5 top-[500px] z-10 hidden md:block w-12 h-12">

                    <div class="transition bg-red-50 border-3 border-[#18181B] rounded-3xl hover:shadow-md">
                        <p class="text-[18px] font-medium text-[#52525B] line-clamp-4 mb-8 p-6">
                            "{{ $feedback->message }}"
                        </p>

                        <hr class="border-t-3 border-[#18181B] mb-2" />

                        <p class="text-[18px] text-[#18181B] font-medium mb-2 flex items-center gap-4 px-6">
                            <img src="/images/elements/Avatar.svg" alt="" class="hidden md:block">
                            <strong>{{ $feedback->sender_name }}</strong>
                        </p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-600">Belum ada feedback masuk.</p>
        @endif
    </section>

    {{-- Include FAQ --}}
    @include('partials.faq', ['items' => $items])

    {{-- Include YouTube dan TikTok --}}
    @include('partials.yotube')
    @include('partials.tiktok')



@endsection
