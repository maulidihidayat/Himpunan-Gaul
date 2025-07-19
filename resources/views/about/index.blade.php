@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <section id="about" class="container px-10 py-2 mx-auto mt-4">
        <h1 class="mb-10 text-[40px] font-black text-left text-[#18181B] ">Tentang Kami</h1>
        <div class="flex items-center justify-around">
            <div class="max-w-2xl text-justify">
                <p class=" leading-relaxed text-[18px] text-[#52525B] font-medium">Halo, Nabil di sini. Sedikit cerita
                    tentang awal mula SOM
                    AI
                    dibuat, di awal 2023, gue dan temen-temen di kampus lagi masa-masanya skripsian dan kita semua ngejar
                    lulus
                    tepat waktu (8 semester). Memang gak mudah buat mengejar semuanya sampai bisa lulus tepat waktu, mulai
                    dari
                    pengumpulan data penelitian, proses bimbingan sama dosen, ritual seminar, sidang, dan seluruh rangkaian
                    prosesnya punya tantangannya tersendiri.</p>
                <strong class="pt-4 pb-2">1. Tantangan Skripsian</strong>
                <p class=" leading-relaxed text-[18px] text-[#52525B] font-medium">Ada 1 atau 2 orang key person yang menurut
                    kita, sebagai
                    mahasiswa, sangat krusial dalam proses penulisan skripsi: dosen pembimbing. Beliau punya kuasa penuh
                    atas
                    skripsi kita, apakah bisa diteruskan ke proses selanjutnya atau enggak. Di tengah seluruh kesibukan
                    beliau,
                    tentu sebagai mahasiswa kita pengen dong punya pembimbing yang bisa kita tanya-tanyain setiap saat
                    tentang
                    skripsi kita biar kita gak kehilangan arah, iya kan?</p>
                <strong class="pt-4 pb-2">2. SOM AI Lahir</strong>
                <p class="leading-relaxed text-[18px] text-[#52525B] font-medium">Tentang SOM AI Halo, Nabil di sini. Sedikit
                    cerita tentang
                    awal
                    mula SOM AI dibuat, di awal 2023, gue dan temen-temen di kampus lagi masa-masanya skripsian dan kita
                    semua
                    ngejar lulus tepat waktu (8 semester). Memang gak mudah buat mengejar semuanya sampai bisa lulus tepat
                    waktu, mulai dari pengumpulan data penelitian, proses bimbingan sama dosen, ritual seminar, sidang, dan
                    seluruh rangkaian prosesnya punya tantangannya tersendiri.1. Tantangan Skripsian Ada 1 atau 2 orang key
                    person yang menurut kita, sebagai mahasiswa, sangat krusial dalam proses penulisan skripsi: dosen
                    pembimbing. Beliau punya kuasa penuh atas skripsi kita, apakah bisa diteruskan ke proses selanjutnya
                    atau
                    enggak. Di tengah seluruh kesibukan beliau, tentu sebagai mahasiswa kita pengen dong punya pembimbing
                    yang
                    bisa kita tanya-tanyain setiap saat tentang skripsi kita biar kita gak kehilangan arah, iya kan? 2. SOM
                    AI
                    Lahir Nah, awal 2023 itu adalah masa booming-nya generative AI. Gue membayangkan dengan kemampuan
                    generative
                    AI ini, mahasiswa bisa sangat terbantu untuk bertanya tentang skripsi tanpa kenal jarak dan waktu. Mulai
                    lah
                    di tanggal 21 Maret 2023 gue nyoba untuk membuat versi sederhana chatbot AI yang bisa merespon seluruh
                    pertanyaan user buat ngebantu temen-temen gue yang kesusahan konsultasi sama dosen pembimbingnya. Gue
                    mencari kata dalam Bahasa Indonesia yang berakhiran ‘AI’ karena gue gak punya ide lain untuk ngasih nama
                    chatbot AI ini. Jadi lah namanya SOM AI, karena yang gue pikirkan pada waktu itu adalah makanan somay
                    🤗.
                </p>
                <strong class="pt-4 pb-2">3. Viral di TikTok</strong>
                <p class=" leading-relaxed text-[18px] text-[#52525B] font-medium">Karena temen-temen gue di kampus masih
                    belum aware dengan
                    kecanggihan SOM AI ini, gue mencoba untuk bikin konten tentang SOM AI di Instagram Reels dan TikTok.
                    Dari
                    sinilah keviralan SOM AI dimulai. Konten gue tentang SOM AI di TikTok masuk FYP dan jadi banyak banget
                    yang
                    akses SOM AI, meskipun waktu itu masih pakai domain nabilrei.my.is/somai . </p>
                <strong class="pt-4 pb-2">4. Antusias Semakin Luas</strong>
                <p class=" leading-relaxed text-[18px] text-[#52525B] font-medium">Seiring berjalannya waktu, banyak content
                    creator di
                    TikTok
                    dan Instagram yang membantu mempromosikan SOM AI yang pada akhirnya membuat SOM AI semakin dikenal
                    mahasiswa
                    di seluruh Indonesia. Terima kasih banyak kakak-kakak content creator 🙏🏻🥺 Setelah SOM AI versi
                    pertama
                    yang sangat sederhana ini berjalan selama 8 bulan, gue mengajak temen-temen gue di kampus (ada Hanim,
                    Tio,
                    Dewa, dkk) untuk ikut mengembangkan SOM AI yang lebih canggih biar mahasiswa lain bisa ikut merasakan
                    kemudahan pas lagi ngerjain skripsi. Di bulan November 2023, kita launching SOM AI versi baru yang jauh
                    lebih canggih dan sampai saat ini terus kita maintenance biar bisa membantu mahasiswa yang lagi
                    skripsian
                    sampai mereka lulus.</p>
            </div>
            <div class="px-20 -mt-60">
                <div class="items-center p-4 mb-10 space-y-4">
                    {{-- Member Card --}}
                    <div
                        class="flex items-center justify-between max-w-lg p-4 mx-auto border-3 rounded-2xl border-[#18181B] hover:shadow-md hover:border-b-7 hover:-translate-y-1 duration-300 transition-all cursor-pointer">
                        <div>
                            <h3 class="text-[20px] text-[#18181B] font-bold ">Ahmad Yusril Aziz Maulana</h3>
                            {{-- <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Prodi: Pendidikan Informatika</p> --}}
                            <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Ketua Umum</p>
                            <a href="https://instagram.com/johndoe" class="flex items-center mt-5 space-x-2"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                                <p class="font-semibold text-orange-600 underline text-4">@johndoe</p>
                            </a>
                        </div>
                        <div>
                            <img sr src="{{ asset('images/anggota/Ketua.JPG') }}" alt="Profile Picture"
                                class="w-[150px] h-[150px] object-cover rounded-4xl" loading="lazy" decoding="async">
                        </div>
                    </div>
                    {{-- wakil Card --}}
                    <div
                        class="flex items-center justify-between max-w-lg p-4 mx-auto border-3 rounded-2xl border-[#18181B]  hover:shadow-md hover:border-b-7 hover:-translate-y-1 duration-300 transition-all cursor-pointer">
                        <div>
                            <h3 class="text-[20px] text-[#18181B] font-bold ">Ainul Lutfi</h3>
                            {{-- <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Prodi: Pendidikan Informatika</p> --}}
                            <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Wakil Ketua Umum</p>
                            <a href="https://instagram.com/johndoe" class="flex items-center mt-5 space-x-2"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                                <p class="font-semibold text-orange-600 underline text-4">@johndoe</p>
                            </a>
                        </div>
                        <div>
                            <img sr src="{{ asset('images/anggota/Wakil.JPG') }}" alt="Profile Picture"
                                class="w-[150px] h-[150px] object-cover rounded-4xl" loading="lazy" decoding="async" width="2000px" height="1000px">
                        </div>
                    </div>
                    {{-- SDM Card --}}
                    <div
                        class="flex items-center justify-between max-w-lg p-4 mx-auto border-3 rounded-2xl border-[#18181B] hover:shadow-md hover:border-b-7 hover:-translate-y-1 duration-300 transition-all cursor-pointer">
                        <div>
                            <h3 class="text-[20px] text-[#18181B] font-bold ">Farihatun Aini</h3>
                            {{-- <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Prodi: Pendidikan Informatika</p> --}}
                            <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Kepala Bidang SDM</p>
                            <a href="https://instagram.com/johndoe" class="flex items-center mt-5 space-x-2"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                                <p class="font-semibold text-orange-600 underline text-4">@johndoe</p>
                            </a>
                        </div>
                        <div>
                            <img sr src="{{ asset('images/anggota/bendahara.JPG') }}" alt="Profile Picture"
                                class="w-[150px] h-[150px] object-cover rounded-4xl" loading="lazy" decoding="async">
                        </div>
                    </div>
                    {{-- HUMAS --}}
                    <div
                        class="flex items-center justify-between max-w-lg p-4 mx-auto border-3 rounded-2xl border-[#18181B] hover:shadow-md hover:border-b-7 hover:-translate-y-1 duration-300 transition-all cursor-pointer">
                        <div>
                            <h3 class="text-[20px] text-[#18181B] font-bold ">M.Faqih Aljumhuri</h3>
                            {{-- <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Prodi: Pendidikan Informatika</p> --}}
                            <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Kepala Bidang Humas</p>
                            <a href="https://instagram.com/johndoe" class="flex items-center mt-5 space-x-2"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                                <p class="font-semibold text-orange-600 underline text-4">@johndoe</p>
                            </a>
                        </div>
                        <div>
                            <img sr src="{{ asset('images/anggota/humas.JPG') }}" alt="Profile Picture"
                                class="w-[150px] h-[150px] object-cover rounded-4xl" loading="lazy" decoding="async">
                        </div>
                    </div>
                    {{-- Minkat --}}
                    <div
                        class="flex items-center justify-between max-w-lg p-4 mx-auto border-3 rounded-2xl border-[#18181B] hover:shadow-md hover:border-b-7 hover:-translate-y-1 duration-300 transition-all cursor-pointer">
                        <div>
                            <h3 class="text-[20px] text-[#18181B] font-bold ">Laela Febriana</h3>
                            {{-- <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Prodi: Pendidikan Informatika</p> --}}
                            <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Kepala Bidang Minat Bakat</p>
                            <a href="https://instagram.com/johndoe" class="flex items-center mt-5 space-x-2"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                                <p class="font-semibold text-orange-600 underline text-4">@johndoe</p>
                            </a>
                        </div>
                        <div>
                            <img sr src="{{ asset('images/anggota/minkat.JPG') }}" alt="Profile Picture"
                                class="w-[150px] h-[150px] object-cover rounded-4xl" loading="lazy" decoding="async">
                        </div>
                    </div>
                    {{-- IT --}}
                    <div
                        class="flex items-center justify-between max-w-lg p-4 mx-auto border-3 rounded-2xl border-[#18181B] hover:shadow-md hover:border-b-7 hover:-translate-y-1 duration-300 transition-all cursor-pointer">
                        <div>
                            <h3 class="text-[20px] text-[#18181B] font-bold ">Arif Suriadi</h3>
                            {{-- <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Prodi: Pendidikan Informatika</p> --}}
                            <p class="text-[#52525B] text-[14px] leading-relaxed font-medium">Kepala Bidang IT</p>
                            <a href="https://instagram.com/johndoe" class="flex items-center mt-5 space-x-2"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                                <p class="font-semibold text-orange-600 underline text-4">@johndoe</p>
                            </a>
                        </div>
                        <div>
                            <img sr src="{{ asset('images/anggota/itt.JPG') }}" alt="Profile Picture"
                                class="w-[150px] h-[150px] object-cover rounded-4xl" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
