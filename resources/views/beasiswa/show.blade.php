@extends('layouts.app')

@section('title', 'Informasi Beasiswa')

@section('content')
    <div class="container max-w-3xl px-4 py-10 mx-auto">
        <h1 class="mb-2 text-[40px] font-black text-center text-[#18181B]">
            {{ $beasiswa->title }}
        </h1>

        <div class="mb-4 text-[18px] font-medium text-[#52525B] text-center">
            <i aria-hidden="true" class="far fa-calendar"></i>
            {{ \Carbon\Carbon::parse($beasiswa->publish_date)->translatedFormat('d F Y') }} -Admin
        </div>

        <div class="my-6">
            <img src="{{ asset('storage/' . $beasiswa->image) }}" alt="Gambar Beasiswa"
                class="object-cover w-full h-auto mb-auto rounded-xl" />
        </div>

        <div
            class="mt-4 text-[#52525B] text-[18px] leading-relaxed text-justify font-medium mt-4 prose prose-slate max-w-none [&_ol]:list-decimal [&_ol]:pl-6 [&_li]:ml-2 [&_li]:mb-2 [&_li]:text-[18px] [&_h1]:text-[24px] [&_h2]:text-[22px] [&_h3]:text-[20px]">
            {!! $beasiswa->description !!}
        </div>
        <div class="flex mt-6 space-x-3">
            <!-- Facebook -->
            <a href="https://facebook.com/" target="_blank" aria-label="Facebook"
                class="flex items-center justify-center w-10 h-10 text-white transition duration-300 rounded-full bg-[#F75801] hover:scale-110 hover:rotate-3">
                <i class="fab fa-facebook-f"></i>
            </a>

            <!-- Instagram -->
            <a href="https://instagram.com/" target="_blank" aria-label="Instagram"
                class="flex items-center justify-center w-10 h-10 text-white transition duration-300 rounded-full bg-[#F75801] hover:scale-110 hover:rotate-3">
                <i class="fab fa-instagram"></i>
            </a>

            <!-- TikTok -->
            <a href="https://tiktok.com/" target="_blank" aria-label="TikTok"
                class="flex items-center justify-center w-10 h-10 text-white transition duration-300 bg-[#F75801] rounded-full hover:scale-110 hover:rotate-3">
                <i class="fab fa-tiktok"></i>
            </a>

            <!-- YouTube -->
            <a href="https://youtube.com/" target="_blank" aria-label="YouTube"
                class="w-10 h-10 flex items-center justify-center rounded-full text-white bg-[#F75801] hover:scale-110 hover:rotate-3 transition duration-300">
                <i class="fab fa-youtube"></i>
            </a>
        </div>

        <a href="{{ route('beasiswa.index') }}"
            class="inline-flex items-center mt-6 text-base font-semibold text-orange-600 transition-all duration-300 hover:text-[#18181B] group">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5 mr-2 transition-transform duration-300 group-hover:-translate-x-1" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span>Kembali</span>
        </a>
    </div>
@endsection
