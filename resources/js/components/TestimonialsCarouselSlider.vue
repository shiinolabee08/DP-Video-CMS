<template>
	<div class="container testimonials-slider">
		<carousel :autoplay="true" :items="1" :dots="true" :nav="false" :rewind="false" :loop="false" :autoplayTimeout="20000" :margin="10" :center="true">

		    <template slot="prev"><span class="prev"><i class="fa fa-chevron-left"></i></span></template>
		    <testimonial-item v-for="testimonial in testimonials" v-bind:key="testimonial.id" v-bind:item="testimonial"></testimonial-item>
		    <template slot="next"><span class="next"><i class="fa fa-chevron-right"></i></span></template>

		</carousel>
	</div>
</template>

<script>

    import carousel from 'vue-owl-carousel'
    import TestimonialItem from './TestimonialItem.vue'

    export default {
        components: { carousel, 'testimonial-item' : TestimonialItem },
        data : function(){
        	return {
        		testimonials : [
        			{ id : 1, title : 'Digital Pie has helped increase our…', content: 'Digital Pie has helped increase our online visibility 10-fold inside 12 months. An innovative,energised and professional team that has helped create some well thought-out marketing campaigns. Who said Pies weren\'t good for you?', image: process.env.MIX_APP_URL + '/images/testimonials/premier.png', isSvg : false },
        			{ id : 2, title : 'I was really happy about the reactivity…', content: 'I was really happy about the reactivity and service received from Digital Pie.', image: process.env.MIX_APP_URL + '/images/testimonials/PaulLogo.png', isSvg: false },
        			{ id : 3, title : 'Highly recommend Digital Pie', content: 'Highly recommend Digital Pie, all the staff are very professional and always go the extra mile to help and deliver all of our marketing material. Their website designs are complimented by our clients and any updates are always made quickly and accurately.', image: process.env.MIX_APP_URL + '/images/testimonials/tubetech-logo.svg', isSvg: true },
        			{ id : 4, title : 'The staff at digital pie are always…', content: 'The staff at digital pie are always there to support you at a moments notice, highly recommended.', image: process.env.MIX_APP_URL + '/images/testimonials/kevinpt.png', isSvg : false },
        			{ id : 5, title : 'They consistently deliver to their promises.', content: 'I have used DP for over 18 months now & since the start they have consistently delivered high quality work (Video, Twitter, Facebook, Linkedin, web design, marketing leaflets & trade show backdrops.) - over the past 12 months they have successfully added strong project & client management, encouragingly they have managed to implement this without losing their renowned flexibility & responsiveness to anything last minute I occasionally still throw at them!!', image: process.env.MIX_APP_URL + '/images/testimonials/logo_with_essentials.png', isSvg :false },
        			{ id : 6, title : 'The team at Digital Pie provide an all…', content: 'The team at Digital Pie provide an all round terrific service. From account management to the wide range of ad-hoc, monthly and project-based marketing deliverables, we have ongoing confidence that quality will be high, the work will be on-time and produced at good value.', image: process.env.MIX_APP_URL + '/images/testimonials/AFP-Header-70px.png', isSvg:false },
        			{ id : 7, title : 'Always ready to push the boundaries....', content: 'The team at Digital Pie are not only competent, professional and highly creative they are also really great people who care about the projects they are working on. The DP team are an extension of the IoD team which is so beneficial and I cannot recommend their social media, website design and graphic design services highly enough.', image: process.env.MIX_APP_URL + '/images/testimonials/iod-logo.jpg', isSvg:false }
        		]
        	}
        }
    }

</script>