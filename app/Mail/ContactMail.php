<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $msg;
    public $name;
    public $email;

    public function __construct($content)
    {
        $this->email = $content['email'];
        $this->subject = $content['subject'];
        $this->msg = $content['message'];
        $this->name = $content['name'];
    }

    public function build()
    {
        return $this->from($this->email)
            ->subject($this->subject)
            ->view('mails.contact');
    }
}
