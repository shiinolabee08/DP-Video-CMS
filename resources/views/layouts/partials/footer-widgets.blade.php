<transition name="slide-up-down">
	<div class="chat-box-toggle" v-if="!showChatbox" v-on:click="showChatbox=!showChatbox">
		<h3>Start a Project <i class="fa fa-comment-dots"></i></h3>
	</div>
</transition>

<transition name="slide-up-down" :duration="{ enter : 600, leave : 300 }">
	<div class="chat-box" v-if="showChatbox">
		<h3>Welcome to <strong>Digital Pie</strong> <i v-on:click="showChatbox=!showChatbox" class="fa fa-window-minimize"></i></h3>
		<div class="panel panel-default">
	        <div class="panel-heading">Start a project with us now by chatting straight away!</div>

	        <div class="panel-body">
	            <chat-messages :messages="messages"></chat-messages>
	        </div>
	        <div class="panel-footer">
	            <chat-form v-on:messagesent="addMessage" v-bind:user="{{ Auth::user() }}"></chat-form>
	        </div>
	    </div>
	</div>
</transition>
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
						<!-- Newsletter Form Area -->
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