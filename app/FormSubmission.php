<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    protected $fillable = [ 'full_name', 'email', 'phone_number', 'more_info', 'contact_form_id' ];
}
