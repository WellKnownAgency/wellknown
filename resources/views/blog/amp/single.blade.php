@extends('layout.mainblogamp')

@section('title', "$post->seotitle")

@section('description', "$post->dscr")

@section('keywords', '')

@section('customcss')
<link rel="canonical" href="http://www.wknown.com/amp/blog/{{ $post->slug }}">
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
@stop

@section('content')
<h1 style="text-align:center; padding:10px;">{{ $post->title }}</h1>
<amp-img src="/images/blog/{{ $post->image }}" alt="Welcome" height="600" width="1920" layout="responsive" style="border:0; margin-bottom: 20px;">
</amp-img>
	<amp-addthis width="320" height="92" data-pub-id="ra-5070799403ebec66" data-widget-id="r024" data-widget-type="inline"></amp-addthis>
<div style="padding:0 10px 0 10px;">
	<div style="font-size:14px;">
		by {{ $post->user->name}} - {{ date('F d, Y', strtotime($post->created_at)) }}
	</div>
	<div>
		{!! $post->body !!}
	</div>
	<div style="margin-top: 20px;">
		<h3 style="text-align:center;">Related Posts</h3>
		@foreach( $posts as $post )
			<h4>
				<a href="/blog/{{ $post->slug }}" style="color:#dc3741;text-decoration: none;">{{ $post->title }}</a>
			</h4>
			<div>
				<a href="/blog/{{ $post->slug }}">
					<amp-img src="/images/blog/{{ $post->image }}" alt="Welcome" height="600" width="1920" layout="responsive" style="border:0; margin-bottom: 20px;">
					</amp-img>
				</a>
			</div>
		@endforeach
	</div>
</div>
@stop
