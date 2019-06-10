@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="/admin/contact-forms" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <h3>Add New Contact Form</h3>
                <hr>                    
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="name">Send To(Email)</label>
                    <input type="text" class="form-control" name="mail_to">
                </div>
                <div class="form-group">
                    <label>Send To(Subject)</label>                        
                    <input type="text" class="form-control" name="mail_to_subject">
                </div>

                <div class="form-group">                    
                    <label>From(Email)</label>
                    <input type="email" class="form-control" name="mail_from">
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea name="body" rows="9" cols="25" class="form-control"></textarea>
                </div>                

                <div class="form-group">
                    <label>Mail Options</label>
                    <textarea name="mail_options" rows="4" cols="25" class="form-control"></textarea>
                </div>
              
                <div class="form-group">
                    <label for="name">Publish this?</label>
                    <select class="form-control" name="published">
                        <option value="1" selected="">Yes</option>
                        <option value="0">No(set as draft)</option>          
                    </select>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <!-- Blank Area -->
                <h3>Form Builder</h3>
                <hr>
                <div class="available-tags">
                    <h4><strong>Available Tags</strong></h4>
                    <div class="tags">
                        <ul>
                            <li>[email]</li>
                            <li>[full_name]</li>
                            <li>[phone_number]</li>
                            <li>[more_info]</li>
                        </ul>                    
                    </div>
                    <div class="form-group">
                        <label>Form(Html)</label>
                        <div class="alert alert-info">* Don't include <strong>form tag</strong> as it is already wrapped when rendered.</div>
                        <textarea name="form_html" required="required" rows="9" cols="25" class="form-control"></textarea>
                    </div>
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-5 col-sm-12">
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
                <a href="{{ URL::to('/admin/contact-forms') }}" class="btn btn-danger"><i class="fa fa-times-circle"></i> Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection