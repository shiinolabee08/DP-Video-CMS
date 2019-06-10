@extends('layouts.app')

@section('content')

<div class="container-fluid service-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="title-heading">
					<h1>Something To Shout About?<br> Let Them See It With<br> A <strong>Promotional Video</strong>!</h1>
					<h2>Getting your message out there is important, and <br>what better way to do it than to have a video that<br> voices and demonstrates that message in a clear and<br> concise promotional video that suits your business.</h2>
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
					<h1>Promote Your Vision, Idea Or Business In The Most Effective Way Possible.</h1>
				</div>
				<div class="main-heading text-center">
					<p>We develop promotional video concepts, write scripts, storyboards, direct, shoot, animate, produce and promote a huge variety of promotion videos.</p>
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
		                <h2>STANDARD<br>PROMOTIONAL VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£795.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Producer Created Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> 1 Full Day Shooting</li>
		                  <li><i class="fas fa-check-square"></i> 2 Crew Members</li>
		                  <li><i class="fas fa-check-square"></i> 2 Cameras</li>
		                  <li><i class="fas fa-check-square"></i> 2 Days Editing</li>
		                  <li><i class="fas fa-check-square"></i> 2 Feedback Slots</li>
		                  <li><i class="fas fa-check-square"></i> Interview Setup</li>
		                  <li><i class="fas fa-check-square"></i> Interviewee</li>
		                  <li><i class="fas fa-check-square"></i> Teleprompter</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music</li>
		                  <li><i class="fas fa-check-square"></i> Titles</li>
		                  <li><i class="fas fa-check-square"></i> Stock Imagery</li>
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
		                <h2>ADVANCED <br>PROMOTIONAL VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£1295.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
							<li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Producer Created Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> 2 Full Day Shooting</li>
		                  <li><i class="fas fa-check-square"></i> 3 Crew Members</li>
		                  <li><i class="fas fa-check-square"></i> 3 Cameras</li>
		                  <li><i class="fas fa-check-square"></i> 4 Days Editing</li>
		                  <li><i class="fas fa-check-square"></i> 4 Feedback Slots</li>
		                  <li><i class="fas fa-check-square"></i> Interview Setup</li>
		                  <li><i class="fas fa-check-square"></i> Interviewee</li>
		                  <li><i class="fas fa-check-square"></i> Teleprompter</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music</li>
		                  <li><i class="fas fa-check-square"></i> Titles</li>
		                  <li><i class="fas fa-check-square"></i> Stock Imagery</li>
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
					<h1>The Proven Process For Exceeding Expectations With Promotional Videos</h1>
				</div>
			</div>
		</div>
		<div class="items">

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-lightbulb"></i>
						<h2>01. UNDERSTAND</h2>
						<p>We will work with you to set very clear objectives</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-search"></i>
						<h2>02. RESEARCH</h2>
						<p>We then conduct market research</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-comment-dots"></i>
						<h2>03. DELIVER</h2>
						<p>We will then finalise the videos core message.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-cogs"></i>
						<h2>04. INPUT</h2>
						<p>We will then insert creative input to turn the idea into a story.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-file-alt"></i>
						<h2>05. SCRIPT</h2>
						<p>We will then create the script and storyboard.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-comment-dots"></i>
						<h2>06. FILMING</h2>
						<p>Lights, camera, action! Let's film, edit and animate.</p>
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
                    <h1>Examples Of Our Promotional Videos</h1>
                </div>
            </div>
        </div>
        <div class="row">
        	<case-studies-by-category-widget v-bind:type="7"></case-studies-by-category-widget>
        </div>
	</div>
</div>

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>DELIVERING THE HIGHEST QUALITY OF PROMOTIONAL VIDEO</h1>
				</div>
				<div class="main-heading text-center">
					<p>Digital Pie Video's team of creative professionals specialise in delivering the highest quality of promotional video production for corporate and creative clients all around the world for thousands of businesses and projects. Got a project for us? Let's talk today and discuss your idea in more details.

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