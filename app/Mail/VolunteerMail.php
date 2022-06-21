<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VolunteerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $country;

    public function __construct($first_name, $last_name, $email, $phone_number, $country)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
         $this->phone_number = $phone_number;
         $this->email = $email;
         $this->country = $country;
        $this->phone_number = $phone_number;
    }

    public function build()
    {
        return $this->markdown('emails.volunteer');
    }
}
