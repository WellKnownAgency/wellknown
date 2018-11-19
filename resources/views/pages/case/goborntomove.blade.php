@extends('layout.main')

@section('title', 'Born to Move | WellKnown Agency Case Studies')

@section('description', 'Born to Move is a Moving Company in Boston, MA. Our team at WellKnown Agency created a Service website with all the functionality and managed SEO, Content Marketign and Advertising.')

@section('keywords', '')

@section('preload')
<link rel="preload" href="/images/btmmain.webp" as="image">
@stop

@section('customcss')
<meta property="og:image" content="/images/btmmain.webp" />
@stop

@section('content')
<div class="page-header header-filter " filter-color="borntomove">
  <div class="page-header-image" style="background-image: url('/images/btmmain.webp');">
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center" style="margin-top: 100px;">
              <h1 class="title">Born to Move</h1>
              <h3>Moving Company Website with High Quality SEO</h3>
          </div>
      </div>
  </div>
</div>
<div class="projects-3">
  <div class="container">
      <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
              <h6 class="category text-muted">What we did</h6>
              <h2 class="title">Website with Landing pages and high quality SEO</h2>
          </div>
      </div>
      <div class="section-story-overview">
      <div class="row" style="font-size: 16px; color: #2c2c2c;">
          <div class="col-md-6">
            <p>
              Our team worked on development Laravel based service website <a href="https://goborontomove.com" target="_blank">Born to Move</a>.
              The main idea was to create full service moving website that converts leads into customers.
              Also one of the main purposes was to make all pages rank in Google as high aas possible.
              SEO took most of the work and now we an see that almost every page is in top 20 of the results.
              Half of them are in top 10, and few in positions 1-3.
              SEO our tem did for the company now gives more then a half of visitors of the website and new design hellps convert more Search leads into customers.
              Also our Agency created a Blog system and do content marketing with 4 blog posts a month for the Born to Move Moving Company.
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
      <img class="card-img-top" src="/images/btmall.webp" />
    </div>
  </div>
</div>
@stop
