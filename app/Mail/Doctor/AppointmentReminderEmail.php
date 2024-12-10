<?php

namespace App\Mail\Doctor;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AppointmentReminderEmail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('emails.doctor.appointment-reminder-email')
                    ->subject($this->data['subject'])
                    ->with('data', $this->data);
    }
}
