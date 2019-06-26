<!DOCTYPE html>
<html ⚡ lang="en">
	<head>
	@include('partials/_headamp')
	@yield('customcss')
	</head>
	<body>

		@include('partials/_navamp')
		<!-- Page Content -->
		<amp-auto-ads type="adsense"
              data-ad-client="ca-pub-6025240004467345">
						</amp-auto-ads>
		<div>
			@yield('content')
			@include('partials/_footeramp')
		</div>
	</body>
</html>
