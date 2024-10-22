<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Message;

class MessageSent extends Mailable
{
    use Queueable, SerializesModels;

    public $emailMessage; // Rename the variable to avoid conflict

    /**
     * Create a new message instance.
     *
     * @param  Message  $message
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->emailMessage = $message; // Use the new variable name
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message_sent')
                    ->subject('New Message Received');
    }
}
