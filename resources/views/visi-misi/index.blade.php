@extends('layouts.app')
@section('title', 'Visi Misi')

@section('content')
    <section class="container h-screen px-10 mx-auto mt-10">
        <div class="flex ">
            <div class="max-w-3xl">
                <h1 class="text-[#18181B] text-[40px] font-black">Visi <span class="text-orange-500">Misi</span> </h1>
                <p class="leading-relaxed text-justify text-[#52525B] font-meduim text-[18px]">
                    HMPS Pendidikan Informatika memiliki visi untuk menjadi organisasi kemahasiswaan yang aktif, inovatif,
                    dan
                    unggul dalam mendukung pengembangan potensi akademik dan non-akademik mahasiswa.
                    <br><br>
                    Misi kami adalah:
                <ul class="mt-2 text-[#52525B] list-disc list-inside font-meduim text-[18px]">
                    <li>Mendorong semangat <strong class="bg-[#ffbbf0] p-1">berinovasi</strong> dalam bidang teknologi dan
                        pendidikan informatika
                        melalui
                        program kerja yang kreatif dan solutif.</li>
                    <li>Aktif <strong class="bg-[#ffbbf0] p-1">berkontribusi</strong> dalam kegiatan kemahasiswaan, sosial,
                        dan pengembangan
                        masyarakat
                        kampus dengan semangat kolaboratif.</li>
                    <li>Menumbuhkan budaya <strong class="bg-[#ffbbf0] p-1">berprestasi</strong> melalui kompetisi,
                        pelatihan, dan kegiatan yang
                        menunjang kualitas akademik dan karakter anggota.</li>
                </ul>
                </p>
            </div>
            <div>
                <img src="/images/anggota/bendahara.JPG" alt="" class="object-contain w-[500px] h-[500px] "
                    width="2000" height="2000">
            </div>
        </div>
    </section>
    <section class="container px-6 mx-auto mt-4 mb-20 space-y-16">
        <h2 class="text-[40px] font-black text-[#18181B] mb-12 text-center">Implementasi <span class="text-orange-500">Visi
                & Misi</span> </h2>

        <!-- Berinovasi -->
        <div class="flex flex-col items-center gap-8 md:flex-row ">
            <img src="{{ asset('images/anggota/Wakil.JPG') }}" alt="Inovasi"
                class="w-full md:w-1/2 rounded-3xl shadow-lg object-cover max-h-[300px] border-4 border-[#18181B] hover:border-b-7 transition-all duration-300">
            <div class="md:w-1/2">
                <h3 class="mb-3 text-[32px] font-bold text-orange-500">Berinovasi</h3>
                <p class="text-[#52525B] text-[18px] font-meduim leading-relaxed">
                    HMPS mendorong inovasi melalui kegiatan seperti workshop teknologi, pelatihan web development,
                    dan lomba ide startup digital yang memperkuat keterampilan teknologi mahasiswa.
                </p>
            </div>
        </div>

        <!-- Berkontribusi -->
        <div class="flex flex-col items-center gap-8 md:flex-row-reverse">
            <img src="{{ asset('images/anggota/it.JPG') }}" alt="Kontribusi"
                class="w-full md:w-1/2 rounded-3xl shadow-lg object-cover max-h-[300px] border-4 border-[#18181B] hover:border-b-7 transition-all duration-300">
            <div class="md:w-1/2">
                <h3 class="mb-3 text-[32px] font-bold text-orange-500">Berkontribusi</h3>
                <p class="text-[#52525B] text-[18px] font-meduim leading-relaxed">
                    Kontribusi nyata dilakukan melalui pengabdian masyarakat, kegiatan sosial kampus, kolaborasi dengan
                    UKM lain, serta penyelenggaraan event edukatif untuk mahasiswa dan siswa SMA.
                </p>
            </div>
        </div>

        <!-- Berprestasi -->
        <div class="flex flex-col items-center gap-8 md:flex-row">
            <img src="{{ asset('images/anggota/humas.JPG') }}" alt="Prestasi"
                class="w-full md:w-1/2 rounded-3xl shadow-lg object-cover max-h-[300px] border-4 border-[#18181B] hover:border-b-7 transition-all duration-300">
            <div class="md:w-1/2">
                <h3 class="mb-3 text-[32px] font-bold text-orange-500">Berprestasi</h3>
                <p class="text-[#52525B] text-[18px] leading-relaxed">
                    HMPS mendukung anggota untuk berprestasi melalui partisipasi dalam lomba nasional,
                    kompetisi teknologi, pelatihan intensif, serta memberikan apresiasi bagi anggota berprestasi.
                </p>
            </div>
        </div>
    </section>

@endsection()
