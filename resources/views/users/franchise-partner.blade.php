<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-TWWMLNZZ9G"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'G-TWWMLNZZ9G');
      </script>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="UTF-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>@yield('title','Sell Old Phone | Sell Old Laptop Online For Cash Today | BikriWorld')</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="title" content="@yield('meta_title','Sell Old Phone | Sell Old Laptop Online For Cash Today | BikriWorld')">
      <meta name="description" content="@yield('meta_description','Want To Sell Old Phones Or Sell Old Laptops Online? Get An Instant Best Price For Old Phones, Laptops, And Other Gadgets. Get Cash At Your Doorstep In 1 Day.')">
      <link rel="canonical" href="{{url()->current()}}"/>
      <meta name="author" content="Scriptcrown Infotech">
      <meta name="keywords" content="website, with, meta, tags">
      <meta name="robots" content="index, follow">
      <meta name="revisit-after" content="5 month">
      <meta name="image" content="https://bikriworld.com/assets/images/inner_banner.png">
      <meta name="og:title" content="@yield('meta_title','Sell Old Phone | Sell Old Laptop Online For Cash Today | BikriWorld')">
      <meta name="og:description" content="@yield('meta_description','Want To Sell Old Phones Or Sell Old Laptops Online? Get An Instant Best Price For Old Phones, Laptops, And Other Gadgets. Get Cash At Your Doorstep In 1 Day.')">
      <meta name="og:image" content="https://bikriworld.com/assets/images/inner_banner.png">
      <meta name="og:site_name" content="Bikriworld">
      <meta name="og:type" content="website">
      <meta name="twitter:card" content="@yield('meta_title','Sell Old Phone | Sell Old Laptop Online For Cash Today | BikriWorld')">
      <meta name="twitter:title" content="@yield('meta_title','Sell Old Phone | Sell Old Laptop Online For Cash Today | BikriWorld')">
      <meta name="twitter:description" content="@yield('meta_description','Want To Sell Old Phones Or Sell Old Laptops Online? Get An Instant Best Price For Old Phones, Laptops, And Other Gadgets. Get Cash At Your Doorstep In 1 Day.')">
      <!-- Css -->
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon.ico') }}">
      <link href="{{ url('assets/css/plugins/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ url('assets/css/plugins/datepicker.min.css') }}" rel="stylesheet">
      <link href="{{ url('assets/css/plugins/slick.css') }}" rel="stylesheet">
      <link href="{{ url('assets/css/plugins/magnific-popup.css') }}" rel="stylesheet">
      <link href="{{ url('assets/fonts/flaticon/flaticon.css') }}" rel="stylesheet">
      <link href="{{ url('assets/fonts/font-awesome.min.css') }}" rel="stylesheet">
      <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
      <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet">
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10993657790"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         gtag('config', 'AW-10993657790');
      </script>
      @if(URL::current() == "https://bikriworld.com/order-success")
      <!-- Event snippet for Order Confirmed conversion page -->
      <script>
         gtag('event', 'conversion', {'send_to': 'AW-10993657790/HXbJCNywyOUDEL7Pl_oo'});
      </script>
      <!-- Google tag (gtag.js) -->
      @endif
      @yield('style')
    <style>
        .transform-center {
            background: #44444459;
            padding: 50px 0;
            z-index: 10;
        }
        .transform-center h1{
                font-size: 55px !important;
        }
        .form-header {
            background: #fff;
            width: 100%;
            text-align: center;
        }
        .bg-banner {
            padding: 0;
        }
        @media (max-width: 767px) {
            .transform-center h1{
                font-size: 47px !important;
            }
        }
    </style>
   </head>
   <body>
      <!-- Preloader Start 
<div class="preloader">
    <img src="{{ url('assets/images/preloader.svg') }}" alt="preloader">
</div>
Preloader End -->
<!-- Mobile Menu Start -->
<!-- Mobile Menu Start -->
<aside class="aside_bar aside_bar_left aside_mobile">
    <!-- logo -->
    <a href="{{  url('') }}" class="logo">
        <img src="{{ url('assets/images/logo.png') }}" alt="logo">
    </a>
    <!-- logo -->
    <div class="container mobile-top-menu">
        <ul style="font-size:20px">
            <li>
                <a href="tel:+917439995068">
                    <i class="fal fa-phone"></i>
                    +91 7439 995 068              
                </a>
            </li>
            <li>
                <a href="mailto:service@bikriword.com">
                    <i class="fal fa-envelope"></i>
                    service@bikriword.com                  
                </a>
            </li>
            <li>
                <a href="#select-city-popup" class="open-city-popup"><i class="fal fa-map-marker"></i> <span class="user_selected_city"> {{ (array_key_exists('userCity',$_COOKIE)) ? $_COOKIE['userCity'] : 'Select City' }} </span>  </a>
            </li>
        </ul>
    </div>
    <!-- Menu -->
    <nav>
        <ul class="main-menu">                
            @foreach ($navbars as $key => $navbarItem)
                <li class="menu-item">
                    <a class="menu-link" href="{{ url($key) }}">{{ $navbarItem }}</a>
                </li>
            @endforeach    
                <li class="menu-item">
                    <a class="menu-link" href="mailto:franchise@bikriworld.com"> Become a Pertner </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ url('refer-earn') }}"> Refer & Earn </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('categories-repair') }}"> Repair </a>
                </li>
            @if(Session::get('userData'))
                <li class="menu-item">
                    <a href="{{ url('dashboard') }}"> Dashboard </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('logout') }}"> Log out </a>
                </li>
            @else
                <li class="menu-item open-login">
                    <a href="javascript:void(0);" class=""> Sign In </a>
                </li>
            @endif
            
        </ul>
    </nav>
    <!-- Menu -->
</aside>
<div class="aside-overlay trigger-left"></div>
<!-- Mobile Menu End -->
<aside class="aside_bar aside_bar_right aside_canvas">
    <!-- logo -->
    <a href="{{  url('') }}" class="logo pl-0">
        <img src="{{ url('assets/images/logo.png') }}" alt="logo">
    </a>
    <a href="javascript:void(0)" class="close_aside">
        <i class="fa fa-times" aria-hidden="true"></i>
    </a>
    <!-- logo -->
    <!-- <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accan tium doloremque laudantium totam rem aperiam</p> -->
    <div class="sidebar">
        <form id="global_signin_form"  class="mf_form_validate ajax_submit" action="#" method="post" enctype="multipart/form-data">
            <div class="sidebar_widget recent_widgets aside_login_form">
                <h5 class="widget_title">Wellcome to Bikriworld</h5>
                <div class="response_status" style="color: #ff0000;"></div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group custom_form_style">
                            <label class="padding-30px-left-right">Please enter your mobile number <span class="required">*</span></label>
                            <input type="text" id="signin_mobile_number" name="mobile" class="form-control" autocomplete="off" placeholder="Enter Mobile Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="javascript:void(0)" class="change_number" style="display:none" > Change Number </a>
                    </div>
                </div>
                <div class="row registration_fields">
                    <div class="col-12">    
                        <div class="form-group custom_form_style">
                            <label class="padding-30px-left-right">Please your Name <span class="required">*</span></label>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter Name" required>
                        </div>
                    </div> 
                    <div class="col-12">
                        <div class="form-group custom_form_style">
                            <label class="padding-30px-left-right">Please enter your email address <span class="required">*</span></label>
                            <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter Email Address" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group custom_form_style">
                            <label class="padding-30px-left-right">Please enter Referral Code <span class="required"></span></label>
                            <input type="text" name="referral_code" class="form-control" autocomplete="off" placeholder="Enter Referral Code if any"  value="{{(isset($_GET['ref']) && $_GET['ref'] !='')?$_GET['ref']:''}}">
                        </div>
                    </div>
                </div>
                <div class="row one_time_password">
                    <div class="col-12">
                        <div class="form-group custom_form_style">
                            <label class="padding-30px-left-right">Enter your OTP <span class="required">*</span></label>
                            <input type="text" class="form-control verify_otp" autocomplete="off" placeholder="Enter OTP" value="">
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="javascript:void(0)" class="resendOtp"> Resend Otp </a>
                    </div>
                </div>
            </div>
            <div class="sidebar_widget">
                <input type="hidden" name="responsed_otp" class="responsed_otp" value="">
                <input type="hidden" id="redirect_url" value="{{ (Route::current()->getName() == 'sell-old-product') ? 'active' : '' }}">
                
                <a href="javascript:void(0)" class="checkUserExistBtn thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle width-100"> Continue <i class="fal fa-chevron-right ml-2"></i></a>

                <button type="submit" href="javascript:void(0)" class="loginSubmitBtn thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle width-100"> Continue <i class="fal fa-chevron-right ml-2"></i></button>
                <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px;display:none;" class="checkout_loader">
            </div>
        </form>
    </div>
</aside>

    <div class="aside-overlay trigger-right"></div>
        <header class="header header-3">
            <div class="topbar bg-thm-color-two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            
                        </div>
                        <div class="col-lg-5">
                            <ul class="right-side">
                                <li>
                                    <a href="tel:7439995068">
                                        <i class="fal fa-phone"></i>
                                        Call : 7439 995 068
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:service@bikriworld.com">
                                        <i class="fal fa-envelope"></i>
                                        service@bikriworld.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav_sec">
                <div class="container">
                    <!-- inner -->
                    <div class="nav_warp">
                        <nav>
                            <!-- logo start -->
                            <div class="logo">
                                <a href="javascript:void(0)">
                                    <img src="{{ url('assets/images/logo.png') }}" alt="logo" class="image-fit">
                                </a>
                            </div>
                            <!-- logo end -->
                            <!-- Navigation Start -->
                            <ul class="main-menu">     
                                <li class="menu-item">
                                    <a class="menu-link" href="#business-model">About Us</a>
                                </li>       
                                <li class="menu-item">
                                    <a class="menu-link" href="#business-model">Business Model</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('refer-earn') }}">Why Us </a>
                                </li>
                            </ul>
                            <!-- Navigation Ens -->
                        </nav>
                        <!-- Head Actions -->
                        <div class="head_actions relative">
                            
                            <a href="#select-city-popup" class="dashboard open-city-popup" style="width:100%;margin-left: 22px;padding: 5px;"> <i class="fal fa-map-marker ml-2"></i> <span class="user_selected_city"> {{ (array_key_exists('userCity',$_COOKIE)) ? $_COOKIE['userCity'] : 'Select City' }} </span> <i class="fal fa-angle-down ml-2"></i> </a>
                            
                        </div>
                        <!-- Head Actions -->
                    </div>
                    <!-- inner -->
                </div>
            </div>
            
        </header>
        <!-- Banner Start -->
        <div class="banner bg-banner relative z-1 ">
            <img src="{{ url('assets/images/banner/element_1.png')}}" class="element_1" alt="Element" style="top: 0;">
            <img src="{{ url('assets/images/banner/franchise-background.jpg')}}" class="element_line" alt="Element Line">
            <!-- Texts -->
            <div class="transform-center text-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="text_box">
                                <h4 class="title text-white"><span>Grow </span><strong>10x</strong> Income As A Bikriworld Partner</h4> 
                                <h1 class="title text-white" style="font-size: 51px;font-weight: 600;">WANT TO START YOUR OWN BUSINESS?</h1>
                                <p style="font-size: 28px;line-height: 31px;">Know how phones/laptops work? We take care of the rest. All you need to do is buy old phones or laptops from customers—and sell them.</p>
                                <p class="banner-rating" > 
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                     10k+ BikriWorld customers have rated us 4.6 out of 5
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div  id="banner-lead-form" class="image_box relative">
                                <form class="form-horizontal" method="post" action="{{ url('save-contact') }}" enctype="multipart/form-data" id="contact-form" style="border-radius: 10px;overflow: hidden;">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="form-header" > 
                                        <h4 style="
                                            margin: 0;
                                            padding: 9px;
                                            font-weight: 800;
                                        "> <span style="
                                            color: #ff0000;
                                        ">PAY 99/- </span>  to JOIN US </h4>
                                        </div>
                                    </div>
                                    <div class="row" style="background: #c9c9c96e;padding: 20px;">
                                        <div class="col-lg-6">
                                            <div class="form-group custom_form_style">
                                                <label>Full Name</label>
                                                <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group custom_form_style">
                                                <label>Phone Number</label>
                                                <input type="text" name="mobile" class="form-control" autocomplete="off" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group custom_form_style">
                                                <label>Email Address</label>
                                                <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group custom_form_style">
                                                <label>Subject</label>
                                                <input type="text" name="subject" class="form-control" autocomplete="off" placeholder="I Would Like To Discuss">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group custom_form_style">
                                                <label>Message</label>
                                                <textarea rows="10" class="form-control" placeholder="Write Message" autocomplete="off" name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center mt-5">
                                            <button type="submit" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle"> UNLOCK BIKRIWORLD's BUSINESS MODEL <i class="fal fa-chevron-right ml-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Line -->
            <div class="bottom-line container"></div>
        </div>
        <!-- Banner End -->
        <!-- Header End -->
        <section class="about_inner my-5" id="about">
            <div class="container">
                <div class="text-center">
                    <h4> What Makes Bikriworld's Business Model Profitable By 10X? </h4>                
                </div>
                <div class="row">
                    <div class="col-md-5 mt-5">
                        <img src="{{ url('assets/images/ads/growth.webp') }}" style="border-radius: 30px;">
                    </div> 
                    <div class="col-md-7">
                        <div>
                            <div class="offers">
                                <h6> <strong> Market-Sensitive Pricing, Always</strong> </h6>
                                <p> We don't provide prices that hurt you. Every quote on Bikriworld is made at current market prices and device conditions. . </p>
                            </div>
                            <div class="offers">
                                <h6> <strong>24x7 Partner Support</strong> </h6>
                                <p> As our partner, you can depend on us, every step of the way. Be it device pickup or reselling the devices at the best possible deal. </p>
                            </div>
                            <div class="offers">
                                <h6> <strong>Strong Reseller Network Across 10+ Cities</strong> </h6>
                                <p> Even if you can't re-sell the devices, we've got you covered with our reseller network, across 10+ cities. </p>
                            </div>
                            <div class="offers">
                                <h6> <strong>Complete Data Protection & Compliance</strong> </h6>
                                <p> Worried about invoices, identity verification, and all that noise? Bikriworld has everything you need (and more). 🤗 </p>
                            </div>
                            
                        <div>
                        <div class="text-center" style="margin-top: 30px;">
                            <a href="#banner-lead-form" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Ready To start as a partner? </a>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

        <section class="ad_why_choose_section my-5" id="why-us">
            <div class="container">
                <div class="text-center">
                    <h4> How To Become a Bikriworld Partner? </h4>                
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="model-grid p-5" >
                            <img src="{{ url('assets/images/ads/unlocked.png') }}">
                            <div class="mt-3">
                                <h6> <strong>Unlock</strong> Bikriworld's Partner Model With ₹99 </h6>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3">
                        <div class="model-grid p-5" >
                            <img src="{{ url('assets/images/ads/profit.png') }}">
                            <div class="mt-3">
                                <h6><strong>Learn</strong> Grow your inventory & Accelerate profit </h6>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3">
                        <div class="model-grid p-5" >
                            <img src="{{ url('assets/images/ads/unlocked.png') }}">
                            <div class="mt-3">
                                <h6> <strong>Grow</strong> your inventory & Accelerate profit </h6>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3">
                        <div class="model-grid p-5" >
                            <img src="{{ url('assets/images/ads/billing.png') }}">
                            <div class="mt-3">
                                <h6> <strong>Collect, Sell, Repeat</strong> That's all you need to worry about as a bikriworld partner </h6>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

        <section class="my-5" id="usp-content ">
            <div class="container">
                <div class="usp-content" >
                    <div class="row">
                        <div class="col-12">
                        <h4><strong class="" >10+</strong> Cities</h4>
                        <h4><strong class="" >5+</strong> Years of Success</h4>
                        <h4><strong class="" >100000+</strong> Devices Sold</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" >
                    <div class="col-12 " >
                        <div class="unlock-ribbon" >
                            <div class="row" >
                                <div class="col-md-6" > 
                                    <h6><strong style="color: #00986b;" >₹99</strong> Offer Will End In 10 Days</h6>
                                </div>
                                <div class="col-md-6" > 
                                        <strong style="margin-right: 15px;font-size: 22px;color: #00986b;"> <strike> ₹999 </strike> </strong>    <a href="#banner-lead-form" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> UNLOCK OUR MODEL At ₹99/- </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-3 usp-points" >
                        <img src="{{ url('assets/images/ads/unlocked.png') }}" >
                        <span class="ml-2" > <strong> 100+ Opportunities/Day</strong> </span>
                    </div>
                    <div class="col-md-3 usp-points" >
                        <img src="{{ url('assets/images/ads/profit.png') }}" >
                        <span class="ml-2" > <strong> ₹3L Returns on Investment </strong></span>
                    </div>
                    <div class="col-md-3 usp-points" >
                        <img src="{{ url('assets/images/ads/unlocked.png') }}" >
                        <span class="ml-2" > <strong>Easy Paperwork</strong></span>
                    </div>
                    <div class="col-md-3 usp-points" >
                        <img src="{{ url('assets/images/ads/billing.png') }}" style="float: left;">
                        <span class="ml-2" > <strong>100% Year on Year Revenue Growth</strong></span>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- Testimonials Start -->
        <section class="section-padding about_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title left-align">
                            <p class="subtitle mb-4">
                                <i class="fal fa-book"></i>
                                Tl:DR: You don't wanna miss out on this
                            </p>
                            <h3 class="title mb-0">What Our Bikri Partners Are Saying</h3>
                        </div>
                    </div>
                </div>
                <div class="testimonial_slider row arrows_none">
                    <!-- Testimonial Item -->
                    <div class="slide-item col-12">
                        <div class="testimonial_item">
                            <div class="author">
                                <div class="image">
                                    <img src="assets/images/icons/user.png" alt="img" class="image-fit">
                                </div>
                                <div class="text">
                                    <h6 class="mb-0">Arvind kr</h6>
                                </div>
                            </div>
                            <p class="comment">
                            Upgraded to the iPhone 13, this year. Wasn’t getting good prices at all. I wondered about how to sell mobile phones so that I can get the best prices. Then I came across Bikri World. Got a very good price for my old One Plus Nord and my Mi Note 10. 
                            </p>
                            <div class="ratings">
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="slide-item col-12">
                        <div class="testimonial_item">
                            <div class="author">
                                <div class="image">
                                    <img src="assets/images/icons/user.png" alt="img" class="image-fit">
                                </div>
                                <div class="text">
                                    <h6 class="mb-0">Roushan Sharma</h6>
                                    <p class="mb-0 font-weight-bold thm-color-two">Business Manager</p>
                                </div>
                            </div>
                            <p class="comment">
                                Great experience when I went to sell my old phone online at BikriWorld. Got a very good deal on the price. Awesome pickup experience and good behaviour of customer service people.
                            </p>
                            <div class="ratings">
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star"></i>
                                <i class="fal fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="slide-item col-12">
                        <div class="testimonial_item">
                            <div class="author">
                                <div class="image">
                                    <img src="assets/images/icons/user.png" alt="img" class="image-fit">
                                </div>
                                <div class="text">
                                    <h6 class="mb-0">UMITA KUMARI</h6>
                                    <!-- <p class="mb-0 font-weight-bold thm-color-two">Apps Developer</p> -->
                                </div>
                            </div>
                            <p class="comment">
                                I thought I would not be able to sell my used laptop online. It was used heavily and it wasn’t exactly sellable, but Bikriworld offered a price, I could not say no to. I always recommend BirkiWorld to anyone who asks me: How do I sell my used phone online?
                            </p>
                            <div class="ratings">
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="slide-item col-12">
                        <div class="testimonial_item">
                            <div class="author">
                                <div class="image">
                                    <img src="assets/images/icons/user.png" alt="img" class="image-fit">
                                </div>
                                <div class="text">
                                    <h6 class="mb-0">Prem Tiwari</h6>
                                    <!-- <p class="mb-0 font-weight-bold thm-color-two">Web Designer</p> -->
                                </div>
                            </div>
                            <p class="comment">
                                Me in 2021: I want to sell my phone, but I don’t like the thought of giving my phone to strangers. I wasn’t sure if my identity would be protected or what would happen to the phone. However, the people at BikriWorld gave me a secure selling experience. The pickup was swift and I got paperwork that would prove I sold my phone to them.
                            </p>
                            <div class="ratings">
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="slide-item col-12">
                        <div class="testimonial_item">
                            <div class="author">
                                <div class="image">
                                    <img src="assets/images/icons/user.png" alt="img" class="image-fit">
                                </div>
                                <div class="text">
                                    <h6 class="mb-0">Abhishek Giri</h6>
                                    <!-- <p class="mb-0 font-weight-bold thm-color-two">Business Manager</p> -->
                                </div>
                            </div>
                            <p class="comment">
                                Best place to sell a phone for cash in a short time. Sold my phone to them in 2020. Got a very good deal. Timely Pickup. Quick Payment.
                            </p>
                            <div class="ratings">
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star"></i>
                                <i class="fal fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <!-- <div class="slide-item col-12">
                        <div class="testimonial_item">
                            <div class="author">
                                <div class="image bg-thm-color-two">
                                    <img src="assets/images/author/3.jpg" alt="img" class="image-fit">
                                </div>
                                <div class="text">
                                    <h6 class="mb-0">Nicolas Vanderpool</h6>
                                    <p class="mb-0 font-weight-bold thm-color-two">Apps Developer</p>
                                </div>
                            </div>
                            <p class="comment">
                                BikriWorld is the answer to the question: How to sell old phones online? I have sold over 3 mobile phones and tablets. Every purchase was fast and on time. Got the necessary paperwork, and of course, the best prices.
                            </p>
                            <div class="ratings">
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                            </div>
                        </div>
                    </div> -->
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <!-- <div class="slide-item col-12">
                        <div class="testimonial_item">
                            <div class="author">
                                <div class="image bg-thm-color-two">
                                    <img src="assets/images/author/3.jpg" alt="img" class="image-fit">
                                </div>
                                <div class="text">
                                    <h6 class="mb-0">Nicolas Vanderpool</h6>
                                    <p class="mb-0 font-weight-bold thm-color-two">Apps Developer</p>
                                </div>
                            </div>
                            <p class="comment">
                                Selling my old tablet was very easy. Good price for the condition of the tablet. Genuine sell and fast pickup.
                            </p>
                            <div class="ratings">
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                                <i class="fal fa-star active"></i>
                            </div>
                        </div>
                    </div> -->
                    <!-- Testimonial Item -->
                </div>
            </div>
            <div class="circle_wave"></div>
        </section>
        <!-- Testimonials End -->

        <section class="section-padding wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title left-align">
                            <p class="subtitle mb-4">
                                <i class="fal fa-book"></i>
                                Faq
                            </p>
                            <h5 class="title mb-0">Frequently Ask Questions</h4>
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-style style_2 mb-xl-30" id="generalaccordion">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemOne" aria-expanded="false" aria-controls="GeneralItemOne">
                            1. What is a Bikriworld Partner?
                            </button>
                        </div>
                        <div id="GeneralItemOne" class="collapse" aria-labelledby="GeneralItemOne" data-parent="#generalaccordion">
                            <div class="card-body">
                                A Bikriworld Partner works for Bikriworld (independently). As a Bikriworld Partner, you represent Bikriworld in your area. By that, you are authorized to collect and buy phones for Bikriworld. As of 2024, we charge a ₹99 entry fee to become a part of the program.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemTwo" aria-expanded="false" aria-controls="GeneralItemTwo">
                                2. Is This an Affiliate Program?
                            </button>
                        </div>
                        <div id="GeneralItemTwo" class="collapse" aria-labelledby="GeneralItemTwo" data-parent="#generalaccordion">
                            <div class="card-body">
                                No, Bikriworld has a separate <a class="" href="https://bikriworld.com/refer-earn" target="_blank" rel="noopener">affiliate program</a> Our Partner Program is intended for anyone who wants 
                                to start their own business (and have a knowledge of mobile/laptops). 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemThree" aria-expanded="false" aria-controls="GeneralItemThree">
                                3. How Does the Process Work?
                            </button>
                        </div>
                        <div id="GeneralItemThree" class="collapse" aria-labelledby="GeneralItemThree" data-parent="#generalaccordion">
                            <div class="card-body">
                             As a Bikriworld Partner, we provide you with information about verified customers, and train you to take care of the rest. As a result, you can buy and resell hundreds of old devices for profits.  
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemFour" aria-expanded="false" aria-controls="GeneralItemFour">
                                4. Do I Need to be Tech Savvy?
                            </button>
                        </div>
                        <div id="GeneralItemFour" class="collapse" aria-labelledby="GeneralItemFour" data-parent="#generalaccordion">
                            <div class="card-body">
                                Yes, but not extremely. For example, you should be able to understand if the device is in good health by looking at the device, storage. Additionally, we'll help you learn, and update your knowledge with  1:1 sessions/group sessions from top performing Bikriworld Partners. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemFive" aria-expanded="false" aria-controls="GeneralItemFive">
                            5. How do I Withdraw my Payment?
                            </button>
                        </div>
                        <div id="GeneralItemFive" class="collapse" aria-labelledby="GeneralItemFive" data-parent="#generalaccordion">
                            <div class="card-body">
                            As a Bikriworld Partner, you're in full control of your earnings (and hence there isn't a fixed commission for any partners as of 2024**)
                            </div>
                        </div>
                    </div>
                   
                </div>          
            </div>
        </section>
        
        <div class="cta_box style_2">
            <div class="container relative z-2">
                <div class="bg-thm-color-two cta_box_inner z-2 mb-negative">
                    <img src="assets/images/elements/shape.png" alt="shape" class="shape_1 zoom-fade">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-12">
                            <div class="text_block ad-cta-box" style="margin: auto;">
                                <div class="section-title text-center white">
                                    <h2 class="title" style="font-size: 36px;" >Ready To Earn? Get, Set, Bikri Karo!</h2>
                                    <p class="text-white">
                                        Start on your journey as a Bikriworld partner and see the profits roll in. As always, if you've questions, do reach us at support@bikriworld.com
                                    </p>
                                    <a href="#banner-lead-form" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle">Become a Bikriworld Partner <i class="fal fa-chevron-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="arrows to_up slideTop">
                    <div class="arrow"></div>
                    <div class="arrow"></div>
                    <div class="arrow"></div>
                    <div class="arrow"></div>
                    <div class="arrow"></div>
                </div>
            </div>
        </div>
        <footer class="footer bg-thm-color-one style_2 style_3 z-1" style="background-image:url(https://www.icacourse.in/wp-content/themes/scriptcrown/images/elements/element_18.png);">
            <div class="container">
                <div class="footer_bottom">
                    <p class="mb-0">
                        *Bikriworld has a 100% Bikri Guaranteed       </br>
                        **Commission rates are subject to change as per company policy
                    </p>
                    
                </div>
            </div>
        </footer>
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