<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contact');
    }

    public function store(Request $request){
        $request->validate([
            'Nombre'=>'required',
            'Email'=>'required',
            'Asunto'=>'required',
            'Mensaje'=>'required'
        ]);

        $correo = new ContactMailable($request->all());

        //destino del correo
        //Mail::to('armandoher01@gmail.com')->send($correo);
        Mail::mailer('mailgun')->to('computronsalta@gmail.com')->send($correo);
     
        return redirect()->route('contact')->with('aviso','El mensaje se envio con exito!');
    }
}
