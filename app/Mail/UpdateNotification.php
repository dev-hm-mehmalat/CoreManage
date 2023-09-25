<?php


namespace App\Mail;

use Illuminate\Mail\Mailable;

class UpdateNotification extends Mailable
{
    public $contentMessage;  // Änderung hier
    public $contendata;

    public function __construct($message,$data)
    {
        $this->contentMessage = $message;  // und hier
        $this->contendata = $data;
    }

    public function build()
    {
        return $this->subject('TYPO3-Update erforderlich')->view('emails.update-notification');
    }
}
