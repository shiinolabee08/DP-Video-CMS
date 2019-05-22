@extends('layouts.app')

@section('content')
	<div class="container">
	    <h1>View Record {{ $company->name }}</h1>

	    <div class="jumbotron text-center">
	        <p>
	            <strong>Company name:</strong> {{ $company->name }}<br>
	            <strong>Email:</strong> {{ $company->email }}<br>
	            <strong>Website Url:</strong> <a href="https://{{ $company->website_url }}" target="_blank">{{ $company->website_url }}</a>
	            @if( strlen($company->logo) )
	            	<br>
	            	<img src="{{ URL::to('/storage/' . $company->logo) }}"/>
	            @endif
	        </p>
	    </div>
    </div>
@endsection