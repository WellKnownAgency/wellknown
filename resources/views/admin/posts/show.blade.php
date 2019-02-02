@extends('layout.mainblog')

@section('title', '')
@section('dscr', '')
@section('keywords', '')

@section('content')

@section('customcss')
<meta property="og:image" content="/images/blog/{{ $post->image }}" />
<style>
.button-container {
  text-align: center;
  margin-top: -112px;
  position: relative;
  z-index: 100;
}
</style>
@stop



<div class="wrapper">
    <div class="page-header page-header-small">

    <div class="page-header-image" data-parallax="true" style="background-image: url(/images/blog/{{ $post->image }}); transform: translate3d(0px, 0px, 0px);">
    </div>


    <div class="content-center">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto text-center">
                <h1 class="title">{{ $post->title }}</h1>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="button-container">
                  <a href="#pablo" class="btn btn-primary btn-round btn-lg">
                      <i class="now-ui-icons text_align-left"></i> Read Article
                  </a>

                  <a href="#pablo" class="btn btn-icon btn-lg btn-twitter btn-round">
                      <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-icon btn-lg btn-facebook btn-round">
                      <i class="fab fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-icon btn-lg btn-google btn-round">
                      <i class="fab fa-google"></i>
                  </a>
              </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                  {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>

		<div class="section-blog-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <a id="shareb" href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}" class="btn btn-google btn-round pull-right">
                                <i class="fab fa-google"></i>
                            </a>
                            <a id="shareb" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" class="btn btn-twitter btn-round pull-right">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a id="shareb" href="https://www.facebook.com/sharer.php?u={{ urlencode(Request::fullUrl()) }}" class="btn btn-facebook btn-round pull-right">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </div>
                    </div>
                    <hr id="author">
                    <div  class="card card-profile card-plain">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="card-avatar">
                            <a href="#pablo">
                              <img class="img img-raised" src="/images/users/{{$post->user->avatar}}">
                            </a>
                            <div class="ripple-container"></div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <h4 class="card-title">{{$post->user->name}}</h4>
                          <p class="description">{{$post->user->dscr}}</p>
                        </div>
                        <div class="col-md-2">
                          <a href="#subscribe" class="btn btn-default pull-right btn-round">Subscribe</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
