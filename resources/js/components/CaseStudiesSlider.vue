<template>
	<div class="container" style="margin-top:30px;">
		<!-- <case-study-item v-for="caseStudy in caseStudiesList" v-bind:key="caseStudy.$index" v-bind:item="caseStudy"/> -->
		<carousel :autoplay="true" :items="1" :dots="false" :autoHeight="true" :nav="false" :rewind="false" :loop="true" :autoplayTimeout="100000" :margin="45">

		    <!-- <template slot="prev"><span class="prev">prev</span></template> -->		    
		    <case-study-item v-for="caseStudy in caseStudiesList" v-bind:key="caseStudy.title" v-bind:item="caseStudy"/>
		    <!-- <template slot="next"><span class="next">next</span></template> -->

		</carousel>
	</div>
</template>

<script>

    import carousel from 'vue-owl-carousel'
    import CaseStudyItem from './CaseStudyItem.vue'

    export default {
        components: { 'carousel' : carousel, 'case-study-item' : CaseStudyItem  },
        data : function(){

        	return {
	        	caseStudiesList : [
					{ videoThumb : window.baseUrl + 'images/case-studies/corporate-video-thumb.jpg', title : 'Corporate Video - Rotaflex ', icon : window.baseUrl + 'images/corporate-video-icon.png', content : 'The Rotaflex is a product used in the food industry (mainly flour mills) and is used to clean mill spouts and remove blockages and is also used by mills in over 60 countries worldwide.'},
					{ videoThumb : window.baseUrl + 'images/case-studies/osborne-overlay.jpg', title : 'Promotional Video - Osborne & Sons', icon : window.baseUrl + 'images/corporate-video-icon.png', content : 'Osborne & Sons is a local, family run business and have been in the cockle and fishing trade since 1880! Located in the historic seaside town of Leigh-On-Sea, the company provides fresh cockles daily and have a range of their own cockle and fishing boats.' }
				]
        	}
        },
        mounted(){

        	var app = this;
        }
    }

</script>