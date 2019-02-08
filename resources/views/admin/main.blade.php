<html lang="en">
  <head>
    @include('admin/partials/_head')
		<script>
	    window.Laravel = {!! json_encode([
	      'csrfToken' => csrf_token(),
	    ]) !!};
	  </script>
		<link rel="manifest" href="/manifest.json" />
		<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
		<script>
		  var OneSignal = window.OneSignal || [];
		  OneSignal.push(function() {
		    OneSignal.init({
		      appId: "7703c41f-8219-4532-9184-e78dae609e6b",
		      autoRegister: true,
		      notifyButton: {
		        enable: false,
		      },
		    });
		  });
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
