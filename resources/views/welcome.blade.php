<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{url('/fav.ico')}}">

    <title>Digital Pie Video</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" onload="this.rel = 'stylesheet'" rel="preload" as="style">


    <!-- Fontawesome -->
    <link rel="preload" as="style" onload="this.rel = 'stylesheet'" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <noscript>
            <link
        rel="stylesheet"
        href='https://fonts.googleapis.com/css?family=Roboto:400,600|Material+Icons'>
    </noscript>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta Tags for SEO -->
    <meta property='og:site_name' content='Digital Pie Video'/>
    <meta property='og:url' content='https://www.digitalpie.video/'/>
    <meta property='og:title' content='Home'/><meta property='og:type' content='article'/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <!-- App -->
        <div id="app">

            <v-dialog :width="850" :adaptive="true" :draggable="true" :pivotY="1" :height="500"></v-dialog>
            
            @include('layouts/partials/header-nav')

            <!-- Banner Area -->
            <div class="position-ref banner-area">   

                <video-bg :sources="['{{url('/videos/dp-video-banner-video.mp4')}}']">
                  <!-- If you want to add content here, a slot is waiting! -->
                    <div class="container content">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="title-heading">
                                    <h3>The Art of Videography</h3>
                                    <h1>The To Stand Out From The Crowd Using Creative <br>Video Production</h1>
                                </div>
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <a href="{{ url('/contact') }}" class="call-to-action"> Enquire Now</a>
                                <img src="/images/trust-pilot-logo.png"/>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <p><strong>Call Us: <a href="tel:+441702749662">+441702749662</a></strong></p>
                                <img src="/images/google-partner-logo.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid camera-tools">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/images/camoptions-nonanim.svg" width="150"/>
                                </div>
                                <div class="col-md-5">
                                    <img src="/images/iso400.svg" width="150"/>
                                </div>
                                <div class="col-md-4">
                                    <img src="/images/camera-animated-looped-futura.svg" width="150"/>
                                </div>
                            </div>
                        </div>
                    </div>  
                </video-bg>
                <!-- <div class="video-background">                    
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="{{url('/videos/dp-video-banner-video.mp4')}}" type="video/mp4">
                    </video>
                </div>   -->             
            </div>
            <!-- Banner Area -->

            <!-- Client Carousel Slider -->
            <div class="container-fluid client-carousel-slider">
                <client-carousel-slider></client-carousel-slider>                    
            </div>        
            <!-- Client Carousel Slider -->
        
            <div class="container page-content top-info">
                <div class="row">
                    <div class="col-md-6 flex-column">
                        <div class="title-heading has-primary-border-left">
                            <h1>Our Video<br> Production Services</h1>
                        </div>
                        <div class="main-heading">
                            <p>As the world becomes video first, we help brands and companies centralise and scale video operations around the globe. Communicate your vision in the most effective way possible.</p>
                        </div>
                        <a href="{{ URL::to('/contact') }}" class="call-to-action">Let's Get Started</a>
                    </div>
                        <div class="clearfix"></div>
                    <div class="col-md-6 flex-column">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/329367471" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe> <!-- width="640" height="360" -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Fancy Boxes -->
            <div class="container services-fancy-boxes">
                <div class="row">
                    <div class="col-sm-6 service-fancy-box">
                        <div class="inner-content" style="background-image: url('/images/services/corporate-video.png');">
                            <h2>Corporate Video</h2>
                            <p>We can create videos that help companies gain an edge over their competiors, be it for internal use or external.</p>
                            <div class="links">
                                <a href="{{ URL::to('/services/corporate-video') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="{{ URL::to('/contact') }}">Enquire <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 service-fancy-box">
                        <div class="inner-content" style="background-image: url('/images/services/curtain-ico.png');">
                            <h2>Event Filming</h2>
                            <p>We have vast experience in event highlight videos and choosing the best moments for the final cut comes natural to us.</p>
                            <div class="links">
                                <a href="{{ URL::to('/services/event-filming') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="{{ URL::to('/contact') }}">Enquire <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 service-fancy-box">
                        <div class="inner-content" style="background-image: url('/images/services/explainer-video.png');">
                            <h2>Explainer Video</h2>
                            <p>Let us help you to create an explainer video, which is a straightforward way to get your message or vision across.</p>
                            <div class="links">
                                <a href="{{ URL::to('/services/explainer-video') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="{{ URL::to('/contact') }}">Enquire <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 service-fancy-box">
                        <div class="inner-content" style="background-image: url('/images/services/promotional-video.png');">
                            <h2>Promotional Video</h2>
                            <p>If you have something to shout about, let us craft you your very own promotional video.</p>
                            <div class="links">
                                <a href="{{ URL::to('/services/promotional-video') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="{{ URL::to('/contact') }}">Enquire <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 flex-center">
                        <a href="{{ URL::to('/services') }}" class="call-to-action">View All Services</a>
                    </div>
                </div>
            </div>
            <!-- Services Fancy Boxes -->

            <!-- Case Studies -->
            <div class="container-fluid case-studies" style="background-image: url('./images/case-studies-bg.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><div class="spacer"></div></div>
                        <div class="col-md-6 text-center">
                            <div class="title-heading white-heading">
                                <h1>Case Studies</h1>
                                <h3>Lights, camera, action!</h3>
                            </div>
                            <case-studies-slider></case-studies-slider>
                        </div>
                        <div class="col-md-3"><div class="spacer"></div></div>
                    </div>
                </div>
            </div>
            <!-- Case Studies -->

            <!-- Our Valued Clients -->
            <div class="container-fluid valued-clients" style="background-image: url('./images/process-bg-full.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><div class="spacer"></div></div>
                        <div class="col-md-6">
                            <div class="title-heading text-center has-primary-border-center">
                                <h1>Our Valued Clients <br>Are Our Greatest Asset</h1>
                            </div>
                        </div>
                        <div class="col-md-3"><div class="spacer"></div></div>
                    </div>
                    <!-- Case Studies List -->
                    
                    <client-services-widget></client-services-widget>
                    <!-- Case Studies List -->
                </div>
            </div>
            <!-- Our Valued Clients -->

            <!-- Awards Carousel Slider -->
            <div class="container-fluid awards-carousel-slider">
                <awards-carousel-slider v-bind:home="true"></awards-carousel-slider>                    
            </div>        
            <!-- Awards Carousel Slider -->

            <!-- Satisfied Customers,Videos Filmed, Projects Completed -->
            <div class="container-fluid satisfied-videos-projects-completed" style="background-image: url('./images/P2050663-1.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-12"></div>
                        <div class="col-md-8 col-sm-12 text-center">
                            <div class="title-heading white-heading has-primary-border-center">
                                <h1>Numbers That Move Mountains</h1>
                                <h3>proud to have delivered the highest quality of video production and editing services globally to hundreds of satisfied and returning customers. Contact us today on the phone, live chat or arrange a meeting today!</h3>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12"><div class="spacer"></div></div>
                    </div>
                    <div class="row text-center items">
                        <div class="col-md-4">
                            <div class="item">
                                <count-up v-bind:endval="500"></count-up>
                                <h2>Satisfied Customers</h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <count-up v-bind:endVal="500"></count-up>
                                <h2>Videos Filmed</h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <count-up v-bind:endVal="500"></count-up>
                                <h2>Projects Completed</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center white-heading">
                        <div class="col-md-4 col-sm-12"></div>
                        <div class="col-md-4 col-sm-12"><a href="{{ URL::to('/testimonials') }}" class="call-to-action">Read Client Testimonials</a></div>
                        <div class="col-md-4 col-sm-12"></div>
                    </div>
                </div>
            </div>
            <!-- Satisfied Customers,Videos Filmed, Projects Completed -->

            <!-- Services Info -->
            <div class="container-fluid page-content packages">
                <div class="container">                    
                    <div class="row">
                        <div class="col-md-1 col-sm-12"></div>
                        <div class="col-md-5 col-sm-12 flex-column">
                            <div class="title-heading has-primary-border-left">
                                <h1>Capturing Your Ideas And <br> Creating Excellence</h1>
                            </div>
                            <div class="main-heading">
                                <p>Welcome to Digital Pie Video! an award-winning video production company with expert, experienced and qualified employees for all services provided. We offer a full range of video production services.</p>
                            </div>
                            <a href="{{ URL::to('/services') }}" class="call-to-action">View Our Services</a>
                        </div>
                        <div class="col-md-5 col-sm-12 flex-column">
                            <img src="{{ URL::to('/images/vidicon-nonanim.svg')}}" width="300"/>
                        </div>
                        <div class="col-md-1 col-sm-12"></div>
                    </div>
                    <!-- Packages -->
                    <div class="row">
                        <div class="col-md-1 col-sm-12"></div>
                        <div class="col-md-5 col-sm-12">
                            <div class="package-item package-standard">
                                <div class="header">
                                    <h2>STANDARD <br>CORPORATE VIDEO</h2>
                                </div>
                                <div class="body">
                                    <h4 class="price">£895.00 + VAT</h4>
                                    <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
                                    <ul>
                                      <li><i class="fas fa-check-square"></i> 1 - 4 Minute Video</li>
                                      <li><i class="fas fa-check-square"></i> Face to Face (Or Skype) Pre-Production Meeting</li>
                                      <li><i class="fas fa-check-square"></i> Producer Created Storyboard</li>
                                      <li><i class="fas fa-check-square"></i> 1 Day Shoot (Filming, Lighting and Sound)</li>
                                      <li><i class="fas fa-check-square"></i> 2 Days Editing</li>
                                      <li><i class="fas fa-check-square"></i> 2 Feedback Stages</li>
                                      <li><i class="fas fa-check-square"></i> 1 Day Special Effects</li>
                                      <li><i class="fas fa-check-square"></i> Royalty Free Music Inclusion</li>
                                      <li><i class="fas fa-check-square"></i> Script Prompt (if required)</li>
                                      <li><i class="fas fa-check-square"></i> Interviewee (if required)</li>
                                    </ul>
                                    <div class="order">
                                        <a href="{{ URL::to('/contact') }}">Order Now</a>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="chat-discuss">
                                        <span>Want to discuss? <a href="javascript:void(0);">Live Chat Now</a></span><!-- onclick="LC_API.open_chat_window();return false" -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="package-item package-advanced">
                                <div class="header">
                                    <h2>ADVANCED <br>CORPORATE VIDEO</h2>
                                </div>
                                <div class="body">
                                    <h4 class="price">£1495.00 + VAT</h4>
                                    <p class="note">* Please note charges are subject to quantity of work and timescales.</p>
                                    <ul>
                                      <li><i class="fas fa-check-square"></i> 1 - 8 Minute Video</li>
                                      <li><i class="fas fa-check-square"></i> Face to Face (Or Skype) Pre-Production Meeting</li>
                                      <li><i class="fas fa-check-square"></i> Producer Created Storyboard</li>
                                      <li><i class="fas fa-check-square"></i> 2 - 3 Day Shoot (Filming, Lighting and Sound)</li>
                                      <li><i class="fas fa-check-square"></i> 3 Days Editing</li>
                                      <li><i class="fas fa-check-square"></i> 3 Feedback Stages</li>
                                      <li><i class="fas fa-check-square"></i> 2 Day Special Effects</li>
                                      <li><i class="fas fa-check-square"></i> Royalty Free Music Inclusion</li>
                                      <li><i class="fas fa-check-square"></i> Script Prompt (if required)</li>
                                      <li><i class="fas fa-check-square"></i> Interviewee (if required)</li>
                                      <li><i class="fas fa-check-square"></i> Voiceover (if required)</li>
                                      <li><i class="fas fa-check-square"></i> Stock footage (if required)</li>
                                    </ul>
                                    <div class="order">
                                        <a href="{{ URL::to('/contact') }}">Order Now</a>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="chat-discuss">
                                        <span>Want to discuss? <a href="javascript:void(0);" onclick="LC_API.open_chat_window();return false">Live Chat Now</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-12"></div>
                    </div>
                    <!-- Packages -->
                </div>
            </div>
            <!-- Services Info -->

            <!-- Our Process -->
            <div class="container-fluid our-process" style="background-image: url('./images/P2050697.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12"></div>
                        <div class="col-md-6 text-center">
                            <div class="title-heading white-heading has-primary-border-center">
                                <h1>Our Process</h1>
                                <h3>Follow our award winning and certified video production process for perfection.</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12"><div class="spacer"></div></div>
                    </div>
                    <div class="row text-center items">
                        <div class="col-md-4">
                            <div class="item white-heading">
                                <img src="./images/needs.png" />
                                <p>Digital Pie are a digital agency that specialises with video production services. We listen to what you aim to acheive and help build your dream video.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item white-heading">
                                <img src="./images/storyboard.png" />
                                <p>Our video team then create a storyline of ideas to present to you, whether it be big or small the experts can cater to your every needs.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item white-heading">
                                <img src="./images/teamwork.png" />
                                <p>Our video geniuses work day and night to build your video, ready to show you the finishing product!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-12"></div>
                        <div class="col-md-6 col-sm-12 text-center white-heading"><a href="{{ URL::to('/contact') }}" class="call-to-action">Let's Get Started</a></div>
                        <div class="col-md-3 col-sm-12"></div>
                    </div>
                </div>
            </div>
            <!-- Our Process -->

            <!-- Testimonials Carousel Slider -->
            <div class="container-fluid testimonials">
                <testimonials-carousel-slider></testimonials-carousel-slider>
            </div>
            <!-- Testimonials Carousel Slider -->

            <!-- Convert Your Customers More Sucessfully With Video -->
            <div class="container-fluid convert-your-customers" style="background-image: url('./images/DSC08504.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12"></div>
                        <div class="col-md-6 col-sm-12 text-center">
                            <div class="title-heading white-heading has-primary-border-center">
                                <h1>Convert Your Customers More Successfully With Video</h1>
                                <h3>Arrange a meeting with our professionals or call us today to discuss your project in detail with our team of industry-proven and qualified videographers. Our ultimate focus is client satisfaction and this is a major contribution to why we have been fortunate enough to provide our video services locally and globally to large and small businesses as well as passion based projects.</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12"><div class="spacer"></div></div>
                    </div>
                    <div class="row text-center items">
                        <div class="col-md-4">
                            <div class="item white-heading">
                                <img src="./images/solution-headphones.png" />
                                <h3>01. 24/7 CLIENT CO-ORDINATION</h3>
                                <p>You will be assigned an account manager who will keep you posted throughout the whole process and also answer any questions you may have.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item white-heading">
                                <img src="./images/solution-gear.png" />
                                <h3>02. GOAL ORIENTATED PROJECTS</h3>
                                <p>It's our job to understand the desired outcome for your video meaning we can provide the best solution. From ROI focused to creative impact, we have experience and advice to offer.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item white-heading">
                                <img src="./images/solution-thumbsup.png" />
                                <h3>03. 100% OWNERSHIP RIGHTS</h3>
                                <p>We work closely with you throughout the project and the video is rights are 100% your ownership. We do offer a video hosting option allowing you to return to your footage in the future for other projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-12"></div>
                        <div class="col-md-6 col-sm-12 text-center white-heading"><a href="{{ URL::to('/contact') }}" class="call-to-action">Want To Discuss?</a></div>
                        <div class="col-md-3 col-sm-12"></div>
                    </div>
                </div>
            </div>
            <!-- Convert Your Customers More Sucessfully With Video -->

            @include('layouts/partials/bottom-section')
        </div>
        <!-- App -->
        
        @include('layouts/partials/footer-widgets')
        
    </body>
</html>
