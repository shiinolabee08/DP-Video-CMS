<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $table = 'contact_forms';

    protected $fillable = [ 'name', 'mail_to', 'mail_to_subject', 'mail_from', 'body', 'form_html', 'mail_options' ];

    public function submissions()
    {
    	return $this->hasMany('App\FormSubmission', 'contact_form_id');
    }
}
