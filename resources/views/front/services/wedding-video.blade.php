@extends('layouts.app')

@section('content')

<div class="container-fluid service-banner" style="background-image: url('/images/services-banner/corporate-desktop.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="title-heading">
					<h1>Wedding Cinematography <strong>Capturing Memories</strong> Forever</h1>
					<h2>beautifully shot and edited cinematic wedding videos. Digital Pie have a portfolio of wedding work from across the UK and all over the world. Our wedding team are experts in capturing the whole big day.</h2>
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
					<h1>Crafting Bespoke And Emotional Stories To Look Back On For A Lifetime</h1>
				</div>
				<div class="main-heading text-center">
					<p>We pride ourselves on delivering a professional, friendly & discreet wedding video service.  Working to detailed specification & bringing our own ideas to the table, we thrive in creating a heartfelt final wedding video project.</p>
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
		                <h2>STANDARD<br>WEDDING VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£TBC</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.<br>The best bits from your special day (up to 4-minute highlight video)</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> Full Ceremony</li>
		                  <li><i class="fas fa-check-square"></i> Speeches and Cake Cutting</li>
		                  <li><i class="fas fa-check-square"></i> Getting Ready!</li>
		                  <li><i class="fas fa-check-square"></i> Arrivals</li>
		                  <li><i class="fas fa-check-square"></i> Reception Filmed</li>
		                  <li><i class="fas fa-check-square"></i> The First Dance</li>
		                  <li><i class="fas fa-check-square"></i> Photoshoot Filmed</li>
		                  <li><i class="fas fa-check-square"></i> Location Cinematics</li>
		                  <li><i class="fas fa-check-square"></i> Drone Footage</li>
		                  <li><i class="fas fa-check-square"></i> Guest Video Message Setup</li>
		                  <li><i class="fas fa-check-square"></i> Edited To Your Chosen Track</li>
		                  <li><i class="fas fa-check-square"></i> Colour Grading</li>
		                  <li><i class="fas fa-check-square"></i> 100% Ownership</li>
		                  <li><i class="fas fa-check-square"></i> 3 Feedback Slots</li>
		                  <li><i class="fas fa-check-square"></i> 14 Day Turnaround</li>
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
		                <h2>ADVANCED <br>WEDDING VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£TBC</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.<br>Your very own film (between 30 mins – 2 hours) and a highlight video (up to 4 minutes)</p>
		                <ul>
							<li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> Full Ceremony</li>
		                  <li><i class="fas fa-check-square"></i> Speeches and Cake Cutting</li>
		                  <li><i class="fas fa-check-square"></i> Getting Ready!</li>
		                  <li><i class="fas fa-check-square"></i> Arrivals</li>
		                  <li><i class="fas fa-check-square"></i> Reception Filmed</li>
		                  <li><i class="fas fa-check-square"></i> The First Dance</li>
		                  <li><i class="fas fa-check-square"></i> Photoshoot Filmed</li>
		                  <li><i class="fas fa-check-square"></i> Location Cinematics</li>
		                  <li><i class="fas fa-check-square"></i> Drone Footage</li>
		                  <li><i class="fas fa-check-square"></i> Guest Video Message Setup</li>
		                  <li><i class="fas fa-check-square"></i> Edited To Your Chosen Track</li>
		                  <li><i class="fas fa-check-square"></i> Colour Grading</li>
		                  <li><i class="fas fa-check-square"></i> 100% Ownership</li>
		                  <li><i class="fas fa-check-square"></i> 3 Feedback Slots</li>
		                  <li><i class="fas fa-check-square"></i> 14 Day Turnaround</li>
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
					<h1>The Proven Process For Creating Perfect Wedding Videos</h1>
				</div>
			</div>
		</div>
		<div class="items">

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-lightbulb"></i>
						<h2>01. WEDDING DAY PLANS</h2>
						<p>Tell us about your wedding day plans.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-search"></i>
						<h2>02. WHAT YOU WANT</h2>
						<p>Tell us what you want to capture!</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-guitar"></i>
						<h2>03. SONG</h2>
						<p>Tell us what song you would like to use.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-cogs"></i>
						<h2>04. STORYBOARD</h2>
						<p>We then create a storyboard!</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-film"></i>
						<h2>05. FILM</h2>
						<p>We will be there on the big day suited and booted to fit in!</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-edit"></i>
						<h2>06. EDIT</h2>
						<p>Time to bring it to life with editing.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-share"></i>
						<h2>07. WATCH AND SHARE</h2>
						<p>Watch your big day back and share it with your loved ones.</p>
					</div>
				</div>
				<div class="col-md-4"></div>
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

<!-- <div class="container-fluid gray-bg-container">
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="title-heading text-center has-primary-border-center">
                    <h1>Examples Of Our Wedding Videos</h1>
                </div>
            </div>
        </div>
        <div class="row">
        	<case-studies-by-category-widget v-bind:type="12"></case-studies-by-category-widget>
        </div>
	</div>
</div> -->

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>We Make It Our Aim To Capture Your Love For One Another</h1>
				</div>
				<div class="main-heading text-center">
					<p>Digital Pie Video's team of creative professionals specialise in delivering the highest quality of wedding video production all around the world. here with all the tools and latest equipment to ensure not a moment is missed on this special day. Let's talk today and discuss your wedding video in more details.

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