@extends('layouts.app')
@section('title', 'Visi Misi')

@section('content')
    <!-- Visi & Misi -->
    <section class="container px-6 mx-auto mt-10">
        <div class="flex flex-col-reverse items-center gap-8 md:flex-row md:items-start">
            <!-- Text Section -->
            <div class="max-w-4xl text-center md:text-left">
                <h1 class="text-[#18181B] text-3xl sm:text-4xl md:text-[40px] font-black">
                    Visi <span class="text-orange-500">Misi</span>
                </h1>
                <p class="mt-4 text-base sm:text-lg md:text-[18px] leading-relaxed text-[#52525B] text-justify">
                    HMPS Pendidikan Informatika memiliki visi untuk menjadi organisasi kemahasiswaan yang aktif, inovatif,
                    dan unggul dalam mendukung pengembangan potensi akademik dan non-akademik mahasiswa.
                    <br><br>
                    Misi kami adalah:
                </p>
                <ul class="mt-4 list-disc list-inside text-[#52525B] text-base sm:text-lg md:text-[18px] space-y-2 text-justify">
                    <li>Mendorong semangat <strong class="bg-[#ffbbf0] px-1 rounded">berinovasi</strong> dalam bidang teknologi dan pendidikan informatika melalui program kerja yang kreatif dan solutif.</li>
                    <li>Aktif <strong class="bg-[#ffbbf0] px-1 rounded">berkontribusi</strong> dalam kegiatan kemahasiswaan, sosial, dan pengembangan masyarakat kampus dengan semangat kolaboratif.</li>
                    <li>Menumbuhkan budaya <strong class="bg-[#ffbbf0] px-1 rounded">berprestasi</strong> melalui kompetisi, pelatihan, dan kegiatan yang menunjang kualitas akademik dan karakter anggota.</li>
                </ul>
            </div>

            <!-- Image Section -->
            <div class="flex justify-center md:justify-end">
                <img src="/images/Visimisi.png" alt="Visi Misi"
                     class="object-contain h-auto max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg">
            </div>
        </div>
    </section>

    <!-- Implementasi Visi & Misi -->
    <section class="container px-6 mx-auto mt-16 mb-20 space-y-16">
        <h2 class="text-center text-3xl sm:text-4xl md:text-[40px] font-black text-[#18181B] mb-12">
            Implementasi <span class="text-orange-500">Visi & Misi</span>
        </h2>

        <!-- Berinovasi -->
        <div class="flex flex-col items-center gap-8 md:flex-row">
            <img src="{{ asset('images/anggota/Wakil.JPG') }}" alt="Inovasi"
                 class="w-full md:w-1/2 rounded-3xl shadow-lg object-cover max-h-[300px] border-4 border-[#18181B] hover:border-b-7 transition-all duration-300">
            <div class="text-center md:w-1/2 md:text-left">
                <h3 class="mb-3 text-2xl sm:text-3xl md:text-[32px] font-bold text-orange-500">Berinovasi</h3>
                <p class="text-[#52525B] text-base sm:text-lg md:text-[18px] leading-relaxed">
                    HMPS mendorong inovasi melalui kegiatan seperti workshop teknologi, pelatihan web development,
                    dan lomba ide startup digital yang memperkuat keterampilan teknologi mahasiswa.
                </p>
            </div>
        </div>

        <!-- Berkontribusi -->
        <div class="flex flex-col items-center gap-8 md:flex-row-reverse">
            <img src="{{ asset('images/anggota/it.JPG') }}" alt="Kontribusi"
                 class="w-full md:w-1/2 rounded-3xl shadow-lg object-cover max-h-[300px] border-4 border-[#18181B] hover:border-b-7 transition-all duration-300">
            <div class="text-center md:w-1/2 md:text-left">
                <h3 class="mb-3 text-2xl sm:text-3xl md:text-[32px] font-bold text-orange-500">Berkontribusi</h3>
                <p class="text-[#52525B] text-base sm:text-lg md:text-[18px] leading-relaxed">
                    Kontribusi nyata dilakukan melalui pengabdian masyarakat, kegiatan sosial kampus, kolaborasi dengan
                    UKM lain, serta penyelenggaraan event edukatif untuk mahasiswa dan siswa SMA.
                </p>
            </div>
        </div>

        <!-- Berprestasi -->
        <div class="flex flex-col items-center gap-8 md:flex-row">
            <img src="{{ asset('images/anggota/humas.JPG') }}" alt="Prestasi"
                 class="w-full md:w-1/2 rounded-3xl shadow-lg object-cover max-h-[300px] border-4 border-[#18181B] hover:border-b-7 transition-all duration-300">
            <div class="text-center md:w-1/2 md:text-left">
                <h3 class="mb-3 text-2xl sm:text-3xl md:text-[32px] font-bold text-orange-500">Berprestasi</h3>
                <p class="text-[#52525B] text-base sm:text-lg md:text-[18px] leading-relaxed">
                    HMPS mendukung anggota untuk berprestasi melalui partisipasi dalam lomba nasional,
                    kompetisi teknologi, pelatihan intensif, serta memberikan apresiasi bagi anggota berprestasi.
                </p>
            </div>
        </div>
    </section>
@endsection
