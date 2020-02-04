@extends('layouts.app')

@section('content')

<div class="container-fluid service-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="title-heading">
					<h1><strong>Stand Out On YouTube</strong><br> With Our Unique, High Quality And Fast<br> Turnaround Editing!</h1>
					<h2>We can provide you with a continuous bespoke look<br> and feel for your videos to increase emotional investment from your subscribers and maximise your<br> YouTube revenue opportunities.</h2>
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

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>Got The Personality, The Content And The Subs. Now I Need A Reliable Editor!</h1>
				</div>
				<div class="main-heading text-center">
					<p>At Digital Pie Video, we take an experienced approach to creating highly engaging YouTube content. We take the time to understand what you want to achieve with your YouTube channel and work closely with you to ensure that the vision is supported with the editing style.</p>
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
		    <div class="col-md-4 col-sm-12">
		    	<div class="package-item package-basic">
		            <div class="header">
		                <h2>BASIC<br>YOUTUBE VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£145.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Intro / Outro Sequence</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music</li>
		                  <li><i class="fas fa-check-square"></i> Special Effects</li>
		                  <li><i class="fas fa-check-square"></i> Sound Effects</li>
		                  <li><i class="fas fa-check-square"></i> Titles</li>
		                  <li><i class="fas fa-check-square"></i> 1 Feedback Slot</li>
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
		    <div class="col-md-4 col-sm-12">
		        <div class="package-item package-standard">
		            <div class="header">
		                <h2>STANDARD<br>YOUTUBE VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£245.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Intro / Outro Sequence</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music</li>
		                  <li><i class="fas fa-check-square"></i> Special Effects</li>
		                  <li><i class="fas fa-check-square"></i> Sound Effects</li>
		                  <li><i class="fas fa-check-square"></i> Titles</li>
		                  <li><i class="fas fa-check-square"></i> 2 Feedback Slots</li>
		                  <li><i class="fas fa-check-square"></i> 7 Day Turnaround</li>
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
		    <div class="col-md-4 col-sm-12">
		        <div class="package-item package-advanced">
		            <div class="header">
		                <h2>ADVANCED <br>YOUTUBE VIDEO</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£345.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
							<li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Intro / Outro Sequence</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music</li>
		                  <li><i class="fas fa-check-square"></i> Special Effects</li>
		                  <li><i class="fas fa-check-square"></i> Sound Effects</li>
		                  <li><i class="fas fa-check-square"></i> Titles</li>
		                  <li><i class="fas fa-check-square"></i> 2 Feedback Slots</li>
		                  <li><i class="fas fa-check-square"></i> 4 Day Turnaround</li>
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
		</div>
	</div>
</div>
<!-- Packages -->

<div class="container-fluid proven-process">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>The Proven Process For Creating YouTube Gold!</h1>
				</div>
			</div>
		</div>
		<div class="items">

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-lightbulb"></i>
						<h2>01. SEND</h2>
						<p>Send us your logo in vector/png along with all footage you would like us to use along with any other useful information we could use as inspiration.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-search"></i>
						<h2>02. DETAILS</h2>
						<p>What is the desired outcome for this video? How long would you like the video to be? Who are we aiming this video at? Do we need to include any sponsorships? Would you like outtakes included?</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-comment-dots"></i>
						<h2>03. CREATE</h2>
						<p>your first draft, deliver and implement any feedback until you are happy with the finished video. Your account manager will keep you posted on the whole process. We even do the custom thumbnail for you!</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-file-alt"></i>
						<h2>05. DELIVER</h2>
						<p>We deliver your YouTube video in the most suitable format for YouTube, all you need to do is upload and watch the views stack up.</p>
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

<div class="container-fluid gray-bg-container">
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="title-heading text-center has-primary-border-center">
                    <h1>Our YouTube Videos</h1>
                </div>
            </div>
        </div>
        <div class="row">
        	<case-studies-by-category-widget v-bind:type="10"></case-studies-by-category-widget>
        </div>
	</div>
</div>

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>Professional Editing To Set Your Channel Apart</h1>
				</div>
				<div class="main-heading text-center">
					<p>Digital Pie Video's team of creative professionals specialise in delivering the highest quality of YouTube editing for corporate and creative clients all around the world for thousands of businesses and projects. here with all the tools required to help you stand out from your competition, get those views and make that YouTube money!

					Got a YouTube editing project for us? Let's talk today and discuss your idea in more details.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Testimonials -->
@include('layouts/partials/what-our-client-say')
<!-- Testimonials -->

@endsection
