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
    <link href="{{ url('assets/css/plugins/slick.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ url('assets/fonts/flaticon/flaticon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/fonts/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <img src="{{ url('assets/images/preloader.svg') }}" alt="preloader">
    </div>
    <!-- Preloader End -->
    <!-- Mobile Menu Start -->
    <aside class="aside_bar aside_bar_left aside_mobile">
        <!-- logo -->
        <a href="index.html" class="logo">
            <img src="{{ url('assets/images/logo.png') }}" alt="logo">
        </a>
        <!-- logo -->
        <!-- Menu -->
        <nav>
            <ul class="main-menu">
                <li class="menu-item menu-item-has-children">
                    <a href="#">Home</a>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="index.html">Home v1</a>
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
                <li class="menu-item menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="blog-grid.html">Blog Grid</a>
                        </li>
                        <li class="menu-item">
                            <a href="blog-list.html">Blog List</a>
                        </li>
                        <li class="menu-item">
                            <a href="blog-masonry.html">Blog Masonry</a>
                        </li>
                        <li class="menu-item">
                            <a href="blog-details.html">Blog Details</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="#">Portfolio</a>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="portfolio-grid.html">Portfolio Grid</a>
                        </li>
                        <li class="menu-item">
                            <a href="portfolio-gallery.html">Portfolio Gallery</a>
                        </li>
                        <li class="menu-item">
                            <a href="portfolio-masonry.html">Portfolio Masonry</a>
                        </li>
                        <li class="menu-item">
                            <a href="portfolio-details.html">Portfolio Details</a>
                        </li>
                    </ul>
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
        <a href="index.html" class="logo pl-0">
            <img src="{{ url('assets/images/logo.png') }}" alt="logo">
        </a>
        <!-- logo -->
        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accan tium doloremque laudantium totam rem aperiam</p>
        <div class="sidebar">
            <div class="sidebar_widget recent_widgets">
                <h5 class="widget_title">Popular Courses</h5>
                <ul>
                    <li>
                        <div class="image">
                            <img src="{{ url('assets/images/coach/small_1.jpg') }}" alt="img" class="image-fit">
                        </div>
                        <div class="text">
                            <h6 class="mb-0">
                                <a href="course-details.html">How to Become a Life Coach Partner</a>
                            </h6>
                            <p class="mb-0"><strong>By </strong><a href="courses.html">John Foerster</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <img src="{{ url('assets/images/coach/small_2.jpg') }}" alt="img" class="image-fit">
                        </div>
                        <div class="text">
                            <h6 class="mb-0"><a href="course-details.html">How to Solve Health Problem</a></h6>
                            <p class="mb-0"><strong>By </strong><a href="courses.html">David Sullivan</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <img src="{{ url('assets/images/coach/small_3.jpg') }}" alt="img" class="image-fit">
                        </div>
                        <div class="text">
                            <h6 class="mb-0"><a href="course-details.html">Getting Started Expres And JavaScript</a></h6>
                            <p class="mb-0"><strong>By </strong><a href="courses.html">Zachary Morin</a></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="sidebar_widget">
                <h5 class="widget_title">Popular Tags</h5>
                <div class="tags">
                    <a href="blog-grid.html">Business</a>
                    <a href="blog-grid.html">Corporate</a>
                    <a href="blog-grid.html">HTML</a>
                    <a href="blog-grid.html">Art</a>
                    <a href="blog-grid.html">Finance</a>
                    <a href="blog-grid.html">Investment</a>
                    <a href="blog-grid.html">CSS</a>
                    <a href="blog-grid.html">Coach</a>
                    <a href="blog-grid.html">Planing</a>
                    <a href="blog-grid.html">Creative</a>
                    <a href="blog-grid.html">Health</a>
                </div>
            </div>
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
                        <a href="index.html">
                            <img src="{{ url('assets/images/logo.png') }}" alt="logo" class="image-fit">
                        </a>
                    </div>
                    <!-- logo end -->
                    <!-- Navigation Start -->
                    <ul class="main-menu">
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="index.html">Home v1</a>
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
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="blog-grid.html">Blog Grid</a>
                                </li>
                                <li class="menu-item">
                                    <a href="blog-list.html">Blog List</a>
                                </li>
                                <li class="menu-item">
                                    <a href="blog-masonry.html">Blog Masonry</a>
                                </li>
                                <li class="menu-item">
                                    <a href="blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Portfolio</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="portfolio-grid.html">Portfolio Grid</a>
                                </li>
                                <li class="menu-item">
                                    <a href="portfolio-gallery.html">Portfolio Gallery</a>
                                </li>
                                <li class="menu-item">
                                    <a href="portfolio-masonry.html">Portfolio Masonry</a>
                                </li>
                                <li class="menu-item">
                                    <a href="portfolio-details.html">Portfolio Details</a>
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
                    <div class="search_bar relative">
                        <input type="text" name="#" placeholder="Search" autocomplete="off">
                        <i class="fal fa-search"></i>
                    </div>
                    <button type="button" class="head_trigger desktop_trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
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
    <!-- Banner Start -->
    <div class="banner relative z-1">
        <img src="assets/images/banner/element_1.png" class="element_1" alt="Element">
        <img src="assets/images/banner/element_line.png" class="element_line" alt="Element Line">
        <!-- Texts -->
        <div class="transform-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="text_box">
                            <h1 class="title"><span>Modern Life</span> Coach School Podcast</h1>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accan tium doloremque laudantium totam rem aperiam</p>
                            <a href="about-2.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rounded mr-4 mb-4">Get Coach <i class="fal fa-chevron-right ml-2"></i></a>
                            <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="video_btn video_text popup-youtube mb-4">
                                <i class="fas fa-play video_icon bg-thm-color-three"></i>
                                <span>Watch Videos</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image_box relative">
                            <img src="assets/images/banner/banner_img.png" alt="img" class="image-fit">
                            <span class="bg-thm-color-three circle_element"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Line -->
        <div class="bottom-line container"></div>
    </div>
    <!-- Banner End -->
    <!-- Features Start -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
            @if($categories)
                @foreach ($categories as $value)
                <!-- Feature Box Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="features_box">
                        <div class="icon">
                            <img src="assets/images/icons/icon_1.png" alt="img">
                        </div>
                        <h5>{{ $value->name }}</h5>
                        <p>Quis autem vel eum reprehenderit quin eavoluptate</p>
                        <a href="services.html">
                            <span>Read More</span>
                            <i class="fal fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Feature Box End -->
                @endforeach	
            @endif
            </div>
        </div>
    </section>
    <!-- Features End -->
    <!-- About Start -->
    <section class="section-padding pt-0 about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="image_box">
                        <img src="assets/images/about/image_1.jpg" alt="img" class="image-fit image_1 rounded-circle">
                        <img src="assets/images/about/image_2.jpg" alt="img" class="image-fit image_2 rounded-circle">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title left-align">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            What We Provide
                        </p>
                        <h3 class="title">We Care About Your Life For Better.</h3>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatue velillum </p>
                    </div>
                    <ul class="about_list">
                        <li>
                            <div class="icon">
                                <img src="assets/images/icons/icon_5.png" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Master Certified Coach</h6>
                                <p class="mb-0">Quis autem vel eum iure reprehenderit quein ea voluptate velit esse quam</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="assets/images/icons/icon_5.png" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Coach Certification Program</h6>
                                <p class="mb-0">Quis autem vel eum iure reprehenderit quein ea voluptate velit esse quam</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
    <!-- Team Start -->
    <section class="section-padding bg-thm-color-two-gradient z-1 team_main_wrap pb-extra">
        <img src="{{ url('assets/images/elements/element_1.png') }}" class="element_1" alt="Element">
        <img src="{{ url('assets/images/elements/element_2.png') }}" class="element_2" alt="Element">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Our Professionals
                        </p>
                        <h3 class="title">Meet Our Professinoal Team Members</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Block Start -->
                <div class="col-lg col-md-6">
                    <div class="team_block">
                        <div class="team_img">
                            <img src="assets/images/team/1.jpg" alt="img" class="image-fit">
                            <a href="team-details.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-circle link">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <h6 class="mb-1"><a href="team-details.html">Wallace D. Grace</a></h6>
                        <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                    </div>
                </div>
                <!-- Block End -->
                <!-- Block Start -->
                <div class="col-lg col-md-6">
                    <div class="team_block">
                        <div class="team_img">
                            <img src="assets/images/team/2.jpg" alt="img" class="image-fit">
                            <a href="team-details.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-circle link">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <h6 class="mb-1"><a href="team-details.html">Evan A. Ethridge</a></h6>
                        <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                    </div>
                </div>
                <!-- Block End -->
                <!-- Block Start -->
                <div class="col-lg col-md-6">
                    <div class="team_block">
                        <div class="team_img">
                            <img src="assets/images/team/3.jpg" alt="img" class="image-fit">
                            <a href="team-details.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-circle link">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <h6 class="mb-1"><a href="team-details.html">Marcus L. Duncan</a></h6>
                        <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                    </div>
                </div>
                <!-- Block End -->
                <!-- Block Start -->
                <div class="col-lg col-md-6">
                    <div class="team_block">
                        <div class="team_img">
                            <img src="assets/images/team/4.jpg" alt="img" class="image-fit">
                            <a href="team-details.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-circle link">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <h6 class="mb-1"><a href="team-details.html">Paul B. Gilliland</a></h6>
                        <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                    </div>
                </div>
                <!-- Block End -->
                <!-- Block Start -->
                <div class="col-lg col-md-6">
                    <div class="team_block">
                        <div class="team_img">
                            <img src="assets/images/team/5.jpg" alt="img" class="image-fit">
                            <a href="team-details.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-circle link">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <h6 class="mb-1"><a href="team-details.html">Donald T.Lewis</a></h6>
                        <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                    </div>
                </div>
                <!-- Block End -->
            </div>
        </div>
    </section>
    <!-- Team End -->
    <!-- Cta Start -->
    <div class="cta_box">
        <div class="container relative z-1">
            <div class="bg-thm-color-two cta_box_inner z-1 mt-negative">
                <img src="assets/images/elements/shape.png" alt="shape" class="shape_1 zoom-fade">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="text_block">
                            <div class="section-title left-align white">
                                <p class="subtitle">
                                    <i class="fal fa-book"></i>
                                    Our Professionals
                                </p>
                                <h3 class="title">Do You Want to Transform Your Life For Better ?</h3>
                                <a href="contact.html" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rounded">Contact Us <i class="fal fa-chevron-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="image_box relative z-1">
                            <img src="assets/images/elements/square_shape.png" alt="shape" class="shape_2 rotate_elem">
                            <img src="assets/images/cta_image.png" alt="img" class="image-fit">
                            <div class="arrows slideRight">
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                                <div class="arrow"></div>
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
    <!-- Cta End -->
    <!-- Video Start -->
    <section class="section-padding isotope-filter-items">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Latest video gallery
                        </p>
                        <h3 class="title">We Provide Life-Changing Video Tutorials</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="filter-btns mb-5">
                        <ul>
                            <li class="active filter-trigger" data-filter="*">
                                <a href="#">All</a>
                            </li>
                            <li class="filter-trigger" data-filter=".lifestyle">
                                <a href="#">Lifestyle</a>
                            </li>
                            <li class="filter-trigger" data-filter=".goals">
                                <a href="#">Goals</a>
                            </li>
                            <li class="filter-trigger" data-filter=".fashion">
                                <a href="#">Fashion</a>
                            </li>
                            <li class="filter-trigger" data-filter=".health">
                                <a href="#">Health</a>
                            </li>
                            <li class="filter-trigger" data-filter=".business">
                                <a href="#">Business</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row filteritems">
                <!-- Box Start -->
                <div class="col-lg-4 col-md-6 masonry-item lifestyle fashion business">
                    <div class="video_box">
                        <img src="assets/images/video/1.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">Free</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">How To Gain Knowledge</h6>
                            <p class="mb-0 thm-color-light">By Frank L. Pierce</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
                <!-- Box Start -->
                <div class="col-lg-4 col-md-6 masonry-item goals health lifestyle">
                    <div class="video_box">
                        <img src="assets/images/video/2.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">$59</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">Bring About Maintenance Home</h6>
                            <p class="mb-0 thm-color-light">By Janine T. Hostetter</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
                <!-- Box Start -->
                <div class="col-lg-4 col-md-6 masonry-item fashion business goals">
                    <div class="video_box">
                        <img src="assets/images/video/3.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">$59</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">How To Growth Your Business</h6>
                            <p class="mb-0 thm-color-light">By Joan J. Young</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
            </div>
            <div class="row filteritems">
                <!-- Box Start -->
                <div class="col-xl-3 col-lg-4 col-md-6 masonry-item health lifestyle fashion">
                    <div class="video_box">
                        <img src="assets/images/video/4.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">Free</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">How To Gain Knowledge</h6>
                            <p class="mb-0 thm-color-light">By Frank L. Pierce</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
                <!-- Box Start -->
                <div class="col-xl-3 col-lg-4 col-md-6 masonry-item business goals health">
                    <div class="video_box">
                        <img src="assets/images/video/5.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">$59</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">How To Fit Your Health</h6>
                            <p class="mb-0 thm-color-light">By Janine T. Hostetter</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
                <!-- Box Start -->
                <div class="col-xl-3 col-lg-4 col-md-6 masonry-item lifestyle fashion business">
                    <div class="video_box">
                        <img src="assets/images/video/6.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">Free</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">How To Gain Knowledge</h6>
                            <p class="mb-0 thm-color-light">By Frank L. Pierce</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
                <!-- Box Start -->
                <div class="col-xl-3 col-lg-4 col-md-6 masonry-item goals health lifestyle">
                    <div class="video_box">
                        <img src="assets/images/video/7.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">$59</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">Investment Planning</h6>
                            <p class="mb-0 thm-color-light">By Janine T. Hostetter</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
            </div>
        </div>
    </section>
    <!-- Video End -->
    <!-- Testimonials Start -->
    <section class="section-padding pt-0 relative z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Our Testimonials
                        </p>
                        <h3 class="title mb-0">What’s Our Clients<br> About Us</h3>
                    </div>
                </div>
            </div>
            <div class="testimonial_slider row arrows_none">
                <!-- Testimonial Item -->
                <div class="slide-item col-12">
                    <div class="testimonial_item">
                        <div class="author">
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/1.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Herminia F. Hudson</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Web Designer</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
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
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/2.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Robert M. Morales</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Business Manager</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
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
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/3.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Nicolas Vanderpool</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Apps Developer</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
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
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/1.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Herminia F. Hudson</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Web Designer</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
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
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/2.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Robert M. Morales</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Business Manager</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
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
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/3.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Nicolas Vanderpool</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Apps Developer</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
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
            </div>
        </div>
        <div class="circle_wave"></div>
    </section>
    <!-- Testimonials End -->
    <!-- Coach Grid Start -->
    <section class="section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Popular Coach
                        </p>
                        <h3 class="title">We Provide Professional Life Coachs</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Coach block -->
                <div class="col-xl-4 col-md-6">
                    <div class="coach_block">
                        <div class="coach_img">
                            <img src="assets/images/coach/1.jpg" alt="img" class="image-fit">
                            <div class="coach_badges">
                                <span class="tag_badge bg-thm-color-four">Free</span>
                            </div>
                            <a href="course-details.html" class="thm-btn thm-color-two bg-thm-color-white thm-color-two-shadow btn-circle link">
                                <i class="fal fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="coach_caption">
                            <div class="coach_meta">
                                <a href="courses.html" class="coach_cat thm-btn bg-thm-color-three thm-color-three-shadow btn-rounded">Business</a>
                                <div class="ratings">
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star"></i>
                                </div>
                            </div>
                            <h5 class="title mb-xl-20">
                                <a href="course-details.html">
                                    Most Powerful Thing You Have Self Coaching Scholars
                                </a>
                            </h5>
                            <div class="author">
                                <img src="assets/images/author/1.jpg" alt="img" class="image-fit">
                                <a href="courses.html" class="thm-color-one">Wilbert A. Toney</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Coach block -->
                <!-- Coach block -->
                <div class="col-xl-4 col-md-6">
                    <div class="coach_block">
                        <div class="coach_img">
                            <img src="assets/images/coach/2.jpg" alt="img" class="image-fit">
                            <div class="coach_badges">
                                <span class="tag_badge bg-thm-color-four">$50</span>
                            </div>
                            <a href="course-details.html" class="thm-btn thm-color-two bg-thm-color-white thm-color-two-shadow btn-circle link">
                                <i class="fal fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="coach_caption">
                            <div class="coach_meta">
                                <a href="courses.html" class="coach_cat thm-btn bg-thm-color-three thm-color-three-shadow btn-rounded">Lifestyle</a>
                                <div class="ratings">
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                </div>
                            </div>
                            <h5 class="title mb-xl-20">
                                <a href="course-details.html">
                                    Coach Certification Programs Most Powerful Coach
                                </a>
                            </h5>
                            <div class="author">
                                <img src="assets/images/author/2.jpg" alt="img" class="image-fit">
                                <a href="courses.html" class="thm-color-one">Emma H. Parish</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Coach block -->
                <!-- Coach block -->
                <div class="col-xl-4 col-md-6">
                    <div class="coach_block">
                        <div class="coach_img">
                            <img src="assets/images/coach/3.jpg" alt="img" class="image-fit">
                            <div class="coach_badges">
                                <span class="tag_badge bg-thm-color-four">Free</span>
                            </div>
                            <a href="course-details.html" class="thm-btn thm-color-two bg-thm-color-white thm-color-two-shadow btn-circle link">
                                <i class="fal fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="coach_caption">
                            <div class="coach_meta">
                                <a href="courses.html" class="coach_cat thm-btn bg-thm-color-three thm-color-three-shadow btn-rounded">Business</a>
                                <div class="ratings">
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </div>
                            </div>
                            <h5 class="title mb-xl-20">
                                <a href="course-details.html">
                                    Matter How Great Your Life Al Ready, We’ll Give Syatem
                                </a>
                            </h5>
                            <div class="author">
                                <img src="assets/images/author/3.jpg" alt="img" class="image-fit">
                                <a href="courses.html" class="thm-color-one">Junior N. West</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Coach block -->
            </div>
        </div>
    </section>
    <!-- Coach Grid End -->
    <!-- Sponsors Start -->
    <div class="section-padding pt-0">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-auto">
                    <div class="sponsors_img">
                        <img src="assets/images/sponsors/1.png" alt="img">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sponsors_img">
                        <img src="assets/images/sponsors/2.png" alt="img">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sponsors_img">
                        <img src="assets/images/sponsors/3.png" alt="img">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sponsors_img">
                        <img src="assets/images/sponsors/4.png" alt="img">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sponsors_img">
                        <img src="assets/images/sponsors/5.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sponsors End -->
    <!-- Newsletter Start -->
    <section class="section bg-thm-color-two-gradient z-1 newsletter_form_sec">
        <img src="assets/images/elements/element_1.png" class="element_1" alt="Element">
        <img src="assets/images/elements/element_2.png" class="element_2" alt="Element">
        <div class="container relative z-1">
            <div class="arrows to_right slideRight">
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
            </div>
            <div class="arrows to_up slideTop">
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title mx-width-100">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Our Newsletters
                        </p>
                        <h3 class="title">Get More Every Single Update To Join Our Newsletters</h3>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="newsletter_form">
                        <form>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter Your Email" autocomplete="off" name="#">
                                <div class="input-group-append ml-0">
                                    <button type="submit" class="thm-btn bg-thm-color-three btn-rounded">
                                        Subscribe Now
                                        <i class="fal fa-chevron-right ml-2"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="condition" name="condition" checked>
                                <label class="custom-control-label" for="condition">Get Update Monthly Subscription</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter End -->
    <!-- Why Us Start -->
    <section class="section-padding about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="section-title left-align">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            What We Offer
                        </p>
                        <h3 class="title">People Why Choose Our Coachs</h3>
                    </div>
                    <ul class="why-us-list">
                        <li>
                            <i class="icon fal fa-check"></i>
                            <div class="text">
                                <h6 class="mb-2">We Teach You How To Coach Yourself</h6>
                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus sit voluptatemec accusantium doloremque laudantium</p>
                            </div>
                        </li>
                        <li>
                            <i class="icon fal fa-check"></i>
                            <div class="text">
                                <h6 class="mb-2">We Teach You How To Feel Better</h6>
                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus sit voluptatemec accusantium doloremque laudantium</p>
                            </div>
                        </li>
                        <li>
                            <i class="icon fal fa-check"></i>
                            <div class="text">
                                <h6 class="mb-2">We Teach You How To Take Massive</h6>
                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus sit voluptatemec accusantium doloremque laudantium</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-7">
                    <div class="image_box relative why_us_box mb-0">
                        <img src="assets/images/why_us.png" alt="img" class="image-fit">
                        <span class="bg-thm-color-three circle_element"></span>
                        <img src="assets/images/elements/element_3.png" class="element_1 zoom-fade" alt="Element">
                        <img src="assets/images/elements/element_4.png" class="element_2 rotate_elem" alt="Element">
                        <img src="assets/images/elements/element_5.png" class="element_3 rotate_elem" alt="Element">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Us End -->
    <!-- Plane Start -->
    <div class="bg-thm-color-two plane_box relative z-1">
        <div class="container relative z-1">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11 relative z-1">
                    <img src="assets/images/elements/element_6.png" class="element_1 rotate_elem" alt="Element">
                    <h2 class="thm-color-white">The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training</h2>
                </div>
            </div>
            <img src="assets/images/elements/element_7.png" class="element_2 zoom-fade" alt="Element">
        </div>
    </div>
    <!-- Plane End -->
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="footer_top section-padding">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ft_widget ft_about">
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="logo" class="image-fit">
                            </a>
                            <ul class="info">
                                <li>
                                    <a href="#">256 Elizaberth Ave Str, Brooklyn, CA, 90025</a>
                                </li>
                                <li>
                                    <a href="tel:+01234567899">+012 (345) 678 99</a>
                                </li>
                                <li>
                                    <a href="mailto:example@example.com">example@example.com</a>
                                </li>
                            </ul>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft_widget ft_menu">
                            <h6 class="ft-title">Our Coach</h6>
                            <ul>
                                <li>
                                    <a href="#">Basic Life Coach</a>
                                </li>
                                <li>
                                    <a href="#">Advance Helath Coach</a>
                                </li>
                                <li>
                                    <a href="#">Advance Business Coach</a>
                                </li>
                                <li>
                                    <a href="#">Basic Learn English</a>
                                </li>
                                <li>
                                    <a href="#">Web Development</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft_widget ft_menu">
                            <h6 class="ft-title">About Us</h6>
                            <ul>
                                <li>
                                    <a href="#">Latest Courses</a>
                                </li>
                                <li>
                                    <a href="#">Mission & Vision</a>
                                </li>
                                <li>
                                    <a href="#">Our Approach</a>
                                </li>
                                <li>
                                    <a href="#">Exclusive Advisors</a>
                                </li>
                                <li>
                                    <a href="#">Join a Career</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft_widget ft_apps">
                            <h6 class="ft-title">Apps Download</h6>
                            <p class="mb-xl-20">Sed ut perspici unde omnis iste natus error sit voluptatem accus</p>
                            <a href="#" class="app_img">
                                <img src="assets/images/google_store.jpg" alt="img">
                            </a>
                            <a href="#" class="app_img">
                                <img src="assets/images/apple_store.jpg" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <p class="mb-0">
                    © 2021 <a href="#">Wellco</a>. All Rights Reserved, Design By Webtend
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <a href="#" data-target="html" class="back-to-top ft-sticky">
        <i class="fal fa-long-arrow-up"></i>
    </a>
    <!-- Scripts -->
    <script src="{{ url('assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
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