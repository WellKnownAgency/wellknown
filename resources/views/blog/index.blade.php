@extends('layout.mainblog')

@section('title', 'Digital Agency - Advertising | Marketing | Web Design - WellKnown ')

@section('description', 'WellKnown Digital Agency provides Advertising , Marketing and Webdesign Services for your Business. Years of experience working with small Businesses give us an opportunity to guaranty you great results. Call now and get Free Consultation.')

@section('keywords', 'Digital Agency, Online marketing, online advertising, marketing Agency, Advertising Agency, Web design agency, web development')

@section('preload')
<link rel="preload" href="/images/sky.webp" as="image">
<link rel="preload" href="/images/boston.webp" as="image">
@stop

@section('customcss')
<meta property="og:image" content="/images/sem.jpg" />
<style>
.pagination {
  justify-content: center !important;
}
</style>
@stop

@section('content')
<div class="wrapper">
  <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('../images/blog/blog-bg.webp');">
    </div>

    <div class="content-center">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<h2 class="title">WellKnown<br> Business and Marketing<br> Blog</h2>
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
  <div class="container">
    <div class="section">
      <div class="row">
    @foreach($posts as $post)
    <div class="col-md-4">
        <div class="card card-plain card-blog">
            <div class="card-image">
                <a href="/blog/{{ $post->slug }}">
                    <img class="img rounded img-raised" src="/images/blog/{{ $post->image }}">
                </a>
            </div>

            <div class="card-body">
                <h6 class="category text-info">{{ $post->category['name'] }}</h6>
                <h4 class="card-title">
                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                </h4>
                <p class="card-description">
                    {{ str_limit($post->excerpt, 100) }} <a href="/blog/{{ $post->slug }}"> Read More </a>
                    </p>
                      <div class="author">
                        <span></span>
                      </div>
                <p>
                </p>
            </div>
        </div>
    </div>
    @endforeach
  </div>
  <div class="justify-content-center">
    {{ $posts->links() }}
  </div>
    </div>
  </div>

</div>
@stop
