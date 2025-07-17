@extends('layouts.app')

@section('title', $item->title)

@section('content')
    <div class="container max-w-3xl px-4 py-6 mx-auto">
        <div class="p-6">
            <h1 class="mb-2 text-[40px] font-bold text-center">{{ $item->title }}</h1>
            <p class="mb-4 text-[18px] text-center text-gray-500">
                <i aria-hidden="true" class="far fa-calendar"></i>
                {{ \Carbon\Carbon::parse($item->publish_date)->translatedFormat('d M Y') }} - Admin 
                
            </p>

            @if ($item->image)
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                    class="w-full h-auto mb-6 rounded shadow">
            @endif

            <div
                class="prose mt-4 text-[#52525B] leading-relaxed text-[18px] font-normal max-w-none
    [&_ol]:list-decimal [&_ol]:pl-6 [&_ul]:pl-6
    [&_li]:ml-2 [&_li]:mb-2 [&_li]:text-[18px]
    [&_h1]:text-[24px] [&_h2]:text-[22px] [&_h3]:text-[20px]
    [&_strong]:font-bold [&_b]:font-bold [&_em]:italic">
                {!! $item->description !!}
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
        </div>
        <a href="{{ route('pencapaian.index') }}" class="inline-block mb-4 text-sm text-orange-500 hover:underline">
            ← Kembali
        </a>
    </div>
@endsection
