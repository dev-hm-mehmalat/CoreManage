<?php


namespace App\Mail;

use Illuminate\Mail\Mailable;

class UpdateNotification extends Mailable
{
    public $contentMessage;  // Änderung hier

    public function __construct($message)
    {
        $this->contentMessage = $message;  // und hier
    }

    public function build()
    {
        return $this->subject('TYPO3-Update erforderlich')->view('emails.update-notification');
    }
}
