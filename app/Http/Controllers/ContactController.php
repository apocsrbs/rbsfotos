<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:8|max:255',
            'message' => 'required|min:10',
        ], [
            'name.required' => 'Venligst udfyld dit navn',
            'name.min' => 'Dit navn skal være mindst 2 tegn',
            'email.required' => 'Venligst udfyld din email',
            'email.email' => 'Venligst indtast en gyldig email',
            'phone.required' => 'Venligst udfyld dit telefonnummer',
            'phone.min' => 'Telefonnummeret skal være mindst 8 tegn',
            'message.required' => 'Venligst skriv en besked',
            'message.min' => 'Beskeden skal være mindst 10 tegn',
        ]);

        try {
            Mail::to('rene.soerensen@gmail.com')->send(new ContactFormMail($validated));
            
            return response()->json([
                'message' => 'Tak for din henvendelse! Jeg vender tilbage hurtigst muligt.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Der skete desværre en fejl. Prøv venligst igen senere.'
            ], 500);
        }
    }
}
