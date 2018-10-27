@extends('layout.main')

@section('title', 'Advertsing | WellKnown Agency')

@section('description', 'All types of Digital Advertising for your Business. PPC, Remarketing and video ads by WellKNown Digital Agency')

@section('keywords', 'Advertising, ads agency, ppc, pay per click, reamrketing campaigns, video advertising')

@section('preload')
<link rel="preload" href="images/bgmain/analytics.jpg" as="image">
@stop

@section('content')
<!-- Header -->
<header class="header">
  <div class="bg-img"><img src="images/bgmain/analytics.jpg" alt="Background Image"/></div>
  <div class="title">
    <h1>Online Advertising</h1>
    <h3 class="intro-heading">PPC | Remarketing | Social Media Advertising</h3>
    <button class="btn-xl hvr-pulse trigger">Free Consultation</button>
  </div>
</header>

		<!-- Icons Description -->
		<section  class="container-fluid">
      <div class="container">
  			<div class="row">
  				<div class="col-lg-12 text-center">
  					<h2 class="section-heading">Advertising Agency</h2>
  					<h3 class="section-subheading text-muted">We can help you with all types of Digital advertising </h3>
  				</div>
  			</div>
  			<div class="row text-center">
  				<div class="col-md-3">
  					<div class="box1 text-center hvr-curl-top-right" id="effect">
  						<img src="images/icons/keywords-planner.png">
  						<h3 class="service-heading">SEM (PPC)</h3>
  						<p class="textwhiteshadow">Pay Per Click (PPC) advertising to improve your search presence.</p>
  					</div>
  				</div>
  				<div class="col-md-3">
  					<div class="box2 text-center hvr-curl-top-right" id="effect">
  						<img src="images/icons/create-advertising.png">
  						<h3 class="service-heading">Social Campaigns</h3>
  						<p class="textwhiteshadow">Social Media Advertising as one of the most efficient ways to advertise.</p>
  					</div>
  				</div>
  				<div class="col-md-3">
  					<div class="box3 text-center hvr-curl-top-right" id="effect">
  						<img src="images/icons/choose-right-strategy.png">
  						<h3 class="service-heading">Video advertising</h3>
  						<p class="textwhiteshadow">Promote your video ads all over the internet!</p>
  					</div>
  				</div>
  				<div class="col-md-3">
  					<div class="box4 text-center hvr-curl-top-right" id="effect">
  						<img src="images/icons/improve-conversions.png">
  						<h3 class="service-heading">Remarketing</h3>
  						<p class="textwhiteshadow">Catch your website visitors all over the internet to get them back.</p>
  					</div>
  				</div>
  			</div>
      </div>
		</section>
				<div class="col-md-12 center">
					<a href="#SMB-Partner" class="downarrow">
					<img src="images/arrow.png">
					</a>
			</div>

		<!-- SMB Partner -->
		<section class="bg-light-gray" id="SMB-Partner">
			<div class="container">
				<div class="row text-left">
					<div class="col-md-6">
						<img src="images/sem1.png" style="width:100%;">
					</div>
					<div class="col-md-6">
						<h3>Adwords Management</h3>
						<p class="customp">Our <strong>PPC agency</strong> is fully certified with Google Partner Program.
						Our team passed Google tests that guaranty you our knowledge in Google Adwords Search Advertising.
						As a Partner we fully understand all the Google Search advertising strategies. We consider your goals and choose right ways
						to your potential clients to find you. In such way you can concentrate on what you do best - serve your customers!
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
                  <div class="col-lg-12 text-center ">
                      <h2 class="section-heading">PPC Agency</h2>
                      <h3 class="section-subheading text-muted">Facts by numbers</h3>
                  </div>
              </div>
  			<div class="row">
  				<div class="col-lg-4 text-center facts-text">
  					<div class="box hvr-grow">
  						<i class="fa fa-search fa-4x icon-color" aria-hidden="true"></i>
  						<br>
  						<br>
  						<p class="text-white"><strong id="numbers">30%</strong> <br>Of companies outsource their paid search adv</p>
  					</div>
  				</div>
  				<div class="col-lg-4 text-center facts-text">
  					<div class="box hvr-grow">
  						<i class="fa fa-mobile fa-4x icon-color" aria-hidden="true"></i>
  						<br>
  						<br>
  						<p class="text-white"> <strong id="numbers">53%</strong> <br> Of all paid search clicks produced by Phones </p>
  					</div>
  				</div>
  				<div class="col-lg-4 text-center facts-text">
  					<div class="box hvr-grow">
  						<i class="fa fa-shopping-cart fa-4x icon-color" aria-hidden="true"></i>
  						<br>
  						<br>
  						<p class="text-white"><strong id="numbers">43%</strong> <br> Growth rose on Google Shopping Ad</p>
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

		<!-- Latest posts in SEM category -->
		<section id="portfolio" class="container-fluid bg-light-gray">
		<div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">latest posts in Advertising category</h2>
					<h3 class="section-subheading text-muted">Find answers on all of your questions about SEM.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="/blog/What-is-SEM" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="/images/blog/1519076804.jpeg" class="img-responsive" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>What is SEM?</h4>
						<p class="text-muted">The search engine marketing involves researching, submitting and positioning of a website within the different search engines like Google, Bing and Yahoo. It helps the website to achieve visibility and to increase the organic searches on the engines.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="/blog/how-to-research-the-keywords-smartly-for-sem" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="/images/blog/1519077004.jpeg" class="img-responsive" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>How to research the keywords smartly for SEM</h4>
						<p class="text-muted">Do you know the importance of smart keywords for search engine marketing? Well, the present world is the world of digital marketing and e-Commerce business and for that, no one can ignore the value of keywords.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="/blog/how-to-create-right-landing-page" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="/images/blog/1519077153.jpeg" class="img-responsive" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>How to Create right Landing Page</h4>
						<p class="text-muted">A landing page of the website is a page where the visitor arrives after he has clicked an ad. Specific landing pages that have been designed for different offers are necessary for providing a quality experience to the visitors.</p>
					</div>
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

    <!-- About us Section -->

      <div class="container-fluid " style="background-color: #353535;">
        <div style="padding: 70px 35px; position: relative;">
            <p style="text-align:center;"><img src="images/icons/icon.png" width="104px" height="104px"></p>
            <div style="text-align: center;" class="container col-md-12">
              <p class="quotep">
                At <strong>WellKnown Agency</strong>, we create catching advertising for your business. We use tactics not only to find you more leads, but also make most of them, so they become your customers!
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
