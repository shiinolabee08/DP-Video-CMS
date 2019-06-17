<?php

namespace App\Mail;

use App\FormSubmission;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReplyToSender extends Mailable
{
    use Queueable, SerializesModels;

    protected $form_submission;

    protected $reply_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( FormSubmission $form_submission, $reply_data = array() )
    {
        $this->form_submission = $form_submission;
        $this->reply_data = $reply_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from([ 'address' => $this->reply_data['from_email'], 'name' => $ths->reply_data['from_name'] ])
                        ->subject('DP Video Enquiry Reply')
                        ->view('emails.reply-to-sender')
                        ->with([ 'senderName' => $this->form_submission->full_name, 'replyBody' => $this->reply_data['body'] ]);
    }
}
