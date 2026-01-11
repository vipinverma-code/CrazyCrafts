<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $r)
    {
        $r->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone'   => 'required|digits:10',
            'message' => 'required|min:5'
        ]);

        $data = [
            'name' => $r->name,
            'email' => $r->email,
            'phone'   => $r->phone,
            'message' => $r->message
        ];

        Mail::to('vipinverma4224@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Message sent successfully!');
    }
}
