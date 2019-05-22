@extends('layouts.app')

@section('content')

<div class="container-fluid inner-page-header-container">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-12"><div class="spacer"></div></div>
            <div class="col-md-10 col-sm-12">
                <div class="title-heading text-center has-primary-border-center">
                    <h1>Our Video Production Services</h1>
                    <h3>At Digital Pie, we are a dedicated team of qualified and skilled professionals that thrive to exceed expectations for businesses and projects of all sizes.

					We have created extraordinary results for clients by working hard to understand the desired outcome and usage of each project we take on. We love to think differently and collaborate with you to enhance your vision to its greatest potential.</h3>
                </div>
            </div>
            <div class="col-md-1 col-sm-12"><div class="spacer"></div></div>
        </div>
    </div>
</div>

<div class="container services-fancy-boxes">
    <div class="row">
        <div class="col-sm-6 service-fancy-box">
            <div class="inner-content" style="background-image: url('/images/services/corporate-video.png');">
                <h2>Corporate Video</h2>
                <p>We can create videos that help companies gain an edge over their competiors, be it for internal use or external.</p>
                <div class="links">
                    <a href="{{ URL::to('/services/corporate-video') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                    <a href="{{ URL::to('/case-studies/') }}">View Case Studies <i class="fa fa-arrow-circle-right"></i></a>
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
                    <a href="{{ URL::to('/case-studies/') }}">View Case Studies <i class="fa fa-arrow-circle-right"></i></a>
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
                    <a href="{{ URL::to('/case-studies/') }}">View Case Studies <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 service-fancy-box">
            <div class="inner-content" style="background-image: url('/images/services/motion-graphics.png');">
                <h2>Motion Graphics</h2>
                <p>We can bring your vision to life, explain a service, demonstrate a process and much more.</p>
                <div class="links">
                    <a href="{{ URL::to('/services/motion-graphics') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                    <a href="{{ URL::to('/case-studies/') }}">View Case Studies <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>  
    <div class="row">
    	<div class="col-sm-6 service-fancy-box">
            <div class="inner-content" style="background-image: url('/images/services/promotional-video.png');">
                <h2>Promotional Video</h2>
                <p>If you have something to shout about, let us craft you your very own promotional video.</p>
                <div class="links">
                    <a href="{{ URL::to('/services/promotional-video') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                    <a href="{{ URL::to('/case-studies/') }}">View Case Studies <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 service-fancy-box">
            <div class="inner-content" style="background-image: url('/images/services/testimonial-video.png');">
                <h2>Testimonial Video</h2>
                <p>We can produce stunning testimonial videos which can encourage your audience in achieving their marketing goals.</p>
                <div class="links">
                    <a href="{{ URL::to('/services/testimonial-video') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                    <a href="{{ URL::to('/case-studies/') }}">View Case Studies <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>  
    <div class="row">
    	<div class="col-sm-6 service-fancy-box">
            <div class="inner-content" style="background-image: url('/images/services/video-editing.png');">
                <h2>Video Editing</h2>
                <p>We can provide you with the ultimate remote editing service. Just tell us your vision, send your footage and we can sort the rest.</p>
                <div class="links">
                    <a href="{{ URL::to('/services/video-editing') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                    <a href="{{ URL::to('/case-studies/') }}">View Case Studies <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 service-fancy-box">
            <div class="inner-content" style="background-image: url('/images/services/youtube.png');">
                <h2>Youtube Editing</h2>
                <p>Increase your subscribers and maximise your YouTube revenue opportunities by having bespokely created videos.</p>
                <div class="links">
                    <a href="{{ URL::to('/services/youtube-editing') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                    <a href="{{ URL::to('/case-studies/') }}">View Case Studies <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>  
    <div class="row">
    	<div class="col-sm-6 service-fancy-box">
            <div class="inner-content" style="background-image: url('/images/services/wedding-video.png');">
                <h2>Wedding Video</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore ed.</p>
                <div class="links">
                    <a href="{{ URL::to('/services/wedding-video') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                    <a href="{{ URL::to('/case-studies/') }}">View Case Studies <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6 service-fancy-box">
            <div class="inner-content" style="background-image: url('/images/services/website-video.png');">
                <h2>Website Video</h2>
                <p>We can produce videos that integerate seamlessly with your website design.</p>
                <div class="links">
                    <a href="{{ URL::to('/services/website-video') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                    <a href="{{ URL::to('/case-studies/') }}">View Case Studies <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>  
    <div class="row">
    	<div class="col-md-3 col-sm-12"></div>
    	<div class="col-sm-6 service-fancy-box">
            <div class="inner-content" style="background-image: url('/images/services/tutorial.png');">
                <h2>Tutorial Video</h2>
                <p>We can help explain to your audience in the easiest way possible, through the use of a tutorial video.</p>
                <div class="links">
                    <a href="{{ URL::to('/services/tutorial-video') }}">Read More <i class="fa fa-arrow-circle-right"></i></a>
                    <a href="{{ URL::to('/case-studies/') }}">View Case Studies <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    	<div class="col-md-3 col-sm-12"></div>
    </div>  
</div>

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
                    <count-up v-bind:endVal="500"></count-up>
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
@endsection