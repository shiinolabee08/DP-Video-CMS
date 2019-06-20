@extends('layouts.app')

@section('content')

<div class="container-fluid inner-page-header-dark-container case-study-post">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-12"><div class="spacer"></div></div>
            <div class="col-md-10 col-sm-12">
                <div class="title-heading text-center">
                    <h1>Corporate Video Case Study</h1>
                    <h3>ROTAFLEX MILL SPOUT CLEANING SYSTEM</h3>
                </div>
            </div>
            <div class="col-md-1 col-sm-12"><div class="spacer"></div></div>
        </div>
    </div>
</div>

<div class="container-fluid inner-page-header-container">
	<div class="container">
		<div class="row" style="margin:20px 0px;">
			<div class="col-md-12">
				<div class="title-heading has-primary-border-left text-left">
					<h1>The Brief</h1>
				</div>
				<div class="main-heading">
					<p>The Rotaflex is a product used in the food industry (mainly flour mills) and was designed and manufactured by one of the world's most innovative industrial cleaning specialists, TubeTech International Ltd. It is used to clean mill spouts and remove blockages and is also used by mills in over 60 countries worldwide.

					Tube Tech International Ltd approached us to produce a promotional video for the Rotaflex that not only sold the product, but demonstrated it's main features throughout. The main purpose of the video was to be used on the website, social media and email marketing campaigns to send to potential clients. The main focus was to highlight the Rotaflex's competitive features, demonstrate it's use as well as pinpointing the main benefits to the end user.</p>
				</div>
			</div>
		</div>
		<div class="row" style="margin:20px 0px;">
			<div class="col-md-12">
				<div class="title-heading has-primary-border-left text-left">
					<h1>How Did We Deliver?</h1>
				</div>
				<div class="main-heading">
					<p>We were conscious that the video had to hit a lot of targets to adhere to the brief, not only did we have to demonstrate an extremely niche product but we had to remember that the main aim was to promote the product to potential customers. We began with a production meeting with their marketing manager to discuss structure of the video and script. It was extremely important for us to view the location prior to any filming, so the next steps was to arrange a site visit and location recce. We were lucky enough to be invited to Marriages Mills in Chelmsford, which was already an existing client of Rotaflex. This allowed us to gain a first hand insight as to how the product was being used by the customer lead us to decide to include a short client testimonial from the head miller at Marriage's.

					Using the pictures collated at our site visit we then created a storyboard and script which was reviewed and signed off by the client. Once the script was signed off, we were then able to send this off to our Voice-Over artist. The next step was to arrange the shoot and schedule!

					We used a full day to film the promo video, starting with the process shots. Using a few different locations around the mill we were able to demonstrate how the Rotaflex is prepped, how it is used on a day to day basis and how to properly pack the product down. We used mostly wide to mid shots to show the product in it's entirety, and extreme close ups to show specific features (such as the 'Variable Speed Dial').</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid inner-page-header-dark-container" style="background-image: url({{URL::to('/images/case-studies/marriages.jpg')}});background-attachment: fixed;background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title-heading yellow-text text-left has-primary-border-left">
					<h1>The Finished Piece</h1>
				</div>
				<div class="main-heading white-heading">
					<p>With every promotional video we produce, we always maintain that B-Roll and establishing shots are just as important as the main content. To introduce the video, we captured general 'Milling' shots to set the scene and resonate with our potential customer/audience. Once B-roll and process shots were completed, we ended our shoot with our interview with the client, in which we used a 2 camera set up to achieve a medium shot and close-up. (Tip: We usually use this technique to hide any cuts in the post-production process!)

					The finished edit included a custom made logo animation (*link to logo animation page here?*), soundtrack and voice-over. Once we had prepared a rough cut, we colour graded the footage and applied any effects (such as slo-motion etc.) We were conscious to use consistent branding when it came to any titles, pop-ups or lower thirds and we adhered to the same font and colours used from the Rotaflex website. The finished product was received well by not only the client, but we also received positive feedback from the head miller whom we interviewed on the day.</p>
				</div>
			</div>
		</div>
	</div>	
</div>

<div class="container-fluid inner-page-two-column-container">
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-sm-12"></div>
			<div class="col-md-5 col-sm-12 text-center">
				<img src="{{URL::to('/images/tubetech-logo.svg')}}" width="350">
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="main-heading">
					<h3><strong>I think it looks awesome 👏</strong></h3>
					<p><i>I think it looks awesome 👏 Professionals from beginning to the end, very well organised with full instructions as to what was required from all parties.  Would highly recommend to anyone wishing to produce a promotional video. Thanks to all the team at DP.</i><br><br>

					Jon Camp, Managing Director of Tube Tech International.</p>
				</div>
			</div>
			<div class="col-md-1 col-sm-12"></div>
		</div>
		<div class="row">
			<div class="col-md-1 col-sm-12"></div>
			<div class="col-md-5 col-sm-12 text-left">
				<div class="main-heading">
					<h3><strong>I was very impressed…</strong></h3>
					<p><i>I was very impressed by the way the story was told and the professionalism of the people involved, Heather and Joe in particular with their filming ability.</i><br><br>

					Andrew Thain, Marriage's Mills</p>
				</div>
			</div>
			<div class="col-md-5 col-sm-12 text-center">
				<img src="{{URL::to('/images/marriages-logo.png')}}" width="auto">
			</div>
			<div class="col-md-1 col-sm-12"></div>
		</div>
	</div>
</div>

<div class="container-fluid related-case-studies inner-page-header-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-heading text-center has-primary-border-center">
					<h1>Related Case Studies</h1>
				</div>
				<case-studies-filter-post-widget v-bind:show-categories="false" v-bind:selected-post="25"></case-studies-filter-post-widget>
			</div>
		</div>
	</div>
</div>

@endsection