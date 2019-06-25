<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
<meta name="theme-color" content="#ffffff">
<meta name="msvalidate.01" content="BAFEFCC2D225DD9706515B2162FF1D71" />
<meta name="p:domain_verify" content="79f1949805c90e9d8e15f318af06c4f9"/>
<title>@yield('title')</title>
<!-- Meta Keys -->
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />

@yield('preload')
<link href="{!! asset('css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link href="{!! asset('css/now-ui-kit.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link href="{!! asset('css/aos.css') !!}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


@yield('extrahead')
