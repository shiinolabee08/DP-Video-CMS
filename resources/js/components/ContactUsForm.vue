<template>
	<div class="contact-form-container" v-bind:class="{ transparent : isDefault == true }">
		<transition name="fade">
			<div class="contact-form-inner" v-if="form">
				<form method="post" action="#" v-on:submit="submitForm">
					<!-- <div v-html="form.form_html"></div> -->
					<p v-if="isDefault==false">Talk to us today about your <br><strong>video project.</strong></p>
					<div class="form-group"><input type="text" v-bind:disabled="isLocked" v-model="full_name" placeholder="Full Name*" name="full_name"></div>
					<div class="form-group"><input type="email" v-bind:disabled="isLocked" v-model="email"  name="email" placeholder="Email*"></div>
					<div class="form-group"><input type="text" v-bind:disabled="isLocked" v-model="phone_number" name="phone_number" placeholder="Phone Number"/></div>
					<div class="form-group"><textarea rows="5" cols="15" v-bind:disabled="isLocked" name="more_info" v-model="more_info" placeholder="Talk about your project*"></textarea></div>
					<div class="form-group"><input type="submit" value="Send"></div>
					<div v-if="errors.length">
						<h4 class="error-label">Please review your details below the ff:</h4>
						<ul class="error-list">
							<li v-for="error in errors">
								{{error}}
							</li>
						</ul> 
					</div>
					<div class="alert alert-success" role="alert" v-if="successMsg">Thank you for your inquiry. It has been sent.</div>
				</form>
			</div>
		</transition>
	</div>
</template>
<script>
	export default{
		props : {
			id : {
				type : Number,
				default : 0,
			},
			isDefault : {
				type : Boolean,
				default : false
			}
		},
		data(){
			return {
				form : {},
				formData : {},
				errors : [],
				message : null,
				isLocked : false,
				full_name : '',
				email : '',
				phone_number : '',
				more_info : '',
				successMsg : false,
			}
		},
		mounted(){
			var app = this;

			axios.get('/api/contact-form/' + app.id)
				.then((response) => {
					if ( response.data.data ){
						app.form = response.data.data; 
						app.formData = app.form.form_html;
						app.setDefaultFormOptions();
					}
				})
				.catch((response) => {
					console.log(response);
				})
		},

		methods : {
			compiledMarkdown: function () {
		      return marked(this.formData, { sanitize: true })
		    },

			setDefaultFormOptions(){
				this.full_name = '';
				this.email = '';
				this.phone_number = '';
				this.more_info = '';
			},

			setSuccessMessage(){
				this.successMsg = true;
			},

			submitForm(e){
				e.preventDefault();

				let app = this;

				app.errors = [];

				if ( app.full_name.length <= 0 ){
					app.errors.push('Full Name required.');
				}

				if ( app.email.length <= 0 ){
					app.errors.push('Email required.');
				}

				if ( app.more_info.length <= 0 ){
					app.errors.push('You need to enter brief details of your project.');
				}

				if ( app.errors.length == 0 ) {
					app.isLocked = true;

					axios.post('/api/contact-us/', { full_name : app.full_name, email : app.email, phone_number : app.phone_number, more_info : app.more_info, contact_form_id : app.id })
					.then( (response) => {

						app.isLocked = false;
						
						if( response.data.status && response.data.mail_sent ) {
							app.setSuccessMessage();
							app.setDefaultFormOptions();
						} else if ( response.data.mail_sent == false  ){
							app.errors.push('There was an error trying to send your enquiry. Please try again later.');
						} 
					}).catch( (response) => {
						console.log(response);
					})
				}

			}
		}
	}
</script>