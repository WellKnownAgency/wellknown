@extends('layout.main')

@section('title', 'Fancy Flowers | WellKnown Agency Case Studies')

@section('description', 'Fancy Flowers is a flower delivery business in Philadelphia. Our team at WellKnown Agency create a Ecomerce website with all the functionality and managed SEO.')

@section('keywords', '')

@section('preload')
<link rel="preload" href="/images/ffmain.jpg" as="image">
@stop

@section('customcss')
<meta property="og:image" content="/images/ffmain.jpg" />
@stop

@section('content')
<div class="page-header header-filter " filter-color="fflowers">
  <div class="page-header-image" style="background-image: url('/images/ffmain.jpg');">
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center" style="margin-top: 100px;">
              <h1 class="title">Fancy Flowers</h1>
              <h3>Fully created Online Flowers Delivery store</h3>
          </div>
      </div>
  </div>
</div>
<div class="projects-3">
  <div class="container">
      <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
              <h6 class="category text-muted">What we did</h6>
              <h2 class="title">Laravel based E-commerce store</h2>
          </div>
      </div>
      <div class="section-story-overview">
      <div class="row" style="font-size: 16px; color: #2c2c2c;">
          <div class="col-md-6">
            <p>
              Our team worked on development Laravel based online ecommerce store <a href="https://fflowers.net" rel="nofollow" target="_blank">FancyFlowers</a>. The main idea was to create fully worked online store with online flower delivery.
              It includes Front end works, cart, checkout page and Admin Panel. Stripe was installed as a payment processor using secured encrypted techlogies. As Addition was created a Blog system for SEO purposes.
            </p>
          </div>
          <div class="col-md-6">
              <h5 class="card-title">Services</h5>
              <div class="row">
                <div class="col-md-6">
                  <ul style="list-style:none; padding-left: 0;">
                    <li><a href="/web-design">Web Development</a></li>
                    <li><a href="/web-design">Web Design</a></li>
                    <li><a href="/search-engine-optimization">Search Engine Optimization</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul style="list-style:none; padding-left: 0;">
                    <li><a href="/search-engine-optimization">Content Marketing</a></li>
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
          <i class="fab fa-vuejs fa-5x" data-toggle="tooltip" data-placement="top" title="VueJS"></i>
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
      <img class="card-img-top" src="/images/fflowersall.webp" />
    </div>
  </div>
</div>
@stop
