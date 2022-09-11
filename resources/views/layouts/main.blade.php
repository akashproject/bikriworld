<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Sell Old Phone | Sell Old Laptop Online For Cash Today | BikriWorld')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="@yield('meta_title','Sell Old Phone | Sell Old Laptop Online For Cash Today | BikriWorld')">
    <meta name="description" content="@yield('meta_description','Want To Sell Old Phones Or Sell Old Laptops Online? Get An Instant Best Price For Old Phones, Laptops, And Other Gadgets. Get Cash At Your Doorstep In 1 Day.')">
    <link rel="canonical" href="{{url()->current()}}"/>
    <!-- 
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
    
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico"> -->
    <!-- Css -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ url('assets/css/plugins/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/plugins/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/plugins/slick.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ url('assets/fonts/flaticon/flaticon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/fonts/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet">
    
    @yield('style')
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MTH2HF6');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTH2HF6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <script src="{{ url('assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/jquery.validate.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
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