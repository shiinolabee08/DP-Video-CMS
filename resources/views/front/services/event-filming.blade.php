@extends('layouts.app')

@section('content')

<div class="container-fluid service-banner" style="background-image: url('/images/services-banner/event-hero-image-25percent.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="title-heading">
					<h1>Experts In Capturing Your<br><strong>Live Events On Film</strong></h1>
					<h2>If you're looking for live event filming, presentation<br> filming, networking events, trade shows or any<br> other live event video, we are your professional team.</h2>
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

<div class="container-fluid gray-bg-container">
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="title-heading text-center has-primary-border-center">
                    <h1>Some Of The Amazing Events We Have Captured</h1>
                </div>
            </div>
        </div>
        <div class="row">
        	<case-studies-by-category-widget v-bind:type="2"></case-studies-by-category-widget>
        </div>
	</div>
</div>

<div class="container-fluid inner-page-two-column-container">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>If You're Looking For A Crew To Film And Edit Your Event, Look No Further.</h1>
					<h3>At Digital Pie Video, we take an experienced approach to creating highly engaging event videos. We can offer a range of editing services for your event. We have vast experience in event highlight videos, so choosing the best moments for the final cut comes natural to us.</h3>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<image-slider v-bind:images="['../images/P2050589.jpg', '../images/P2050624.jpg', '../images/P2050685.jpg']"></image-slider>
			</div>
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
					<h3>At Digital Pie Video, we take an experienced approach to creating highly engaging event videos. We can offer a range of editing services for your event. We have vast experience in event highlight videos, so choosing the best moments for the final cut comes natural to us.</h3>
				</div>				
			</div>
		</div>
		<div class="row">
		    <div class="col-md-4 col-sm-12">
		    	<div class="package-item package-basic">
		            <div class="header">
		                <h2>BASIC <br>EVENT FILMING</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£495.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> 2 Member Crew</li>
		                  <li><i class="fas fa-check-square"></i> Half Day Filming (4 - 5 Hours)</li>
		                  <li><i class="fas fa-check-square"></i> 2 Cameras</li>
		                  <li><i class="fas fa-check-square"></i> Sound Operator</li>
		                  <li><i class="fas fa-check-square"></i> 1 Day Editing</li>
		                  <li><i class="fas fa-check-square"></i> 2 Feedback Revisions</li>
		                  <li><i class="fas fa-check-square"></i> Animated Logo</li>
		                  <li><i class="fas fa-check-square"></i> Post Production Meeting (Face to Face or Skype available)</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard Created By Producer</li>
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
		    <div class="col-md-4 col-sm-12">
		        <div class="package-item package-standard">
		            <div class="header">
		                <h2>STANDARD <br>EVENT FILMING</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£795.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> 3 Member Crew</li>
		                  <li><i class="fas fa-check-square"></i> Half Day Filming (4 - 5 Hours)</li>
		                  <li><i class="fas fa-check-square"></i> 3 Cameras</li>
		                  <li><i class="fas fa-check-square"></i> Sound Operator</li>
		                  <li><i class="fas fa-check-square"></i> 3 Days Editing</li>
		                  <li><i class="fas fa-check-square"></i> 3 Feedback Revisions</li>
		                  <li><i class="fas fa-check-square"></i> Animated Logo</li>
		                  <li><i class="fas fa-check-square"></i> Post Production Meeting (Face to Face or Skype available)</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard Created By Producer</li>
		                  <li><i class="fas fa-check-square"></i> Includes Time-lapse</li>
		                  <li><i class="fas fa-check-square"></i> Includes Interviews and Interviewee</li>
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
		    <div class="col-md-4 col-sm-12">
		        <div class="package-item package-advanced">
		            <div class="header">
		                <h2>ADVANCED <br>EVENT FILMING</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£1295.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
							<li><i class="fas fa-check-square"></i> 2-4 Member Crew</li>
		                  	<li><i class="fas fa-check-square"></i> Full Day Filming (8 - 10 Hours)</li>
		                  	<li><i class="fas fa-check-square"></i> 2-4 Cameras</li>
		                  	<li><i class="fas fa-check-square"></i> Sound Operator</li>
		                  	<li><i class="fas fa-check-square"></i> 3-5 Days Editing</li>
		                  	<li><i class="fas fa-check-square"></i> 5 Feedback Revisions</li>
		                  	<li><i class="fas fa-check-square"></i> Animated Logo</li>
		                  	<li><i class="fas fa-check-square"></i> Post Production Meeting (Face to Face or Skype available)</li>
		                  	<li><i class="fas fa-check-square"></i> Storyboard Created By Producer</li>
		                  	<li><i class="fas fa-check-square"></i> Includes Time-lapse</li>
		                  	<li><i class="fas fa-check-square"></i> Includes Interviews and Interviewee</li>
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
		</div>
	</div>
</div>
<!-- Packages -->

<!-- Testimonials -->
@include('layouts/partials/what-our-client-say')
<!-- Testimonials -->

<div class="container-fluid proven-process">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>The Proven Process For Capturing Events</h1>
				</div>
			</div>
		</div>
		<div class="items">

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-calendar"></i>
						<h2>01. DATES</h2>
						<p>Tell us the dates (when is the event and when do you need the video)</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-th"></i>
						<h2>02. DETAILS</h2>
						<p>Tell us all about the event</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-users"></i>
						<h2>03. AUDIENCE</h2>
						<p>Tell us about the video's audience</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-chart-bar"></i>
						<h2>04. PURPOSE</h2>
						<p>What is the plan for the video upon completion?</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fa fa-pen-square"></i>
						<h2>05. STORYBOARD</h2>
						<p>a storyboard</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-film"></i>
						<h2>06. FILM</h2>
						<p>We arrive at your event, lights, camera action!</p>
					</div>
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

<div class="container-fluid inner-page-two-column-container">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<image-slider v-bind:images="['../images/P2050653.jpg', '../images/P2050668.jpg']"></image-slider>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>Capturing Your Events For Eternity</h1>
					<h3>Digital Pie Video's team of qualified and creative professionals specialise in delivering the highest quality of event videography for corporate and creative clients all around the world for thousands of businesses and events. here with all the tools required to enable you to capture an event forever. If you're looking for a crew to film and edit your event, look no further. We offer an end-to-end service, from pre-production and planning, to shooting and editing. Whether a sports event, music festival or business expo, we will be your on-hands team for the day, capturing those all-important moments. Got a project for us? Let's talk today and discuss your idea in more details.</h3>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection