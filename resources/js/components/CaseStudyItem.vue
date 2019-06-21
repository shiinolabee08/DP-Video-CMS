<template>
	<div class="case-study-item">
		<img v-bind:src="item.videoThumb" v-on:click="showVideo">
		<div class="inner-content">
			<h1><img class="icon" v-bind:src="item.icon"/> {{ item.title }} </h1>
			<p>{{ item.content }}</p>
			<a v-bind:href="item.postUrl">View Case Study</a>
		</div>	  	
		<modal
	</div>
</template>

<script>
	export default{
		props: [ 'item' ],
		methods : {
			showVideo(){
				let videoUrl = this.item.videoUrl;
				let title = this.item.title;

				this.$modal.show('dialog', {
					title: title,
			        text: '<iframe width="100%" height="350" src="'+videoUrl+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>',			        
		 	    });
			}
		}
	}
</script>