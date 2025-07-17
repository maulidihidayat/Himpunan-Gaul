@extends('layouts.app')

@section('title', 'Daftar Artikel')
@vite(['resources/css/app.css', 'resources/js/app.js'])


@section('content')
    <div class="container px-4 py-10 mx-auto mt-4">
        <h1 class="mb-10 text-[40px] font-black text-left text-[#18181B]">Artikel</h1>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
            {{-- Kolom Kiri: Artikel Utama --}}
            <div class="space-y-8 md:col-span-3">
                @if ($artikels->count())
                    <div class="grid gap-4 md:grid-cols-2">
                        @foreach ($artikels as $artikel)
                            <div
                                class="overflow-hidden transition-all duration-300 bg-white border-[#18181B] border-3 rounded-3xl hover:shadow-lg group-2 p-4 hover:bg-orange-50 max-w-md hover:shadow-md hover:border-b-7 hover:-translate-y-1">
                                <a href="{{ route('artikel.show', $artikel->slug) }}">
                                    {{-- Gambar --}}
                                    @if ($artikel->image)
                                        <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}"
                                            class="object-cover w-full h-48 transition-transform duration-300 group-hover:scale-105 rounded-xl">
                                    @endif

                                    {{-- Konten --}}
                                    <div class="mt-4">
                                        <h2 class="mb-2 text-[20px] font-bold text-[#18181B]">{{ $artikel->title }}</h2>
                                        <p class="text-bold text-[#52525B] mt-4 text-[16px]">
                                            <i aria-hidden="true" class="far fa-calendar"></i>
                                            {{ $artikel->publish_date->format('d M Y') }}
                                            {{-- — oleh{{ $artikel->creator->name ?? 'Admin' }} --}}
                                        </p>
                                        {{-- <p class="mb-4 text-sm leading-relaxed text-gray-600">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($artikel->content), 100) }}
                                    </p> --}}
                                        {{-- <a href="{{ route('artikel.show', $artikel->slug) }}"
                                        {{-- class="inline-block text-sm font-medium text-blue-600 transition hover:text-blue-800" --}}
                                        {{-- >
                                        Baca Selengkapnya →
                                    </a> --}}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-10">
                        {{ $artikels->links() }}
                    </div>
                @else
                    <p class="text-center text-gray-500">Belum ada artikel yang tersedia.</p>
                @endif
            </div>

            {{-- Kolom Kanan: Baca Juga --}}
            <div class="md:col-span-1">
                <div class="sticky p-4 bg-orange-50 rounded-3xl shadow top-24 border-3 border-[#18181B] text-[#18181B]">
                    <h3 class="mb-4 text-lg font-semibold text-gray-800">Baca Juga</h3>
                    <ul class="space-y-3">
                        @foreach ($artikelLainnya as $lain)
                            <li>
                                <a href="{{ route('artikel.show', $lain->slug) }}"
                                    class="block text-[#18181B] font-semibold hover:underline">
                                    {{ \Illuminate\Support\Str::limit($lain->title, 50) }}
                                </a>
                                <p class="text-xs text-[#52525B]">
                                    {{ $lain->publish_date->format('d M Y') }}
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
