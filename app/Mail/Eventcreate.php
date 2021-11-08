<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Eventcreate extends Mailable
{
    use Queueable, SerializesModels;
    public $eventdata = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $eventdata )
    {
        $this->eventdata  = $eventdata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('front.emails.eventcreate');
    }
}
