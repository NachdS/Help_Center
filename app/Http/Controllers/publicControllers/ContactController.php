<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\Models\Coordonnee;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Show coordonnees data
     *
     * @param Coordonnees $coordonnees
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Coordonnee $coordonnees)
    {
        $allcontacts = Coordonnee::first();
        $page ='/contact_us';

        return view('public_interface.contact_us', compact('allcontacts','page'));
    }

     public function sendEmail(Request $request)
    {
        $details=[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
        ];

        Mail::to('sakly.souhailaaa@gmail.com')->send(new ContactMail($details));
        return back()->with('message-sent', 'Votre massage a été envoyé avec succes');
    }
}
