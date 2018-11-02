<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
<link rel="manifest" href="images/favicons/manifest.json">
<meta name="theme-color" content="#ffffff">
<meta name="msvalidate.01" content="BAFEFCC2D225DD9706515B2162FF1D71" />
<title>@yield('title')</title>
<!-- Meta Keys -->
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta property="og:image" content="/images/homepage.jpg" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta property="og:title" content="@yield('title')" />
<meta property="og:image" content="/images/homepage.jpg" />
<meta property="og:description" content="@yield('description')" />

@yield('preload')

<link href="{!! asset('css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link href="{!! asset('css/now-ui-kit.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link href="{!! asset('css/demo.css') !!}" media="all" rel="stylesheet" type="text/css" />



<!-- <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" /> -->
<!--
<link href="{!! asset('css/normalize.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link href="{!! asset('css/bootstrap.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link href="{!! asset('css/main.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link href="{!! asset('css/font-awesome.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
-->




<!-- Global site tag (gtag.js) - Google Analytics
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109464444-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109464444-1');
</script>
-->
