@extends('layout.main')

@section('title', 'OmDarling | WellKnown Agency Case Studies')

@section('description', 'OmDarling is a Personal Blog. Our team at WellKnown Agency created a Blog website with all the functionality and managed SEO and Advertising.')

@section('keywords', '')

@section('preload')
<link rel="preload" href="/images/omdarling.jpg" as="image">
@stop

@section('customcss')
<meta property="og:image" content="/images/omdarling.jpg" />
@stop

@section('content')
<div class="page-header header-filter " filter-color="omdarling">
  <div class="page-header-image" style="background-image: url('/images/omdarling.jpg');">
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center" style="margin-top: 100px;">
              <h1 class="title">OmDarling</h1>
              <h3>Personal Blog</h3>
          </div>
      </div>
  </div>
</div>
<div class="projects-3">
  <div class="container">
      <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
              <h6 class="category text-muted">What we did</h6>
              <h2 class="title">Blog system, SEO and Advertisng</h2>
          </div>
      </div>
      <div class="section-story-overview">
      <div class="row" style="font-size: 16px; color: #2c2c2c;">
          <div class="col-md-6">
            <p>
              Our team worked on development Laravel based personal blog <a href="https://omdarling.com" target="_blank">Omdarling</a>.
              Fully created personal blog system on laravel. With Categories and tags, admin panel, featured post and more. Includes Instagram API. Advertising campaigns through Outbrain platform, social media marketing.
            </p>
          </div>
          <div class="col-md-6">
              <h5 class="card-title">Services</h5>
              <div class="row">
                <div class="col-md-6">
                  <ul style="list-style:none; padding-left: 0;">
                    <li><a href="/web-design">Web Development</a></li>
                    <li><a href="/web-design">Web Design</a></li>
                    <li><a href="">Social Media Marketing</a></li>

                  </ul>
                </div>
                <div class="col-md-6">
                  <ul style="list-style:none; padding-left: 0;">
                    <li><a href="/search-engine-optimization">Search Engine Optimization</a></li>
                    <li><a href="/advertising">Advertising</a></li>
                  </ul>
                </div>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Technologies we used</h2>
      </div>
  </div>
  <div class="social-line social-line-big-icons social-line-white text-center">
      <div class="row">
        <div class="col-md-3">
          <i class="fab fa-laravel fa-5x" data-toggle="tooltip" data-placement="top" title="Laravel"></i>
        </div>
        <div class="col-md-3">
          <i class="fab fa-js fa-5x"  data-toggle="tooltip" data-placement="top" title="JavaScript"></i>
        </div>
        <div class="col-md-3">
          <i class="fab fa-html5 fa-5x" data-toggle="tooltip" data-placement="top" title="HTML5"></i>
        </div>
        <div class="col-md-3">
          <i class="fab fa-css3 fa-5x" data-toggle="tooltip" data-placement="top" title="CSS3 "></i>
        </div>
      </div>
  </div>
  </div>
  <br>
  <div class="container"><hr></div>
  <br>
  <div class="container">
    <div class="card" width="100%">
      <img class="card-img-top" src="/images/omdarlingall.webp" />
    </div>
  </div>
</div>
@stop
