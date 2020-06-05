@extends('layout.maincontact')

@section('title', 'Contact Us | WellKnown Agency')

@section('description', 'Fill out a simple contact form and we will get back to you with a free consultation regarding your business and marketing.')

@section('keywords', '')

@section('preload')
<link rel="preload" href="images/contact-us.jpg" as="image">
@stop
@section('customcss')
<!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
    ]) !!};
  </script>
@stop
@section('facebook')
<script>
  fbq('track', 'Contact');
</script>
@stop
@section('content')
<div class="page-header header-filter" filter-color="orange" style="min-height: 120vh;">
  <div class="page-header-image" style="background-image:url(images/contact-us.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-7 ml-auto mr-auto" id="app">
            <contact-form></contact-form>
        </div>
    </div>
  </div>
</div>
@stop
@section('customjs')
<script src="{!! asset('js/custom.js') !!}"></script>
@stop
