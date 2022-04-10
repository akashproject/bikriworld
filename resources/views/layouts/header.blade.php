<!-- Preloader Start 
<div class="preloader">
    <img src="{{ url('assets/images/preloader.svg') }}" alt="preloader">
</div>
Preloader End -->
<!-- Mobile Menu Start -->
<aside class="aside_bar aside_bar_left aside_mobile">
    <!-- logo -->
    <a href="{{  url('') }}" class="logo">
        <img src="{{ url('assets/images/logo.png') }}" alt="logo">
    </a>
    <!-- logo -->
    <!-- Menu -->
    <nav>
        <ul class="main-menu">
            <li class="menu-item">
                <a href="{{ url('selling-brands/1') }}">Sell Phone</a>
            </li>
            <li class="menu-item">
                <a href="#">Sell Gaget</a>
            </li>
            <li class="menu-item">
                <a href="contact.html">Contacts</a>
            </li>
        </ul>
    </nav>
    <!-- Menu -->
</aside>
<div class="aside-overlay trigger-left"></div>
<!-- Mobile Menu End -->
<!-- Canvas Start -->
<aside class="aside_bar aside_bar_right aside_canvas">
    <!-- logo -->
    <a href="{{  url('') }}" class="logo pl-0">
        <img src="{{ url('assets/images/logo.png') }}" alt="logo">
    </a>
    <a href="javascript:void(0)" class="close_aside">
        <i class="fa fa-times" aria-hidden="true"></i>
    </a>
    <!-- logo -->
    <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accan tium doloremque laudantium totam rem aperiam</p>
    <div class="sidebar">
        <form id="signin_form"  class="mf_form_validate ajax_submit" action="#" method="post" enctype="multipart/form-data">
            <div class="sidebar_widget recent_widgets aside_login_form">
                <h5 class="widget_title">Wellcome to Bikriworld</h5>
                <div class="response_status" style="color: #ff0000;"></div>
                <div class="row">
                    <div class="col-12">
                        <label class="padding-30px-left-right">Please enter your mobile number <span class="required">*</span></label>
                        <div class="form-group custom_form_style">
                            <input type="text" name="mobile" class="form-control" autocomplete="off" placeholder="Enter Mobile Name">
                        </div>
                    </div>
                    
                </div>
                <div class="row one_time_password">
                    <div class="col-12">
                        <div class="form-group custom_form_style">
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
                <button type="submit" href="javascript:void(0)" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle width-100"> Sign in <i class="fal fa-chevron-right ml-2"></i></button>
            </div>
        </form>
    </div>
</aside>
<div class="aside-overlay trigger-right"></div>
<!-- Canvas End -->
@if(Request::is('/'))
<!-- Header Start -->
<header class="header header-absolute can-sticky">
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
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('selling-brands/1') }}">Sell Phone</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{  url('') }}">Iphone</a>
                            </li>
                            <li class="menu-item">
                                <a href="index-2.html">Sumsung</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#">Sell Gaget</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="about.html">About Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="about-2.html">About Me</a>
                            </li>
                            <li class="menu-item">
                                <a href="events.html">Events</a>
                            </li>
                            <li class="menu-item">
                                <a href="videos.html">Videos</a>
                            </li>
                            <li class="menu-item">
                                <a href="services.html">Services</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Team</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="team.html">Team</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="team-details.html">Team Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li class="menu-item">
                                <a href="testimonials.html">Testimonials</a>
                            </li>
                            <li class="menu-item">
                                <a href="faqs.html">FAQ's</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="contact.html">Contacts</a>
                    </li>
                </ul>
                <!-- Navigation Ens -->
            </nav>
            <!-- Head Actions -->
            <div class="head_actions">
                <!-- Search -->
                <div class="search_bar relative" style="width:80%">
                    <input type="text" name="#" placeholder="Search" autocomplete="off">
                    <i class="fal fa-search"></i>
                </div>
                @if($user)
                    <a href="{{ url('dashboard') }}" class="dashboard" style="width:52%;margin-left: 22px;padding: 5px;border: 1px solid var(--thm-color-two);border-radius: 10px;"> Dashboard <i class="fal fa-home ml-2"></i></a>
                    <a href="{{ url('dashboard') }}" class="dashboard" style="width:52%;margin-left: 22px;padding: 5px;"> Logout <i class="fal fa-sign-out ml-2"></i></a>
                @else
                    <a href="javascript:void(0)" class="head_trigger desktop_trigger thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle">Sign In <i class="fal fa-chevron-right ml-2"></i></a>
                @endif
                <button type="button" class="head_trigger mobile_trigger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
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
                            <a href="tel:0123456789">
                                <i class="fal fa-phone"></i>
                                Call : 012(345) 67 89
                            </a>
                        </li>
                        <li>
                            <a href="mailto:example@example.com">
                                <i class="fal fa-envelope"></i>
                                example@example.com
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
                            <img src="assets/images/logo.png" alt="logo" class="image-fit">
                        </a>
                    </div>
                    <!-- logo end -->
                    <!-- Navigation Start -->
                    <ul class="main-menu">
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Sell Product</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="{{  url('') }}">Home v1</a>
                                </li>
                                <li class="menu-item">
                                    <a href="index-2.html">Home v2</a>
                                </li>
                                <li class="menu-item">
                                    <a href="index-3.html">Home v3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="about-2.html">About Me</a>
                                </li>
                                <li class="menu-item">
                                    <a href="events.html">Events</a>
                                </li>
                                <li class="menu-item">
                                    <a href="videos.html">Videos</a>
                                </li>
                                <li class="menu-item">
                                    <a href="services.html">Services</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Team</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="team.html">Team</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="team-details.html">Team Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="pricing.html">Pricing</a>
                                </li>
                                <li class="menu-item">
                                    <a href="testimonials.html">Testimonials</a>
                                </li>
                                <li class="menu-item">
                                    <a href="faqs.html">FAQ's</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Courses</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="courses.html">Courses</a>
                                </li>
                                <li class="menu-item">
                                    <a href="course-details.html">Course Details</a>
                                </li>
                            </ul>
                        </li>
                       
                       
                        <li class="menu-item">
                            <a href="contact.html">Contacts</a>
                        </li>
                        <li class="menu-item search_trigger">
                            <a href="#">
                                <i class="fas fa-search "></i>
                            </a>
                        </li>
                    </ul>
                    <!-- Navigation Ens -->
                    <!-- Head Actions -->
                    <div class="head_actions">
                        <!-- Search -->
                        <div class="search_bar relative" style="width:80%">
                            <input type="text" name="#" placeholder="Search" autocomplete="off">
                            <i class="fal fa-search"></i>
                        </div>
                        @if($user)
                            <a href="{{ url('dashboard') }}" class="dashboard" style="width:52%;margin-left: 22px;padding: 5px;border: 1px solid var(--thm-color-two);border-radius: 10px;"> Dashboard <i class="fal fa-home ml-2"></i></a>
                            <a href="{{ url('dashboard') }}" class="dashboard" style="width:52%;margin-left: 22px;padding: 5px;"> Logout <i class="fal fa-sign-out ml-2"></i></a>
                        @else
                            <a href="javascript:void(0)" class="head_trigger desktop_trigger thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle">Sign In <i class="fal fa-chevron-right ml-2"></i></a>
                        @endif
                        <button type="button" class="head_trigger mobile_trigger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <!-- Head Actions -->
                </nav>
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