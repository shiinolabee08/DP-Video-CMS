@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <h3>Reply To Sender</h3>
            <hr>
            <div class="info">
                <h3>Enquiry Information</h3>
                <label><strong>Sender's Name :</strong> {{$form_submission->full_name}}</label><br>
                <label><strong>Sender's Email :</strong> {{$form_submission->email}}</label><br>
                <p><strong>Content Body:</strong><br>{{ $form_submission->more_info }}</p>
            </div>
            <form action="{{ url('/admin/form-submissions/send-reply', [$form_submission->id]) }}" method="post">
                <!-- <input type="hidden" name="_method" value="PUT"> -->
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">From(Name)</label>
                    <input type="text" class="form-control" name="from_name" value="DP Video">
                </div>
                <div class="form-group">
                    <label for="name">From(Email)</label>
                    <input type="email" class="form-control" name="from_email" value="noreply@digitalpie.video">
                </div>
                <div class="form-group">
                    <label>Reply Body(Content)</label>
                    <textarea name="body" class="form-control" rows="5" cols="15"></textarea>
                </div>                

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
                <a href="{{ URL::to('/admin/form-submissions/') }}" class="btn btn-danger"><i class="fa fa-times-circle"></i> Cancel</a>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection