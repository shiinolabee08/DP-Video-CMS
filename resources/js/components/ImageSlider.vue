<template>
	<transition-group tag="div" class="image-slider mt-n4" name="fade">
      <div v-for="number in [currentImage]" v-bind:key="number" >
        <img :src="imageList[Math.abs(currentImage) % imageList.length]"/>
      </div>
  	</transition-group>
</template>
<script>
	export default{
		props : [ 'images' ],
		data(){
			return {				
				currentImage : 0, 
				imageList : [],
			}
		},
		mounted(){
			
			this.imageList = this.images;

			setInterval(() => {
				this.currentImage = this.currentImage + 1;
			},3000)
		}
	}
</script>
