@extends('layouts.app')

@section('content')

<div class="container-fluid service-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="title-heading">
					<h1>Making Things Nice &amp; Clear<br> <strong>Explainer Video Production</strong>.</h1>
					<h2>Digital Pie Video’s team of creative professionals<br> specialise in delivering the highest quality of<br> explainer video production for corporate and<br> creative clients all around the world.</h2>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<a href="{{ url('/contact') }}" class="call-to-action"> Enquire Now</a>
						<img src="/images/trust-pilot-logo.png"/>
					</div>
					<div class="col-md-4 col-sm-12">
						<p><strong>Call Us: <a href="tel:01702 749662">01702 749662</a></strong></p>
						<img src="/images/google-partner-logo.png"/>
					</div>
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<!-- Form Area -->
				<contact-form-widget v-bind:id="1"></contact-form-widget>
				<!-- Form Area -->
			</div>
		</div>
	</div>
</div>

<div class="container-fluid inner-page-two-column-container">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>The Proven Way To Really Explain Things Across All Audiences.</h1>
					<h3>An explainer video is a straightforward way to get your message or vision across. We work with products, services, software, apps and lots more! An explainer video is a great way to provide a simple overview of how something works to your customers.</h3>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<image-slider v-bind:images="['../images/ae-timeline1.jpg', '../images/ae-timeline2.jpg', '../images/ae-timeline3.jpg', '../images/ae-timeline4.jpg']"></image-slider>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid gray-bg-container">
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="title-heading text-center has-primary-border-center">
                    <h1>Take A Look At Our Engaging Explainer Videos</h1>
                </div>
            </div>
        </div>
        <div class="row">
        	<case-studies-by-category-widget v-bind:type="3"></case-studies-by-category-widget>
        </div>
	</div>
</div>


<!-- Packages -->
<div class="container-fluid packages gray-bg-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading has-primary-border-center text-center">
					<h1>Our Packages</h1>
					<h3>At Digital Pie Video, we take an experienced approach to creating highly engaging digital branding. We believe in providing purely highly creative, exclusive and fitting brand identities giving your business or project an edge over its competitors and an opportunity to stand out from the crowd.</h3>
				</div>
			</div>
		</div>
		<div class="row">
		    <div class="col-md-1 col-sm-12"></div>
		    <div class="col-md-5 col-sm-12">
		        <div class="package-item package-standard">
		            <div class="header">
		                <h2>STANDARD <br>EXPLAINER VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£495.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Producer Created Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> 30 Second Duration</li>
		                  <li><i class="fas fa-check-square"></i> Script Writing</li>
		                  <li><i class="fas fa-check-square"></i> Custom Artwork</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music</li>
		                  <li><i class="fas fa-check-square"></i> 2 Revisions</li>
		                  <li><i class="fas fa-check-square"></i> 10 Day Turnaround</li>
		                </ul>
		                <div class="order">
		                    <a href="{{ URL::to('/contact') }}">Order Now</a>
		                </div>
		                <div class="divider"></div>
		                <div class="chat-discuss">
		                    <span>Want to discuss? <a href="javascript:void(0);" v-on:click="showChatbox=!showChatbox">Live Chat Now</a></span>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="col-md-5 col-sm-12">
		        <div class="package-item package-advanced">
		            <div class="header">
		                <h2>ADVANCED <br>EXPLAINER VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£695.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
							<li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Producer Created Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> 60 Second Duration</li>
		                  <li><i class="fas fa-check-square"></i> Script Writing</li>
		                  <li><i class="fas fa-check-square"></i> Custom Artwork</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music</li>
		                  <li><i class="fas fa-check-square"></i> 2 Revisions</li>
		                  <li><i class="fas fa-check-square"></i> 7 Day Turnaround</li>
		                  <li><i class="fas fa-check-square"></i> Voiceover</li>
		                </ul>
		                <div class="order">
		                    <a href="{{ URL::to('/contact') }}">Order Now</a>
		                </div>
		                <div class="divider"></div>
		                <div class="chat-discuss">
		                    <span>Want to discuss? <a href="javascript:void(0);" v-on:click="showChatbox=!showChatbox">Live Chat Now</a></span>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="col-md-1 col-sm-12"></div>
		</div>
	</div>
</div>
<!-- Packages -->

<!-- Testimonials -->
@include('layouts/partials/what-our-client-say')
<!-- Testimonials -->

@endsection
