<template>
	<div class="contact-form-container" v-bind:class="{ transparent : isDefault == true }">
		<transition name="fade">
			<div class="contact-form-inner" v-if="form">
				<form method="post" action="#" v-on:submit="submitForm">
					<div v-html="form.form_html"></div>
					<div v-if="errors.length">
						<ul class="error-list">
							<li v-for="error in errors">
								{{error}}
							</li>
						</ul> 
					</div>
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
				basicFormFields : [ 'full_name', 'email', 'phone_number', 'more_info' ]
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
			setDefaultFormOptions(){
				//set v models via regex itiration on form_html string
			},

			submitForm(event){
				event.preventDefault();

				console.log(this);

				if ( this.full_name.length <= 0 ){
					this.errors.push('Full Name required.');
				}

				if ( this.email.length <= 0 ){
					this.errors.push('Email required.');
				}

				if ( this.more_info.length <= 0 ){
					this.errors.push('You need to enter brief details of your project.');
				}

			}
		}
	}
</script>