<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials/_head')
	</head>
	<body class="index-page sidebar-collapse">
		@include('partials/_nav')
		<!-- Page Content -->
		<div class="presentation-page">
			@yield('content')
			@include('partials/_footer')
		</div>
		@include('partials/_js')
	</body>
</html>
