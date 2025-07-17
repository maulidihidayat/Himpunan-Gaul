@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
    {{-- Alpine.js harus sudah terpasang di layout --}}
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}

    <div class="container px-4 py-8 mx-auto">
        <h1 class="text-4xl font-black mb-10 text-center text-[#18181B]">Galeri Foto</h1>

        @if ($galeri->count())
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
                @foreach ($galeri as $item)
                    <div x-data="{ open: false }"
                         class="rounded-3xl overflow-hidden shadow-lg group bg-white border border-[#E4E4E7] hover:shadow-xl transition duration-300">

                        {{-- Gambar --}}
                        <div class="relative">
                            <img src="{{ asset('storage/' . $item->image) }}"
                                 alt="{{ $item->title }}"
                                 class="object-cover w-full transition-transform duration-300 cursor-pointer h-60 group-hover:scale-105"
                                 @click="open = !open">

                            <div
                                class="absolute bottom-0 left-0 w-full px-4 py-3 bg-gradient-to-t from-black/60 to-transparent">
                                <h2 class="text-lg font-semibold text-white">{{ $item->title }}</h2>
                            </div>
                        </div>

                        {{-- Deskripsi --}}
                        <div x-show="open" x-collapse x-transition.duration.400ms
                             class="p-4 bg-gray-50 border-t border-gray-200 text-sm text-[#52525B]">
                            <p class="mb-2">{{ \Illuminate\Support\Str::limit($item->description, 100) }}</p>
                            <p class="text-xs text-gray-400">
                                <i class="far fa-calendar"></i>
                                {{ $item->publish_date ? \Carbon\Carbon::parse($item->publish_date)->format('d M Y H:i') : '' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $galeri->links() }}
            </div>
        @else
            <p class="text-center text-gray-500">Belum ada galeri yang tersedia.</p>
        @endif
    </div>
@endsection
