<html lang-"en">
  <head>
    @include('admin/partials/_head')
  </head>
  <body id="page-top">
    <div>
      @include('admin/partials/_nav')
      <div id="wrapper">
      @include('admin/partials/_sidenav')
      @yield('content')
      </div>

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
    @include('admin/partials/_js')
  </body>
</html>
