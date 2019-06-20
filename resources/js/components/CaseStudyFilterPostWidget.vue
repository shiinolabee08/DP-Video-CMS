<template>
	<div class="case-study-categories-list">
		<div class="container">
			<div class="row" v-if="showCategories">
				<div class="col-md-2"></div>
				<div class="col-md-8 text-center">
					<ul v-if="categories.length">
						<li v-on:click="filter(0);" v-bind:class="{ active: selectedCategory == 0 }">All</li>
						<li v-on:click="filter(category.id)" v-bind:class="{ active: selectedCategory == category.id }" v-for="category in categories">
							{{ category.title | trimCategory }}
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
						<div class="col-md-4 col-sm-12 result-item" v-for="item in filteredResults">
							<div class="item-backgroud-overlay" v-bind:style="{ backgroundImage : 'url(/uploads/case-studies/' + item.feature_image +')' }"></div>
							<div class="inner-content">
								<div class="title-heading">
									<h2>{{ item.title }}</h2>
								</div>
							</div>
							<div class="hyperlink">
								<a v-bind:href="'/case-studies/' + item.post_slug">View Case Study</a>
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
		props : [ 'showCategories', 'selectedPost', 'showAllPosts' ],
		data() {
			return {
				categories : [],
				selectedCategory : 0,
				resultData : [],
			}
		},

		mounted(){
			let app = this;

			axios.get('/api/case-studies-posts')
				.then((response) => {
					app.categories = response.data.categories;
					app.resultData = response.data.case_studies;
				})
				.catch((response) => {

				})
		},

		filters:{
			trimCategory( category ){
				return category.replace('Case Study -', '');
			},
		},

		computed : {

			filteredResults(){
				let app = this;

				return app.resultData.filter( data => {
					console.log(data);
					if ( app.showAllPosts ){
						return data;
					} else if( app.selectedPost !== data.id ) {
						return data;
					} else{
						return;
					}
				})
			},
		},

		methods:{
			
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
		}
	}
</script>