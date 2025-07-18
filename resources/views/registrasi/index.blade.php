@extends('layouts.app')

@section('title', 'Form Registrasi')

@section('content')
    <div class="container flex flex-col justify-start max-w-3xl p-4 px-20 mt-2 ">
        <h1 class="mb-10 text-[40px] font-black text-left text-[#18181B]">Rekrutmen Anggota</h1>
        @if (session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('registrasi.store') }}" class="-mt-4">
            @csrf

            <div class="mb-4">
                <label class="block font-semibold text-[#18181B]">NIM</label>
                <input type="text" name="nim"
                    class="block w-full p-2 mt-1 text-lg font-semibold placeholder-opacity-50 border-2 shadow-sm rounded-xl border-[#18181B] placeholder-[#52525B] placeholder:opacity-30"
                    placeholder="210xxxxx" value="{{ old('nim') }}">
                @error('nim')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-[#18181B]">Nama</label>
                <input type="text" name="nama"
                    class="block w-full p-2 mt-1 text-lg font-semibold placeholder-opacity-50 border-2 shadow-sm rounded-xl border-[#18181B] placeholder-[#52525B] placeholder:opacity-30"
                    placeholder="nama kamu" value="{{ old('nama') }}">
                @error('nama')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-[#18181B]">Email</label>
                <input type="email" name="email"
                    class="block w-full p-2 mt-1 text-lg font-semibold placeholder-opacity-50 border-2 shadow-sm rounded-xl border-[#18181B] placeholder-[#52525B] placeholder:opacity-30"
                    placeholder="kamu@gmail.com" value="{{ old('email') }}">
                @error('email')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-[#18181B]">No HP</label>
                <input type="text" name="no_hp"
                    class="block w-full p-2 mt-1 text-lg font-semibold placeholder-opacity-50 border-2 shadow-sm rounded-xl border-[#18181B] placeholder-[#52525B] placeholder:opacity-30"
                    placeholder="081-xxx-xxx-xxx" value="{{ old('no_hp') }}">
                @error('no_hp')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-[#18181B]">Semester</label>
                <select name="semester"
                    class="block text-[#52525B] w-full p-2 mt-1 text-lg font-semibold placeholder-opacity-50 border-2 shadow-sm rounded-xl border-[#18181B] placeholder-[#52525B] placeholder:opacity-30">
                    <option value="">Pilih Semester</option>
                    @foreach (['2', '4', '6', '8'] as $smt)
                        <option value="{{ $smt }}" {{ old('semester') == $smt ? 'selected' : '' }}>
                            Semester {{ $smt }}
                        </option>
                    @endforeach
                </select>
                @error('semester')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-[#18181B]">Kelas</label>
                <select name="kelas"
                    class="block text-[#52525B] w-full p-2 mt-1 text-lg font-semibold placeholder:opacity-30 border-2 shadow-sm rounded-xl border-[#18181B] placeholder-[#52525B] ">
                    <option value="" class="">Pilih Kelas</option>
                    @foreach (['A', 'B', 'C'] as $kelas)
                        <option value="{{ $kelas }}" {{ old('kelas') == $kelas ? 'selected' : '' }}
                            class="border-[#18181B] border-2 rounded-3xl">
                            Kelas {{ $kelas }}
                        </option>
                    @endforeach
                </select>
                @error('kelas')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit"
                class="mb-10 bg-[#F75801] text-white px-4 py-3 rounded-2xl border-b-[7px] border-[#18181B] border-2 hover:bg-orange-600 w-full transition duration-200 font-bold text-[16px]">
                Kirim
            </button>
        </form>
    </div>
@endsection
