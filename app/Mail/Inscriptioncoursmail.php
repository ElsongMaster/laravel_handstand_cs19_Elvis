<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Inscriptioncoursmail extends Mailable
{
    use Queueable, SerializesModels;
    public $dataClasse = [];
    public $userdata = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $dataClasse, Array $userdata)
    {
        $this->dataClasse = $dataClasse;
        $this->userdata = $userdata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('front.emails.inscriptionmail');
    }
}
