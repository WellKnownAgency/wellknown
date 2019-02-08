<html lang="en">
  <head>
    @include('admin/partials/_head')
		<script>
	    window.Laravel = {!! json_encode([
	      'csrfToken' => csrf_token(),
	    ]) !!};
	  </script>
  </head>
  <body id="page-top" class="sidebar-toggled">
    <div id="app">
        <vue-snotify></vue-snotify>
      @include('admin/partials/_nav')
      <div id="wrapper">
      @include('admin/partials/_sidenav')
      @yield('content')
      </div>
    </div>
		<pushnot></pushnot>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
    @include('admin/partials/_js')
  </body>
</html>
