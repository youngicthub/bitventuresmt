<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VisitorNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $ip;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ip)
    {
        $this->ip = $ip;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Visitor Alert')
                    ->view('emails.visitor_notification')
                    ->with([
                        'ip' => $this->ip,
                    ]);
    }
}
