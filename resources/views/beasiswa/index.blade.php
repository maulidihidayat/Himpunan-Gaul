@extends('layouts.app')

@section('title', 'Daftar Beasiswa')

@section('content')
    <div class="container px-10 py-10 mx-auto mt-4">
        <h1 class="mb-4 text-[40px] font-black text-left text-[#18181B]">Daftar <span class="text-orange-500">Beasiswa</span>
        </h1>
        @if ($beasiswas->count())
            <div class="grid gap-8 md:grid-cols-2">
                @foreach ($beasiswas as $beasiswa)
                    <a href="{{ route('beasiswa.show', $beasiswa->slug) }}"
                        class="block p-5 transition border rounded-xl hover:shadow-lg hover:border-blue-400 dark:border-gray-700 dark:hover:border-blue-500">
                        <img src="{{ asset('storage/' . $beasiswa->image) }}" alt="Thumbnail"
                            class="object-cover w-full h-48 transition-transform duration-300 group-hover:scale-105 rounded-xl" />

                        <h2 class="mb-2 text-[20px] font-bold text-[#18181B]">
                            {{ $beasiswa->title }}
                        </h2>

                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Dipublikasikan pada
                            {{ \Carbon\Carbon::parse($beasiswa->publish_date)->translatedFormat('d F Y') }}
                        </p>
                    </a>
                @endforeach
            </div>
        @else
            <p class="text-gray-600 dark:text-gray-300">Belum ada data beasiswa.</p>
        @endif
    </div>
@endsection
