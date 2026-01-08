<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerOrderMail extends Mailable
{
    use Queueable, SerializesModels;
    public $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this->subject('Thank You! Your Order is Confirmed')
            ->view('emails.customer-order');
    }
}
