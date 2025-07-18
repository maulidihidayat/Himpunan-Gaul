@extends('layouts.app')

@section('title', 'Struktur Kepengurusan')

@section('content')
    <div class="container px-10 py-10 mx-auto">
        <h1 class="mb-10 text-[40px] font-black text-left text-[#18181B]">Struktur Kepengurusan</h1>

        @if ($pengurus->count())
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($pengurus as $person)
                    <div
                        class="w-full flex items-center justify-between p-4 bg-white border-3 border-[#18181B] rounded-2xl hover:shadow-md hover:border-b-7 hover:-translate-y-1 transition-all duration-300">
                        
                        {{-- Kiri: Info --}}
                        <div class="flex-1 pr-4">
                            <h3 class="text-[20px] text-[#18181B] font-bold">{{ $person->name }}</h3>
                            <p class="text-[#52525B] text-[14px] font-medium">{{ $person->position_title }}</p>
                            <p class="text-[#A1A1AA] text-xs mt-1">Periode {{ $person->period }}</p>

                            @if ($person->instagram)
                                <a href="https://instagram.com/{{ $person->instagram }}" class="flex items-center mt-4 space-x-2" target="_blank">
                                    <i class="text-orange-600 fab fa-instagram"></i>
                                    <p class="text-sm font-semibold text-orange-600 underline">@{{ $person->instagram }}</p>
                                </a>
                            @endif
                        </div>

                        {{-- Kanan: Foto --}}
                        <div class="flex-shrink-0">
                            @if ($person->image)
                                <img src="{{ asset('storage/' . $person->image) }}" alt="{{ $person->name }}"
                                    class="w-[120px] h-[120px] object-cover rounded-xl border-2 border-[#E4E4E7] shadow-sm" loading="lazy" decoding="async">
                            @else
                                <div
                                    class="w-[120px] h-[120px] bg-gray-200 flex items-center justify-center text-sm text-gray-500 rounded-3xl">
                                    No Image
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-500">Belum ada data kepengurusan.</p>
        @endif
    </div>
@endsection
