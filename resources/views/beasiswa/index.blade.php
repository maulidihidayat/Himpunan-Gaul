@extends('layouts.app')

@section('title', 'Daftar Beasiswa')

@section('content')
    <div class="container px-3 mx-auto mt-4 mb-20 py:-10 md:px-10">
        <h1 class="mb-4 text-[40px] font-black text-left text-[#18181B]">
            Daftar <span class="text-orange-500">Beasiswa</span>
        </h1>

        @if ($beasiswas->count())
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($beasiswas as $beasiswa)
                    <a href="{{ route('beasiswa.show', $beasiswa->slug) }}"
                        class="overflow-hidden transition-all duration-300 bg-white border-[#18181B] border-3 rounded-3xl hover:shadow-lg group-2 p-4 hover:bg-orange-50 hover:shadow-md hover:border-b-7 hover:-translate-y-1">
                        <img src="{{ asset('storage/' . $beasiswa->image) }}" alt="Thumbnail"
                            class="object-cover w-full h-48 transition-transform duration-300 group-hover:scale-105 rounded-xl" />

                        <h2 class="text-[20px] font-bold text-[#18181B] mt-2 ">
                            {{ $beasiswa->title }}
                        </h2>

                        <p class="text-bold text-[#52525B] mt-4 text-[16px]">
                            <i aria-hidden="true" class="far fa-calendar"></i>
                            {{ $beasiswa->publish_date->format('d M Y') }}
                        </p>
                    </a>
                @endforeach
            </div>
        @else
            <p class="text-gray-600 dark:text-gray-300">Belum ada data beasiswa.</p>
        @endif
    </div>
@endsection
