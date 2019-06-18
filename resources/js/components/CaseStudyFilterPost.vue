<template>
	<div class="case-studies-filter-post">
		
	</div>
</template>
<script>
	export default{

		data() {
			return {
				categories : false,
				caseStudies : [],
			}
		},

		mounted(){
			let app = this;

			axios.get('/case-studies/filter-posts')
				.then((response) => {
					app.categories = response.data.categories;
					app.caseStudies = response.data.case_studies;
				})
				.catch((response) => {

				})
		}
	}
</script>