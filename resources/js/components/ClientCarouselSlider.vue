<template>
	<div class="container">
		<carousel :autoplay="true" :items="5" :dots="false" :nav="false" :rewind="false" :loop="true" :autoplayTimeout="10000" :margin="45">

		    <!-- <template slot="prev"><span class="prev">prev</span></template> -->

		    <img src="/images/sliders/iod-logo.png" style="max-width: 100px !important;">

		    <img src="/images/sliders/logo.gif">

		    <img src="/images/sliders/mhfed.png" width="65" style="max-width: 100px !important;">

		    <img src="/images/sliders/motoraid-logo-transparent.png">

		    <img src="/images/sliders/premier-ssl-log.png">

		    <img src="/images/sliders/tavistock.png">

		    <img src="/images/sliders/tubetech-logo.svg" width="150">

		    <img src="/images/sliders/uwc_logo.png" style="max-width: 100px !important;">

		    <!-- <template slot="next"><span class="next">next</span></template> -->

		</carousel>
	</div>
</template>

<script>

    import carousel from 'vue-owl-carousel'

    export default {
        components: { carousel },
    }

</script>