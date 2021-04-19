<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        // ->attachFromStorage($this->user['CVs'])
        return $this->from('mazisi@gmail.com')
        ->markdown('template.client.applicationform')
        ->with([
            'message' => $this->user['message'],
            'email' => $this->user['email'],
            'position' => $this->user['position'],
            'full_name' => $this->user['full_name'],
        ]);

      
    }
}
