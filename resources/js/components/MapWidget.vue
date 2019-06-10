<template>
	<gmap-map
      :center="center"
      :zoom="12"
      style="width:100%;  height: 400px;"
    >
    <gmap-marker
        :key="index"
        v-for="(m, index) in markers"
        :position="m.position"
        @click="center=m.position"
      ></gmap-marker>
  	</gmap-map>
</template>

<script>
	export default {
  		name: "GoogleMap",
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
		    this.geolocate();
	  	},

	  	methods: {
		    // receives a place object via the autocomplete component
		    setPlace(place) {
		      	this.currentPlace = place;
		    },
		    addMarker() {
		      	if (this.currentPlace) {
		        	const marker = {
		          		lat: this.currentPlace.geometry.location.lat(),
		          		lng: this.currentPlace.geometry.location.lng()
		        	};
		        	this.markers.push({ position: marker });
		        	this.places.push(this.currentPlace);
		        	this.center = marker;
		        	this.currentPlace = null;
		      	}
		    },
		    geolocate: function() {
		      	navigator.geolocation.getCurrentPosition(position => {
		        	this.center = {
		          		lat: position.coords.latitude,
		          		lng: position.coords.longitude
		        	};
		      	});
		    }
	  	}
	};
</script>
