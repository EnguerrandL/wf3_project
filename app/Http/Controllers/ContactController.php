<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store()
    {
        $data = request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required',
        ]);

        Mail::to('contact@zenetbeaute.fr')->send(new ContactMail($data));

        return redirect('contact')->with('message', 'Votre message a bien été envoyé.');
    }
}
