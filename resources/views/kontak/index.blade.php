@extends('layouts.app')
@section('title', 'Kontak Kami')

@section('content')
    <section class="container h-screen mx-auto mt-10 px-63">
        <div class="flex flex-col items-center justify-center mx-auto">
            <h1 class="text-[40px] text-[#18181B] font-black ">Kontak Kami</h1>
            <p class="text-[18px] text-[#52525B] font-medium max-w-lg text-center">Kami selalu siap untuk membantu mu dan
                menjawab semua pertnyaan kamu!</p>
        </div>
        <div class="flex items-center justify-center gap-10 mt-4">
            <div class="bg-orange-100 p-10 rounded-3xl border-3 border-[#18181B] transition-all duration-300 hover:border-b-7 hover:cursor-pointer hover:bg-purple-100">
                <a href="https://wa.me/6285857517122?text=Assalamu%27alaikum%2C%20perkenalkan%20nama%20saya....."
                    class="text-[28px] text-[#18181B] font-bold">
                    +6285857517122</a>
                <p class="max-w-sm text-medium">Kami selalu siap membantu! Jika Anda memiliki pertanyaan atau membutuhkan
                    bantuan, jangan ragu untuk
                    menghubungi kami melalui telepon. Tim kami akan dengan senang hati melayani Anda.</p>
            </div>
            <div class=" bg-purple-100 p-10 rounded-3xl border-3 border-[#18181B] transition-all duration-300 hover:border-b-7 hover:cursor-pointer">
                <h1 class="text-[28px] text-[#18181B] font-bold">HMPSPI@hamzanwadi.ac.id</h1>
                <p class="max-w-md text-medium">Butuh informasi lebih lanjut atau ingin menyampaikan pertanyaan? Jangan ragu
                    untuk mengirimkan email kepada kami. Kami akan merespons secepat mungkin untuk memberikan solusi terbaik
                    bagi Anda.</p>
            </div>
        </div>
        <div class="flex items-center justify-center mx-auto mt-10">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.487762563463!2d116.52707867357087!3d-8.645072691401738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4eb0976cb78f%3A0x1dfeb9992591f5bf!2sHAMZANWADI%20UNIVERSITY!5e0!3m2!1sen!2sid!4v1751904231873!5m2!1sen!2sid"
                class="w-4/5 h-60 border-3 border-[#18181B] rounded-3xl duration-300 transition-all hover:border-b-7 "
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
@endsection
