@extends('layout.main')

@section('title', 'Web Design and Development | WellKnown')

@section('description', 'Web Design and development of your Business website. Responsive, fast and efficient. Admin Panel with simple CRM and CMS systems.')

@section('keywords', 'website design, simple crm and cms systems, website developers, responsive web design, web design and development')

@section('preload')
<link rel="preload" href="images/bgmain/webdesign.jpg" as="image">
@stop

@section('content')
<!-- Header -->
<header class="header">
	<div class="bg-img"><img src="images/bgmain/webdesign.jpg" class="bg-cover" alt="Background Image"/></div>
	<div class="title">
		<h1>Web Design and Development</h1>
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
  						<h2 class="section-heading">Website Design</h2>
  						<h3 class="section-subheading text-muted">We build websites according to latest trends</h3>
  					</div>
  				</div>
  			</div>
  			<div class="row text-center">
  					<div class="col-md-3">
  						<div class="box1 text-center hvr-curl-top-right" id="effect">
  							<img src="images/icons/goal_tracking.png">
  							<h3 class="service-heading">Search Optimized</h3>
  							<p class="textwhiteshadow">It's always optimized for different browsers and to get better positions</p>
  						</div>
  					</div>
  					<div class="col-md-3">
  						<div class="box2 text-center hvr-curl-top-right" id="effect">
  							<img src="images/icons/data_analysis.png">
  							<h3 class="service-heading">Responsive Design</h3>
  							<p class="textwhiteshadow">Our websites work on any kind of Devices and always look good</p>
  						</div>
  					</div>
  					<div class="col-md-3">
  						<div class="box3 text-center hvr-curl-top-right" id="effect">
  							<img src="images/icons/tracking_code.png">
  							<h3 class="service-heading">Fast Loading Speed</h3>
  							<p class="textwhiteshadow">Our developers try very hard to make your website load really fast</p>
  						</div>
  					</div>
  					<div class="col-md-3">
  						<div class="box4 text-center hvr-curl-top-right" id="effect">
  							<img src="images/icons/traffic_report.png">
  							<h3 class="service-heading">Admin Panel</h3>
  							<p class="textwhiteshadow">You have access to website analytics, simple CRM and CMS Systems</p>
  						</div>
  					</div>
  				</div>
        </div>
		</section>

		<!-- SMB Partner -->
		<section class="container-fluid bg-light-gray">
			<div class="container" >
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Our Process</h2>
          </div>
          <div class="col-md-12 text-center">
						<div class="slides">
					    <div class="slide">
					      <a href="#">The Lorem</a>
					      <div class="content">
					        <div class="row">
										<div class="col-md-3">
											<img src="/images/icons/test_1.png" width="100%" heigth="auto">
										</div>
										<div class="col-md-9">

										</div>
									</div>
					      </div>
					    </div>
					    <div class="slide" id="duration">
					      <a href="#">The Ipsum</a>
					      <div class="content">
					        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi rem ab voluptate provident voluptatum veniam cupiditate beatae expedita veritatis aliquid officia doloribus dolore maiores doloremque mollitia! A ducimus autem ut!
					        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse harum eius voluptas dicta. Vero tempore rerum itaque? Quidem nobis vel consectetur sit amet illo dicta veniam ab ut libero officia!
					      </div>
					    </div>

					    <div class="slide">
					      <a href="#">The Dolor Sit Amet</a>
					      <div class="content">
					        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi rem ab voluptate provident voluptatum veniam cupiditate beatae expedita veritatis aliquid officia doloribus dolore maiores doloremque mollitia! A ducimus autem ut!
					        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim fugiat officiis repellat reprehenderit incidunt deserunt illum eum ipsa quod nihil eligendi hic delectus quaerat. Ad sint tempore cumque mollitia reiciendis!
					      </div>
					    </div>
							<div class="slide">
					      <a href="#">The Dolor Sit Amet</a>
					      <div class="content">
					        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi rem ab voluptate provident voluptatum veniam cupiditate beatae expedita veritatis aliquid officia doloribus dolore maiores doloremque mollitia! A ducimus autem ut!
					        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim fugiat officiis repellat reprehenderit incidunt deserunt illum eum ipsa quod nihil eligendi hic delectus quaerat. Ad sint tempore cumque mollitia reiciendis!
					      </div>
					    </div>
					  </div>
          </div>
        </div>
			</div>
		</section>

      <!-- SMB Partner -->
  		<section class="container-fluid bg-gray-light" id="projects">
        <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="section-heading">Our Projects</h2>
                  <h3 class="section-subheading text-muted">From Simple Blogs to Service Business</h3>
              </div>
              <div class="row">

              </div>
          </div>
        </div>
  		</section>
      <div class="col-md-12">
  				<a href="#facts" class="downarrow">
  					<img src="images/arrow.png">
  				</a>
  			</div>

		<!-- Google Facts -->
		<section class="container-fluid bg-light-gray" id="facts">
      <div class="container">
  			<div class="row">
                  <div class="col-lg-12 text-center">
                      <h2 class="section-heading">Web Agency</h2>
                      <h3 class="section-subheading text-muted">Facts by numbers</h3>
                  </div>
              </div>
  			<div class="row">
  				<div class="col-lg-4 text-center">
  					<div class="box hvr-grow">
  						<i class="fa fa-search fa-4x icon-color" aria-hidden="true"></i>
  						<br>
  						<br>
  						<p class="text-white"><strong id="numbers">38%</strong> <br>Of all domains land on a<br> .com page</p>
  					</div>
  				</div>
  				<div class="col-lg-4 text-center">
  					<div class="box hvr-grow">
  						<i class="fa fa-mobile fa-4x icon-color" aria-hidden="true"></i>
  						<br>
  						<br>
  						<p class="text-white"> <strong id="numbers">38%</strong> <br>Use your logo to return to </br> Homepage</p>
  					</div>
  				</div>
  				<div class="col-lg-4 text-center">
  					<div class="box hvr-grow">
  						<i class="fa fa-shopping-cart fa-4x icon-color" aria-hidden="true"></i>
  						<br>
  						<br>
  						<p class="text-white"><strong id="numbers">2 secs</strong> <br>People expect website</br> to Load</p>
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
		<section id="portfolio" class="container-fluid bg-gray-light">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">latest posts in Web Design category</h2>
					<h3 class="section-subheading text-muted">Find answers on all of your questions about Web Design.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="/blog/responsive-web-design-and-its-pros-and-cons" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="/images/blog/nFt1erAQuRt4yIsps4Wa.jpg" class="img-responsive" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>Responsive Web Design and it's Pros and Cons</h4>
						<p class="text-muted">Web designs offer variability in terms of fixed, fluid, adaptive and responsive web designs. There are pros and cons of every web design and not every design is particularly perfect for each website. Different websites have different requirements in terms of usage and viewership.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="/blog/pros-and-cons-of-fixed-design" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="/images/blog/VJUMW7oUbgxncsOqbqh5.jpeg" class="img-responsive" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>Pros and Cons of Fixed Web Design</h4>
						<p class="text-muted">Web designing is a complicated process and it determines the success of your website. There are several layout designs that are used in different websites according to the need of business, its format, and viewers.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a href="/blog/types-of-web-developers" class="portfolio-link" data-toggle="modal">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div>
						<img src="/images/blog/8CCBmQ5iDDPfrgT46RUZ.jpeg" class="img-responsive" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>Types of Web Developers</h4>
						<p class="text-muted">Web development can be as simple as a one-page text document or can be as complicated and intense as building a full-fledged e-commerce site that enlists hundreds and thousands of products on sale.</p>
					</div>
				</div>
			</div>
		</section>

    <div class="container-fluid text-center">
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
                At <strong>WellKnown Agency</strong>, we build websites to give all information to your leads in the interacting ways
                , so they become real customers! Mobile-friendly, Fast and Efficient!
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
