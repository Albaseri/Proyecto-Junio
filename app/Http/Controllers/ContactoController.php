<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMaillabe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{

    public function mostrarFormulario()
    {
        return view('contacto');
    }

    public function enviarCorreo(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        // Enviar el correo a mi cuenta riasedal
        try {
            Mail::to('riasedal@gmail.com')->send(new ContactoMaillabe($request->input('nombre'), $request->input('correo'), $request->input('mensaje')));
        } catch (\Exception $e) {
            // Error al enviar el correo electrónico
            return redirect()->route('contacto.mostrar')->with('error', 'Error al enviar el correo electrónico.');
        }

        // Mensaje de éxito si se envía bien
        return redirect()->route('welcome')->with('mensaje', 'El mensaje ha sido enviado');
    }
}
