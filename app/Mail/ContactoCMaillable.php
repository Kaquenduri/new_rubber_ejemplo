<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoCMaillable extends Mailable
{
    use Queueable, SerializesModels;

    public $contenido;

    public function __construct($contenido)
    {
        $this->contenido = $contenido;

        $this->with = ['contenido' => $contenido];
    }

   
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Empresa contratante', // Asunto de correo
        );
    }

    
    public function content(): Content
    {
        return new Content(
            view: 'emails.contacto', //Vista de donde sacara el contenido 
        );
    }
   
    public function attachments(): array
    {
        return [];
    }
}
