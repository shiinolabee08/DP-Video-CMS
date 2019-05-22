<template>
	<div class="case-study-item">
		<img v-bind:src="item.videoThumb">
		<div class="inner-content">
			<h1><img class="icon" v-bind:src="item.icon"/> {{ item.title }} </h1>
			<p>{{ item.content }}</p>
			<a href="javascript:void(0);">View Case Study</a>
		</div>
	</div>
</template>

<script>
	export default{
		props: [ 'item' ],
		mounted(){
			// console.log(this.item);
		}
	}
</script>