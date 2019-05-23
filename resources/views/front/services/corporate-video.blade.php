@extends('layouts.app')

@section('content')

<!-- Corporate Video Banner -->
<div class="container-fluid service-banner" style="background-image: url('/images/services-banner/corporate-desktop.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12">
				<div class="title-heading">
					<h1>Experts At Creating <br>Professional & Concise <br><strong>Corporate Videos</strong></h1>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<!-- Form Area -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-12">
				<a href="{{ url('/contact') }}" class="call-to-action"> Enquire Now</a>
				<img src="/images/trust-pilot-logo.png"/>
			</div>
			<div class="col-md-3 col-sm-12">
				<p><strong>Call Us: <a href="tel:+441702749662">+441702749662</a></strong></p>
				<img src="/images/google-partner-logo.png"/>
			</div>
		</div>
	</div>
</div>
<!-- Corporate Video Banner -->

@endsection