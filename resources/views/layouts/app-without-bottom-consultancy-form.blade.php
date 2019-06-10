<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Tags for SEO -->
    <meta property='og:site_name' content='Digital Pie Video'/>
    <meta property='og:url' content='{{ url()->current() }}'/>
    <meta property='og:title' content='{{ url()->current() }}'/><meta property='og:type' content='article'/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Digital Pie Video</title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
</head>
<body>
    <div id="app">

        @include('layouts/partials/header-nav')

        <main class="main-content">
            @yield('content')
        </main>

        <section class="bottom-section">
            <!-- Work Together -->
            <div class="container-fluid work-together">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="info">
                                <h2>Contact</h2>
                                <p><i class="fa fa-map-marker"></i> 18 – 19 Aviation Way, Southend SS2 6UN</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="info">
                                <h2>Email</h2>
                                <a href="mailto:info@digitalpie.co.uk"><i class="fa fa-envelope"></i> info@digitalpie.co.uk</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="info">
                                <h2>Phone</h2>
                                <a href="tel:01702 749662"><i class="fa fa-phone"></i> 01702 749662</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="info">
                                <h2>Live Chat</h2>
                                <a href="javascript:void(0);"><i class="fa fa-comments"></i> Click here to live chat</a>
                                <!-- onclick="LC_API.open_chat_window();return false" -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Work Together -->
        </section>

        @include('layouts/partials/footer-widgets')
        
    </div>
</body>
</html>
