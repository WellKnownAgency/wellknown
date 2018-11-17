<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials/_head')
	@yield('customcss')
	</head>
	<body class="index-page sidebar-collapse">
		@include('partials/_nav')
		<!-- Page Content -->
		<div class="presentation-page">
			@yield('content')
			@include('partials/_upfooter')
			@include('partials/_footer')
		</div>

		@include('partials/_js')
@yield('customjs')
	</body>
</html>
