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
  <div class="page-header clear-filter">
    <div class="rellax-header rellax-header-sky" data-rellax-speed="-4">
      <div class="page-header-image" style="background-image: url('/images/sky.webp')">
      </div>
    </div>
    <div class="rellax-header rellax-header-buildings" data-rellax-speed="0">
      <div class="page-header-image page-header-city" style="background-image: url('/images/boston.webp')">
      </div>
    </div>
    <div class="rellax-text-container rellax-text">
      <h1 class="h1-seo" data-rellax-speed="-1">WellKnown Agency</h1>
    </div>
    <h3 class="h3-description rellax-text" data-rellax-speed="-1">Advertising | Marketing | Web Design | Development</h3>
  </div>
  <div class="features-3">
      <div class="container">
          <div class="row">
              <div class="col-md-8 ml-auto mr-auto">
                  <h2 class="title">WellKnown Agency Services</h2>
                  <h4 class="description">We are a full-service Marketing, Advertising and Web Development Agency. We create stunning websites, fully responsible and ready to convert leads. With our Marketing and Advertising services we can help you find customers all over the Internet.</h4>
              </div>
          </div>

          <div class="row">
              <div class="col-md-4">
                  <div class="info info-hover">
                      <div class="icon icon-success icon-circle">
                          <i class="now-ui-icons objects_globe"></i>
                      </div>
                      <h4 class="info-title">Marketing</h4>
                      <p class="description">SEO, SMM, Branding and many more for your business online.</p>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="info info-hover">
                      <div class="icon icon-info icon-circle">
                          <i class="now-ui-icons education_atom"></i>
                      </div>
                      <h4 class="info-title">Advertising</h4>
                      <p class="description">From PPC Advertising to remarketing in Social Media.</p>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="info info-hover">
                      <div class="icon icon-primary icon-circle">
                          <i class="now-ui-icons tech_watch-time"></i>
                      </div>
                      <h4 class="info-title">Web Development</h4>
                      <p class="description">Any type of website, landing pages, web applications.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="section section-content" data-background-color="black">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="image-container">
            <img class="img img-raised rounded img-comments rellax" data-rellax-speed="1" src="/images/test3.webp">
            <img class="img img-raised rounded img-blog rellax" data-rellax-speed="4" src="images/test2.webp">
          </div>
        </div>
        <div class="col-md-4 ml-auto mr-auto">
          <div class="section-description">
            <h2 class="title">Agency Philosophy</h2>
            <h6 class="category">That what we think matters</h6>
            <h5 class="description">First of all, WellKnown is a full-service agency, based on a team of talented and creative people, who have a large marketing experience, unique ideas, and specific knowledge. Each of us joined the company to implement our ambitious and evolve. Your business or brand with your goals and purposes is what gives us energy and power. WellKnown is simply the best solution to make your ROI increase.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--     *********    SIMPLE SOCIAL LINE     *********      -->
  <div class="social-line social-line-big-icons social-line-white" style="padding:40px 40px;">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="https://upcity.com/local-marketing-agencies/profiles/wellknown-agency" class="btn btn-neutral btn-icon btn-twitter btn-footer">
            <img src="/images/upcity.webp" width="100px"/>
          </a>
        </div>
        <div class="col-md-4">
          <a href="https://clutch.co/profile/wellknown-agency" class="btn btn-neutral btn-icon btn-facebook btn-footer">
            <img src="/images/clutch.webp" width="100px" />
          </a>
        </div>
        <div class="col-md-4">
          <a href="" class="btn btn-neutral btn-icon btn-google btn-footer">
            <img src="/images/dan.webp" width="100px" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--     *********   SIMPLE SOCIAL LINE     *********      -->
  <div class="section section-components bg-indexcase">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <h2 class="text-center title" style="color: #fff;">Agency Case Studies
            <br>
            <small class="description">Created with passion</small>
          </h2>
          <h5 class="text-center description">We've had the pleasure of being involved in a stunning projects that helped our clients to boost their business . Here are a select few:</h5>
          <div class="space-50"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 offset-md-1">
          <div class="card-container first-card">
            <div class="card-component">
              <a href="/fancy-flowers" target="_blank">
                <div class="front">
                  <img src="/images/fflowermain.webp">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-container second-card">
            <div class="card-component">
              <a href="/born-to-move" target="_blank">
                <div class="front">
                  <img src="/images/btmpagem.webp">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-container third-card">
            <div class="card-component">
              <a href="/omdarling" target="_blank">
                <div class="front">
                  <img src="/images/omdarlingmain.webp">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Blog -->
  <div class="section section-plain-cards">
    <div class="container">
      <div class="title">
        <h3>Latest Blog Posts
        </h3>
      </div>
      <div class="row">
        @foreach( $posts as $post )
        <div class="col-md-6 col-lg-4">
          <div class="card card-blog card-plain">
            <div class="card-image">
              <a href="/blog/{{ $post->slug }}">
                <img class="img img-raised rounded" src="/images/blog/{{ $post->image }}">
              </a>
            </div>
            <div class="card-body text-center">
              <h6 class="category text-danger">
                <i class="now-ui-icons media-2_sound-wave"></i> {{ $post->category['name'] }}
              </h6>
              <h5 class="card-title">
                <a href="#nuk">{{ $post->title }}</a>
              </h5>
              <p class="card-description">
                {{ str_limit($post->excerpt, 100) }}
              </p>
              <div class="card-footer">
                <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read Article</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

</div>
@stop
