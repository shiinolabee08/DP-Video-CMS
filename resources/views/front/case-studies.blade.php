@extends('layouts.app')

@section('content')

<div class="container-fluid inner-page-header-dark-container">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-12"><div class="spacer"></div></div>
            <div class="col-md-10 col-sm-12">
                <div class="title-heading text-center">
                    <h1>Case Studies</h1>
                    <h3>LIGHTS. CAMERA. ACTION</h3>
                </div>
            </div>
            <div class="col-md-1 col-sm-12"><div class="spacer"></div></div>
        </div>
    </div>
</div>

<div class="container-fluid">
    
</div>

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
            <div class="col-md-6 col-sm-12 text-center white-heading">
                <a href="{{ URL::to('/contact') }}" class="call-to-action">Get A Free Quote</a>
                <a href="{{ URL::to('/contact') }}" class="call-to-action">Want To Discuss?</a>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>
</div>

@endsection