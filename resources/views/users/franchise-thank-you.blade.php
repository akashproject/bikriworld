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
            background: #00000080;
            padding: 2px 0;
            z-index: 0;
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
    <aside class="aside_bar aside_bar_right aside_canvas">
        <!-- logo -->
        <a href="{{  url('') }}" class="logo pl-0">
            <img src="{{ url('assets/images/logo.png') }}" alt="logo">
        </a>
        <a href="javascript:void(0)" class="close_aside">
            <i class="fa fa-times" aria-hidden="true"></i>
        </a>
        <!-- logo -->
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
                    
                    <!-- Head Actions -->
                </div>
                <!-- inner -->
            </div>
        </div>
        
    </header>

    <section class="about_inner my-5" id="about">
        <div class="container">
            <div class="text-center">
                <h4> Thank You! Form Has been submitted Successfully</h4>                
                <h4> We Will Get Back to you Soon.</h4>                
            </div>
            
        </div>
    </section>


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