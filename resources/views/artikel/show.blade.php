@extends('layouts.app')

@section('title', $artikel->title)

@section('content')
    <div class="container max-w-2xl py-6 mx-auto">
        <h1 class="mb-2 text-[40px] font-black text-center">{{ $artikel->title }}</h1>
        <p class="mb-4 text-[18px] font-medium text-[#52525B] text-center ">
            <i aria-hidden="true" class="far fa-calendar"></i>
            {{ $artikel->publish_date->format('d M Y') }} 
         {{-- -oleh$artikel->creator->name??'Admin' --}} 
        </p>

        @if ($artikel->image)
            <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}"
                class="w-full mb-auto rounded-xl h-[400px] object-cover">
        @endif

        <div class="mt-4 text-[#52525B] text-[18px] leading-relaxed font-medium mt-4 prose prose-slate max-w-none [&_ol]:list-decimal [&_ol]:pl-6 [&_li]:ml-2 [&_li]:mb-2 [&_li]:text-[18px] [&_h1]:text-[24px] [&_h2]:text-[22px] [&_h3]:text-[20px]">
                {!! $artikel->content !!}
            </div>
            
            <div class="items-center mx-auto mt-6 space-x-2">
            <a href="https://facebook.com/" target="_blank" 
            class="p-2 text-white transition bg-orange-500 rounded-full hover:rotate-6 hover:scale-110">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://facebook.com/" target="_blank"
            class="p-2 text-white transition bg-orange-500 rounded-full hover:rotate-6 hover:scale-110">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://facebook.com/" target="_blank"
            class="p-2 text-white transition bg-orange-500 rounded-full hover:rotate-6 hover:scale-110">
                <i class="fab fa-tiktok"></i>
            </a>
            <a href="https://facebook.com/" target="_blank"
            class="p-2 text-white transition bg-orange-500 rounded-full hover:rotate-6 hover:scale-110">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        
            <a href=" {{ route('artikel.index') }}" class="inline-block mt-6 text-orange-600 hover:underline">← Kembali ke
            daftar
            artikel</a>
        </div>
@endsection