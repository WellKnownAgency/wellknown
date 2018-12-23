<script src="{!! asset('js/app.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/tinymce/tinymce.min.js') !!}"></script>
<script>
$("#sidebarToggle").on('click',function(e) {
  e.preventDefault();
  $("body").toggleClass("sidebar-toggled");
  $(".sidebar").toggleClass("toggled");
});
</script>
@yield('customjs')
