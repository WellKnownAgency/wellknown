<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1">
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
<title>@yield('title')</title>

<script async src="https://cdn.ampproject.org/v0.js"></script>

<script async custom-element="amp-addthis" src="https://cdn.ampproject.org/v0/amp-addthis-0.1.js"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<!-- Meta Keys -->
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />

@yield('preload')


@yield('extrahead')

<style amp-custom>
  /* any custom styles go here. */
  body {
    background-color: white;
		font-family: Roboto;
		font-size: 18px;
  }
	a {
		text-decoration: none;
		color: #dc3741;
	}
	.blockquote {
		background-color: #fafafa;
    border: 2px solid #dc3741;
    padding: 20px;
    font-size: 1.1em;
    line-height: 1.8;
		margin-bottom: 1rem;
		margin: 0 0 1rem;
}
.ad-box {
	padding-top: 20px;
}
.ad-text {
	padding: 10px 20px;
	border: 1px solid red;
	border-radius: 3px;
}
.btn-primary {
	-webkit-box-shadow: 0 9px 30px -6px rgba(220,55,65,.35);
	box-shadow: 0 9px 30px -6px rgba(220,55,65,.35);
	background-color: #dc3741;
    color: #fff;
}
.btn {
	border-width: 2px;
    font-weight: 400;
    font-size: .8571em;
    line-height: 1.35em;
    margin: 10px 1px;
    border: none;
    border-radius: .1875rem;
    padding: 11px 22px;
    cursor: pointer;
	text-align: center;
    white-space: nowrap;
    vertical-align: middle;
	transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>