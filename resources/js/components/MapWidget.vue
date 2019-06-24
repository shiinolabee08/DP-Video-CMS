<template>
	<mapbox access-token="pk.eyJ1IjoiZGlnaXRhbHBpZSIsImEiOiI2ODcwNTA1ZWMxNTE0ZGI3YmU1YzFlNWViYWM0YmM1ZCJ9.ZVZ25aGzVkAymQ2rMhWWxA" :map-options="{
      style: 'mapbox://styles/mapbox/streets-v11',
      center: [55.378052, -3.435973],
      zoom: 7
  }"


  :geolocate-control="{
      show: true,
      position: 'top-left'
  }"
  :scale-control="{
      show: true,
      position: 'top-left'
  }"
  :fullscreen-control="{
      show: true,
      position: 'top-left'
  }"  @map-load="mapLoaded"></mapbox>
</template>

<script>
	import Mapbox from 'mapbox-gl-vue';

	export default {
  		components : { Mapbox },
  		data() {
		    return {
		      // default to United Kingdom
		      center: { lat: 55.378052, lng: -3.435973 },
		      markers: [/*{
		      	position : {
		      		lat : 51.573200,
		      		lng : 0.682880
		      	}
		      }*/],
		      places: [],
		      currentPlace: 'Ryan House, 18 – 19 Aviation Way, Southend on Sea, Essex, SS2 6UN'
		    };
  		},

	  	mounted() {
		    // this.geolocate();
	  	},

	  	methods: {
	  		
	  	}
	};
</script>
