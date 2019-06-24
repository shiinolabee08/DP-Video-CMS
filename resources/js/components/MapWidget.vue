<template>
	<div style="height: 500px;width: 100%;">
		<MglMap :accessToken="accessToken" :hash="false" :minZoom="12" :maxZoom="24" :mapStyle.sync="mapStyle" @load="onMapLoaded" :center="coordinates">
			<MglNavigationControl position="top-right" />
      		<MglGeolocateControl position="top-right" />
			<MglMarker :coordinates="coordinates">
				<MglPopup>
		          <h3>Head Office</h3>
		          <p>Ryan House, 18 – 19 Aviation Way, Southend on Sea, Essex, SS2 6UN</p>
		      	</MglPopup>
			</MglMarker>
		</MglMap>
	</div>
</template>

<script>
	import Mapbox from "mapbox-gl";
	import { MglMap, MglPopup, MglMarker, MglNavigationControl, MglGeolocateControl, MglFullscreenControl } from "vue-mapbox";

	export default {
	  	components: { MglMap, MglPopup, MglMarker, MglNavigationControl, MglGeolocateControl },
	  	data() {
	    	return {
	      		accessToken: process.env.MIX_MAPBOX_ACCESS_TOKEN,
	      		mapStyle: 'mapbox://styles/mapbox/light-v10',
	      		coordinates: [0.6859232, 51.5733951],
	    	};
	  	},
	  	created() {
	    	// We need to set mapbox-gl library here in order to use it in template
	    	this.map = null;
	  	},
	  	methods :{
	  		onMapLoaded(event) {
		      // in component
		      this.map = event.map;
		      this.map.panTo(this.coordinates, { duration : 4000, easing : function(){ return 1; }, animate: true });
		    }
	  	}
	}
</script>
