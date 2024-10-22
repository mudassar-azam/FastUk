<?php

namespace App\Mail;

use App\Models\user_booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Invoice extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param  user_booking  $message
     * @return void
     */
    public function __construct(user_booking $message)
    {
        $this->data = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('invoice')
                    ->subject('New Booking Received');
                   
    }
}
