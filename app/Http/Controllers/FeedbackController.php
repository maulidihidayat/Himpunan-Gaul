<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender_name' => 'required|max:100',
            'sender_email' => 'required|email|max:100',
            'message' => 'required',
        ]);

        Feedback::create([
            'sender_name' => $validated['sender_name'],
            'sender_email' => $validated['sender_email'],
            'message' => $validated['message'],
            'send_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Terima kasih atas feedback Kamu!');
    }
}

