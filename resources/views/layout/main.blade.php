<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials/_head')
	</head>
	<body id="page-top" class="index">
		<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52K9TDC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Facebook Pixel-->
		<script>
		  window.fbAsyncInit = function() {
			FB.init({
			  appId      : '131016570928938',
			  xfbml      : true,
			  version    : 'v2.11'
			});
			FB.AppEvents.logPageView();
		  };

		  (function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "https://connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>

		@include('partials/_nav')
		<!-- Page Content -->
		<div id="container" class="intro-effect-push">
			@yield('content')
		</div>
		@include('partials/_footer')
		@include('partials/_js')
	</body>
</html>
