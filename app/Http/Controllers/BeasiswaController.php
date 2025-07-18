<?php
namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function index()
    {
        $beasiswas = Beasiswa::latest()->get(); // ambil semua data beasiswa
        return view('beasiswa.index', compact('beasiswas')); // kirim ke view
    }

    public function show($slug)
    {
        $beasiswa = Beasiswa::where('slug', $slug)->firstOrFail();
        return view('beasiswa.show', compact('beasiswa'));
    }
}
