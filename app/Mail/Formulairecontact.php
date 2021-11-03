<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Formulairecontact extends Mailable
{
    use Queueable, SerializesModels;
    public $dataMsg = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataMsg)
    {
        $this->dataMsg = $dataMsg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('front.emails.mailcontact');
    }
}
