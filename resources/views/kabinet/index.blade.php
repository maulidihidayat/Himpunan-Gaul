@extends('layouts.app')
@section('title', 'Kabinet Zeta')

@section('content')
    <section class="container mx-auto px-36">
        <section class="container px-6 py-20 mx-auto">
            <div class="grid items-center grid-cols-1 gap-12 md:grid-cols-2">
                {{-- Gambar ilustrasi --}}
                <div>
                    <img src="{{ asset('images/anggota/Wakil.JPG') }}" alt="Ilustrasi Kabinet Zeta"
                        class="object-cover w-full max-w-md mx-auto  max-h-[300px] md:mx-0 rounded-3xl border-3 border-[#18181B] ">
                </div>

                {{-- Deskripsi Kabinet --}}
                <div>
                    <h2 class="text-[40px] font-black text-[#18181B] mb-4">Kabinet <span class="text-orange-500">Zeta</span>
                    </h2>
                    <p class="text-[18px] text-[#52525B] leading-relaxed mb-6 font-medium">
                        Kabinet <strong>Zeta</strong> hadir sebagai simbol tekad baru HMPS Pendidikan Informatika dalam
                        menumbuhkan budaya yang <span class="font-semibold text-orange-500">inovatif</span>,
                        <span class="font-semibold text-orange-500">kolaboratif</span>, dan <span
                            class="font-semibold text-orange-500">berdampak nyata</span>.
                        Kami tidak hanya mengelola organisasi, tapi merancang gerakan.
                    </p>
                    <p class="text-[18px] text-[#52525B] leading-relaxed">
                        Dengan semangat Zeta sebagai akhir dan puncak dari sebuah siklus, kami berkomitmen menjadikan HMPS
                        PI
                        sebagai wadah terbaik pengembangan diri dan kontribusi mahasiswa di segala lini.
                    </p>
                </div>
            </div>

            {{-- Fokus Kabinet --}}
            <div class="grid grid-cols-1 gap-8 mt-16 md:grid-cols-3">
                {{-- Inovasi --}}
                <div
                    class="bg-white border-3 border-[#18181B]  rounded-3xl shadow hover:shadow-md p-6 transition-all duration-300 hover:border-b-7  hover:bg-red-50">
                    <h3 class="text-2xl font-semibold text-[#18181B] mb-3">🧠 Inovasi</h3>
                    <p class="text-[#52525B] text-[16px] leading-relaxed">
                        Mendorong kreativitas dan solusi digital melalui program pelatihan, riset teknologi, dan
                        pengembangan aplikasi sederhana oleh mahasiswa.
                    </p>
                </div>

                {{-- Kontribusi --}}
                <div
                    class="bg-white border-3 border-[#18181B]  rounded-3xl shadow hover:shadow-md p-6 transition-all duration-300 hover:border-b-7  hover:bg-red-50">
                    <h3 class="text-2xl font-semibold text-[#18181B] mb-3">🤝 Kontribusi</h3>
                    <p class="text-[#52525B] text-[16px] leading-relaxed">
                        Hadir dalam pengabdian kampus dan masyarakat melalui kegiatan sosial, edukasi digital, dan
                        kolaborasi lintas prodi dan organisasi.
                    </p>
                </div>

                {{-- Prestasi --}}
                <div
                    class="bg-white border-3 border-[#18181B]  rounded-3xl shadow hover:shadow-md p-6 transition-all duration-300 hover:border-b-7  hover:bg-orange-50">
                    <h3 class="text-2xl font-semibold text-[#18181B] mb-3">🏆 Prestasi</h3>
                    <p class="text-[#52525B] text-[16px] leading-relaxed">
                        Membangun kultur unggul dengan mendorong mahasiswa aktif mengikuti lomba, seminar, dan kompetisi di
                        bidang teknologi & kepemimpinan.
                    </p>
                </div>
            </div>
        </section>
        <section class="px-6 py-20 bg-gradient-to-b from-white to-blue-50 md:px-10">
            <div class="grid items-center max-w-6xl gap-12 mx-auto md:grid-cols-2">
                {{-- Gambar Logo --}}
                <div class="flex justify-center md:justify-start">
                    <img src="{{ asset('images/logo/LogoZeta.png') }}" alt="Logo Kabinet Zeta"
                        class="object-contain transition-transform duration-300 w-80 h-80 hover:scale-105">
                </div>

                {{-- Deskripsi Utama --}}
                <div>
                    <h2 class="text-4xl font-extrabold text-[#18181B] mb-4">Makna Logo <span class="text-orange-500">Kabinet Zeta</span></h2>
                    <p class="text-[#52525B] leading-relaxed text-[17px] mb-6">
                        Logo <strong>Kabinet ZETA</strong> menggambarkan integrasi antara pendidikan dan teknologi.
                        Buku terbuka melambangkan semangat belajar dan keterbukaan terhadap ilmu,
                        sementara microchip di tengah menegaskan fokus pada inovasi digital.
                    </p>

                    {{-- Warna Biru --}}
                    <div class="mb-6">
                        <div class="inline-block px-4 py-1 mb-2 text-lg font-semibold text-white bg-blue-800 rounded-md">
                            Biru
                        </div>
                        <p class="text-[#52525B] text-[16px]">
                            Mencerminkan <strong>stabilitas</strong>, <strong>profesionalisme</strong>, dan
                            <strong>kemajuan</strong>.
                        </p>
                    </div>

                    {{-- Warna Kuning Emas --}}
                    <div class="mb-6">
                        <div class="inline-block px-4 py-1 mb-2 text-lg font-semibold text-white bg-yellow-400 rounded-md">
                            Kuning Emas
                        </div>
                        <p class="text-[#52525B] text-[16px]">
                            Melambangkan <strong>semangat</strong>, <strong>harapan</strong>, dan
                            <strong>pencapaian</strong>.
                        </p>
                    </div>

                    {{-- Nama Kabinet Zeta --}}
                    <div>
                        <div class="inline-block px-4 py-1 mb-2 text-lg font-semibold text-white bg-orange-500 rounded-md">
                            Kabinet Zeta
                        </div>
                        <p class="text-[#52525B] text-[16px]">
                            Dalam konteks ilmiah, <strong>“Zeta”</strong> diasosiasikan dengan konsep kompleks seperti
                            fungsi zeta dalam matematika,
                            atau potensial zeta dalam fisika dan kimia, yang mencerminkan <strong>keseimbangan</strong>,
                            <strong>stabilitas</strong>,
                            dan <strong>presisi</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container px-4 py-12 mx-auto">
    <h2 class="text-[40px] font-black text-[#18181B] mb-6">Logo Divisi <span class="text-orange-500">Kabinet ZETA</span></h2>

    <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
        {{-- SDM dan HUMAS --}}
        <div class="bg-white border-3 border-[#18181B] rounded-3xl p-6 shadow">
            <img src="{{ asset('images/logo-divisi/sdm-humas.jpg') }}" alt="Logo SDM dan HUMAS" class="w-full mb-4 rounded-xl">
            <h3 class="text-xl font-bold text-[#18181B] mb-2">Divisi SDM & HUMAS</h3>
            <p class="text-[#52525B] text-justify font-medium">
                Logo SDM dan HUMAS melambangkan kekuatan komunikasi dan pengembangan sumber daya manusia.
                Dua siluet wajah dalam buku terbuka menggambarkan keterbukaan dalam berdiskusi dan membina hubungan, sedangkan
                simbol percakapan (speech bubble) pada HUMAS menguatkan makna interaksi dan penyampaian informasi.
            </p>
        </div>

        {{-- MINKAT dan TI --}}
        <div class="bg-white border-3 border-[#18181B] rounded-3xl p-6 shadow">
            <img src="{{ asset('images/logo-divisi/minkat-ti.jpg') }}" alt="Logo MINKAT dan TI" class="w-full mb-4 rounded-xl">
            <h3 class="text-xl font-bold text-[#18181B] mb-2">Divisi MINKAT & TI</h3>
            <p class="text-[#52525B] text-justify">
                Logo MINKAT dan TI mencerminkan semangat, kreativitas, dan kecerdasan digital. Simbol bintang pada MINKAT menggambarkan pencapaian dan prestasi mahasiswa. Sedangkan simbol microchip pada TI menekankan inovasi teknologi dan kompetensi digital sebagai inti dari pengembangan divisi ini.
            </p>
        </div>
    </div>
</section>



    </section>
@endsection
