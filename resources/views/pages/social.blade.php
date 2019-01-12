@extends('layout.mainservices')

@section('title', 'Social Media Marketing | SMM')

@section('description', 'Need to build Social Engagement with your Clients? Our Social Media Marketing Agency always ready to provide you with any Social Media Services you need | SMM, Viral Marketing.')

@section('keywords', 'Social Media Agency, Social Media Services, Social Media Consultant, Smm Company, Viral Marketing, Social Media Marketing')

@section('preload')
<link rel="preload" href="images/bgmain/smm.jpg" as="image">
@stop

@section('content')

    <!-- Header -->
    <header class="header">
    	<div class="bg-img"><img src="images/bgmain/smm.jpg" alt="Background Image"/></div>
    	<div class="title">
    		<h1>Social Media Marketing</h1>
    		<h3 class="intro-heading"></h3>
    		<button class="btn-xl hvr-pulse trigger">Free Consultation</button>
    	</div>
    </header>

		<!-- Icons Description -->
		<section class="container-fluid">
      <div class="container">
  			<div>
  				<div class="row">
  					<div class="col-lg-12 text-center">
  						<h2 class="section-heading">Social Media Marketing Agency</h2>
  						<h3 class="section-subheading text-muted">We help you make more leads and build relationships with your customers</h3>
  					</div>
  				</div>
  			</div>
  			<div class="row text-center">
  				<div class="col-md-3">
  					<div class="box1 text-center hvr-curl-top-right" id="effect">
  						<img src="images/icons/keywords-planner.png">
  						<h3 class="service-heading">Posting Schedule</h3>
  						<p class="textwhiteshadow">Post in a right time to let more people see your posts</p>
  					</div>
  				</div>
  				<div class="col-md-3">
  					<div class="box2 text-center hvr-curl-top-right" id="effect">
  						<img src="images/icons/create-advertising.png">
  						<h3 class="service-heading">Choose Right Content</h3>
  						<p class="textwhiteshadow">Tranding content gives you better opportunity to engage with clients.</p>
  					</div>
  				</div>
  				<div class="col-md-3">
  					<div class="box3 text-center hvr-curl-top-right" id="effect">
  						<img src="images/icons/choose-right-strategy.png">
  						<h3 class="service-heading">Right Postig Format</h3>
  						<p class="textwhiteshadow">Stylish content catches your potential customers to recieve important info.</p>
  					</div>
  				</div>
  				<div class="col-md-3">
  					<div class="box4 text-center hvr-curl-top-right" id="effect">
  						<img src="images/icons/improve-conversions.png">
  						<h3 class="service-heading">Viral Marketing</h3>
  						<p class="textwhiteshadow">Build Viral scheme to promote your products and get real leads.</p>
  					</div>
  				</div>
  			</div>
      </div>
		</section>
						<div class="col-md-12 center">
					<a href="#media-consultant" class="downarrow">
					<img src="images/arrow.png">
					</a>
			</div>

		<!-- SMB Partner -->
		<section class="container-fluid bg-light-gray" id="media-consultant">
			<div class="container">
				<div class="row text-left">
					<div class="col-md-6 col-xs-12">
						<img src="images/smm.png" style="width:100%;">
					</div>
					<div class="col-md-6 col-xs-12">
						<h3>Social Media Consultant</h3>
						<p class="customp">When it comes to Socially engage with your customers, you defenitely need help from <strong>SMM Company</strong>. Our Consultants come across your industry,
						find your ideal client and build the best strategy to keep them updated. We find ways to build real relationships through internet.
						We help to create a <strong>Viral Marketing</strong> campaigns to get fast leads and build a brand.
						Your Social Web Page is a trust for your customer!
						</p>
						<br>
						<a href="#contact" class="btn-xl hvr-pulse">Get Started</a>
					</div>
				</div>
			</div>
		</section>
			<div class="col-md-12 center">
				<a href="#facts" class="downarrow2">
					<img src="images/arrow.png">
				</a>
			</div>

		<!-- Google Facts -->
		<section class="container-fluid bg-gray-light" id="facts">
      <div class="container">
  			<div class="row">
                  <div class="col-lg-12 col-xs-12 text-center">
                      <h2 class="section-heading">Social Media Marketing</h2>
                      <h3 class="section-subheading text-muted"> Facts by numbers</h3>
                  </div>
              </div>
  			<div class="row">
  				<div class="col-lg-4 col-xs-12 text-center facts-text">
  					<div class="box hvr-grow">
  						<i class="fa fa-search fa-4x icon-color" aria-hidden="true"></i>
  						<br>
  						<br>
  						<p class="text-white"><strong id="numbers">91%</strong> <br>Of retail brands use 2 or more social media channels</p>
  					</div>
  				</div>
  				<div class="col-lg-4 col-xs-12 text-center facts-text">
  					<div class="box hvr-grow">
  						<i class="fa fa-mobile fa-4x icon-color" aria-hidden="true"></i>
  						<br>
  						<br>
  						<p class="text-white"> <strong id="numbers">$8.3 b</strong> <br>Social Networks earned from advertising in 2016</p>
  					</div>
  				</div>
  				<div class="col-lg-4 col-xs-12 text-center facts-text">
  					<div class="box hvr-grow">
  						<i class="fa fa-shopping-cart fa-4x icon-color" aria-hidden="true"></i>
  						<br>
  						<br>
  						<p class="text-white"><strong id="numbers">3.5 b</strong> <br> Instagram likes per day</p>
  					</div>
  				</div>
  			</div>
      </div>
		</section>
		<div class="col-md-12">
				<a href="#portfolio" class="downarrow">
					<img src="images/arrow.png">
				</a>
			</div>
<!-- Latest posts in SEO category -->
		<section id="portfolio" class="container-fluid bg-light-gray">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">latest posts in Social Media category</h2>
					<h3 class="section-subheading text-muted">Find answers on all of your questions about SMM.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="/blog/what-is-smm" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="/images/blog/1519056438.jpeg" class="img-responsive" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>What is SMM?</h4>
						<p class="text-muted">The form of marketing where social media websites are used to advertise and market products and services constitutes social media marketing.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="/blog/social-media-advertising-tips" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="/images/blog/1519072529.jpeg" class="img-responsive" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>Social Media Advertising Tips</h4>
						<p class="text-muted">Many marketers and brands believe that content marketing is done only by the following 3 steps process:</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="/blog/how-to-do-social-media-marketing" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="/images/blog/1519067158.jpeg" class="img-responsive" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>How to Do Social Media Marketing</h4>
						<p class="text-muted">The social media marketing process involves 6 steps to get desired results for the marketers. These steps are imperative to design an effective social media marketing strategy online.</p>
					</div>
				</div>
			</div>
		</section>

    <div class="container-fluid text-center" style="background-color: #f1f1f1;">
    <div class="row">
      <div class="col-lg-12 text-center hrnew">
        <h3 class="section-subheading">Awards and Partners</h3>
      </div>
    </div>
            <ul style="list-style: none; padding-top: 20px; padding-bottom: 20px;">
              <li style="display: inline; padding: 20px;"><a href="https://upcity.com/local-marketing-agencies/profiles/wellknown-agency" target="_blank"><img src="images/logos/upcity.png" alt="Upcity"></a></li>
  						<li style="display: inline; padding: 20px;"><img src="images/logos/dan.png" alt="Digital Agency Network"></li>
  						<li style="display: inline; padding: 20px;"><a href="https://clutch.co/profile/wellknown-agency" target="_blank"><img src="images/logos/clutch.png" alt="Clutch"></a></li>
            </ul>
          </div>

      <div class="container-fluid " style="background-color: #353535;">
        <div style="padding: 70px 35px; position: relative;">
            <p style="text-align:center;"><img src="images/icons/icon.png" width="104px" height="104px"></p>
            <div style="text-align: center;" class="container col-md-12">
              <p class="quotep">
                At <strong>WellKnown Agency</strong>, we help your business setup your social web pages and manage them. Also we create visual content for you, to show your product or service in the best way!
               </p>
               <a href="/about-us" class="btn-send" style="display: inline-block; margin: 20px;">learn more about us</a>
            </div>
        </div>
      </div>
      <section style="background-image: url(images/bg2.jpg); background-attachment: fixed; " id="contact">
      <div class="container-fluid text-center">
              <a href="/contact-us" class="btn-xl hvr-pulse">Contact us</a>
      </div>
    </section>
@stop
