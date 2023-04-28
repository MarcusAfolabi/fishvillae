<?php

namespace App\Mail;

use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriber;

    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    public function build()
    {
        $url = route('verify.email', ['token' => $this->subscriber->verification_token] . '?expires=' . now()->addDay()->timestamp);

        return $this->view('emails.verify-email')
            ->with(['url' => $url]);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Verify Your Email',
        );
    }

    
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.verify-email',
        );
    }

    
    public function attachments(): array
    {
        return [];
    }
}
