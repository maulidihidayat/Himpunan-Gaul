@extends('layouts.app')
@section('title', 'Saran & Komentar')
@section('content')
    <div class="flex items-center justify-center min-h-screen p-3">
        <div class="w-full max-w-2xl p-12 space-y-4">
            <h1 class="mb-2 text-[40px] font-black text-center text-[#18181B]">Komentar & Saran</h1>
            <p class="text-[#52525B] font-medium text-center text-[18px] leading-relaxed">
                Hallo bro & sist! 🙌 Kami super excited banget buat dengerin kritik
                dan saran dari kalian semua! Jangan ragu, kasih tahu kami pendapat
                kalian ya! Kita pengen bareng-bareng bikin ini jadi lebih keren!
                Gimana menurut kalian? Yuk, share ide-ide menarik kamu! 🚀🚀
            </p>
            <div class="flex flex-col justify-center max-w-xl mx-auto mt-6 mb-10">
                @if (session('success'))
                    <div class="p-4 text-center text-green-700 bg-green-200 rounded-xl animate-pulse">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('feedback.store') }}" class="space-y-6">
                    @csrf

                    <!-- Name Input -->
                    <div class="">
                        <label htmlFor="name" class="block text-[18px] font-bold text-[#18181B] ">Nama Kamu:</label>
                        <input type="text" name="sender_name" placeholder="Nama Anda" required
                            value="{{ old('sender_name') }}"
                            class="block w-full p-4 mt-1 text-lg font-semibold placeholder-opacity-50 border-3 shadow-sm rounded-xl border-[#18181B] placeholder-[#52525B]"
                            placeholder="Udin dindun" />
                    </div>

                    <!-- Email Input -->
                    <div class="relative group">
                        <label htmlFor="email" class="block text-[18px] font-bold text-[#18181B] ">Email:</label>
                        <input type="email" name="sender_email" placeholder="you@gmail.com" required
                            value="{{ old('sender_email') }}"
                            class="block w-full p-4 mt-1 text-lg font-semibold placeholder-opacity-50 border-3 shadow-sm rounded-xl border-[#18181B] placeholder-[#52525B]"
                            placeholder="Nama Kamu" />
                    </div>

                    <!-- Message Textarea -->
                    <div class="relative group">
                        <label htmlFor="message" class="block text-[18px] font-bold text-[#18181B] ">Pesan dan
                            Saran:</label>
                        <textarea name="message" placeholder="Pesan Anda" required rows="4"
                            class="block w-full p-4 mt-1 text-lg font-semibold placeholder-opacity-50 border-3 shadow-sm rounded-xl border-[#18181B] placeholder-[#52525B]"
                            placeholder="Nama Kamu">{{ old('message') }}</textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="bg-orange-500 text-white px-4 py-4 rounded-2xl border-b-[7px] border-[#18181B] border-3 hover:bg-orange-600 w-full transition duration-200 font-bold text-[16px]">
                        Kirim
                    </button>
                </form>
            </div>
        </div>
    @endsection
