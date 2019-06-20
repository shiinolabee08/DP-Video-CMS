<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{url('/fav.ico')}}">

    <!-- Meta Tags for SEO -->
    <meta property='og:site_name' content='Digital Pie Video'/>
    <meta property='og:url' content='{{ url()->current() }}'/>
    <meta property='og:title' content='{{ $pageName }} | Digital Pie Video'/>
    <meta property='og:type' content='article'/>
    <meta name="title" content="{{ $pageName }} | Digital Pie Video"/>
    <meta name="description" content="{{$pageName}}">

    <link rel="canonical" href="{{ url('/' . $slug)}}" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ $pageName }} | Digital Pie Video</title>

    <!-- Fontawesome -->
    <link rel="preload" as="style" onload="this.rel = 'stylesheet'" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <noscript>
            <link
        rel="stylesheet"
        href='https://fonts.googleapis.com/css?family=Roboto:400,600|Material+Icons'>
    </noscript>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" onload="this.rel = 'stylesheet'" rel="preload" as="style">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" onload="this.rel = 'stylesheet'" rel="preload" as="style">
  
</head>
<body>
    <div id="app">

        @include('layouts/partials/header-nav')

        <main class="main-content">
            @yield('content')
        </main>

        @include('layouts/partials/bottom-section')

        @include('layouts/partials/footer-widgets')        
        
    </div>
</body>
</html>
