@extends('layouts.app')

@section('title', 'Voice of Confidence')

@section('content')
    <section class="max-w-7xl mx-auto text-[#18181B] p-4 md:px-10">

        {{-- HERO IMAGE --}}
        <div class="relative w-full h-[420px] md:h-[500px] overflow-hidden rounded-b-3xl shadow-lg mb-16">
            <img src="/images/events/hero-voice.jpg" alt="Voice of Confidence" class="object-cover w-full h-full">
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center bg-black/40">
                <span
                    class="inline-block px-4 py-1 mb-4 text-sm font-semibold text-orange-200 rounded-full shadow bg-orange-500/80">
                    Pelatihan Public Speaking
                </span>
                <h1 class="text-4xl font-bold leading-tight text-white md:text-5xl">
                    Voice of <span class="text-orange-300">Confidence</span>
                </h1>
                <p class="max-w-2xl mt-3 text-lg text-white/90 md:text-xl">
                    Bangun rasa percaya diri dan kuasai panggung lewat pelatihan public speaking dari HMPS Pendidikan
                    Informatika.
                </p>
            </div>
        </div>

        {{-- PENJELASAN --}}
        <div class="px-6 py-10 md:px-10 bg-[#FFF7ED] border border-[#FDBA74] rounded-3xl shadow-md mb-20">
            <h2 class="mb-4 text-2xl font-bold">Apa itu Voice of Confidence?</h2>
            <p class="text-[17px] leading-relaxed text-justify text-[#52525B]">
                <strong>Voice of Confidence</strong> adalah kegiatan pengembangan diri yang diselenggarakan oleh HMPS
                Pendidikan Informatika Universitas Hamzanwadi, bertujuan untuk meningkatkan kemampuan berbicara di depan
                umum (public speaking) mahasiswa.
            </p>
            <p class="mt-4 text-[17px] text-[#52525B]">
                Dalam kegiatan ini, peserta akan mendapatkan pelatihan dari pemateri berpengalaman, praktik berbicara
                langsung di hadapan audiens, dan tips membangun rasa percaya diri saat tampil di publik.
            </p>
        </div>

        {{-- MATERI KEGIATAN --}}
        <div class="px-6 mb-24 md:px-0">
            <h2 class="mb-6 text-[28px] md:text-[40px] text-[#18181B] font-bold text-center">Materi & Kegiatan</h2>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach (['Teknik membuka pidato dengan percaya diri', 'Mengatasi gugup dan demam panggung', 'Penggunaan intonasi dan gestur tubuh', 'Public speaking interaktif', 'Berbicara di depan kamera (digital speaking)', 'Simulasi presentasi kelompok'] as $topic)
                    <div
                        class="bg-white border-3 border-[#18181B] p-6 rounded-3xl  hover:border-b-7 transition-all cursor-pointer hover:bg-orange-100 duration-300">
                        <p class="font-medium text-[#18181B] text-[16.5px] leading-relaxed">
                            • {{ $topic }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- DOKUMENTASI --}}
        <div class="px-2 md:px-0">
            <h2 class="mb-6 text-[28px] md:text-[40px] text-[#18181B] font-bold text-center">Dokumentasi Kegiatan</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                @foreach (['voice1.jpg', 'voice2.jpg', 'voice3.jpg'] as $doc)
                    <div class="overflow-hidden transition duration-300 shadow rounded-2xl hover:scale-105">
                        <img src="/images/events/{{ $doc }}" alt="Voice of Confidence {{ $loop->index + 1 }}"
                            class="object-cover w-full h-64">
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
