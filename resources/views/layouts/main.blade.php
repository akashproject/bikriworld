<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bikri World') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Description website">
    <meta name="author" content="Maksym Blank">
    <meta name="keywords" content="website, with, meta, tags">
    <meta name="robots" content="noindex, follow">
    <meta name="revisit-after" content="5 month">
    <meta name="image" content="http://mywebsite.com/image.jpg">
    <meta name="og:title" content="Title website">
    <meta name="og:description" content="Description website">
    <meta name="og:image" content="http://mywebsite.com/image.jpg">
    <meta name="og:site_name" content="My Website">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Title website">
    <meta name="twitter:description" content="Description website">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
    <!-- Css -->
    <link href="{{ url('assets/css/plugins/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/plugins/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/plugins/slick.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ url('assets/fonts/flaticon/flaticon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/fonts/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet">
    
    @yield('style')
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <script src="{{ url('assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/jquery.validate.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/datepicker.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/slick.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/imagesloaded.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/jquery.inview.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/jquery.easypiechart.js') }}"></script>
    <script src="{{ url('assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    
</body>

</html>