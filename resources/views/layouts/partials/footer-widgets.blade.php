<footer class="footer-wrapper">
	<section class="footer-widgets">
		<div class="container-fluid flex-center">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<h3>Top Notch Services</h3>
						<ul class="nav flex-column">
						  <li class="nav-item">
						    <a class="nav-link active" href="{{ url('/services/corporate-video') }}">Corporate Video</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="{{ url('/services/event-filming') }}">Event Filming</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="{{ url('/services/explainer-video') }}">Explainer Video</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="{{ url('/services/facebook-cover-videos') }}">Facebook Cover Videos</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="{{ url('/services/motion-graphics') }}">Motion Graphics</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="{{ url('/services/promotional-video') }}">Promotional Video</a>
						  </li>
						  <!-- <li class="nav-item">
						    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						  </li> -->
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<h3>Packages</h3>
						<ul class="nav flex-column">
						  <li class="nav-item">
						    <a class="nav-link" href="{{ url('/services/youtube-editing') }}">Youtube Editing</a>
						    <a class="nav-link" href="{{ url('/services/video-editing') }}">Video Editing</a>
						  </li>					  
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<h3>Company</h3>
						<ul class="nav flex-column">
						  <li class="nav-item">
						    <a class="nav-link" href="{{ url('/about-us') }}">About</a>
						  </li>	
						  <li class="nav-item">
						    <a class="nav-link" href="{{ url('/services') }}">Services</a>
						  </li>	
						  <li class="nav-item">
						    <a class="nav-link" href="{{ url('/our-work') }}">Our Work</a>
						  </li>	
						  <li class="nav-item">
						    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
						  </li>	
						  <li class="nav-item">
						    <a class="nav-link" href="{{ url('/testimonials') }}">Testimonials</a>
						  </li>					  
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<h3>Newsletter Subscription</h3>
						<p class="newsletter-label">Sign up for free newsletters & get more of Digital Pie delivered to you.</p>
						<!-- Newsletter Form Area -->
						<form v-on:submit="sendNewsletter" action="#" class="newsletter-form">
							<div class="input-group">
								<input type="text" name="email" class="form-control input-md" v-model="subscribe_email" placeholder="Email" />
								<div class="input-group-append">
				                    <button class="btn btn-outline-secondary" id="btn-chat" type="submit">
				                        Submit
				                    </button>
				                </div>
							</div>
						</form>
						<ul class="social-links">
							<li><a href="https://twitter.com/digitalpieltd/" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/digitalpieltd/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.instagram.com/digitalpieltd/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>&copy; 2019 Digital Pie Video. © 2018 - All Rights Reserved, Digital Pie</p>
				</div>
			</div>
		</div>
	</div>
</footer>