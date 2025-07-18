@extends('layouts.app')

@section('title', 'Daftar Berita')

@section('content')
    <div class="container px-10 mx-auto mt-10 sm:px-6 lg:px-8">
        <h1 class="text-[36px] sm:text-[40px] font-black text-[#18181B] mb-8">Berita</h1>

        <div class="grid grid-cols-1 gap-10 lg:grid-cols-4">
            {{-- Berita Utama --}}
            <div class="space-y-8 lg:col-span-3">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-2">
                    @foreach ($news as $item)
                        <div
                            class="overflow-hidden bg-white border-3 border-[#18181B] rounded-3xl shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:bg-orange-50 hover:border-b-[6px]">
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}"
                                     alt="{{ $item->title }}"
                                     class="object-cover w-full h-60 rounded-t-3xl">
                            @endif
                            <div class="p-5">
                                <h2 class="text-xl font-bold text-[#18181B] mb-2">
                                    {{ $item->title }}
                                </h2>
                                <p class="text-[#52525B] mb-2 text-[15px] leading-relaxed">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->content), 100) }}
                                </p>
                                <div class="mb-3 text-sm text-gray-500">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ $item->publish_date->format('d M Y') }} - Admin
                                </div>
                                <a href="{{ route('news.show', ['slug' => $item->slug]) }}"
                                   class="text-sm font-semibold text-orange-600 hover:underline">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="pt-6">
                    {{ $news->links() }}
                </div>
            </div>

            {{-- Sidebar - Berita Lainnya --}}
            <div class="lg:col-span-1">
                <div class="sticky top-24 bg-red-50 border-3 border-[#18181B] rounded-3xl shadow p-5">
                    <h3 class="text-lg font-bold text-[#18181B] mb-4">Berita Lainnya</h3>
                    <ul class="space-y-4">
                        @foreach ($beritaLainnya as $lain)
                            <li>
                                <a href="{{ route('news.show', ['slug' => $lain->slug]) }}"
                                   class="text-[#18181B] font-semibold hover:underline">
                                    {{ \Illuminate\Support\Str::limit($lain->title, 50) }}
                                </a>
                                <p class="text-xs text-gray-400">
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
