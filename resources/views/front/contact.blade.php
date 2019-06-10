@extends('layouts.app-without-bottom-consultancy-form')

@section('content')

<div class="container-fluid inner-page-header-dark-container contact-page">
	<div class="container">
        <div class="row">
        	<div class="col-md-1 col-sm-12"></div>
            <div class="col-md-10 col-sm-12">
                <div class="title-heading text-center has-primary-border-center">
                    <h1>Get A Free Quote</h1>
                    <h3>Speak to Digital Pie about your video project today! <br>Fill out the form to help us understand your requirements or pick up the phone and speak with one of our experts.</h3>
                </div>
            </div>
            <div class="col-md-1 col-sm-12"></div>
        </div>
        <div class="row">
        	<!-- Form Area -->
			<contact-form-widget v-bind:id="2" v-bind:is-default="true"></contact-form-widget>
			<!-- Form Area -->
        </div>
    </div>
</div>

<div class="container-fluid get-in-touch">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="title-heading">
					<h1>Get in touch.</h1>
				</div>
				<div class="main-heading">
					<p>Say hello! Or maybe just grab a coffee with one of our client relations staff, so we can get to know you and your project better.</p>
					<ul>
						<li><a href="tel:01702 749662"><i class="fa fa-phone"></i> 01702 749662</a></li>
						<li><a href="mailto:info@digitalpie.co.uk"><i class="fa fa-envelope"></i> info@digitalpie.co.uk</a></li>
					</ul>
					<p><strong>Office Opening Hours:</strong> Monday – Friday</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="title-heading">
					<h1>Additional Enquiries.</h1>
				</div>
				<div class="main-heading">
					<p>Got a question? You can find your answer either on the homepage or you can send our client relationship manager an email at:</p>
					<ul>
						<li><a href="mailto:heather@digitalpie.co.uk"><i class="fa fa-envelope"></i> heather@digitalpie.co.uk</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="title-heading">
					<h1>United Kingdom.</h1>
				</div>
				<div class="main-heading">
					<h1>HEAD OFFICE</h1>
					<p>Ryan House, 18 – 19 Aviation Way, Southend on Sea, Essex, SS2 6UN</p>
					<ul>
						<li><a href="https://www.digitalpie.co.uk/" target="_blank"><i class="fa fa-at"></i> www.digitalpie.co.uk</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-sm-12"></div>
		</div>
	</div>
</div>

<!-- Map -->
<div class="container-fluid">
	<div class="row">
		<map-widget></map-widget>
	</div>
</div>
<!-- Map -->

@endsection