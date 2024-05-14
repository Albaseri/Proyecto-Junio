<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMaillabe extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Nuevo mensaje de un usuario';
    public $nombre;
    public $correo;
    public $mensaje;

    public function __construct($nombre, $correo, $mensaje)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->mensaje = $mensaje;
    }

    public function build()
    {
        return $this->from($this->correo, $this->nombre)
                    ->view('correoHTML.correoHTML'); // Asegúrate de tener una vista llamada 'correo.contacto'
    }
    
}
