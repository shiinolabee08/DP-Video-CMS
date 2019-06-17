<?php

namespace App\Http\Controllers;

use App\FormSubmission;
use App\Mail\ReplyToSender;

use Illuminate\Http\Request;

class FormSubmissionController extends Controller
{
    protected $model_class = 'App\FormSubmission';
    
    protected $model_class_names = [ 'form-submission', 'form-submissions' ];

    protected $fields_to_update = [ 'full_name', 'email', 'phone_number', 'more_info', 'contact_form_id' ];

    /**
    * Search/Find records via search string
    * @param \Illuminate\Http\Request
    *
    * @return \Illuminate\Http\Response
    **/
    public function search( Request $request )
    {
        $requestData = $request->query();

        $data = $this->model_class::where('full_name', 'like', '%' . $requestData['search'] .'%')
        						->orWhere('email', 'like', '%' . $requestData['search'] . '%')->paginate(10);

        return view($this->model_class_names[1] . '.index', compact('data',$data));
    }

    public function replyToSender( $id )
    {
    	$form_submission = FormSubmission::findOrFail($id);

    	return view($this->model_class_names[1] . '.reply-to-sender', [ 'form_submission' => $form_submission ]);
    }

    public function submitReplyToSender( $id, Request $request )
    {
    	$form_submission = FormSubmission::findOrFail($id);

    	Mail::to($form_submission->email)->send(new ReplyToSender($form_submission, $request->all()));

    	if ( Mail::failures() ) {
    		$request->session()->flash('message', 'Sending of reply email has not been sent. Try later.');
    	} else {
    		$request->session()->flash('message', 'Reply email successfully sent.');
    	}

        return redirect("/admin/{$this->model_class_names[1]}");
    }

}
