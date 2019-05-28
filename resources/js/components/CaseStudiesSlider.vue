<template>
	<div class="container" style="margin-top:30px;">       
		<carousel :autoplay="true" :items="1" :dots="false" :autoHeight="true" :nav="false" :rewind="true" :loop="false" :autoplayTimeout="100000" :mouseDrag="false" :margin="45">
		    <template slot="prev"><span class="prev"><i class="fa fa-chevron-left"></i></span></template>		    
		    <case-study-item v-for="caseStudy in caseStudiesList" v-bind:key="caseStudy.title" v-bind:item="caseStudy"/>
		    <template slot="next"><span class="next"><i class="fa fa-chevron-right"></i></span></template>
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
					{ videoThumb : window.baseUrl + 'images/case-studies/corporate-video-thumb.jpg', title : 'Corporate Video - Rotaflex ', icon : window.baseUrl + 'images/corporate-video-icon.png', content : 'The Rotaflex is a product used in the food industry (mainly flour mills) and is used to clean mill spouts and remove blockages and is also used by mills in over 60 countries worldwide.', videoUrl : 'https://www.youtube.com/embed/JOQRaEHeyLk', showModal : false},
					{ videoThumb : window.baseUrl + 'images/case-studies/osborne-overlay.jpg', title : 'Promotional Video - Osborne & Sons', icon : window.baseUrl + 'images/corporate-video-icon.png', content : 'Osborne & Sons is a local, family run business and have been in the cockle and fishing trade since 1880! Located in the historic seaside town of Leigh-On-Sea, the company provides fresh cockles daily and have a range of their own cockle and fishing boats.',videoUrl : 'https://www.youtube.com/embed/qKLB9R4vctU', showModal : false }
				]
        	}
        },
        mounted(){

        	var app = this;
        }
    }

</script>