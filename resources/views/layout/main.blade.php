<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials/_head')
	</head>
	<body class="index-page">
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId            : '131016570928938',
		      autoLogAppEvents : true,
		      xfbml            : true,
		      version          : 'v2.11'
		    });
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="fb-customerchat"
		 page_id="153425045259276">
		</div>
		@include('partials/_nav')
		<!-- Page Content -->
		<div id="app" class="presentation-page">
			@yield('content')
			@include('partials/_upfooter')
			@include('partials/_footer')
		</div>
		<div itemprop="organization" itemscope itemtype="http://schema.org/Organization" display:none;>
			<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span itemprop="streetAddress">
					358 Commonwealth avenu
				</span>
				<span itemprop="addressLocality">Boston</span>,
				<span itemprop="addressRegion">MA</span>
				<span itemprop="postalCode">02115</span>
			</div>
			<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" display:none;>
	        <meta itemprop="itemReviewed" content="WellKnown Agency" />
	        <meta itemprop="ratingValue" content="5" />
	        <meta itemprop="reviewCount" content="3" />
	    </div>
			<span itemprop="telephone" content="+13395450956">(339)545-0956</span>
			<a href="mailto:info@wknown.com" itemprop="email">info@wknown.com</a>
			<span itemprop="legalName" content="WellKnwn Agency LLC"></span>
    </div>

		@include('partials/_js')
		@yield('customjs')
	</body>
</html>
