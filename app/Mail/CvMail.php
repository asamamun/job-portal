<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CvMail extends Mailable
{
    use Queueable, SerializesModels;


    public $subject;
    public $cvlink;
    /**
     * Create a new message instance.
     */
    public function __construct(string $subject, string $cvlink)
    {
        $this->subject = $subject;
        $this->cvlink = $cvlink;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.cvmail',
            with: [
                'subject' => $this->subject,
                'cvlink' => $this->cvlink,
                'name' => auth()->user()->name,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
