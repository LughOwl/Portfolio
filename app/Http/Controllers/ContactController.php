<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendFr(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nom'     => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'sujet'   => ['required', 'string', 'max:200'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ]);

        Mail::to('nicolas.bisaga@gmail.com')->send(new ContactMail($data));

        return redirect()->route('fr.contact')->with('success', true);
    }

    public function sendEn(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nom'     => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'sujet'   => ['required', 'string', 'max:200'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ]);

        Mail::to('nicolas.bisaga@gmail.com')->send(new ContactMail($data));

        return redirect()->route('en.contact')->with('success', true);
    }
}
