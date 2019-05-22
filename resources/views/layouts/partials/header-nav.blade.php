<header id="top">
    
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::to('/') }}/dplogo-light.svg" width="74" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav nav">
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
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>                           
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.index') }}">{{ __('Posts') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pages.index') }}">{{ __('Pages') }}</a>
                        </li> 
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
