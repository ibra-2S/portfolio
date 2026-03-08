<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('portfolio.contact');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|min:2',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required|min:10',
    ]);

    Contact::create($request->all());

    // Envoyer email
    \Mail::raw("
        Nouveau message de : {$request->name}
        Email : {$request->email}
        Sujet : {$request->subject}
        Message : {$request->message}
    ", function($mail) use ($request) {
        $mail->to('ibrahimsmh01@gmail.com')
             ->subject('Nouveau message - ' . $request->subject);
    });

    return redirect()->route('contact')->with('success', 'Message envoyé avec succès !');
}
}
