<!DOCTYPE html>
<html ⚡ lang="en">
	<head>
	@include('partials/_headamp')
	@yield('customcss')
	</head>
	<body>

		@include('partials/_navamp')
		<!-- Page Content -->

		<div>
			@yield('content')
			@include('partials/_footeramp')
		</div>
	</body>
</html>
