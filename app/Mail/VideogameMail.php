<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VideogameMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * 
     * 
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * 
     * 
     * @return $this
     */


    public function build()
    {
        $nombre = "El rincon de Angen";
        return $this->view('mails.videogame', ['nombre' => $nombre]);
    }
}
