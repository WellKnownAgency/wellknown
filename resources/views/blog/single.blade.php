@extends('layout.mainblog')

@section('title', "$post->seotitle")

@section('description', "$post->dscr")

@section('keywords', '')

@section('preload')
<link rel="preload" href="/images/blog/{{ $post->image }}" as="image">
@stop

@section('customcss')
<link rel="amphtml" href="http://www.wknown.com/amp/blog/{{ $post->slug }}">
<script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "NewsArticle",
 "mainEntityOfPage":{
   "@type":"WebPage",
   "@id":"https://wknown.com/blog/{!! $post->slug !!}"
 },
 "headline": "{!! $post->title !!}",
 "image": {
   "@type": "ImageObject",
   "url": "https://wknown.com/images/blog/{{ $post->image }}",
   "height": 1920,
   "width": 600
 },
 "datePublished": "{!! $post->created_at !!}",
 "dateModified": "{!! $post->updated_at !!}",
 "author": {
   "@type": "Person",
   "name": "{!! $post->user->name !!}"
 },
 "publisher": {
   "@type": "Organization",
   "name": "WellKnown Agency",
   "logo": {
     "@type": "ImageObject",
     "url": "https://wknown.com/images/wk.jpg",
     "width": 100,
     "height": 48
   }
 },
 "description": "{!! $post->excerpt !!}"
}
</script>

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
    font-size: 1.2em !important;
}
.modal.modal-primary .modal-content {
		margin-top: 100px;
    background-color: #dc3741;
    color: #FFFFFF;
}
.modal-content .modal-footer button {
    /* margin: 0; */
    /* padding-left: 16px; */
    /* padding-right: 16px; */
    width: 100%;
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

            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                  by <a href="#author">{{ $post->user->name}}</a> - {{ date('F d, Y', strtotime($post->created_at)) }}
                  <br>
                </br>
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
                          <button data-toggle="modal" data-target="#loginModal" class="btn btn-default pull-right btn-round">Subscribe</button>
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
<div class="modal fade modal-primary" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-login">
    <div class="modal-content" id="app">
      <div class="card card-login card-plain">
        <div class="modal-header justify-content-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="now-ui-icons ui-1_simple-remove"></i>
          </button>
					<div>
						<h4 class="title">Get New Posts every Week!</h4>
					</div>

        </div>
				<form class="form">
        <div class="modal-body" data-background-color>
            <div class="card-body">
              <div class="input-group form-group-no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                </div>
                <input type="text" v-model="sub.name" class="form-control" placeholder="Your Name...">
              </div>
              <div class="input-group form-group-no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                </div>
                <input type="text" v-model="sub.email" class="form-control" placeholder="Your Email...">
              </div>
            </div>
        </div>
        <div class="modal-footer text-center">
          <button type="button" @click.prevent="subscribe" data-dismiss="modal" class="btn btn-neutral btn-round btn-lg btn-block">Subscribe</button>
        </div>
				</form>
      </div>
    </div>
  </div>
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
<script src="{!! asset('js/vue.js') !!}"></script>
<script src="{!! asset('js/axios.js') !!}"></script>
<script src="{!! asset('js/sweetalert.js') !!}"></script>

<script>
const app = new Vue({
el: '#app',
data: () => ({
  sub:{
		name: '',
    email: ''
  }
}),
methods: {
	subscribe () {
	 axios.post('/api/postsub', this.sub)
			 .then((res) => {
				 this.sub.name = ''
				 this.sub.emil = ''
			 })

			 .then((res) => {
				 swal({
						 icon: "success",
						 title: 'Yeah',
						 text: 'You Successfully Subscribed!'
					 })
			 })
			 .catch((err) =>{
				 console.log(err)
				 swal({
						 icon: "warning",
						 title: 'Ooops...',
						 text: 'Something went wrong!'
					 })
				 })
	},
	}
})
</script>
@endsection
