<div class="case-study-categies-list">
	
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 text-center">
				<ul>
					@foreach($case_studies_categories as $casestudy)
						<li>{{ $casestudy->title }}</li>
					@endforeach
				</ul>		
			</div>
			<div class="col-md-2"></div>
		</div>

		<!-- Results Grid -->
		
		<!-- Results Grid -->
	</div>
</div>