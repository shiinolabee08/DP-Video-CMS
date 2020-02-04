@extends('layouts.app')

@section('content')

<div class="container-fluid service-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="title-heading">
					<h1>We Take Your Video Clips<br> And <strong>Create Perfection</strong> Out Of Them!</h1>
					<h2>We can provide you with the ultimate remote editing service. Simply tell us your vision, send us your footage and we will take care of the rest.</h2>
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
					<h1>Each Video Is Bespoke, Edited To Your Taste And Style.</h1>
				</div>
				<div class="main-heading text-center">
					<p>At Digital Pie Video, we take an experienced approach to editing your videos. Simply send your content to our secure data storage setup and we can get to work. We can take videos recorded from a mobile phone and work out magic to create highly engaging, professional and branded video content.</p>
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
		                <h2>BASIC<br>VIDEO EDITING</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£295.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Up to 60 Minutes of Footage</li>
		                  <li><i class="fas fa-check-square"></i> Professional Editing to Hit Brief</li>
		                  <li><i class="fas fa-check-square"></i> Colour Grading</li>
		                  <li><i class="fas fa-check-square"></i> Sound Effects</li>
		                  <li><i class="fas fa-check-square"></i> Special Effects</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music</li>
		                  <li><i class="fas fa-check-square"></i> Stock Imagery</li>
		                  <li><i class="fas fa-check-square"></i> Titles</li>
		                  <li><i class="fas fa-check-square"></i> Intro / Outro Sequence</li>
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
		                <h2>STANDARD<br>VIDEO EDITING</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£395.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Up to 120 Minutes of Footage</li>
		                  <li><i class="fas fa-check-square"></i> Professional Editing to Hit Brief</li>
		                  <li><i class="fas fa-check-square"></i> Colour Grading</li>
		                  <li><i class="fas fa-check-square"></i> Sound Effects</li>
		                  <li><i class="fas fa-check-square"></i> Special Effects</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music</li>
		                  <li><i class="fas fa-check-square"></i> Stock Imagery</li>
		                  <li><i class="fas fa-check-square"></i> Titles</li>
		                  <li><i class="fas fa-check-square"></i> Intro / Outro Sequence</li>
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
		                <h2>ADVANCED <br>VIDEO EDITING</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£995.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
							<li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> Unlimited Footage</li>
		                  <li><i class="fas fa-check-square"></i> Professional Editing to Hit Brief</li>
		                  <li><i class="fas fa-check-square"></i> Colour Grading</li>
		                  <li><i class="fas fa-check-square"></i> Sound Effects</li>
		                  <li><i class="fas fa-check-square"></i> Special Effects</li>
		                  <li><i class="fas fa-check-square"></i> Royalty Free Music</li>
		                  <li><i class="fas fa-check-square"></i> Stock Imagery</li>
		                  <li><i class="fas fa-check-square"></i> Titles</li>
		                  <li><i class="fas fa-check-square"></i> Intro / Outro Sequence</li>
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
					<h1>The Editing Process Is Very Straightforward</h1>
				</div>
			</div>
		</div>
		<div class="items">

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-lightbulb"></i>
						<h2>01. SEND</h2>
						<p>Upload your footage from any device to our safe and secure destinations.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-search"></i>
						<h2>02. EXPLAIN</h2>
						<p>Upload your footage from any device to our safe and secure destinations.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-comment-dots"></i>
						<h2>03. CUT</h2>
						<p>We get to work on your project with our passionate editing team working from your brief.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-file-alt"></i>
						<h2>05. DELIVER</h2>
						<p>We deliver your edited footage as a finished video in your preferred file type. We can assist with this by discussing what your usage purposes are and suggest the most suitable format.</p>
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
                    <h1>Engaging And Effective Videos</h1>
                </div>
            </div>
        </div>
        <div class="row">
        	<case-studies-by-category-widget v-bind:type="9"></case-studies-by-category-widget>
        </div>
	</div>
</div>

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>Taking Your Clips And Creating Excellence</h1>
				</div>
				<div class="main-heading text-center">
					<p>Digital Pie Video's team of creative professionals specialise in delivering the highest quality of video editing services for corporate and creative clients all around the world for thousands of businesses and projects.

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
