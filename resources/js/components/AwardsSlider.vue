<template>
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-12"></div>
			<div class="col-md-8">
				<carousel :autoplay="true" :items="3" :dots="false" :nav="false" :rewind="false" :loop="home || false" :autoplayTimeout="20000" :margin="10">

				   	<!-- <template slot="prev"><span class="prev"><i class="fa fa-chevron-left"></i></span></template> -->
				    
				    <img src="/images/awards/google-certified.png" style="max-width: 190px !important;"/>

				    <img src="/images/awards/essex-digital-award.png" style="max-width: 190px !important;"/>

				    <img src="/images/awards/director-of-the-year.png" style="max-width: 190px !important;"/>

				    <!-- <template slot="next"><span class="next"><i class="fa fa-chevron-right"></i></span></template> -->

				</carousel>
			</div>
			<div class="col-md-2 col-sm-12"></div>
		</div>
	</div>
</template>

<script>

    import carousel from 'vue-owl-carousel'

    export default {
        components: { carousel },
        props : [ 'home' ],
        mounted(){
        	// console.log(this.home);
        }
    }

</script>