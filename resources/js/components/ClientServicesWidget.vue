<template>
	<div class="case-study-categies-list">		
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 text-center">
					<ul v-if="categories.length">
						<li v-on:click="filter(category.id)" v-bind:class="{ active: selectedCategory == category.id }" v-for="category in categories">
							{{ category.title }}
						</li>
					</ul>		
				</div>
				<div class="col-md-2"></div>
			</div>

			<!-- Results Grid -->
			<transition name="fade" :duration="{ enter: 500, leave: 800 }">
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
			<!-- Results Grid -->
		</div>
	</div>
</template>
<script>
	export default{
		// props : [ 'options' ],
		data(){
			return {
				options : null,
				categories : [],
				selectedCategory : 11,
				resultData : [],
			}
		},

		mounted(){
			var app = this;

			axios.get('/api/case-study-categories/1')
				.then((response) => {
					app.categories = response.data.data;
					app.filter( 11 );
				})
				.catch( (response) => {
					console.log(response);
				});
		},

		methods : {
			filter( type ){

				var app = this;
				
				app.selectedCategory = type;
				app.resultData = [];

				axios.get('/api/case-studies/' + type)
					.then((response) => {
						app.resultData = response.data.data;
					}).
					catch((response) => {
						console.log(response);
					})
			},

			showVideo( record  ){
				let videoUrl = record.youtube_video_url;
				let title = record.title;

				this.$modal.show('dialog', {
					title: title,
			        text: '<iframe width="100%" height="350" src="'+videoUrl+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>',			        
		 	    });
			}
		}

	}
</script>