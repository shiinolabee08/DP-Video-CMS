<?php

namespace App\Mail;


use App\FormSubmission;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnquirySubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $form_submission;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( FormSubmission $form_submission )
    {
        $this->form_submission = $form_submission;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->form_submission->email)->subject('New DP Video Enquiry')->view('emails.inquiry-submission');
    }
}
