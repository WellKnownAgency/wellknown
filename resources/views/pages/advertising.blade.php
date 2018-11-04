@extends('layout.main')

@section('title', 'Advertsing | WellKnown Agency')

@section('description', 'All types of Digital Advertising for your Business. PPC, Remarketing and video ads by WellKNown Digital Agency')

@section('keywords', 'Advertising, ads agency, ppc, pay per click, reamrketing campaigns, video advertising')

@section('preload')
<link rel="preload" href="/images/bgmain/sem.jpg" as="image">
@stop

@section('content')
<div class="wrapper">
  <div class="header-2">
    <div class="page-header header-filter" >
        <div class="page-header-image" style="background-image: url('/images/bgmain/sem.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center" style="padding-top: 100px;">
                    <h1 class="title">Advertising</h1>
                    <h5 class="description">Create catching advertising</h5>
                </div>
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card card-raised card-form-horizontal card-plain" data-background-color="">
                        <div class="card-body">
                          <a href="#" class="btn btn-primary btn-round btn-l">Free consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-pills">
	<div class="container">
    <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
            <h2 class="title text-center">How we create ads?</h2>
        </div>
    </div>
    <br
		<div id="navigation-pills">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-lg-2 col-md-10">
							<ul class="nav nav-pills nav-pills-primary nav-pills-icons flex-column" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#link10" role="tablist">
										<i class="now-ui-icons objects_umbrella-13"></i>
                    Your Goals and Ideas
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#link11" role="tablist">
										<i class="now-ui-icons ui-2_settings-90"></i>
										Settings
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-10">
							<div class="tab-content">
								<div class="tab-pane active" id="link10">
                  <div class="row">
                    <div class="col-md-6">
                      It's essential to understant what you exactly looking for to get from the advertising. It helps, first of all, to understand what auditory is the best for you, what platform to use to get that auditory and more... 
                    </div>
                    <div class="col-md-3">
                      <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="images/img/bg30.jpg" alt="Card image cap">
                      </div>
                    </div>

                  </div>
								</div>
								<div class="tab-pane" id="link11">
								  Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
								  <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="features-8 section-image" style="background-image: url('images/img/bg30.jpg')">

    <div class="col-md-8 ml-auto mr-auto text-center">
        <h2 class="title">Working is a pleasure</h2>
        <h4 class="description">Woodpecker.co is a follow-up automation SaaS founded in 2015. We’re an international team of 17, speaking 4 languages. Our mission is to enable all B2B companies to connect with their Ideal Customers.</h4>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/img/bg28.jpg" class="rounded" alt="">
                    </div>
                    <div class="info text-center">
                        <div class="icon">
                            <i class="now-ui-icons ui-1_email-85"></i>
                        </div>
                        <h4 class="info-title">Reply detection</h4>
                        <p class="description">If you get a reply, further follow-ups are automatically stopped.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/img/bg26.jpg" class="rounded" alt="">
                    </div>
                    <div class="info text-center">
                        <div class="icon">
                            <i class="now-ui-icons ui-1_calendar-60"></i>
                        </div>
                        <h4 class="info-title">Follow-up</h4>
                        <p class="description">Just set a number of days that you want send a follow-up. </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/img/bg27.jpg" class="rounded" alt="">
                    </div>
                    <div class="info text-center">
                        <div class="icon">
                            <i class="now-ui-icons ui-1_send"></i>
                        </div>
                        <h4 class="info-title">Cold email</h4>
                        <p class="description">Unlimited number of prospects daily with personalized emails.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/img/bg29.jpg" class="rounded" alt="">
                    </div>
                    <div class="info text-center">
                        <div class="icon">
                            <i class="now-ui-icons ui-2_like"></i>
                        </div>
                        <h4 class="info-title">Teamwork</h4>
                        <p class="description">You and your teammates won’t address the same person twice. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-basic-components">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-7 ml-auto mr-auto">
        <h2 class="title">Basic Elements</h2>
        <h6 class="category">The core elements of your website</h6>
        <h5 class="description">We re-styled every Bootstrap 4 element to match the Now UI Kit style. All the Bootstrap 4 components that you need in a development have been re-design with the new look. Besides the numerous basic elements, we have also created additional classes. All these items will help you take your project to the next level.</h5>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="image-container">
          <img class="components-macbook" src="images/img/ipad.png" alt="">
          <img class="table-img" src="images/img/presentation-page/table.jpg" alt="">
          <img class="share-btn-img" src="images/img/presentation-page/share-btn.jpg" alt="">
          <img class="coloured-card-btn-img" src="images/img/presentation-page/coloured-card-with-btn.jpg" alt="">
          <img class="coloured-card-img" src="images/img/presentation-page/coloured-card.jpg" alt="">
          <img class="social-img" src="images/img/presentation-page/social-row.jpg" alt="">
          <img class="linkedin-btn-img" src="images/img/presentation-page/linkedin-btn.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section section-plain-cards">
  <div class="container">
    <div class="title">
      <h3>Latest Blog Posts
      </h3>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="card card-blog card-plain">
          <div class="card-image">
            <a href="#pablo">
              <img class="img img-raised rounded" src="/images/img/examples/card-blog6.jpg">
            </a>
          </div>
          <div class="card-body text-center">
            <h6 class="category text-danger">
              <i class="now-ui-icons media-2_sound-wave"></i> Business
            </h6>
            <h5 class="card-title">
              <a href="#nuk">Axel Springer Spends $343M To Buy Business Insider</a>
            </h5>
            <p class="card-description">
              German media giant Axel Springer has announced it’s acquiring online business news publication Business Inside...
            </p>
            <div class="card-footer">
              <a href="#nuk" class="btn btn-primary">Read Article</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card card-blog card-plain">
          <div class="card-image">
            <a href="#pablo">
              <img class="img img-raised rounded" src="/images/img/examples/card-blog6.jpg">
            </a>
          </div>
          <div class="card-body text-center">
            <h6 class="category text-danger">
              <i class="now-ui-icons media-2_sound-wave"></i> Business
            </h6>
            <h5 class="card-title">
              <a href="#nuk">Axel Springer Spends $343M To Buy Business Insider</a>
            </h5>
            <p class="card-description">
              German media giant Axel Springer has announced it’s acquiring online business news publication Business Inside...
            </p>
            <div class="card-footer">
              <a href="#nuk" class="btn btn-primary">Read Article</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card card-blog card-plain">
          <div class="card-image">
            <a href="#pablo">
              <img class="img img-raised rounded" src="/images/img/examples/card-blog6.jpg">
            </a>
          </div>
          <div class="card-body text-center">
            <h6 class="category text-danger">
              <i class="now-ui-icons media-2_sound-wave"></i> Business
            </h6>
            <h5 class="card-title">
              <a href="#nuk">Axel Springer Spends $343M To Buy Business Insider</a>
            </h5>
            <p class="card-description">
              German media giant Axel Springer has announced it’s acquiring online business news publication Business Inside...
            </p>
            <div class="card-footer">
              <a href="#nuk" class="btn btn-primary">Read Article</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="subscribe-line subscribe-line-image" style="background-image: url('/images/img/bg7.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="text-center">
          <h4 class="title">Subscribe to our Newsletter</h4>
          <p class="description">
            Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
          </p>
        </div>
        <div class="card card-raised card-form-horizontal">
          <div class="card-body">
            <form method="" action="">
              <div class="row">
                <div class="col-sm-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Your Email...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@stop
