@extends('layouts.admin')

@section('content')
  <div class="container">
    <h1>Edit Employee Details</h1>
    <hr>
     <form action="{{url('case-studies', [$case_study->id])}}" method="post">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Title</label>
        <input type="text" class="form-control" value="{{$case_study->title}}" name="title">
      </div>
      <div class="feature-image">
        <img src="{{ URL::to('/storage/case-studies/' . $case_study->id . '/' . $case_study->feature_image) }}"/>
      </div>
      <div class="form-group">
        <label for="name">New Feature Image?</label>
        <input type="file" class="form-control" placeholder="Feature Image" name="feature_image">
      </div>
      <div class="form-group">
        <label for="description">Email Address</label>
        <input type="text" class="form-control" value="{{$case_study->youtube_video_url}}" name="youtube_video_url" placeholder="Youtube Video Link">
      </div>
      
      <div class="form-group">
        <label for="name">Publish this?</label>
        <select class="form-control" name="published">
          <option value="1">Yes</option>
          <option value="0">No(set as draft)</option>          
        </select>
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
      <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
  </div>
@endsection