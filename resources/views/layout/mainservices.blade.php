<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials/_head')
	@yield('customcss')
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
			@include('partials/_blogfooter')
			@include('partials/_footer')
		</div>
		@include('partials/_js')
		@yield('customjs')
	</body>
</html>
