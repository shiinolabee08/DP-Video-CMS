@extends('layouts.app')

@section('content')

<div class="container-fluid service-banner" style="background-image: url('../images/services-banner/facebook-cover-videos.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="title-heading">
					<h1>Bring Your <strong>Facebook</strong> Page To Life!</h1>
					<h2>Designing and producing bespoke, professional<br> videos to breathe new life into Facebook business<br> pages.</h2>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<a href="{{ url('/contact') }}" class="call-to-action"> Enquire Now</a>
						<img src="/images/trust-pilot-logo.png"/>
					</div>
					<div class="col-md-4 col-sm-12">
						<p><strong>Call Us: <a href="tel:+441702749662">+441702749662</a></strong></p>
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

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>Crafting Bespoke And Powerful Facebook Cover Videos For Companies Globally</h1>
				</div>
				<div class="main-heading text-center">
					<p>We pride ourselves on delivering a premium, friendly & straight-forward service providing Facebook Cover Videos. Working to detailed specification & within tight deadlines, we thrive in creating exciting and informative video solutions for your Facebook business page.</p>
				</div>
			</div>			
		</div>
	</div>
</div>

<!-- Packages -->
<div class="container-fluid packages gray-bg-container">
	<div class="container">		
		<div class="row">
		    <div class="col-md-1 col-sm-12"></div>
		    <div class="col-md-5 col-sm-12">
		        <div class="package-item package-standard">
		            <div class="header">
		                <h2>STANDARD <br>EXPLAINER VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£195.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> Original and Bespoke Concept</li>
		                  <li><i class="fas fa-check-square"></i> Mobile Optimised</li>
		                  <li><i class="fas fa-check-square"></i> 100% Ownership Rights</li>
		                  <li><i class="fas fa-check-square"></i> 1 Feedback Slot</li>
		                  <li><i class="fas fa-check-square"></i> 10 Day Turnaround</li>
		                </ul>
		                <div class="order">
		                    <a href="{{ URL::to('/contact') }}">Order Now</a>
		                </div>
		                <div class="divider"></div>
		                <div class="chat-discuss">
		                    <span>Want to discuss? <a href="javascript:void(0);">Live Chat Now</a></span><!-- onclick="LC_API.open_chat_window();return false" -->
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
		                <h4 class="price">£245 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
							<li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> Original and Bespoke Concept</li>
		                  <li><i class="fas fa-check-square"></i> Mobile Optimised</li>
		                  <li><i class="fas fa-check-square"></i> 100% Ownership Rights</li>
		                  <li><i class="fas fa-check-square"></i> 3 Feedback Slot</li>
		                  <li><i class="fas fa-check-square"></i> 7 Day Turnaround</li>
		                  <li><i class="fas fa-check-square"></i> Custom Profile Picture Design</li>
		                </ul>
		                <div class="order">
		                    <a href="{{ URL::to('/contact') }}">Order Now</a>
		                </div>
		                <div class="divider"></div>
		                <div class="chat-discuss">
		                    <span>Want to discuss? <a href="javascript:void(0);">Live Chat Now</a></span>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="col-md-1 col-sm-12"></div>
		</div>
	</div>
</div>
<!-- Packages -->

<div class="container-fluid proven-process">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>The Proven Process For Creating Perfect Cover Videos</h1>
				</div>
			</div>
		</div>
		<div class="items">

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-envelope-open"></i>
						<h2>01. TELL US ABOUT YOUR BUSINESS</h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-cogs"></i>
						<h2>02. TELL US WHAT YOU WANT YOUR FACEBOOK PAGE VISITORS TO EXPERIENCE AND DO</h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-paper-plane"></i>
						<h2>03. SEND US WHAT WE NEED! PICTURES, VIDEOS AND INFORMATION.</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-file-alt"></i>
						<h2>04. WE THEN CREATE A STORYBOARD!</h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fa fa-pen-square"></i>
						<h2>05. TIME TO BRING IT TO LIFE WITH EDITING</h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fa fa-comments"></i>
						<h2>06. YOUR PREMIER AND FEEDBACK IMPLEMENTED</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">				
				</div>
				<div class="col-md-4 text-center">
					<div class="item">
						<i class="fas fa-cloud-upload-alt"></i>
						<h2>07.  UPLOAD YOUR NEW FACEBOOK COVER VIDEO!</h2>
					</div>
				</div>
				<div class="col-md-4">				
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">				
				</div>
				<div class="col-md-4 text-center">
					<a href="#" class="call-to-action">Let's Build Your Idea Into Motion</a>
				</div>
				<div class="col-md-4">				
				</div>
			</div>
		</div>
		
	</div>
</div>

<div class="container-fluid gray-bg-container">
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="title-heading text-center has-primary-border-center">
                    <h1>Our Engaging, Exciting And Effective Facebook Cover Videos</h1>
                </div>
            </div>
        </div>
        <div class="row">
        	<case-studies-by-category-widget v-bind:type="4"></case-studies-by-category-widget>
        </div>
	</div>
</div>

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>Bringing Your Social Media Presence To The Highest Level</h1>
				</div>
				<div class="main-heading text-center">
					<p>Digital Pie Video's team of creative professionals specialise in delivering the highest quality of facebook cover video production for corporate and creative clients all around the world for thousands of businesses and projects. here with all the tools required to help you stand out from your competitors and make your customers decisions easier. Got a project for us? Let's talk today and discuss your idea in more details.</p>
				</div>
			</div>			
		</div>
	</div>
</div>

<!-- Testimonials -->
@include('layouts/partials/what-our-client-say')
<!-- Testimonials -->

@endsection