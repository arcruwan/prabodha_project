<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class verifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user_email;
    public $validToken ; 
    public $user_name ;
    public $encryptedUserId;
    public $encryptedToken ;

    /**
     * Create a new message instance.
     */
    public function __construct($user_email, $validToken, $user_name, $encryptedUserId, $encryptedToken)
    {
        $this->user_email = $user_email;
        $this->validToken = $validToken;
        $this->user_name = $user_name;
        $this->encryptedUserId = $encryptedUserId;
        $this->encryptedToken = $encryptedToken;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Verify Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'auth.email.emailVerification',
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
