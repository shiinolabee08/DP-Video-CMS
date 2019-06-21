<template>
	<div class="container carousel-slider">
		<div class="row">
			<div class="col-md-2 col-sm-12"></div>
			<div class="col-md-8">
				<carousel :autoplay="true" :items="1" :dots="false" :nav="false" :rewind="true" :loop="false" :autoplayTimeout="8000" :margin="10">

				   	<template slot="prev"><span class="prev"><i class="fa fa-chevron-left"></i></span></template>
				    
				    <img v-for="item in items" v-bind:src="baseUrl + item" style="max-width: 690px !important;"/>

				    <template slot="next"><span class="next"><i class="fa fa-chevron-right"></i></span></template>

				</carousel>
			</div>
			<div class="col-md-2 col-sm-12"></div>
		</div>
	</div>
</template>
<script>

	import carousel from 'vue-owl-carousel'

	export default{
		components: { carousel },
		props : {
			items :{
				type: Array,
				default :[]
			},
			baseUrl : {
				type: String,
				default : '/'
			}
		},
	}
</script>