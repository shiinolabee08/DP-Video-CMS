<template>
	<div class="testimonial-item">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<img v-bind:src="item.image" v-bind:class="{ svg : item.isSvg }">
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="inner-content">
						<img class="icon" src="/images/trust-pilot-small.png"/>
						<h2> {{ item.title }} </h2>
						<p>{{ item.content }}</p>
						<img class="star" src="/images/stars.png"/>
						<!-- <a href="javascript:void(0);">View Case Study</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		props: [ 'item' ]
	}
</script>