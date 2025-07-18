<?php

use App\Models\Kepengurusan;
use App\Models\Pencapaian;
use App\Models\Artikel;
use App\Models\News;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
// use App\Http\Controllers\Frontend\RegistrasiController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\BeasiswaController;


Route::get('/', function () {
    return view('welcome');
});
// Artikel routes
Route::get('/artikel', function () {
    $artikels = Artikel::latest()->paginate(6);
    return view('artikel.index', compact('artikels'));
})->name('artikel.index');

Route::get('/artikel/{slug}', function ($slug) {
    $artikel = Artikel::where('slug', $slug)->firstOrFail();
    return view('artikel.show', compact('artikel'));
})->name('artikel.show');


Route::get('/artikel', function () {
    $artikels = Artikel::latest()->paginate(6);
    $artikelLainnya = Artikel::inRandomOrder()->take(5)->get(); // atau ->latest()->take(5)
    return view('artikel.index', compact('artikels', 'artikelLainnya'));
})->name('artikel.index');


// News routes
Route::get('/berita', function () {
    $news = News::latest()->paginate(6);
    return view('news.index', compact('news'));
})->name('news.index');

Route::get('/berita/{slug}', function ($slug) {
    $item = News::where('slug', $slug)->firstOrFail();
    return view('news.show', compact('item'));
})->name('news.show');

Route::get('/berita', function () {
    $news = News::latest()->paginate(6);
    $beritaLainnya = News::inRandomOrder()->take(5)->get();
    return view('news.index', compact('news', 'beritaLainnya'));
})->name('news.index');

// Pencapaian routes
Route::get('/pencapaian', function () {
    $pencapaian = Pencapaian::latest()->paginate(9);
    return view('pencapaian.index', compact('pencapaian'));
})->name('pencapaian.index');

Route::get('/pencapaian/{slug}', function ($slug) {
    $item = Pencapaian::where('slug', $slug)->firstOrFail();
    return view('pencapaian.show', compact('item'));
})->name('pencapaian.show');

Route::get('/pencapaian', function () {
    $pencapaian = Pencapaian::latest()->paginate(6);
    $pencapaianLainnya = Pencapaian::inRandomOrder()->take(5)->get(); // atau ->latest()
    return view('pencapaian.index', compact('pencapaian', 'pencapaianLainnya'));
})->name('pencapaian.index');

// Kepengurusan routes
Route::get('/kepengurusan', function () {
    $pengurus = Kepengurusan::orderBy('position_title')->get();
    return view('kepengurusan.index', compact('pengurus'));
})->name('kepengurusan.index');

// Gallery routes
Route::get('/galeri', function () {
    $galeri = Gallery::latest()->paginate(12);
    return view('gallery.index', compact('galeri'));
})->name('gallery.index');


// Feedback routes
Route::get('/feedback', function () {
    return view('feedback');
});
// Feedback routes
Route::get('/registrasi', function () {
    return view('registrasi.index');
});

Route::get('/Events', function () {
    return view('Events.index');
})->name('Events.index');

// Tentang Kami
Route::get('/about', function () {
    return view('about.index');
})->name('about.index');

//Kontak Kami
Route::get('/kontak', function () {
    return view('kontak.index');
})->name('kontak.index');

// Visi misi
Route::get('/visi-misi', function () {
    return view('visi-misi.index');
})->name('visi-misi.index');

//Kabinet Zeta
Route::get('/kabinet', function () {
    return view('kabinet.index');
})->name('kabinet.index');

// Beasiswa

Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa.index');
Route::get('/beasiswa/{slug}', [BeasiswaController::class, 'show'])->name('beasiswa.show');

Route::post('/registrasi', [RegistrasiController::class, 'store'])->name('registrasi.store');


Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');