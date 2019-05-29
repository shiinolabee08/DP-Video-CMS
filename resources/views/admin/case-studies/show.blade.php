@extends('layouts.admin')

@section('content')
	<div class="container">
        <h1>View Record {{ $case_study->title }}</h1>

	    <div class="jumbotron text-center">
	        <p>
	            <strong>ID:</strong> {{ $case_study->id }}<br>
	            <strong>Title:</strong> {{ $case_study->title }}<br>
	            <strong>Video Url:</strong> {{ $case_study->youtube_video_url }}<br>
	            <strong>Category:</strong> {{ $case_study->case_study_category_id }}<br>
	        </p>
	        <a href="{{ URL::to('/admin/case-studies') }}" class="btn btn-danger"><i class="fa fa-history"></i> Back To List</a>
	    </div>
    </div>
@endsection