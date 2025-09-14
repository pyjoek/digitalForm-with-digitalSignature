<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $pdfPath;

    public function __construct($data, $pdfPath)
    {
        $this->data = $data;
        $this->pdfPath = $pdfPath;
    }

    public function build()
    {
        return $this->subject('New Responsibility Form Submitted')
                    ->markdown('emails.form')   // markdown view
                    ->attach($this->pdfPath, [
                        'as' => 'form.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}
