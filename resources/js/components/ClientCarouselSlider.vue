<template>
	<div class="container">
		<carousel :autoplay="true" :items="5" :dots="false" :nav="false" :rewind="false" :loop="false" :autoplayTimeout="10000" :margin="45">

		    <template slot="prev"><span class="prev"><i class="fa fa-chevron-left"></i></span></template>

		    <a href="https://www.iod.com/" target="_blank"><img src="/images/sliders/iod-logo.png" style="max-width: 100px !important;"></a>

		    <a href="https://www.eliteislandresorts.com/" target="_blank"><img src="/images/sliders/logo.gif"></a>

		    <a href="https://www.mhfed.com/" target="_blank"><img src="/images/sliders/mhfed.png" width="65" style="max-width: 100px !important;"></a>

		    <a href="https://www.motoraid.com/" target="_blank"><img src="/images/sliders/motoraid-logo-transparent.png"></a>

		    <a href="https://www.premier-ssl.com/" target="_blank"><img src="/images/sliders/premier-ssl-log.png"></a>

		    <a href="https://www.tavistockinvestments.com/" target="_blank"><img src="/images/sliders/tavistock.png"></a>

		    <a href="https://www.tubetech.com/" target="_blank"><img src="/images/sliders/tubetech-logo.svg" width="150"></a>

		    <a href="https://www.ultimatewarriorchallenge.com/" target="_blank"><img src="/images/sliders/uwc_logo.png" style="max-width: 100px !important;"></a>

		    <template slot="next"><span class="next"><i class="fa fa-chevron-right"></i></span></template>

		</carousel>
	</div>
</template>

<script>

    import carousel from 'vue-owl-carousel'

    export default {
        components: { carousel },
    }

</script>