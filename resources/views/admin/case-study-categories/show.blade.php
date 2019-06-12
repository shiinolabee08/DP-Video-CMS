@extends('layouts.admin')

@section('content')
	<div class="container">
        <h1>View Record {{ $case_study_category->title }}</h1>

	    <div class="jumbotron text-center">
	        <p>
	            <strong>ID:</strong> {{ $case_study_category->id }}<br>
	            <strong>Title:</strong> {{ $case_study_category->title }}<br>
	            <strong>Description:</strong> {{ $case_study_category->description }}<br>
	        </p>
	        <a href="{{ URL::to('/admin/case-study-categories') }}" class="btn btn-danger"><i class="fa fa-history"></i> Back To List</a>
	    </div>
    </div>
@endsection