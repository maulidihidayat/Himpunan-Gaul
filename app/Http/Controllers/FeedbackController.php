<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender_name' => 'required|string|max:100',
            'sender_email' => 'required|email|max:100',
            'message' => 'required|string',
        ], [
            'sender_name.required' => 'Nama pengirim tidak boleh kosong!',
            'sender_name.max' => 'Nama pengirim maksimal 100 karakter!',
            'sender_email.required' => 'Email pengirim tidak boleh kosong!',
            'sender_email.email' => 'Format email tidak valid!',
            'sender_email.max' => 'Email maksimal 100 karakter!',
            'message.required' => 'Pesan tidak boleh kosong!',
        ]);

        Feedback::create([
            'sender_name' => $validated['sender_name'],
            'sender_email' => $validated['sender_email'],
            'message' => $validated['message'],
            'send_at' => now(),
        ]);

        return redirect()->back()->with('success', "Terima kasih atas feedback kamu, {$validated['sender_name']}! 😂");
    }
}
