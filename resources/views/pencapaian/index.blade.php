@extends('layouts.app')

@section('title', 'Daftar Pencapaian')

@section('content')
    <div class="container px-3 mx-auto mt-4 py:-10 md:px-10">
        <h1 class="text-[36px] sm:text-[40px] font-black text-[#18181B] mb-8">Pencapaian</h1>

        <div class="grid grid-cols-1 gap-10 lg:grid-cols-4">
            {{-- Kolom Kiri: Pencapaian Utama --}}
            <div class="space-y-8 lg:col-span-3">
                @if ($pencapaian->count())
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-2">
                        @foreach ($pencapaian as $item)
                            <div
                                class="bg-white overflow-hidden border-3 border-[#18181B] rounded-3xl shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:bg-orange-50 hover:border-b-[6px]">
                                @if ($item->image)
                                    <a href="{{ route('pencapaian.show', $item->slug) }}">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                            class="object-cover w-full h-60 rounded-t-3xl">
                                    </a>
                                @endif

                                <div class="p-5">
                                    <h2 class="text-[20px] font-bold text-[#18181B] mb-2">
                                        {{ $item->title }}
                                    </h2>
                                    <p class="text-[#52525B] text-[15px] mb-3 leading-relaxed hidden lg:block">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($item->description), 90) }}
                                    </p>
                                    <p class="hidden mb-3 text-sm text-gray-500 md:block">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($item->publish_date)->translatedFormat('d M Y') }}- Admin
                                    </p>
                                    <a href="{{ route('pencapaian.show', $item->slug) }}"
                                        class="text-sm font-semibold text-orange-600 hover:underline">
                                        Baca Selengkapnya →
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Pagination --}}
                    <div class="pt-6">
                        {{ $pencapaian->links() }}
                    </div>
                @else
                    <p class="text-center text-gray-500">Belum ada pencapaian yang tersedia.</p>
                @endif
            </div>

            {{-- Kolom Kanan: Sidebar --}}
            <div class="mb-20 lg:col-span-1">
                <div class="sticky top-24 bg-orange-50 border-3 border-[#18181B] rounded-3xl shadow p-5">
                    <h3 class="text-lg font-bold text-[#18181B] mb-4">Pencapaian Lainnya</h3>
                    <ul class="space-y-4">
                        @foreach ($pencapaianLainnya as $lain)
                            <li>
                                <a href="{{ route('pencapaian.show', $lain->slug) }}"
                                    class="text-[#18181B] font-semibold hover:underline line-clamp-1 md:line-clamp-2">
                                    {{ \Illuminate\Support\Str::limit($lain->title, 50) }}
                                </a>
                                <p class="font-medium text-gray-400 text-md ">
                                    {{ \Carbon\Carbon::parse($lain->publish_date)->translatedFormat('d M Y') }}
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
