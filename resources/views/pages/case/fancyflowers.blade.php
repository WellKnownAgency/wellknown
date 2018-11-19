@extends('layout.main')

@section('title', 'Digital Marketing and Advertising Agency | Full Service')

@section('description', 'Our Marketing and Advertisng Agency is ready to provide you with any online digital services for your small business company. Customer Support - Get a Free Consultation.')

@section('keywords', 'Digital Marketing, Online marketing, marketing Agency, Advertising Agency,  Marketing services')

@section('preload')
<link rel="preload" href="images/bgmain/sem.jpg" as="image">
@stop

@section('content')
<div class="page-header header-filter " filter-color="fflowers">
  <div class="page-header-image" style="background-image: url('/images/ffmain.webp');">
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center" style="margin-top: 100px;">
              <h1 class="title">Fancy Flowers</h1>
              <h3>Fully created Online flower store</h3>
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
                  <ul>
                    <li><a href="http://127.0.0.1:8000/web-design">Web Development</a></li>
                    <li><a href="http://127.0.0.1:8000/web-design">Web Design</a></li>
                    <li><a href="http://127.0.0.1:8000/search-engine-optimization">Search Engine Optimization</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul>
                    <li><a href="http://127.0.0.1:8000/search-engine-optimization">Content Marketing</a></li>
                    <li><a href="http://127.0.0.1:8000/advertising">Advertising</a></li>
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
  <div class="container">
    <div class="card" width="100%">
      <img class="card-img-top" src="/images/fflowersall.webp" />
    </div>
  </div>
</div>
@stop
