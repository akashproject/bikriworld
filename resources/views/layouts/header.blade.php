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
                            <input type="text" name="mobile" class="form-control" autocomplete="off" placeholder="Enter Mobile Name">
                        </div>
                    </div>
                </div>
                <div class="row registration_fields">
                    <div class="col-12">    
                        <div class="form-group custom_form_style">
                            <label class="padding-30px-left-right">Please your Name <span class="required">*</span></label>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter Name">
                        </div>
                    </div> 
                    <div class="col-12">
                        
                        <div class="form-group custom_form_style">
                            <label class="padding-30px-left-right">Please enter your email address <span class="required">*</span></label>
                            <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email Address">
                        </div>
                    </div>
                </div>
                <div class="row one_time_password">
                    <div class="col-12">
                        <div class="form-group custom_form_style">
                            <label class="padding-30px-left-right">Enter your one time password <span class="required">*</span></label>
                            <input type="text" class="form-control verify_otp" autocomplete="off" placeholder="Enter One Time Password" value="">
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
                <a type="button" href="javascript:void(0)" class="checkUserExistBtn thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle width-100"> Continue <i class="fal fa-chevron-right ml-2"></i></a>

                <button type="submit" href="javascript:void(0)" class="loginSubmitBtn thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle width-100"> Continue <i class="fal fa-chevron-right ml-2"></i></button>
            </div>
        </form>
    </div>
</aside>

<div class="aside-overlay trigger-right"></div>
<!-- Canvas End -->
@if(Request::is('/'))
<!-- Header Start -->
<header class="header header-absolute">
    <div class="container">
        <!-- inner -->
        <div class="nav_warp">
            <nav>
                <!-- logo start -->
                <div class="logo">
                    <a href="{{  url('') }}">
                        <img src="{{ url('assets/images/logo.png') }}" alt="logo" class="image-fit">
                    </a>
                </div>
                <!-- logo end -->
                <!-- Navigation Start -->
                <ul class="main-menu">            
                    @foreach ($navbars as $key => $navbarItem)
                        <li class="menu-item">
                            <a class="menu-link" href="{{ url($key) }}">{{ $navbarItem }}</a>
                        </li>
                    @endforeach
                </ul>
                <!-- Navigation Ens -->
            </nav>
            <!-- Head Actions -->
            <div class="head_actions relative">
                <!-- Search -->
                <div class="search_bar relative" style="width:100%">
                    <input type="text" name="#" id="search_field" placeholder="Search" autocomplete="off">
                    <i class="fal fa-search"></i>
                </div>
                <a href="#select-city-popup" class="dashboard open-city-popup" style="width:100%;margin-left: 22px;padding: 5px;"> <i class="fal fa-map-marker ml-2"></i> <span class="user_selected_city"> {{ (array_key_exists('userCity',$_COOKIE)) ? $_COOKIE['userCity'] : 'Select City' }} </span> <i class="fal fa-angle-down ml-2"></i> </a>
                @if(Session::get('userData'))
                    <a href="{{ url('dashboard') }}" class="dashboard" style="width:75%;margin-left: 22px;padding: 5px;border: 1px solid var(--thm-color-two);border-radius: 10px;"> Dashboard <i class="fal fa-home ml-2"></i></a>
                    <a href="{{ url('logout') }}" class="dashboard" style="width:75%;margin-left: 22px;padding: 5px;"> Logout <i class="fal fa-sign-out ml-2"></i></a>
                @else
                    <a href="javascript:void(0)" class="head_trigger desktop_trigger thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle">Sign In <i class="fal fa-chevron-right ml-2"></i></a>
                @endif
                <button type="button" class="head_trigger mobile_trigger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="search-content_wrap">

                </div>
            </div>
            <!-- Head Actions -->
        </div>
        <!-- inner -->
    </div>
</header>
@else
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
                        <a href="{{  url('') }}">
                            <img src="{{ url('assets/images/logo.png') }}" alt="logo" class="image-fit">
                        </a>
                    </div>
                    <!-- logo end -->
                    <!-- Navigation Start -->
                    <ul class="main-menu">
                        @foreach ($navbars as $key => $navbarItem)
                            <li class="menu-item">
                                <a class="menu-link" href="{{ url($key) }}">{{ $navbarItem }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- Navigation Ens -->                    
                </nav>
                <!-- Head Actions -->
                <div class="head_actions relative">
                    <!-- Search -->
                    <div class="search_bar relative" style="width:100%">
                        <input type="text" name="#" id="search_field" placeholder="Search" autocomplete="off">
                        <i class="fal fa-search"></i>
                    </div>
                    <a href="#select-city-popup" class="dashboard open-city-popup" style="width:75%;margin-left: 22px;padding: 5px;"> <i class="fal fa-map-marker ml-2"></i> <span class="user_selected_city"> {{ (array_key_exists('userCity',$_COOKIE)) ? $_COOKIE['userCity'] : 'Select City' }} </span> <i class="fal fa-angle-down ml-2"></i> </a>
                    @if(Session::get('userData'))
                        <a href="{{ url('dashboard') }}" class="dashboard" style="width:75%;margin-left: 22px;padding: 5px;border: 1px solid var(--thm-color-two);border-radius: 10px;"> Dashboard <i class="fal fa-home ml-2"></i></a>
                        <a href="{{ url('logout') }}" class="dashboard" style="width:75%;margin-left: 22px;padding: 5px;"> Logout <i class="fal fa-sign-out ml-2"></i></a>
                    @else
                        <a href="javascript:void(0)" class="head_trigger desktop_trigger thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle">Sign In <i class="fal fa-chevron-right ml-2"></i></a>
                    @endif
                    <button type="button" class="head_trigger mobile_trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="search-content_wrap">

                    </div>
                </div>
                <!-- Head Actions -->
            </div>
            <!-- inner -->
        </div>
    </div>
    <!-- Search Start -->
    <div class="search-form-wrapper">
        <div class="close-search-trigger close_trigger">
            <span></span>
            <span></span>
        </div>
        <form class="search-form">
            <input type="text" placeholder="Search..." value="" required="">
            <button type="submit" class="search-btn">
                <i class="fal fa-search m-0"></i>
            </button>
        </form>
    </div>
    <!-- Search End -->
</header>
<!-- Header End -->
@endif