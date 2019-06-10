<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    protected $model_class = 'App\ContactForm';
    
    protected $model_class_names = [ 'contact-form', 'contact-forms' ];

    protected $fields_to_update = [ 'name', 'mail_to', 'mail_to_subject', 'mail_from', 'body', 'form_html', 'mail_options' ];

    protected $is_redirect_to_index = true;

    /**
     * Renders the form for creating a new contact_form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( $this->model_class_names[1] . '.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactForm  $contact_form
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $contact_form)
    {   
        return view('contact-forms.edit', [ 'contact_form' => $contact_form ]);
    } 

    /**
    * Search/Find records via search string
    * @param \Illuminate\Http\Request
    *
    * @return \Illuminate\Http\Response
    **/
    public function search( Request $request )
    {
        $requestData = $request->query();

        $data = $this->model_class::where('name', 'like', '%' . $requestData['search'] .'%')->paginate(10);

        return view($this->model_class_names[1] . '.index', compact('data',$data));
    } 
}
