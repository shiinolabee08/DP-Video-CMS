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

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-12"></div>
			<div class="col-md-8 col-sm-12">
				<div class="title-heading has-primary-border-center text-center">
					<h1>Making Corporate Cool, Together.</h1>
				</div>
				<div class="main-heading text-center">
					<p>Digital Pie Video’s team of creative professionals specialise in delivering the highest quality of corporate video production for clients all around the world for thousands of businesses. here with all the tools required to help you stand out from your competitors. experts at creating professional and concise corporate videos, whether its to promote your business to the outside world or for internal purposes a Digital Pie video will put you on the map, and get people talking. We film your business at work, conduct interviews, spliced with shots of the surrounding landscape and top it off with a range of post production effects to create a slick and attractive video that encapsulates exactly what your business is all about.</p>
				</div>
			</div>
			<div class="col-md-2 col-sm-12"></div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center">
				<a href="#" class="call-to-action">Enquire Now</a>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>

 <!-- Awards Carousel Slider -->
<div class="container-fluid awards-carousel-slider">
    <awards-carousel-slider v-bind:home="true"></awards-carousel-slider>                    
</div>        
<!-- Awards Carousel Slider -->

<div class="container-fluid corporate-video-production gray-bg-container">
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="title-heading text-center has-primary-border-center">
                    <h1>Our Corporate Video Production Work</h1>
                </div>
            </div>
        </div>
        <div class="row">
        	<case-studies-by-category-widget v-bind:type="11"></case-studies-by-category-widget>
        </div>
	</div>
</div>

<!-- Packages -->
<div class="container-fluid packages gray-bg-container">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-12"></div>
			<div class="col-md-8 col-sm-12">
				<div class="title-heading has-primary-border-center text-center">
					<h1>Our Packages</h1>
				</div>				
			</div>
			<div class="col-md-2 col-sm-12"></div>
		</div>
		<div class="row">
		    <div class="col-md-1 col-sm-12"></div>
		    <div class="col-md-5 col-sm-12">
		        <div class="package-item package-standard">
		            <div class="header">
		                <h2>STANDARD <br>CORPORATE VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£895.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> 1 - 4 Minute Video</li>
		                  <li><i class="fas fa-check-square"></i> Face to Face (Or Skype) Pre-Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Producer Created Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> 1 Day Shoot (Filming, Lighting and Sound)</li>
		                  <li><i class="fas fa-check-square"></i> 2 Days Editing</li>
		                  <li><i class="fas fa-check-square"></i> 2 Feedback Stages</li>
		                  <li><i class="fas fa-check-square"></i> 1 Day Special Effects</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music Inclusion</li>
		                  <li><i class="fas fa-check-square"></i> Script Prompt (if required)</li>
		                  <li><i class="fas fa-check-square"></i> Interviewee (if required)</li>
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
		                <h2>ADVANCED <br>CORPORATE VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£1495.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> 1 - 8 Minute Video</li>
		                  <li><i class="fas fa-check-square"></i> Face to Face (Or Skype) Pre-Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Producer Created Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> 2 - 3 Day Shoot (Filming, Lighting and Sound)</li>
		                  <li><i class="fas fa-check-square"></i> 3 Days Editing</li>
		                  <li><i class="fas fa-check-square"></i> 3 Feedback Stages</li>
		                  <li><i class="fas fa-check-square"></i> 2 Day Special Effects</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music Inclusion</li>
		                  <li><i class="fas fa-check-square"></i> Script Prompt (if required)</li>
		                  <li><i class="fas fa-check-square"></i> Interviewee (if required)</li>
		                  <li><i class="fas fa-check-square"></i> Voiceover (if required)</li>
		                  <li><i class="fas fa-check-square"></i> Stock footage (if required)</li>
		                </ul>
		                <div class="order">
		                    <a href="{{ URL::to('/contact') }}">Order Now</a>
		                </div>
		                <div class="divider"></div>
		                <div class="chat-discuss">
		                    <span>Want to discuss? <a href="javascript:void(0);" onclick="LC_API.open_chat_window();return false">Live Chat Now</a></span>
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


<div class="container-fluid proven-process">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>The Proven Process For Creating Perfect Corporate Videos</h1>
				</div>
			</div>
		</div>
		<div class="items">

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fa fa-lightbulb"></i>
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
						<p>We then conduct market research</p>
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
						<i class="fa fa-file-alt"></i>
						<h2>05. SCRIPT</h2>
						<p>We will then create the script and storyboard.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-film"></i>
						<h2>06. FILMING</h2>
						<p>Lights, camera, action! Let's film, edit and animate.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">				
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fa fa-file-alt"></i>
						<h2>07. FINISH</h2>
						<p>Deliver you a complete corporate video</p>
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

@endsection