<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="180x180" href="https://wknown/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://wknown/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://wknown/images/favicons/favicon-16x16.png">
<link rel="manifest" href="https://wknown/images/favicons/manifest.json">
<meta name="theme-color" content="#ffffff">
<title>@yield('title')</title>
<!-- Meta Keys -->
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="csrf-token" content="{{ csrf_token() }}">


<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="@yield('title')">
<meta itemprop="description" content="@yield('description')">
<meta itemprop="image" content="@yield('image')">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@WKnownMarketing">
<meta name="twitter:title" content="@yield('title')">
<meta name="twitter:description" content="@yield('description')">
<meta name="twitter:creator" content="@taras_kim">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="@yield('image')">

<!-- Open Graph data -->
<meta property="og:title" content="@yield('title')" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:image" content="@yield('image')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:site_name" content="WellKnown" />
<meta property="article:published_time" content="@yield('created')" />
<meta property="article:modified_time" content="@yield('updated')" />
<meta property="article:section" content="@yield('category')" />
<meta property="article:tag" content="@yield('keywords')" />
<meta property="fb:admins" content="153425045259276" />

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-6025240004467345",
          enable_page_level_ads: true
     });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109464444-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109464444-1');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-52K9TDC');</script>
<!-- End Google Tag Manager -->

<style>
  body {
    background-color: #f2f2f2 !important;
  }
</style>
<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="{!! asset('css/bootstrap.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link href="{!! asset('css/main.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link href="{!! asset('css/font-awesome.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">

<!-- Hotjar Tracking Code for https://wknown.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:793928,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>
