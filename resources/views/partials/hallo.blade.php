<section id="hallo"
    class="container flex flex-col items-center justify-between h-screen gap-10 px-10 py-32 pb-40 mx-auto pt-30 md:flex-row">
    {{-- <span class="absolute right-0 p-20 mt-32 text-white rounded-full bg-orange-500/40 -z-40 blur-3xl"></span> --}}
    <span class="absolute left-0 p-20 text-white rounded-full bg-red-400/40 -z-40 blur-3xl mt-80"></span>
    <div class="max-w-xl">
        <img src="/images/emote/star.svg" alt="emote" class="absolute w-12 h-12 -mt-36">
        <h1 class="mb-4 text-[40px] font-bold leading-relaxed text-[#18181B] md:text-5xl">
            Halo Informatics <br /><span class="text-orange-500">Education!</span>
        </h1>
        <p class="mb-6 text-[18px] leading-relaxed text-[#52525B]">
            Selamat datang di HMPS Pendidikan Informatika tempat di mana <span
                class="font-medium text-[#18181B]">inovasi
                teknologi</span> dan <span class="font-medium text-[#52525B]">pendidikan</span> bersatu
            untuk membentuk generasi masa depan yang tangguh, kreatif, dan visioner.
        </p>
        <a href="{{ route('about.index') }}"
            class="font-bold text-[16px] bg-orange-600 text-white px-7 py-4 rounded-xl border-[2px] border-b-[4px] border-[#18181B] hover:border-b-7 transition-all duration-300 mt-8">
            Kenalan yuk!
        </a>
    </div>

    <div class="flex justify-center md:justify-end">
        <img src="/images/HMPS.png" alt="Hallo PI"
            class="w-full max-w-lg transition duration-300 ease-in-out hover:scale-105">
        <img src="/images/emote/Emoticon Vibes (2).svg" alt="emote" class="right-0 z-10 w-12 h-12 mb-20 mt-96">
    </div>
</section>
