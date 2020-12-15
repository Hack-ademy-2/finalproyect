<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RevisorRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $requestRevisor;

    
    public function __construct($newRevisor)
    {
        $this->name = $newRevisor['name'];
        $this->email = $newRevisor['email'];
        $this->requestRevisor = $newRevisor['requestRevisor'];
    }

    public function build()
    {
        return $this->view('layouts.admin-email');
    }
}
