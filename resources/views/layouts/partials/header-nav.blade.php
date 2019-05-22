<header id="top">
    
    <nav class="navbar navbar-expand-sm fixed-top navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::to('/') }}/dplogo-light.svg" width="74" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav nav ml-md-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/services') }}">{{ __('Services') }}</a>
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
    </nav>
</header>
