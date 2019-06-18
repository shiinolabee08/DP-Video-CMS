<section class="bottom-section">
	<!-- Work Together -->
	<div class="container-fluid work-together">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="info">
						<h2>Contact</h2>
						<p><i class="fa fa-map-marker"></i> 18 – 19 Aviation Way, Southend SS2 6UN</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="info">
						<h2>Email</h2>
						<a href="mailto:info@digitalpie.co.uk"><i class="fa fa-envelope"></i> info@digitalpie.co.uk</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="info">
						<h2>Phone</h2>
						<a href="tel:01702 749662"><i class="fa fa-phone"></i> 01702 749662</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="info">
						<h2>Live Chat</h2>
						<a href="javascript:void(0);"><i class="fa fa-comments"></i> Click here to live chat</a>
						<!-- onclick="LC_API.open_chat_window();return false" -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid consultancy">
		<div class="container">
			<div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="title-heading white-heading has-primary-border-center">
                        <h1>Get Free Consultancy</h1>
                        <h3>Say hi on live chat, give us a call or simply fill out the form below. We would love to get to know you and your project better.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
            	<!-- Form Area -->
				<contact-form-widget v-bind:id="2" v-bind:is-default="true"></contact-form-widget>
				<!-- Form Area -->
            </div>
		</div>
	</div>
	<!-- Work Together -->
</section>
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
                <chat-form v-on:messagesent="addMessage"></chat-form>
            </div>
        </div>
    </div>
</transition>