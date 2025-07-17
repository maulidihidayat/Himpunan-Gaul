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
        ]);

        Registrasi::create($validated);

        return redirect()->back()->with('success', 'Terima kasih atas feedback Anda!');
    }
}
