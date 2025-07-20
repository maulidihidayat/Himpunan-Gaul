@extends('layouts.app')

@section('title', 'Dies Natalis')

@section('content')
    <section class="text-[#18181B] py-16 px-6 md:px-10">

        {{-- Hero --}}
        <div class="grid items-center max-w-6xl gap-8 mx-auto mb-20 md:grid-cols-2">
            <div>
                <h1 class="mb-4 text-4xl font-extrabold leading-tight tracking-tight md:text-5xl">
                    <span class="text-orange-500">Dies Natalis</span> HMPS PI
                </h1>
                <p class="text-lg leading-relaxed text-gray-600">
                    Perayaan hari jadi yang tak hanya mempererat tali silaturahmi antar mahasiswa, alumni, dan dosen,
                    tapi juga menumbuhkan semangat berkarya, berbagi inspirasi, dan penuh hiburan.
                </p>
            </div>
            <div class="overflow-hidden shadow-lg rounded-3xl">
                <img src="/images/events/hero-diesnatalis.jpg" alt="Dies Natalis" class="object-cover w-full h-[300px]">
            </div>
        </div>

        {{-- Tentang --}}
        <div class="max-w-4xl mx-auto mb-20 text-center">
            <h2 class="mb-6 text-[40px] font-bold text-center tetx-[#18181B]">Apa Itu Dies Natalis?</h2>
            <p class="text-[17px] text-gray-700 leading-relaxed">
                Dies Natalis adalah momentum tahunan untuk memperingati perjalanan Himpunan Mahasiswa Pendidikan
                Informatika.
                Momen ini menjadi ajang apresiasi, edukasi, dan hiburan dalam satu rangkaian yang menyatukan semua elemen.
            </p>
        </div>

        {{-- Rangkaian Acara --}}
        <div class="max-w-6xl mx-auto mb-20">
            <h2 class="mb-6 text-[40px] font-bold text-center tetx-[#18181B]">Rangkaian Acara</h2>
            <div class="grid gap-8 md:grid-cols-3">
                @php
                    $events = [
                        [
                            'title' => 'Seminar Inspiratif',
                            'desc' => 'Menghadirkan tokoh inspiratif di bidang teknologi & pendidikan.',
                        ],
                        [
                            'title' => 'Kompetisi Mahasiswa',
                            'desc' => 'Beragam lomba: desain, futsal, cerdas cermat, dan lainnya.',
                        ],
                        [
                            'title' => 'Malam Puncak',
                            'desc' => 'Acara penghargaan, hiburan, dan kebersamaan yang penuh kesan.',
                        ],
                    ];
                @endphp

                @foreach ($events as $event)
                    <div
                        class="bg-white border-3 border-[#18181B] p-6 rounded-3xl  hover:border-b-7 transition-all cursor-pointer hover:bg-red-100 duration-300">
                        <h3 class="mb-2 text-lg font-semibold">{{ $event['title'] }}</h3>
                        <p class="text-sm leading-relaxed text-gray-600">{{ $event['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Dokumentasi --}}
        <div class="max-w-6xl mx-auto mb-24">
            <h2 class="mb-6 text-[40px] font-bold text-center tetx-[#18181B]">Galeri Dokumentasi</h2>
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3">
                @foreach (['dies1.jpg', 'dies2.jpg', 'dies3.jpg'] as $img)
                    <div class="overflow-hidden transition-all shadow rounded-xl hover:shadow-lg">
                        <img src="/images/events/{{ $img }}" alt="Dokumentasi Dies Natalis"
                            class="w-full h-[220px] object-cover hover:scale-105 transition duration-500">
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
