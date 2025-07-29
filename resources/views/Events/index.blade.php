@extends('layouts.app')

@section('title', 'Safari Ramadhan')

@section('content')
    <section class="max-w-7xl mx-auto text-[#18181B] p-4 md:px-10">

        {{-- HERO SECTION --}}
        <div class="relative w-full h-[420px] md:h-[500px] overflow-hidden rounded-b-3xl shadow-lg mb-16">
            <img src="/images/events/hero-safari.jpg" alt="Hero Safari Ramadhan" class="object-cover w-full h-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center bg-black/40">
                <span
                    class="inline-block px-4 py-1 mb-4 text-sm font-semibold text-orange-200 rounded-full shadow bg-orange-500/80">
                    Program Unggulan HMPS PI
                </span>
                <h1 class="text-4xl font-bold leading-tight text-white md:text-5xl">
                    Safari <span class="text-orange-300">Ramadhan</span>
                </h1>
                <p class="max-w-2xl mt-3 text-lg text-white/90 md:text-xl">
                    Mengabdi bersama masyarakat desa selama bulan suci Ramadhan melalui kegiatan spiritual, edukatif, dan
                    sosial.
                </p>
            </div>
        </div>

        {{-- TENTANG --}}
        <div class="px-6 py-10 md:px-10 bg-[#FFF7F0] border-3 border-[#18181B] rounded-3xl mb-20">
            <h2 class="mb-4 text-2xl font-bold">Apa itu Safari Ramadhan?</h2>
            <p class="text-[17px] leading-relaxed text-justify text-[#52525B]">
                Safari Ramadhan adalah kegiatan tahunan dari HMPS Pendidikan Informatika Universitas Hamzanwadi yang
                dilaksanakan di bulan Ramadhan. Selama kegiatan ini, mahasiswa turun langsung ke desa untuk menjalankan
                aktivitas positif seperti pesantren kilat, dakwah, perlombaan Islami, serta bakti sosial.
            </p>
        </div>

        {{-- TUJUAN & GAMBAR --}}
        <div class="grid items-center grid-cols-1 gap-10 px-2 mb-24 md:grid-cols-2 md:px-0">
            <div>
                <h2 class="mb-4 text-2xl font-bold">Tujuan Kegiatan</h2>
                <ul class="list-disc list-inside space-y-3 text-[#52525B] text-[17px]">
                    <li>Menanamkan nilai religius dan sosial kepada mahasiswa.</li>
                    <li>Menumbuhkan rasa kepedulian terhadap masyarakat.</li>
                    <li>Menjadi sarana dakwah dan edukasi Islami.</li>
                    <li>Meningkatkan kolaborasi antara mahasiswa dan warga desa.</li>
                </ul>
            </div>
            <div class="flex justify-center">
                <img src="/images/events/safari-ilustrasi.svg" alt="Ilustrasi Safari Ramadhan"
                    class="max-h-[300px] rounded-2xl shadow-lg">
            </div>
        </div>

        {{-- RANGKAIAN --}}
        <div class="px-2 mb-24 md:px-0">
            <h2 class="mb-6 text-[28px] md:text-[40px] font-bold text-center tetx-[#18181B]">Rangkaian Kegiatan</h2>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach (['Pesantren Kilat untuk anak-anak dan remaja', 'Lomba Islami: Ceramah, Kaligrafi, Adzan', 'Pembagian Takjil dan Buka Puasa Bersama', 'Gotong Royong & Kebersihan Lingkungan', 'Kajian Tarawih Keliling & Ceramah Umum', 'Ngabuburit Edukatif & Permainan Islami'] as $item)
                    <div
                        class="bg-white border-3 border-[#18181B] p-6 rounded-3xl  hover:border-b-7 transition-all cursor-pointer hover:bg-red-100 duration-300">
                        <p class="font-medium text-[#18181B] text-[16.5px] leading-relaxed">
                            • {{ $item }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- DOKUMENTASI --}}
        <div class="px-6 md:px-0">
            <h2 class="mb-6 text-[28px] md:text-[40px] font-bold text-center text-[#18181B]">Dokumentasi</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                @foreach (['safari1.jpg', 'safari2.jpg', 'safari3.jpg'] as $doc)
                    <div class="overflow-hidden transition duration-300 shadow rounded-2xl hover:scale-105">
                        <img src="/images/events/{{ $doc }}" alt="Dokumentasi {{ $doc }}"
                            class="object-cover w-full h-64">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
