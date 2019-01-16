@extends('layout.mainservices')

@section('title', 'Landing Page Services | WellKnown')

@section('description', 'Sell Online? Beautiful web page design for exactly your audience. Our Services help build right landing page to describe your product and sell it.')

@section('keywords', '')


@section('customcss')
@stop

@section('content')
<!-- Header -->
<div class="wrapper">
	<div class="page-header page-header-small" style="background-image: url('../images/smm/smm-header-drk.jpg');">
			<div class="container">
					<div class="row">
							<div class="col-md-10 ml-auto mr-auto text-center" style="padding-top: 5px;">
									<h1 class="title landing_page_header">Social Media Marketing (SMM)</h1>
									<p>SMM promotion - will increase the sales of your business due to the wide coverage of the target audience in social networks by informing users about the products / services and interaction with potential customers.</p>
							</div>
							<div class="col-md-10 ml-auto mr-auto">
									<div class="card card-raised card-form-horizontal card-plain" data-background-color="">
											<div class="card-body">
												<a href="#freeconsultation" class="btn btn-primary btn-round btn-l">Free consultation</a>
											</div>
									</div>
							</div>
					</div>
			</div>

	</div>
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
						<ol class="carousel-indicators">
							<li data-target="#productCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#productCarousel" data-slide-to="1"></li>
							<li data-target="#productCarousel" data-slide-to="2"></li>
							<li data-target="#productCarousel" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-raised" src="../assets/img/pp-1.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-raised" src="../assets/img/pp-2.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-raised" src="../assets/img/pp-3.jpg" alt="Third slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-raised" src="../assets/img/pp-4.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
							<button type="button" class="btn btn-primary btn-icon btn-round btn-sm" name="button">
								<i class="now-ui-icons arrows-1_minimal-left"></i>
							</button>
						</a>
						<a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
							<button type="button" class="btn btn-primary btn-icon btn-round btn-sm" name="button">
								<i class="now-ui-icons arrows-1_minimal-right"></i>
							</button>
						</a>
					</div>
					<p class="blockquote blockquote-primary">
						Achieving a high result of promotion in social networks is supported by financial guarantees and spelled out in the contract.
					</p>
				</div>
				<div class="col-md-7 ml-auto mr-auto">
					<h3 class="title"> EFFICIENT SOCIAL MEDIA MARKETING WITH WELLKNOWN AGENCY </h3>
					<h5 class="category">Promotion in social networks allows you to achieve your business goals that are difficult to solve with standard advertising campaigns. The right SMM strategy allows you to build communication with users, increase brand loyalty and open a new effective channel for your business to increase sales.</h5>
					<div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
						<div class="card card-plain">
							<div class="card-header smm-collapse" role="tab" id="headingOne">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Individual SMM strategies
									<i class="now-ui-icons arrows-1_minimal-down"></i>
								</a>
							</div>
							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<div class="card-body">
									<h5>For each project we develop a promotion strategy with a step-by-step work plan.</h5>
										<p>You get:</p>
									<ul class="smm_strategy_ul">
										<li class="smm_strategy_li">The original concept of community in social media, taking into account the goals of your business;</li>
										<li class="smm_strategy_li">Creation and placement of all types of content;</li>
										<li class="smm_strategy_li">Constant targeted communication with users;</li>
										<li class="smm_strategy_li">long-term effect of social media due to the constant attraction of new users.</li>
									</ul>
								</div>
							</div>

						</div>
						<div class="card card-plain">
							<div class="card-header smm-collapse" role="tab" id="headingTwo">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Unique copyrighting
									<i class="now-ui-icons arrows-1_minimal-down"></i>
								</a>
							</div>
							<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="card-body">
									<h5>All content is created by authors and editors immersed in the subject of your business, knowing the needs of your customers and their behavior in the network.</h5>
										<p>You get:</p>
									<ul class="smm_strategy_ul">
										<li class="smm_strategy_li">100% unique, useful and interesting publications with an unobtrusive presentation of marketing information;</li>
										<li class="smm_strategy_li">Branded content that broadcasts to the target audience the value and benefits of the product / service;</li>
										<li class="smm_strategy_li">Events content related to industry trends, including an overview of your offline events;</li>
										<li class="smm_strategy_li">Viral content promotion in social networks, including contests, entertainment posts, shares.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card card-plain">
							<div class="card-header smm-collapse" role="tab" id="headingThree">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Only target audience
									<i class="now-ui-icons arrows-1_minimal-down"></i>
								</a>
							</div>
							<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="card-body">
									<h5>We analyze the behavior of your audience in the network. We attract really interested users to the community.</h5>
										<p>You get:</p>
									<ul class="smm_strategy_ul">
										<li class="smm_strategy_li">Targeting potential customers (taking into account gender, age, location, hobbies, social status, participation in groups of competitors);</li>
										<li class="smm_strategy_li">Loyal audience of real users, ready for communication with the brand.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card card-plain">
							<div class="card-header smm-collapse" role="tab" id="headingFour">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Continuous communication
									<i class="now-ui-icons arrows-1_minimal-down"></i>
								</a>
							</div>
							<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
								<div class="card-body">
									<h5>We support community activity, process feedback from your customers, accurately identifying their problems and expectations.</h5>
										<p>You get:</p>
									<ul class="smm_strategy_ul">
										<li class="smm_strategy_li">Positive information field in social media;</li>
										<li class="smm_strategy_li">Trust relationships with the audience involved in the ongoing dialogue with the brand;</li>
										<li class="smm_strategy_li">Processing of user requests, including negative, within a period not exceeding 3 hours;</li>
										<li class="smm_strategy_li">Viral content promotion in social networks, including contests, entertainment posts, shares.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card card-plain">
							<div class="card-header smm-collapse" role="tab" id="headingFive">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Transparency of services
									<i class="now-ui-icons arrows-1_minimal-down"></i>
								</a>
							</div>
							<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
								<div class="card-body">
									<h5>We provide the most comfortable interaction. We provide detailed reporting on all phases of work.</h5>
										<p>You get:</p>
									<ul class="smm_strategy_ul">
										<li class="smm_strategy_li">Data about all touches to the brand: from the number of views of the content to go to the community page or your website;</li>
										<li class="smm_strategy_li">Report on the quantitative and qualitative metrics of activity in the group;</li>
										<li class="smm_strategy_li">Specification of targeting and dynamics of attracting target users;</li>
										<li class="smm_strategy_li">Conversion data to target actions on your website.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="features-2 section-image smm-advantages-image" style="background-image: url('/images/smm/smm-advantages-bg-drk.jpg'); background-color:rgba(0, 0, 0, 0.7);">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto">
					<h2 class="title">Our Advantages.</h2>
					<h4 class="description">For SMM-promotion of a project in social media, there are responsible industry-specific teams of experts who specialize in your business:</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="info">
						<div class="icon icon-primary icon-circle">
							<i class="now-ui-icons users_single-02"></i>
						</div>
						<h4 class="info-title">We know what your audience lives</h4>
					</div>
				</div>
				<div class="col-md-4">
					<div class="info">
						<div class="icon icon-danger icon-circle">
							<i class="now-ui-icons business_chart-bar-32"></i>
						</div>
						<h4 class="info-title">Analyze how do your competitors act</h4>
					</div>
				</div>
				<div class="col-md-4">
					<div class="info">
						<div class="icon icon-warning icon-circle">
							<i class="now-ui-icons arrows-1_refresh-69"></i>
						</div>
						<h4 class="info-title">We know what solutions work in your industry</h4>
					</div>
				</div>
				<div class="col-md-12">
					<p class="description smm_advatages_p">Due to the synergy of advanced technologies and high expertise, we produce results faster. We involve leading experts in the development and implementation of SMM strategies: analysts and strategists, developers and project managers, authors and editors, ORM specialists, paid channels and quality control. We work with all known formats of advertising in social media.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="pricing-2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ml-auto mr-auto text-center">
					<h2 class="title">Pick the best plan fits for you</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card card-pricing card-plain">
						<div class="card-body">
							<h6 class="category">Extended</h6>
							<h1 class="card-title">
								<small>$</small>499</h1>
							<ul>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> Industry Research
								</li>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> Content Strategy
								</li>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> 2 social platforms of your choice
								</li>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> 5 posts per week
								</li>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> 3 custom images per month
								</li>
								<li>
									<b>
										<i class="now-ui-icons ui-1_check check_price_landing"></i>
									</b> Profile optimization
								</li>
							</ul>
							<a href="/contact-us" class="btn btn-primary btn-round">
								Order Now
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-pricing card-background card-raised" style="background-color:#FFCDD2;">
						<div class="card-body">
							<h6 class="category text-info">Standart</h6>
							<h1 class="card-title">
								<small>$</small>699</h1>
								<ul>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Industry Research
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Content Strategy
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> 2 social platforms of your choice
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> 10 posts per week
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> 5 custom images per month
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Profile optimization
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Paid advertisement <br>
										(Ad budget fees are not included)
									</li>
								</ul>
							<a href="/contact-us" class="btn btn-neutral btn-round">
								Order Now
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-pricing card-plain">
						<div class="card-body">
							<h6 class="category">Basic</h6>
							<h1 class="card-title">
								<small>$</small>999</h1>
								<ul>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Industry Research
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Content Strategy
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> 3 social platforms of your choice
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> 10 posts per week
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> 5 custom images per month
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Profile optimization
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Customer review monitoring and responding
									</li>
									<li>
										<b>
											<i class="now-ui-icons ui-1_check check_price_landing"></i>
										</b> Paid advertisement <br>
										(Ad budget fees are not included)
									</li>
								</ul>
							<a href="/contact-us" class="btn btn-primary btn-round">
								Order Now
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
@stop
