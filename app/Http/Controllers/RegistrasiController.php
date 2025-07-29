<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi;

class RegistrasiController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|string|max:20|unique:registrasis,nim',
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'no_hp' => 'required|string|max:15',
            'semester' => 'required|string|max:10',
            'kelas' => 'required|string|max:10',
        ], [
            'nim.required' => 'NIM tidak boleh kosong!',
            'nim.unique' => 'NIM sudah terdaftar!',
            'nama.required' => 'Nama tidak boleh kosong!',
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Format email tidak valid!',
            'no_hp.required' => 'Nomor HP tidak boleh kosong!',
            'semester.required' => 'Semester tidak boleh kosong!',
            'kelas.required' => 'Kelas tidak boleh kosong!',
        ]);

        Registrasi::create($validated);

        return redirect()->back()->with('success', "Terima kasih, data {$validated['nama']} akan diproses oleh admin! 😂");
    }
}
