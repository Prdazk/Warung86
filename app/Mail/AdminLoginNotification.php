<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminLoginNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('Login Admin - ' . $this->user->name)
                    ->view('emails.admin_login')
                    ->with([
                        'name' => $this->user->name,
                        'email' => $this->user->email,
                    ]);
    }
}
