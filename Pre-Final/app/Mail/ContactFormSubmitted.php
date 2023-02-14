<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $validatedData;

    public function __construct($validatedData)
    {
        $this->validatedData = $validatedData;
    }

    public function build()
    {
        return $this->view('emails.contact-form-submitted')
                    ->subject('New Contact Form Submission');
    }
}
