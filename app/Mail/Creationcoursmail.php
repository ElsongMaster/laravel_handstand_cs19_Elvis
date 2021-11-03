<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Creationcoursmail extends Mailable
{
    use Queueable, SerializesModels;

    use Queueable, SerializesModels;
    public $dataClasse = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $dataClasse)
    {
        $this->dataClasse = $dataClasse;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('front.emails.creationmail');

    }
}
