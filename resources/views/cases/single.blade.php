@extends('layout.maincase')

@section('title', 'Fancy Flowers | WellKnown Agency Case Studies')

@section('description', 'Fancy Flowers is a flower delivery business in Philadelphia. Our team at WellKnown Agency create a Ecomerce website with all the functionality and managed SEO.')

@section('keywords', '')

@section('preload')
<link rel="preload" href="/images/cases/" as="image">
@stop

@section('customcss')
<meta property="og:image" content="/images/cases/" />
@stop

@section('content')
<div class="page-header header-filter " filter-color="fflowers">
  <div class="page-header-image" style="background-image: url('/images/cases/{{ $scase->header_image }}')">
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center" style="margin-top: 100px;">
              <h1 class="title">{{$scase->title}}</h1>
              <h3>{{$scase->excerpt}}</h3>
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
              {!! $scase->body !!}
            </p>
          </div>
          <div class="col-md-6">
              <h5 class="card-title">Services</h5>
              <div class="row">
                <div class="col-md-6">
                  <ul style="list-style:none; padding-left: 0;">

                    <li><a href="/web-design">Web Development</a></li>

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
				@foreach($scase->casetechnologies as $casetechnology)
        <div class="col-md-3">
          <i class="{{ $casetechnology->icon }} fa-5x" data-toggle="tooltip" data-placement="top" title="{{ $casetechnology->name }}"></i>
        </div>
				@endforeach
      </div>
  </div>
  </div>
  <br>
  <div class="container"><hr></div>
  <br>
  <div class="container">
    <div class="card" width="100%">
      <img class="card-img-top" src="/images/cases/{{ $scase->image }}" />
    </div>
  </div>
</div>
@stop
