@extends('layout.mainblog')

@section('title', "$post->seotitle")

@section('description', "$post->dscr")

@section('keywords', '')

@section('preload')
<link rel="preload" href="/images/blog/{{ $post->image }}" as="image">
@stop

@section('customcss')
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $post->title }}">
<meta itemprop="description" content="{{ $post->dscr }}">
<meta itemprop="image" content="http://www.wknown.com/images/blog/{{ $post->image }}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@WKnownMarketing">
<meta name="twitter:title" content="{{ $post->title }}">
<meta name="twitter:description" content="{{ $post->dscr }}">
<meta name="twitter:creator" content="@taras_kim">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="http://www.wknown.com/images/blog/{{ $post->image }}">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $post->title }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.wknown.com/blog/{{ $post->slug }}" />
<meta property="og:image" content="http://www.wknown.com/images/blog/{{ $post->image }}" />
<meta property="og:description" content="{{ $post->dscr }}" />
<meta property="og:site_name" content="WellKnown Agency" />
<meta property="article:published_time" content="http://www.wknown.com/blog/{{ $post->created_at }}" />
<meta property="article:modified_time" content="http://www.wknown.com/blog/{{ $post->updated_at }}" />
<meta property="article:section" content="Article Section" />
<meta property="article:tag" content="Marketing" />
<meta property="fb:admins" content="153425045259276" />

<style>
.button-container {
  text-align: center;
  margin-top: -112px;
  position: relative;
  z-index: 100;
}
p {
    font-size: 1.4em !important;
}
</style>
@stop

@section('content')
<div class="wrapper">
    <div class="page-header page-header-small">

    <div class="page-header-image" style="background-image: url(/images/blog/{{ $post->image }});">
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
                  <a id="shareb" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" class="btn btn-icon btn-lg btn-twitter btn-round">
                      <i class="fab fa-twitter"></i>
                  </a>
                  <a id="shareb" href="https://www.facebook.com/sharer.php?u={{ urlencode(Request::fullUrl()) }}" class="btn btn-icon btn-lg btn-facebook btn-round">
                      <i class="fab fa-facebook-square"></i>
                  </a>
                  <a id="shareb" href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}" class="btn btn-icon btn-lg btn-google btn-round">
                      <i class="fab fa-google"></i>
                  </a>
              </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
          by <a href="#author">{{ $post->user->name}}</a> - {{ date('F d, Y', strtotime($post->created_at)) }}
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

<!-- Blog -->
<div class="section section-plain-cards">
	<div class="container">
		<div class="title">
			<h3>Related Posts
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
							<a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
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

<div class="subscribe-line subscribe-line-white" id="subscribe">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h4 class="title">Get New Posts every Week!</h4>
              <p class="description">
                Join our newsletter and get latest blog news in your inbox every week! We hate spam too, so no worries about this.
              </p>
            </div>
            <div class="col-md-6">
              <div class="card card-plain card-form-horizontal">
                <div class="card-content">
                  <form method="" action="">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Email Name...">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <a href="#" class="btn btn-primary btn-round btn-block">Subscribe</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div itemscope itemtype="http://schema.org/Article" style="display:none;">
  			<div itemprop="headline">{{ $post->title }}</div>
  			<div itemprop="author">{{ $post->user->name }}</div>
        <div itemprop="datePublished">{{ $post->created_at }}</div>
        <div itemprop="dateModified">{{ $post->updated_at }}</div>
        <div itemprop="image">https://wknown.com/images/blog/{{ $post->image }}</div>
        <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
          <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            <img src="https://wknown.com/images/wk.jpg"/>
            <meta itemprop="url" content="https://wknown.com/images/wk.jpg">
            <meta itemprop="width" content="130px">
            <meta itemprop="height" content="62px">
          </div>
          <meta itemprop="name" content="WellKnown Agency">
  	    </div>
        <link itemprop="mainEntityOfPage" href="https://wknown.com/blog/{{$post->slug}}" />
      </div>
@stop

@section('customjs')
<script>

   var popupSize = {
       width: 550,
       height: 550
   };

   $(document).on('click', '#shareb', function(e){

       var
           verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
           horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

       var popup = window.open($(this).prop('href'), 'social',
           'width='+popupSize.width+',height='+popupSize.height+
           ',left='+verticalPos+',top='+horisontalPos+
           ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

       if (popup) {
           popup.focus();
           e.preventDefault();
       }

   });
</script>
@endsection
