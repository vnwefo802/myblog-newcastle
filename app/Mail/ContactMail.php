<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $secondname;
    public $phonenumber;
    public $country;
    public $email;
    public $subject;
    public $message;

    public function __construct($firstname, $secondname, $phonenumber, $country, $email, $subject, $message)
    {
        $this->firstname = $firstname;
        $this->secondname = $secondname;
         $this->phonenumber = $phonenumber;
         $this->country = $country;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function build()
    {
        return $this->markdown('emails.contact');
    }
}
