<!-- Basic Page Needs -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Panel</title>

<meta name="keywords" content="Admin">
<meta name="description" content="Admin">
<meta name="author" content="WellKnown Agency">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>

<!-- Vendor CSS -->
<link rel="stylesheet" href="{!! asset('css/app.css') !!}">

<link href="/vendor/admin/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<script async src="https://cdn.ampproject.org/v0.js"></script>

<script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js"></script>

<style>
.navbar-nav .nav-item .nav-link .badge {
    margin-left: 0 !important;
}
</style>