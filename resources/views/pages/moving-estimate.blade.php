@extends('layout.mainmoving')

@section('title', 'Moving Estimate with Moving Cost Calculator')

@section('description', 'Get a free moving estimate using MovingCRM Calculator. A simple 3 step moving calculator will provide you a moving price for your upcoming move.')

@section('keywords', '')


@section('customcss')
<link href="https://movingcrm.wknown.com/cdn-widget/css/app.css" rel="stylesheet">
<style>
@media only screen and (max-width: 1024px) {
  .descw {
	  display:none;
  }
}
@media only screen and (min-width: 1024px) {
  .mobw {
	  display:none;
  }
}
</style>
<script src="https://movingcrm.wknown.com/cdn-widget/js/app.js"> </script>
@stop

@section('content')
<!-- Header -->
<div class="wrapper">
	<div class="page-header page-header-small" style="background-image: url('../images/content/content-bg.jpg');">
			<div class="container">
					<div class="row">
							<div class="col-md-8 ml-auto mr-auto text-center" style="padding-top: 5px;">
									<h1 class="title landing_page_header" style="text-shadow: 2px 4px 3px rgba(0,0,0,0.3);">Moving Estimate</h1>
									<nav aria-label="breadcrumb" role="navigation" style="margin: 0 auto;display:table;">
										<ol class="breadcrumb" style="background-color:transparent;" itemscope itemtype="https://schema.org/BreadcrumbList">
											<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
												<a href="/" itemprop="item">
													<span itemprop="name">Home</span>
												</a>
												<meta itemprop="position" content="1" />
											</li>
											<li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" style="color:#fff;" aria-current="page">
												<span itemprop="name">Moving Estimate</span>
												<meta itemprop="position" content="2" />
											</li>
										</ol>
									</nav>
							</div>
					</div>
			</div>

	</div>
	<div class="section section-content">
		<div class="container-fluid">
			<noscript><strong>We're sorry but widget doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
			<widget-moving apptitle="Get a free Moving Estimate" class="descw"></widget-moving>
			<div style="max-width: 420px;" class="mobw">
				<fast-widget-moving apptitle="Get a free Moving Estimate"></fast-widget-moving>
			</div>
		
		</div>
	</div>
	<div class="section call-to-action-section" data-background-color="gray">
		<div class="row" style="margin-left: 0; margin-right:0;">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<h2 class="title">How Moving Calculator works?</h2>
			</div>
			<div class="col-md-8 ml-auto mr-auto">
				<p>MovingCRM moving cost calculator is an easy way to recieve a movign calculate based on the information provided. 
					The algorithm determines the distance betwen both locations nad calculates travel time based on the companie's paking zip code. 
					Rates that apply in this version of the calculator aare the average on the moving market in Boston area. 
					Based on the moving size and stairs, it calculates the time and amount of movers it takes to make this job.</p>
			</div>
		</div>
	</div>
	<div class="section" style="background:#F8F8F8;">
			<div class="col-md-12 ml-auto mr-auto">
				<div class="container">
				<h3 class="title" style="font-size:1.825em; text-align:center; padding-bottom:15px;">Moving Estimate F.A.Q.
				</h3>
				<div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
					<div class="card card-plain"
					data-aos="fade-down" data-aos-duration="600">
		
						<div class="card-header smm-collapse" role="tab" id="headingOne">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-transform: uppercase;">
								How to estimate moving costs?
								<i class="now-ui-icons arrows-1_minimal-down"></i>
							</a>
						</div>
						<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							<div class="card-body">
								<blockquote class="blockquote blockquote-primary" style="padding-bottom:0;">
									<p>
										Estimate moving costs is really easy using MovingCRM moving estimate calculator. Just fill out the required fields and you will get an accurate moving estimate for your upcoming move.
									</p>
								</blockquote>
							</div>
						</div>
		
					</div>
					<div class="card card-plain"
					data-aos="fade-down" data-aos-duration="1200">
		
						<div class="card-header smm-collapse" role="tab" id="headingThree">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="text-transform: uppercase;">
									How to estimate boxes for moving?
								<i class="now-ui-icons arrows-1_minimal-down"></i>
							</a>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="card-body">
								<blockquote class="blockquote blockquote-primary" style="padding-bottom:0;">
									<p>
									To estimate how many boxes you need you have to simply call a professional moving company and provide a list of items.
									</p>
								</blockquote>
							</div>
						</div>
					</div>
		
				</div>
			</div>
		</div>
		<div class="section call-to-action-section" data-background-color="gray">
				<div class="row" style="margin-left: 0; margin-right:0;">
					<div class="col-md-8 ml-auto mr-auto text-center">
						<h4>Any Questions?</h4>
						<h5>Ready to get started? Call  <a href="tel:3395450956">(339) 545-0956</span></h5>
					</div>
				</div>
				<div class="row" style="margin-left: 0; margin-right:0;">
		
					<div class= "col-md-8 ml-auto mr-auto text-center">
						<a href="/contact-us" class="btn btn-primary btn-round btn-l" style="margin-top: 30px; margin-bottom: 40px;"
						 data-aos="flip-up"
						 data-aos-duration="1000">Call Now</a>
					</div>
				</div>
			</div>
@stop


