<template>
	<div class="case-study-categories-list">
		<transition name="fade">
			<div class="row results-data-grid" v-if="resultData.length">
				<!-- <div class="col-md-2 col-sm-12"></div> -->
				<div class="col-md-11 offset-md-1 col-sm-12">
					<div class="row">
						<div class="col-md-4 col-sm-12 result-item" v-for="item in resultData">
							<div class="item-backgroud-overlay" v-bind:style="{ backgroundImage : 'url(/uploads/case-studies/' + item.feature_image +')' }"></div>
							<div class="inner-content">
								<div class="title-heading">
									<h2>{{ item.title }}</h2>
								</div>
								<div class="button">
									<button v-on:click="showVideo(item)" type="button">Watch Video</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-md-2 col-sm-12"></div> -->
			</div>
		</transition>
	</div>	
</template>
<script>
	export default{
		props : [ 'type' ],
		data(){
			return {
				resultData : [],
			}
		},
		mounted(){
			var app = this;

			axios.get('/api/case-studies/' + app.type)
				.then((response) => {
					app.resultData = response.data.data;
				}).
				catch((response) => {
					console.log(response);
				})
		},

		methods:{
			showVideo( record  ){
				let videoUrl = record.youtube_video_url;
				let title = record.title;

				console.log(record);

				this.$modal.show('dialog', {
					title: title,
			        text: '<iframe width="100%" height="350" src="'+videoUrl+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>',			        
		 	    });
			}
		}
	}
</script>