<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $inputs;
    public $is_admin;

    /**
     * Create a new message instance.
     * @param array $inputs
     * @param bool $is_admin
     * @return void
     */
    public function __construct($inputs, $is_admin = false)
    {
        $this->inputs = $inputs;
        $this->is_admin = $is_admin;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address'), config('mail.from.name')),
            subject: $this->is_admin ? '【株式会社Coredesia】管理者宛のお問い合わせ' : '【株式会社Coredesia】お問い合わせありがとうございます',
        );
    }

    public function content(): Content
    {
        $view = $this->is_admin ? 'emails.admin' : 'emails.thanks';
        return new Content(
            view: $view,
        );
    }
}