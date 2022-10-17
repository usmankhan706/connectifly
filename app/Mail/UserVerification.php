<?php

namespace App\Mail;

use PharIo\Manifest\Email;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserVerification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $token = Str::random(64);
        $url = Config::get('app.url')."user/verify/".$token."?email=".$this->email;
        return $this->subject("User Email Verification")->markdown('emails.user-verification')->with("url", $url);
    }
}
