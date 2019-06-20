<!DOCTYPE html>
<html>
<head>
    <title>Page not found - 404 | Digital Pie Video</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    <div id="app">
     	@include('layouts/partials/header-nav')
     	
     	<div class="container-fluid flex-row align-items-center inner-page-header-container" style="padding-bottom: 0px;">
     		<div class="">
     			<div class="row justify-content-center">
    	            <div class="col-md-12 text-center">
    	                <div class="jumbotron" style="margin-bottom: 0px;">
                            <h1 class="display-4">404</h1>
                            <p class="mb-4 lead">The page you are looking for was not found.</p>
                            <a href="{{ url('/') }}" class="btn btn-link">Back to Home</a>
                        </div>
    	            </div>
    	        </div>
     		</div>
     	</div>

     	@include('layouts/partials/bottom-section')
    </div>

 	@include('layouts/partials/footer-widgets')
</body>
</html>