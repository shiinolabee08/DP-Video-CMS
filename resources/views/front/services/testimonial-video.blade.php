@extends('layouts.app')

@section('content')

<div class="container-fluid service-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="title-heading">
					<h1>We Create Testimonials<br> Focusing On The Subjects<br> Emotions</h1>
					<h2>We can provide you with a stunning branded title<br> sequence to represent your business in modern,<br> professional and recognised fashion.</h2>
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
					<h1>We Create Compelling Customer Testimonial Videos!</h1>
				</div>
				<div class="main-heading text-center">
					<p>Customer Testimonials, case studies and other types of third-party endorsements are a great alternative to encourage your prospects to say “yes” to your proposal, to achieve your marketing goals and ultimately to increase your sales.</p>
				</div>
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
				</div>				
			</div>
		</div>
		<div class="row">
		    <div class="col-md-1 col-sm-12"></div>
		    <div class="col-md-5 col-sm-12">
		        <div class="package-item package-standard">
		            <div class="header">
		                <h2>STANDARD<br>TESTIMONIAL VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£495.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard Created By Our Producer</li>
		                  <li><i class="fas fa-check-square"></i> Interview Questions</li>
		                  <li><i class="fas fa-check-square"></i> Interviewee</li>
		                  <li><i class="fas fa-check-square"></i> Interview Setup</li>
		                  <li><i class="fas fa-check-square"></i> 1 Location</li>
		                  <li><i class="fas fa-check-square"></i> Teleprompter</li>
		                  <li><i class="fas fa-check-square"></i> 1 Day Shooting</li>
		                  <li><i class="fas fa-check-square"></i> 2 Crew Members</li>
		                  <li><i class="fas fa-check-square"></i> 2 Days Editing</li>
		                  <li><i class="fas fa-check-square"></i> 2 Feedback Slots</li>
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
		                <h2>ADVANCED <br>TESTIMONIAL VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£1295.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
							<li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard Created By Our Producer</li>
		                  <li><i class="fas fa-check-square"></i> Interview Questions</li>
		                  <li><i class="fas fa-check-square"></i> Interviewee</li>
		                  <li><i class="fas fa-check-square"></i> Interview Setup</li>
		                  <li><i class="fas fa-check-square"></i> 3 Locations</li>
		                  <li><i class="fas fa-check-square"></i> Teleprompter</li>
		                  <li><i class="fas fa-check-square"></i> 2 Days Shooting</li>
		                  <li><i class="fas fa-check-square"></i> 2 Crew Members</li>
		                  <li><i class="fas fa-check-square"></i> 3 Days Editing</li>
		                  <li><i class="fas fa-check-square"></i> 4 Feedback Slots</li>
		                  <li><i class="fas fa-check-square"></i> Teaser Graphics</li>
		                  <li><i class="fas fa-check-square"></i> Teaser Snippets</li>
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

<div class="container-fluid proven-process">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>The Proven Process For Creating Honest And Impactful Corporate Videos</h1>
				</div>
			</div>
		</div>
		<div class="items">

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-lightbulb"></i>
						<h2>01. UNDERSTAND</h2>
						<p>Help us understand the desired outcome.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-search"></i>
						<h2>02. INTERVIEWS</h2>
						<p>Keeping things human, let's line up some interviews.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-comment-dots"></i>
						<h2>03. QUESTIONS</h2>
						<p>Let's prepare the questions, we can share our experiences to assist with this.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-cogs"></i>
						<h2>04. INTERVIEWEES</h2>
						<p>Send the questions to the interviewees.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-file-alt"></i>
						<h2>05. DATES</h2>
						<p>Agree dates, times and locations.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-film"></i>
						<h2>06. FILMING</h2>
						<p>Lights, camera, action!</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-cogs"></i>
						<h2>07. EDIT</h2>
						<p>Time for us to edit your testimonials with branding, effects and titles.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-file-alt"></i>
						<h2>08. DELIVER</h2>
						<p>Finally we deliver your video in your preferred format.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-comment-dots"></i>
						<h2>09. FINISH</h2>
						<p>That's a wrap!</p>
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

<div class="container-fluid gray-bg-container">
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="title-heading text-center has-primary-border-center">
                    <h1>Engaging Testimonial Videos</h1>
                </div>
            </div>
        </div>
        <div class="row">
        	<case-studies-by-category-widget v-bind:type="1"></case-studies-by-category-widget>
        </div>
	</div>
</div>

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>Don't Show Me, Tell Me! Heard That From Your Customers Before?</h1>
				</div>
				<div class="main-heading text-center">
					<p>Digital Pie Video's team of creative professionals specialise in delivering the highest quality of video testimonials for corporate and creative clients all around the world for thousands of businesses and projects. here with all the tools required to help you stand out from your competitors and make your customers decisions easier.

					Got a project for us? Let's talk today and discuss your idea in more details.</p>
				</div>
			</div>			
		</div>
	</div>
</div>

<!-- Testimonials -->
@include('layouts/partials/what-our-client-say')
<!-- Testimonials -->

@endsection