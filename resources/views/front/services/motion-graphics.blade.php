@extends('layouts.app')

@section('content')

<div class="container-fluid service-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="title-heading">
					<h1>We Create <strong>Beautiful<br> Illustrations</strong> For Your Business Or Project</h1>
					<h2>We can provide you with stunning illustrations to<br> bring your vision to life, explain a service,<br> demonstrate a process and much more.</h2>
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
					<h1>Crafting Perfect Animations For Companies Globally.</h1>
				</div>
				<div class="main-heading text-center">
					<p>At Digital Pie Video, our main goal is to provide you with a cost efficient, budget friendly solution combined with exceptional brand identity, proactive input from the professionals to guaranteed to set you apart from your competition!</p>
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
		<div class="row mb-5">
		    <div class="col-md-1 col-sm-12"></div>
		    <div class="col-md-5 col-sm-12">
		        <div class="package-item package-standard">
		            <div class="header">
		                <h2>TEASER<br>VIDEO PACKAGE</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£199.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Up To 20 Seconds Duration</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> HD 1080</li>
		                  <li><i class="fas fa-check-square"></i> Animation Effects & Visualization</li>
		                  <li><i class="fas fa-check-square"></i> Voice Over and Sound Effects (Male or Female)</li>
		                  <li><i class="fas fa-check-square"></i> Sample Themes</li>
		                  <li><i class="fas fa-check-square"></i> Custom Settings</li>
		                  <li><i class="fas fa-check-square"></i> Characters and Graphics</li>
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
		                <h2>START-UP <br>VIDEO PACKAGE</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£399.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
							<li><i class="fas fa-check-square"></i> Up To 30 Seconds Duration</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> HD 1080</li>
		                  <li><i class="fas fa-check-square"></i> Animation Effects & Visualization</li>
		                  <li><i class="fas fa-check-square"></i> Voice Over and Sound Effects (Male or Female)</li>
		                  <li><i class="fas fa-check-square"></i> Sample Themes</li>
		                  <li><i class="fas fa-check-square"></i> Custom Settings</li>
		                  <li><i class="fas fa-check-square"></i> Characters and Graphics</li>
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
		<div class="row mb-5">
		    <div class="col-md-4 col-sm-12">
		    	<div class="package-item package-standard">
		            <div class="header">
		                <h2>CLASSIC<br>VIDEO PACKAGE</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£799.00</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Up To 60 Seconds Duration</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> HD 1080</li>
		                  <li><i class="fas fa-check-square"></i> Animation Effects & Visualization</li>
		                  <li><i class="fas fa-check-square"></i> Voice Over and Sound Effects (Male or Female)</li>
		                  <li><i class="fas fa-check-square"></i> Sample Themes</li>
		                  <li><i class="fas fa-check-square"></i> Custom Settings</li>
		                  <li><i class="fas fa-check-square"></i> Characters and Graphics</li>
		                  <li><i class="fas fa-check-square"></i> 4-Week Delivery</li>
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
		                <h2>ADVANCED<br>VIDEO PACKAGE</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£1099.00</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Up To 90 Seconds Duration</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> HD 1080</li>
		                  <li><i class="fas fa-check-square"></i> Animation Effects & Visualization</li>
		                  <li><i class="fas fa-check-square"></i> Voice Over and Sound Effects (Male or Female)</li>
		                  <li><i class="fas fa-check-square"></i> Sample Themes</li>
		                  <li><i class="fas fa-check-square"></i> Custom Settings</li>
		                  <li><i class="fas fa-check-square"></i> Characters and Graphics</li>
		                  <li><i class="fas fa-check-square"></i> 5-Week Delivery</li>
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
		                <h2>PREMIUM <br>VIDEO PACKAGE</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£1399.00</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
							<li><i class="fas fa-check-square"></i> Up To 120 Seconds Duration</li>
		                  <li><i class="fas fa-check-square"></i> Storyboard</li>
		                  <li><i class="fas fa-check-square"></i> HD 1080</li>
		                  <li><i class="fas fa-check-square"></i> Animation Effects & Visualization</li>
		                  <li><i class="fas fa-check-square"></i> Voice Over and Sound Effects (Male or Female)</li>
		                  <li><i class="fas fa-check-square"></i> Sample Themes</li>
		                  <li><i class="fas fa-check-square"></i> Custom Settings</li>
		                  <li><i class="fas fa-check-square"></i> Characters and Graphics</li>
		                  <li><i class="fas fa-check-square"></i> 4-Week Delivery</li>
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
					<h1>The Proven Process For Guaranteed Results</h1>
					<h3>For us to do our best work, we've established some simple rules to follow.</h3>
				</div>
			</div>
		</div>
		<div class="items">

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-lightbulb"></i>
						<h2>01. SKETCH</h2>
						<p>We sketch out the rough 2D illustration for our client required story or message. This sketch will receive your approval before we progress to the next step.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-search"></i>
						<h2>02. ILLUSTRATE</h2>
						<p>After you have approved the sketch, we illustrate! You will be assigned an client relationship manager to ensure you are kept in the loop at all times and that deadline requirements are met. Your client relationship manager will be responsible for communicating with you and making sure your feedback is seen in the final product!</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-comment-dots"></i>
						<h2>03. DELIVERY</h2>
						<p>Finally, the final file is approved by you and we deliver this back to you in your preferred format. We will provide you with an excellent result, so you can leave an excellent impression.</p>
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
                    <h1>Look At What We Can Do</h1>
                </div>
            </div>
        </div>
        <div class="row">
        	<case-studies-by-category-widget v-bind:type="6"></case-studies-by-category-widget>
        </div>
	</div>
</div>

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>Motion Graphics, 2D Animation</h1>
				</div>
				<div class="main-heading text-center">
					<p>Digital Pie Video's team of creative professionals specialise in delivering the highest quality of 2D animation for corporate and creative clients all around the world for thousands of businesses and projects. From 2D cartoon animation to website explainer videos, we're here with all the tools required to help you stand out from your competitors and make your customers decisions easier.

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