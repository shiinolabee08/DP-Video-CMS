<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{url('/fav.ico')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DP Video Administration</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
                    <img src="{{ URL::to('/') }}/dplogo-light.svg" width="74" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/dashboard') }}"><i class="fas fa-tachometer-alt"></i> {{ __('Dashboard') }}</a>
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fas fa-bars"></i> {{ __('Modules') }}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('case-studies.index') }}" class="dropdown-item"><i class="fas fa-address-card"></i> Case Studies</a>
                                    <!-- <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('case-studies.index') }}">
                                            <i class="fas fa-briefcase"></i> {{ __('Items') }}
                                        </a>  
                                        <a class="dropdown-item" href="{{ url('/admin/case-studies/categories') }}">
                                            <i class="fas fa-list"></i> {{ __('Categories') }}
                                        </a>                                    
                                    </div> -->
                                    <a class="dropdown-item" href="{{ route('posts.index') }}">
                                        <i class="fas fa-file-alt"></i> {{ __('Posts') }}
                                    </a>  
                                    <a class="dropdown-item" href="{{ route('pages.index') }}">
                                        <i class="fas fa-columns"></i> {{ __('Pages') }}
                                    </a>    
                                    <a class="dropdown-item" href="{{ route('contact-forms.index') }}">
                                        <i class="fas fa-columns"></i> {{ __('Contact Forms') }}
                                    </a>    
                                    <a class="dropdown-item" href="{{ URL::to('/admin/form-submissions') }}">
                                        <i class="fas fa-reply"></i> {{ __('Forms Submissions') }}
                                    </a>    
                                </div>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('posts.index') }}"><i class="fas fa-file-alt"></i> {{ __('Posts') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pages.index') }}"><i class="fas fa-columns"></i> {{ __('Pages') }}</a>
                            </li>  -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>

        <transition name="slide-up-down">
            <div class="admin-chat-box-toggle" v-if="!showChatbox" v-on:click="showChatbox=!showChatbox">
                <h3>Chat Support <i class="fa fa-comment-dots"></i></h3>
            </div>
        </transition>

        <transition name="slide-up-down">
            <div class="admin-chat-box" v-if="showChatbox">
                <h3>Client Support <i v-on:click="showChatbox=!showChatbox" class="fa fa-window-minimize"></i></h3>
                <div class="panel panel-default">
                    <div class="panel-heading">Start a project with us now by chatting straight away!</div>

                    <div class="panel-body">
                        <chat-messages :messages="messages"></chat-messages>
                    </div>
                    <div class="panel-footer">
                        <chat-form v-on:messagesent="addMessage" v-bind:user="{{ Auth::user() }}"></chat-form>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</body>
</html>
