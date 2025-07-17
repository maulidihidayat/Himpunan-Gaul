@extends('layouts.app')

@section('title', $item->title)

@section('content')
    <div class="container max-w-3xl px-4 py-6 mx-auto">
        <h1 class="mb-2 text-3xl font-bold text-center">{{ $item->title }}</h1>
        <p class="mb-4 text-[18px] font-medium text-center text-[#52525B]">
            <i aria-hidden="true" class="far fa-calendar"></i>
            {{ $item->publish_date->format('d M Y') }} - Admin 
            {{-- {{ $item->creator->name ?? 'Admin' }} --}}
        </p>

        @if ($item->image)
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full mb-6 rounded-lg">
        @endif

        <div class="leading-relaxed prose max-w-none text-medium">
            {!! $item->content !!}
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

        <a href="{{ route('news.index') }}" class="inline-block mt-6 text-orange-500 hover:underline">← Kembali ke daftar berita</a>
    </div>
@endsection
