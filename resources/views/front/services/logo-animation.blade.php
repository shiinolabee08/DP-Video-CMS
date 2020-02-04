@extends('layouts.app')

@section('content')

<!-- Corporate Video Banner -->
<div class="container-fluid service-banner" style="height:105vh;">
	<div class="video-background">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{url('/videos/dp-indent-reel.mp4')}}" type="video/mp4">
        </video>
    </div>
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="title-heading">
					<h1>We Create <strong>Beautiful Logo<br> Animations</strong> To Bring Your Brand To Life</h1>
					<h2>We can provide you with a stunning branded title<br> sequence to represent your business in modern,<br> professional and recognised fashion.</h2>
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
<!-- Corporate Video Banner -->

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading has-primary-border-center text-center">
					<h1>Crafting Perfect Animations For Companies Globally.</h1>
				</div>
				<div class="main-heading text-center">
					<p>At Digital Pie Video, we take an experienced approach to creating highly engaging digital branding. We believe in providing purely highly creative, exclusive and fitting brand identities giving your business or project an edge over its competitors and an opportunity to stand out from the crowd.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid corporate-video-production gray-bg-container">
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="title-heading text-center has-primary-border-center">
                    <h1>Highly Engaging Animated Logos</h1>
                </div>
            </div>
        </div>
        <div class="row">
        	<case-studies-by-category-widget v-bind:type="5"></case-studies-by-category-widget>
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
		    <div class="col-md-4 col-sm-12">
		    	<div class="package-item package-basic">
		            <div class="header">
		                <h2>BASIC <br>LOGO ANIMATION</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£195.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> 1 Concept</li>
		                  <li><i class="fas fa-check-square"></i> 2 Drafts</li>
		                  <li><i class="fas fa-check-square"></i> Dedicated Designer</li>
		                  <li><i class="fas fa-check-square"></i> Turnaround Time 5 Days</li>
		                  <li><i class="fas fa-check-square"></i> 100% Ownership Rights</li>
		                  <li><i class="fas fa-check-square"></i> Sound FX</li>
		                  <li><i class="fas fa-check-square"></i> Icon Integration</li>
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
		                <h2>STANDARD <br>LOGO ANIMATION</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£295.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
		                  <li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> 2 Concepts</li>
		                  <li><i class="fas fa-check-square"></i> 2 Draft Limit On Chosen Concept</li>
		                  <li><i class="fas fa-check-square"></i> Dedicated Designer</li>
		                  <li><i class="fas fa-check-square"></i> Turnaround Time 8 Days</li>
		                  <li><i class="fas fa-check-square"></i> 100% Ownership Rights</li>
		                  <li><i class="fas fa-check-square"></i> Sound FX</li>
		                  <li><i class="fas fa-check-square"></i> Icon Integration</li>
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
		                <h2>ADVANCED <br>LOGO ANIMATION</h2>
		            </div>
		            <div class="body">
		                <h4 class="price">£395.00 + VAT</h4>
		                <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
		                <ul>
							<li><i class="fas fa-check-square"></i> Face to Face / Skype Production Meeting</li>
		                  <li><i class="fas fa-check-square"></i> 3 Concepts</li>
		                  <li><i class="fas fa-check-square"></i> 2 Draft Limit On Chosen Concept</li>
		                  <li><i class="fas fa-check-square"></i> Dedicated Designer</li>
		                  <li><i class="fas fa-check-square"></i> Turnaround Time 8 Days</li>
		                  <li><i class="fas fa-check-square"></i> 100% Ownership Rights</li>
		                  <li><i class="fas fa-check-square"></i> Sound FX</li>
		                  <li><i class="fas fa-check-square"></i> Icon Integration</li>
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
					<h1>The Proven Process For Creating Sleek Logo Animations</h1>
					<h3>In order for us to bring your vision to life, we must follow the rules.</h3>
				</div>
			</div>
		</div>
		<div class="items">

			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-envelope"></i>
						<h2>01. SEND</h2>
						<p>Send us your logo in vector/png along with any other useful information we could use as inspiration.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-video"></i>
						<h2>02. CREATE</h2>
						<p>your concepts for your input and approval. Your account manager will keep you posted on the whole process.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<i class="fas fa-truck"></i>
						<h2>03. DELIVER</h2>
						<p>We deliver your animated logo in your preferred file type. We can assist with this by discussing what your usage purposes are and suggest the most suitable format.</p>
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

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading has-primary-border-center text-center">
					<h1>Bringing Branding To Life</h1>
				</div>
				<div class="main-heading text-center">
					<p>Digital Pie Video’s team of creative professionals specialise in delivering the highest quality of logo animation for corporate and creative clients all around the world for thousands of businesses and projects. here with all the tools required to help you stand out from your competitors and make your customers decisions easier. Got a project for us? Let’s talk today and discuss your idea in more details.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Testimonials -->
@include('layouts/partials/what-our-client-say')
<!-- Testimonials -->


@endsection
