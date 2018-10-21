@extends('layout.main')

@section('title', 'Thank you for your Submittion | WellKnown')

@section('description', 'Form Submitted')

@section('keywords', 'Submittion Form')

@section('content')
<section style="background-image: url(images/4321.jpg); background-attachment: fixed; ">
	<div class="container" >
	<p> Thank you fo your Submition. Our representative will contact you in 30 minutes. <br>
		While Waiting you can read our <a href="/blog">Blog</a>. May be you will find some answers on your questions.</p>
	</div>
		</section>
	<div class="col-md-12 center">
		<a href="#portfolio" class="downarrow">
		<img src="images/arrow.png">
		</a>
	</div>

	<!-- Latest posts in SEO category -->
	<section id="portfolio" class="container-fluid bg-light-gray">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Popular Blog Posts</h2>
				<h3 class="section-subheading text-muted">Find answers on all of your questions about Digital Marketing and Advertising.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="/blog/category/smm/what-is-smm" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="/blog/category/smm/images/whatissmm.jpeg" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>What is SMM?</h4>
					<p class="text-muted">The form of marketing where social media websites are used to advertise and market products and services constitutes social media marketing.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="/blog/category/video/brand-building-with-display-ads" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="/blog/category/video/images/brandbuildig.jpeg" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Brand Building with Display ads</h4>
					<p class="text-muted">An established brand provides the product an authority in the market. One way to promote the brand is through brand awareness which can be achieved with the use of display ads.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="/blog/category/sem/What-is-SEM" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="/blog/category/sem/images/whatissem.jpeg" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>What is SEM?</h4>
					<p class="text-muted">The search engine marketing involves researching, submitting and positioning of a website within the different search engines like Google, Bing and Yahoo. It helps the website to achieve visibility and to increase the organic searches on the engines.</p>
				</div>
			</div>
		</div>
	</section>
