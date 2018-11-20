<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials/_head')
	@yield('customcss')
	</head>
	<body class="index-page">
		@include('partials/_nav')
		<!-- Page Content -->
		<div id="app" class="presentation-page">
			@yield('content')
			@include('partials/_upfooter')
			@include('partials/_footer')
		</div>
		@include('partials/_js')
		@yield('customjs')
	</body>
</html>
