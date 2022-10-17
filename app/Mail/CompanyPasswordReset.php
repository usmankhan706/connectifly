<?php

namespace App\Mail;

use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Auth\PasswordBroker;

class CompanyPasswordReset extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
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
        $token= Str::random(64);
        $reset_url= Config::get('app.url')."/company/reset-password/".$token."?email=".$this->email;
        return $this->subject("Company Password Reset Mail")->markdown('emails.company-password-reset')->with("url", $reset_url);
    }
}
