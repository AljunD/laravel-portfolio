<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'user_message' => $request->message, // <-- renamed
        ];

        Mail::send('emails.contact', $data, function ($mail) use ($data) {
            $mail->to('aljundalman12@gmail.com')
                ->subject('New Contact Form Message from ' . $data['name']);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
