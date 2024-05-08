<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquiryForm extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->data["email"], $this->data["name"]),
            replyTo: [
                new Address('info@shinkyowa.com', "Shinkyowa International"),
            ],
            subject: 'Vehicle Inquiry Form',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
