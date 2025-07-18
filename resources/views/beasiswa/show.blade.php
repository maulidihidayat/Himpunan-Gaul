@extends('layouts.app')

@section('title', 'Informasi Beasiswa')

@section('content')
<div class="container max-w-3xl px-4 py-10 mx-auto">
    <h1 class="mb-4 text-3xl font-extrabold text-gray-800 dark:text-white">
        {{ $beasiswa->title }}
    </h1>

    <div class="mb-2 text-sm text-gray-500 dark:text-gray-400">
        Dipublikasikan oleh {{ $beasiswa->publish_by ?? 'Admin' }} pada 
        {{ \Carbon\Carbon::parse($beasiswa->publish_date)->translatedFormat('d F Y') }}
    </div>

    <div class="my-6">
        <img src="{{ asset('storage/' . $beasiswa->image) }}" 
             alt="Gambar Beasiswa" 
             class="object-cover w-full rounded-xl shadow-md max-h-[400px]" />
    </div>

    <div class="prose max-w-none dark:prose-invert">
        {!! $beasiswa->description !!}
    </div>
</div>
@endsection
