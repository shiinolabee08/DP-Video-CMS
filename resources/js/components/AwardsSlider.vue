<template>
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-12"></div>
			<div class="col-md-8">
				<carousel :autoplay="true" :items="3" :dots="false" :nav="false" :rewind="false" :loop="true" :autoplayTimeout="20000" :margin="10" :center="true">

				    <!-- <template slot="prev"><span class="prev">prev</span></template> -->

				    <img src="/images/awards/director-of-the-year.png" style="max-width: 190px !important;"/>

				    <img src="/images/awards/essex-digital-award.png" style="max-width: 190px !important;"/>

				    <img src="/images/awards/google-certified.png" style="max-width: 190px !important;"/>

				    <img src="/images/awards/Trustpilot_new_logo.png" style="max-width: 190px !important;"/>		    

				    <!-- <template slot="next"><span class="next">next</span></template> -->

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
    }

</script>