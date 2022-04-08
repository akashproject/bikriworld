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
                <p> Please enter your mobile number </p>
                <div class="response_status" style="color: #ff0000;"></div>
                <div class="row">
                    <div class="col-12">
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
                <a href="javascript:void(0)" class="head_trigger desktop_trigger thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle">Sign In <i class="fal fa-chevron-right ml-2"></i></a>
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
<!-- Header End -->