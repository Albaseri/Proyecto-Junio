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

        // Enviar el correo electrónico
        try {
            Mail::to('riasedal@gmail.com')->send(new ContactoMaillabe($request->input('nombre'), $request->input('correo'), $request->input('mensaje')));
        } catch (\Exception $e) {
            // Manejar cualquier error que ocurra al enviar el correo electrónico
            return redirect()->back()->with('error', 'Error al enviar el correo electrónico.');
        }

        // Redirigir de vuelta con un mensaje de éxito si el correo se envió correctamente
        return redirect()->back()->with('mensaje', 'Correo electrónico enviado correctamente.');
    }
    }
