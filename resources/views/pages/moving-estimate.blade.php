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
		<widget-moving apptitle="Request your move Online. See Your Quote In two Easy Steps." class="descw"></widget-moving>
		<div style="max-width: 420px;" class="mobw">
			<fast-widget-moving apptitle="Get a quote fast online"></fast-widget-moving>
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
@section('customjs')
 <script src="https://movingcrm.wknown.com/cdn-widget/js/app.js"> </script>
@stop

