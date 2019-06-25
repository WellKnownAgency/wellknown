<!DOCTYPE html>
<html ⚡ lang="en">
	<head>
	@include('partials/_headamp')
	@yield('customcss')
	</head>
	<body class="index-page sidebar-collapse">
		@include('partials/_nav')
		<!-- Page Content -->
		<div class="presentation-page">
			@yield('content')
			@include('partials/_footeramp')
		</div>
	</body>
</html>
