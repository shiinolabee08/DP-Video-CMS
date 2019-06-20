<!DOCTYPE html>
<html>
<head>
    <title>Internal Server Error | Digital Pie Video</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

 	@include('layouts/partials/header-nav')
 	
 	<div class="container-fluid flex-row align-items-center">
 		<div class="container">
 			<div class="row justify-content-center">
	            <div class="col-md-12 text-center">
	                <span class="display-1 d-block">405</span>
	                <div class="mb-4 lead">Sorry, we have problems showing you this page at the moment.</div>
	                <a href="{{ url('/') }}" class="btn btn-link">Back to Home</a>
	            </div>
	        </div>
 		</div>
 	</div>

 	@include('layouts/partials/bottom-section')

 	@include('layouts/partials/footer-widgets')
</body>
</html>