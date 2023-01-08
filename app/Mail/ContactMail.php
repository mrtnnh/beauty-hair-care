<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
  use Queueable, SerializesModels;

  /**
  * Create a new message instance.
  *
  * @return void
  */
  public function __construct()

  {
    
  }

  /**
  * Get the message envelope.
  *
  * @return \Illuminate\Mail\Mailables\Envelope
  */
  public function envelope()
  {
    return new Envelope(
      subject: 'お問い合わせ',
    );
  }

  /**
  * Get the message content definition.
  *
  * @return \Illuminate\Mail\Mailables\Content
  */
  public function content()
  {
    return new Content(
      view: 'emails.contact',
    );
  }

  /**
  * Get the attachments for the message.
  *
  * @return array
  */
  public function attachments()
  {
    return [

    ];
  }

  public function build()
  {
    // メールの設定
    return $this
    ->from('example@gmail.com')
    ->subject('自動送信メール')
    ->view('send');
  }
}
