@extends('layouts.app')

@section('title', 'Informatic Sport Day')

@section('content')
    <section class="max-w-7xl mx-auto text-[#18181B]">

        {{-- HERO IMAGE --}}
        <div class="relative w-full h-[420px] md:h-[500px] overflow-hidden rounded-b-3xl shadow-lg mb-16">
            <img src="/images/events/hero-sportday.jpg" alt="Informatic Sport Day" class="object-cover w-full h-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center bg-black/40">
                <span
                    class="inline-block px-4 py-1 mb-4 text-sm font-semibold text-orange-200 rounded-full shadow bg-orange-500/80">
                    Kegiatan Olahraga HMPS PI
                </span>
                <h1 class="text-4xl font-bold leading-tight text-white md:text-5xl">
                    Informatic <span class="text-orange-300">Sport Day</span>
                </h1>
                <p class="max-w-2xl mt-3 text-lg text-white/90 md:text-xl">
                    Meriahkan semangat sportifitas antar mahasiswa Pendidikan Informatika dan Himpunan Keilmuan lainnya.
                </p>
            </div>
        </div>

        {{-- PENJELASAN --}}
        <div class="px-6 py-10 md:px-10 bg-[#F0F9FF] border-3 border-[#18181B] rounded-3xl shadow-md mb-20 ">
            <h2 class="mb-4 text-2xl font-bold">Apa itu Informatic Sport Day?</h2>
            <p class="text-[17px] leading-relaxed text-justify text-[#52525B]">
                Informatic Sport Day adalah kegiatan tahunan bidang olahraga yang diselenggarakan oleh HMPS Pendidikan
                Informatika Universitas Hamzanwadi. Kegiatan ini bertujuan mempererat solidaritas, kekompakan, dan semangat
                kompetitif yang sehat antar mahasiswa.
            </p>
            <p class="mt-4 text-[17px] text-[#52525B]">
                Acara ini melibatkan mahasiswa dari Program Studi Pendidikan Informatika serta Himpunan Keilmuan lainnya
                dengan berbagai pertandingan olahraga yang seru dan mendidik.
            </p>
        </div>

        {{-- CABANG OLAHRAGA --}}
        <div class="px-6 mb-24 md:px-0">
            <h2 class="mb-6 text-[40px] text-[#18181B] font-bold text-center">Cabang Olahraga yang Dipertandingkan</h2>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach (['Futsal Putra & Putri', 'Badminton Ganda', 'Tenis Meja', 'Lari Estafet', 'E-Sport (Mobile Legends)', 'Catur & Game Strategi'] as $sport)
                    <div
                        class="bg-white border-3 border-[#18181B] p-6 rounded-3xl  hover:border-b-7 transition-all cursor-pointer hover:bg-red-100 duration-300 ">
                        <p class="font-medium text-[#18181B] text-[16.5px] leading-relaxed">
                            • {{ $sport }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- DOKUMENTASI --}}
        <div class="px-6 md:px-0">
            <h2 class="mb-6 text-[40px] text-[18181B] font-bold text-center">Dokumentasi Kegiatan</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                @foreach (['sport1.jpg', 'sport2.jpg', 'sport3.jpg'] as $doc)
                    <div class="overflow-hidden transition duration-300 shadow rounded-2xl hover:scale-105">
                        <img src="/images/events/{{ $doc }}" alt="Dokumentasi {{ $doc }}"
                            class="object-cover w-full h-64">
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
