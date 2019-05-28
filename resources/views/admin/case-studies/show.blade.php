@extends('layouts.admin')

@section('content')
	<div class="container">
        <h1>View Record {{ $employee->first_name }} {{ $employee->last_name }}</h1>

	    <div class="jumbotron text-center">
	        <p>
	            <strong>Employee ID:</strong> {{ $employee->id }}<br>
	            <strong>Email:</strong> {{ $employee->email }}<br>
	            <strong>Phone:</strong> {{ $employee->phone }}<br>
	            <strong>Assigned Company :</strong> {{ $employee->companyDetails->name }}
	        </p>
	    </div>
    </div>
@endsection