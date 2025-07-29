@extends('layouts.app')
@section('title', 'Kontak Kami')

@section('content')
    <section class="container min-h-screen px-4 mx-auto mt-10 mb-10 md:mb-10 sm:px-6 md:mt-20">
        <!-- Judul -->
        <div class="flex flex-col items-center justify-center text-center">
            <h1 class="text-3xl sm:text-4xl md:text-[40px] text-[#18181B] font-black">Kontak Kami</h1>
            <p class="text-base sm:text-lg md:text-[18px] text-[#52525B] font-medium max-w-lg mt-2 px-2">
                Kami selalu siap untuk membantu mu dan menjawab semua pertanyaan kamu!
            </p>
        </div>

        <!-- Kontak Cards -->
        <div class="grid gap-6 mx-auto mt-8 md:grid-cols-2 md:max-w-4xl ">
            <!-- WhatsApp -->
            <div
                class="bg-orange-100 p-6 sm:p-8 rounded-3xl border-3 border-[#18181B] transition-all duration-300 hover:border-b-7 hover:cursor-pointer hover:bg-purple-100 hover:shadow-lg">
                <a href="https://wa.me/6285857517122?text=Assalamu%27alaikum%2C%20perkenalkan%20nama%20saya....."
                    class="block font-bold text-xl sm:text-2xl md:text-[28px] text-[#18181B] mb-2 break-all">
                    +6285857517122
                </a>
                <p class="text-sm sm:text-base md:text-[16px] text-[#52525B] leading-relaxed">
                    Kami selalu siap membantu! Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk
                    menghubungi kami melalui WhatsApp.
                </p>
            </div>

            <!-- Email -->
            <div
                class="bg-purple-100 p-6 sm:p-8 rounded-3xl border-3 border-[#18181B] transition-all duration-300 hover:border-b-7 hover:cursor-pointer hover:bg-orange-100 hover:shadow-lg">
                <h2 class="font-bold text-xl sm:text-2xl md:text-[28px] text-[#18181B] mb-2 break-all">
                    HMPSPI@hamzanwadi.ac.id
                </h2>
                <p class="text-sm sm:text-base md:text-[16px] text-[#52525B] leading-relaxed">
                    Butuh informasi lebih lanjut atau ingin menyampaikan pertanyaan? Kirimkan email kepada kami, kami akan
                    merespons secepat mungkin.
                </p>
            </div>
        </div>

        <!-- Google Maps -->
        <div class="flex justify-center mt-10">
            <div class="w-full md:w-4/5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.487762563463!2d116.52707867357087!3d-8.645072691401738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4eb0976cb78f%3A0x1dfeb9992591f5bf!2sHAMZANWADI%20UNIVERSITY!5e0!3m2!1sen!2sid!4v1751904231873!5m2!1sen!2sid"
                    class="w-full h-56 sm:h-64 md:h-80 border-3 border-[#18181B] rounded-3xl duration-300 transition-all hover:border-b-7"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
@endsection
