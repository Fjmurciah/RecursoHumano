<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviaCorreo extends Mailable
{
    use Queueable, SerializesModels;

    public $mensajecorreo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensajecorreo)
    {
        //
        $this->mensajecorreo = $mensajecorreo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Correo de Gestión talento')->view('emails.correo');
    }
}
