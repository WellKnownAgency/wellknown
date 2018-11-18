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
    <div class="page-header-image" data-parallax="true" style="background-image: url('../images/blog/blog-bg.webp');">
    </div>

    <div class="content-center">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<h2 class="title">WellKnown Business and Marketing Blog</h2>
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
                  <h2 class="title">Latest Posts</h2>

                  <br>
                  <div class="card card-plain card-blog">
                      <div class="row">
                          <div class="col-md-5">
                              <div class="card-image">
                                  <img class="img img-raised rounded" src="images/post1.jpeg">
                              </div>
                          </div>
                          <div class="col-md-7">
                              <h6 class="category text-info mt-3">WEB DESIGN AND DEV</h6>
                              <h3 class="card-title">
                                  <a href="#pablo">HOW MUCH YOU CAN EARN AS A WEB DESIGNER OR DEVELOPER?</a>
                              </h3>
                              <p class="card-description">
                                  Web Designers are working on the internet to make, create, and codes web for different companies, individuals, and industries. These web pages contain information about different things like if the web is designed for any company… <a href="#pablo"> Read More </a>
                              </p>
                              <p class="author">
                                  by <a href="#pablo"><b>Taras Kim</b></a>, 2 days ago

                          </p></div>
                      </div>
                  </div>

                  <div class="card card-plain card-blog">
                      <div class="row">
                          <div class="col-md-7">
                              <h6 class="category text-danger">
                                  SOCIAL MEDIA
                              </h6>
                              <h3 class="card-title">
                                  <a href="#pablo">FASCINATING AND INTERESTING SOCIAL MEDIA: WHICH SOCIAL MEDIA SITE TO USE</a>
                              </h3>
                              <p class="card-description">
                                  In the growing and developing a society of today almost each and every person likes to and consider it essential to use social media in which there are so many different applications like Facebook, WhatsApp, LinkedIn, YouTube, Instagram, and Twitter. The people of every age group...<a href="#pablo"> Read More </a>
                              </p>
                              <p class="author">
                                  by <a href="#pablo"><b>Anton Likhnekevich</b></a>, 5 days ago

                          </p></div>
                          <div class="col-md-5">
                              <div class="card-image">
                                  <img class="img img-raised rounded" src="images/post2.jpeg">
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
