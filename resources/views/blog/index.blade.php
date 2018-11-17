@extends('layout.main')

@section('title', 'Digital Agency - Advertising | Marketing | Web Design - WellKnown ')

@section('description', 'WellKnown Digital Agency provides Advertising , Marketing and Webdesign Services for your Business. Years of experience working with small Businesses give us an opportunity to guaranty you great results. Call now and get Free Consultation.')

@section('keywords', 'Digital Agency, Online marketing, online advertising, marketing Agency, Advertising Agency, Web design agency, web development')

@section('preload')
<link rel="preload" href="/images/sky.webp" as="image">
<link rel="preload" href="/images/boston.webp" as="image">
@stop

@section('customcss')
<meta property="og:image" content="/images/sem.jpg" />
@stop

@section('content')
<div class="wrapper">
  <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg44.jpg');">
    </div>

    <div class="content-center">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<h2 class="title">WellKnown<br> Business and Marketing<br> Blog</h2>
                <a href="#button" class="btn btn-primary btn-round  btn-icon">
               <i class="fab fa-twitter"></i>
            </a>
            <a href="#button" class="btn btn-primary btn-round  btn-icon">
               <i class="fab fa-facebook-f"></i>
           </a>
           <a href="#button" class="btn btn-primary btn-round  btn-icon">
              <i class="fab fa-linkedin-in"></i>
          </a>
			</div>
		</div>
	</div>

</div>
  <div class="blogs-1" id="blogs-1">

      <div class="container">
          <div class="row">

              <div class="col-md-10 ml-auto mr-auto">
                  <h2 class="title">Latest Blogposts</h2>

                  <br>
                  <div class="card card-plain card-blog">
                      <div class="row">
                          <div class="col-md-5">
                              <div class="card-image">
                                  <img class="img img-raised rounded" src="assets/img/examples/card-blog4.jpg">
                              </div>
                          </div>
                          <div class="col-md-7">
                              <h6 class="category text-info mt-3">Enterprise</h6>
                              <h3 class="card-title">
                                  <a href="#pablo">Warner Music Group buys concert discovery service Songkick</a>
                              </h3>
                              <p class="card-description">
                                  Warner Music Group announced today it’s acquiring the selected assets of the music platform Songkick, including its app for finding concerts and the company’s trademark. Songkick has been involved in a lawsuit against the major… <a href="#pablo"> Read More </a>
                              </p>
                              <p class="author">
                                  by <a href="#pablo"><b>Sarah Perez</b></a>, 2 days ago

                          </p></div>
                      </div>
                  </div>

                  <div class="card card-plain card-blog">
                      <div class="row">
                          <div class="col-md-7">
                              <h6 class="category text-danger">
                                  <i class="now-ui-icons now-ui-icons media-2_sound-wave"></i> Startup
                              </h6>
                              <h3 class="card-title">
                                  <a href="#pablo">Insticator raises $5.2M to help publishers</a>
                              </h3>
                              <p class="card-description">
                                  Insticator is announcing that it has raised $5.2 million in Series A funding. The startup allows online publishers to add quizzes, polls and other interactive elements (either created by Insticator or by the publisher themselves) to their stories.<a href="#pablo"> Read More </a>
                              </p>
                              <p class="author">
                                  by <a href="#pablo"><b>Anthony Ha</b></a>, 5 days ago

                          </p></div>
                          <div class="col-md-5">
                              <div class="card-image">
                                  <img class="img img-raised rounded
                                  " src="assets/img/examples/card-blog6.jpg">
                              </div>
                          </div>
                      </div>
                  </div>

              </div>

          </div>



      </div>
  </div>
</div>
@stop
