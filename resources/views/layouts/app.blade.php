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
    <meta property='og:type' content='website advertising'/>
    <meta name="title" content="{{ $pageName }} | Digital Pie Video"/>
    <meta name="description" content="{{$pageName}}">

    <link rel="canonical" href="{{ url()->current() }}" />

    @if( $pageName === 'Contact' )
        <!-- Mapbox GL CSS -->
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='preload' as="style" onload="this.rel = 'stylesheet'" />

        <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
    @endif

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84382522-10"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-84382522-10');
      gtag('config', 'AW-825149911');
      gtag('config', 'AW-825149911/Ufj4CJ7Lg5UBENeTu4kD', { 'phone_conversion_number': '01702 749662' });
    </script>
    <!-- Event snippet for Clicks on number on mobile website (01702 749662) conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-825149911/YONsCJHWg5UBENeTu4kD', 'event_callback': callback }); return false; } 
    </script>
    
    <script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"26065705"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ $pageName }} | Digital Pie Video</title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" onload="this.rel = 'stylesheet'" rel="preload" as="style">

    <!-- Mapbox -->
    <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" onload="this.rel = 'stylesheet'" rel="preload" as="style"/>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  
</head>
<body>
    <div id="app">

        <v-dialog :width="850" :adaptive="true" :draggable="true" :pivotY="1" :height="500"></v-dialog>

        @include('layouts/partials/header-nav')

        <main class="main-content">
            @yield('content')
        </main>

        @if( $pageName !== 'Contact' )
            @include('layouts/partials/bottom-section')
        @endif

        @include('layouts/partials/footer-widgets')        
        
    </div>
        
    @if( $pageName === 'Contact' )
        <script type="text/javascript">
            mapboxgl.accessToken = 'pk.eyJ1IjoiZGlnaXRhbHBpZSIsImEiOiI2ODcwNTA1ZWMxNTE0ZGI3YmU1YzFlNWViYWM0YmM1ZCJ9.ZVZ25aGzVkAymQ2rMhWWxA';         

            var map = new mapboxgl.Map({        
                container: 'map', // container id
                style: 'mapbox://styles/mapbox/light-v10',
                center: [0.6859232, 51.5733951], // starting position,
                zoom : 8
            });
             
            // Add zoom and rotation controls to the map.
            map.addControl(new mapboxgl.NavigationControl());
            map.addControl(new mapboxgl.GeolocateControl());

            var geojson = {
                "type": "FeatureCollection",
                "features": [
                    {
                        "type": "Feature",
                        "properties": {
                            "message": "Main Office",
                            "iconSize": [60, 60]
                        },
                        "geometry": {
                            "type": "Point",
                            "coordinates": [
                                0.6859232,
                                51.5733951
                            ]
                        }
                    }   
                ]
            };

            // add markers to map
            geojson.features.forEach(function(marker) {

                // create a DOM element for the marker
                var el = document.createElement('div');

                el.className = 'marker';
                el.style.backgroundImage = 'url(./dplogo-light.svg)';
                el.style.width = marker.properties.iconSize[0] + 'px';
                el.style.height = marker.properties.iconSize[1] + 'px';
                 
                el.addEventListener('click', function() {
                    window.alert(marker.properties.message);
                });
                 
                // add marker to map
                new mapboxgl.Marker(el)
                .setLngLat(marker.geometry.coordinates)
                .addTo(map);
            });
        </script>
    @endif

    @if( $pageName === 'Thank You' ||  $pageName == 'thank-you' )
    <!-- Google Adwords conversions -->
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-825149911/Xn-9CPnSg5UBENeTu4kD'}); 
    </script>
    <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/825149911/?label=Xn-9CPnSg5UBENeTu4kD&guid=ON&script=0"/>
        </div>
    </noscript>
    <!-- Google Adwords conversions -->
    @endif

    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script type="text/javascript">
      window.__lc = window.__lc || {};
      window.__lc.license = 10470057;
      (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
      })();
    </script>
    <noscript>
    Find us on <a href="https://www.facebook.com/digitalpieltd/" rel="noopener nofollow" target="_blank">our Facebook</a>
    </noscript>
    <!-- End of LiveChat code -->
</body>
</html>
