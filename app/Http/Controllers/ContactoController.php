<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMaillabe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function pintarFormulario()
    {
        return view('contactoForm.formulario');
    }

    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'contenido' => ['required', 'string', 'min:10']
        ]);

        try {
            Mail::to('alba@example.com')->send(new ContactoMaillabe(ucfirst($request->nombre), $request->email, ucfirst($request->contenido)));
            return redirect()->route('inicio')->with('mensaje', 'Email enviado con éxito');
        } catch (\Exception $ex) {
            dd("Error en procesarForm") . $ex->getMessage();
            return redirect()->route('inicio')->with('mensaje', 'Email no enviado');
        }

}
}