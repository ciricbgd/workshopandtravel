<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mail extends Controller
{
    public function send(Request $request){

        $request->validate([
            'ime' => 'required|alpha|min:3|max:30',
            'prezime' => 'required|alpha|min:3|max:30',
            'email' => 'required|email',
            'telefon' => ['required', 'regex:/^[+]?[\d]{6,30}$/u']
        ]);

        $ime = $request->get('ime');
        $prezime = $request->get('prezime');
        $email = $request->get('email');
        $telefon = $request->get('telefon');
        $text = $request->get('text');
        

        $naslov = "Workshop&Travel - ".$ime." ".$prezime;
        $tekst = $ime." ".$prezime."\r\n".$email."\r\n".$telefon."\r\n\r\n".$text;
        
        //mail("urosciricjecar@gmail.com", $naslov, $poruka, "From: ".$email."");
        return redirect(url()->previous().'#Kontakt')->with('success', 'Hvala na poruci! Odgovorićemo u najkraćem roku :)');    
    }
}
