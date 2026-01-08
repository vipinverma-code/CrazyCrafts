<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    public function __construct($orderData)
    {
        $this->order = $orderData;
    }

    public function build()
    {
        return $this->subject('New Order Received')
            ->view('emails.order');
    }
}
