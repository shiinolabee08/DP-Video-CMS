<header id="top">
    
    <nav class="navbar navbar-expand-md fixed-top navbar-light shadow-sm">
        <div class="container">
            <div class="col-md-2 col-sm-12">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ URL::to('/') }}/dplogo-light.svg" width="74" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="col-md-7 col-sm-12">
                <div class="phone-top">
                    <a href="tel:01702 749662"><i class="fas fa-phone"></i> 01702 749662</a>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav nav ml-md-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('/services') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{ __('Services') }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/services/corporate-video') }}">Corporate Video</a>
                                <a class="dropdown-item" href="{{ url('/services/event-filming') }}">Event Filming</a>
                                <a class="dropdown-item" href="{{ url('/services/logo-animation') }}">Logo Animation</a>
                                <a class="dropdown-item" href="{{ url('/services/explainer-video') }}">Explainer Video</a>
                                <a class="dropdown-item" href="{{ url('/services/facebook-cover-videos') }}">Facebook Cover Videos</a>
                                <a class="dropdown-item" href="{{ url('/services/motion-graphics') }}">Motion Graphics</a>
                                <a class="dropdown-item" href="{{ url('/services/promotional-video') }}">Promotional Video</a>
                                <a class="dropdown-item" href="{{ url('/services/testimonial-video') }}">Testimonial Video</a>
                                <a class="dropdown-item" href="{{ url('/services/youtube-editing') }}">Youtube Editing</a>
                                <a class="dropdown-item" href="{{ url('/services/video-editing') }}">Video Editing</a>
                                <a class="dropdown-item" href="{{ url('/services/wedding-video') }}">Wedding Video</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/our-work') }}">{{ __('Our Work') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/case-studies') }}">{{ __('Case Studies') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/testimonials') }}">{{ __('Testimonials') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about-us') }}">{{ __('About') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">{{ __('Contact') }}</a>
                        </li>          
                    </ul>

                    <!-- Right Side Of Navbar -->
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="free-quote">
                    <a href="{{ url('/contact')}}" class="call-to-action">Get A Free Quote</a>
                </div>
            </div>

        </div>
    </nav>
</header>
