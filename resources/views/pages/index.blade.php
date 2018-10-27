@extends('layout.main')

@section('title', 'Digital Agency - Advertising | Marketing | Web Design - WellKnown ')

@section('description', 'WellKnown Digital Agency provides Advertising , Marketing and Webdesign Services for your Business. Years of experience working with small Businesses give us an opportunity to guaranty you great results. Call now and get Free Consultation.')

@section('keywords', 'Digital Agency, Online marketing, online advertising, marketing Agency, Advertising Agency, Web design agency, web development')

@section('preload')
<link rel="preload" href="images/bgmain/homepage.jpg" as="image">
@stop

@section('content')
<!-- Header -->
<header class="header">
	<div class="bg-img"><img src="images/bgmain/homepage.jpg" alt="Background Image"/></div>
	<div class="title">
		<h1>WellKnown Digital Agency</h1>
		<h3 class="intro-heading">Advertising | Marketing | Web Design</h3>
		<button class="btn-xl hvr-pulse trigger">Free Consultation</button>
	</div>
</header>


<div id="section1" >
<!-- Services Section -->
	<section class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Agency Services</h2>
					<h3 class="section-subheading text-muted">Digital services for your business</h3>
				</div>
			</div>
		<div class="row text-center">
			<div class="col-md-3">
				<a href="/advertising">
					<div class="box1 text-center hvr-curl-top-right" id="effect">
						<img src="images/icons/ppc.png" alt="PPC">
						<h3 class="service-heading bgblack">Advertising</h3>
						<p class="textwhiteshadow marginintext bgblack">All Kinds of online advertising - PPC, Social, Remarketing</p>
					</div>
				</a>
			</div>
			<div class="col-md-3">
				<a href="/search-engine-optimization">
					<div class="box2 text-center hvr-curl-top-right">
						<img src="images/icons/display.png" alt="Ads">
						<h3 class="service-heading bgblack">Search</h3>
						<p class="textwhiteshadow marginintext bgblack">Search Engine Optimization Services for your website</p>
					</div>
				</a>
			</div>
			<div class="col-md-3">
				<a href="/social-media-marketing">
					<div class="box3 text-center hvr-curl-top-right">
						<img src="images/icons/social.png" alt="social">
						<h3 class="service-heading bgblack">Social</h3>
						<p class="textwhiteshadow marginintext bgblack">Everything your business needs to be Socially Engaged</p>
					</div>
				</a>
			</div>
			<div class="col-md-3 clearfix">
				<a href="/web-design">
					<div class="box4 text-center hvr-curl-top-right">
						<img src="images/icons/email.png" alt="email">
						<h3 class="service-heading bgblack">Web Design</h3>
						<p class="textwhiteshadow marginintext bgblack">We create stunning websites for your business</p>
					</div>
				</a>
			</div>
		</div>

	</section>
					<div class="col-md-12 center">
			<a href="#Digital-Marketing" class="downarrow">
			<img src="https://wknown.com/images/arrow.png" alt="next">
			</a>
	</div>
</div>


<!-- About our Company -->
<section class="bg-light-gray">
	<div class="container wide" id="Digital-Marketing">
		<div class="col-lg-12 text-center">
			<h2 class="section-heading">WellKnown Digital Agency</h2>
			<h3 class="section-subheading text-muted">We take care of our clients and provide best possible solutions</h3>
			<div class="row">
				<div class="col-lg-4 col-xs-12">
					<div class="hover-fold">
					  <h2>Customer Support</h2>
					  <div class="top">
						<div class="front face"></div>
						<div class="back face">
						  <p>Have Questions? Our team is always ready to find answers for you.</p>
						</div>
					  </div>

					  <div class="bottom"></div>

					</div>
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="hover-fold2">
					  <h2>Analytical Data</h2>
					  <div class="top2">
						<div class="front2 face2"></div>
						<div class="back2 face2">
						  <p>All numbers about your business, be dynamic with your plans</p>
						</div>
					  </div>

					  <div class="bottom2"></div>

					</div>
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="hover-fold3">
					  <h2>Follow Social Media</h2>
					  <div class="top3">
						<div class="front3 face3"></div>
						<div class="back3 face3">
						  <p>Easy way to get latest agency news</p>
						</div>
					  </div>

					  <div class="bottom3"></div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-xs-12">
					<div class="hover-fold4">
					  <h2>Learn with us</h2>
					  <div class="top4">
						<div class="front4 face4"></div>
						<div class="back4 face4">
						  <p>Read our Blog posts to always catch latest news and learn</p>
						</div>
					  </div>

					  <div class="bottom4"></div>

					</div>
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="hover-fold5">
					  <h2>Contact us any time</h2>
					  <div class="top5">
						<div class="front5 face5"></div>
						<div class="back5 face5">
						  <p>You can get in touch with us from any device and any platform</p>
						</div>
					  </div>

					  <div class="bottom5"></div>

					</div>
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="hover-fold6">
					  <h2>Join Our Club
						</h2>
					  <div class="top6">
						<div class="front6 face6"></div>
						<div class="back6 face6">
						  <p>Participate in discussions, find new partners and more in our Facebook Club (Invites only)</p>
						</div>
					  </div>

					  <div class="bottom6"></div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- CFacts on photo bg -->
	<div class="bg-image1" style="background-image: url(images/bg2.jpg); background-attachment: fixed; ">
		<div class="container">
			<div class="row">
				<div class="col-12	col-md-4">
					<div class="card card-stat">
						<div class="card-block facts-text">
								<p style="font-size:36px;">87%</p>
							<h4>of Marketers use Video content</h4>
						</div>
					</div>
				</div>
				<div class="col-12	col-md-4">
					<div class="card card-stat">
						<div class="card-block facts-text">
							<p style="font-size:36px;">85%</p>
							<h4>of the most successful deliver content consistenly</h4>
						</div>
					</div>
				</div>
				<div class="col-12	col-md-4">
					<div class="card card-stat">
						<div class="card-block facts-text">
							<p style="font-size:36px;">55%</p>
							<h4>of all emails are opened on mobile devices</h4>
						</div>
					</div>
				</div>
				<div class="col-12	col-md-4">
					<div class="card card-stat">
						<div class="card-block facts-text">
							<p style="font-size:36px;">94%</p>
							<h4>more views receive articles with photographs</h4>
						</div>
					</div>
				</div>
				<div class="col-12	col-md-4">
					<div class="card card-stat">
						<div class="card-block facts-text">
							<p style="font-size:36px;">50%</p>
							<h4>of all searches begin on mobile device</h4>
						</div>
					</div>
				</div>
				<div class="col-12	col-md-4">
					<div class="card card-stat">
						<div class="card-block facts-text">
							<p style="font-size:36px;">85%</p>
							<h4>of all searches are done on Google</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid text-center" style="background-color: #f1f1f1;" id="contact">
	<div class="row">
		<div class="col-lg-12 text-center hrnew">
			<h3 class="section-subheading text-muted">Partners</h3>
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
								<p style="text-align:center;"><img src="images/icons/icon.png" alt="WellKnown Digital Agency" width="104px" height="104px"></p>
								<div style="text-align: center;" class="container col-md-12">
									<p class="quotep">
										At <strong>WellKnown Agency</strong>, we not only provide you all services to help you build your
										business and bring more customers, but also show you possible ways to improve your business with <strong>innovative
										technologies</strong>!
									 </p>
										<a href="/about-us" class="btn-send" style="display: inline-block; margin: 20px;">learn more about us</a>
								</div>
						</div>
					</div>
					<section style="background-image: url(images/bg2.jpg); background-attachment: fixed; ">
					<div class="container-fluid text-center">
									<a href="/contact-us" class="btn-xl hvr-pulse">Contact us</a>
					</div>
				</section>
@stop
