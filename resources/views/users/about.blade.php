@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h1 class="page_title">India’s Best Way To Sell Used Devices Online</h1>
                    <p> Your One Day CASH-acation. Sell Your Used Device on BikriWorld. Get Cash In 24 Hours! </p>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <img src="{{ url('assets/images/elements/element_19.png') }}" alt="element" class="element_1 slideRightTwo">
            <img src="{{ url('assets/images/elements/element_10.png') }}" alt="element" class="element_2 zoom-fade">
            <img src="{{ url('assets/images/elements/element_20.png') }}" alt="element" class="element_3 rotate_elem">
            <img src="{{ url('assets/images/elements/element_21.png') }}" alt="element" class="element_4 rotate_elem">
        </div>
    </div>
    <!-- Subheader End -->
    <!-- About Start -->
    <section class="section about_inner">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="image_box shadow_1 mb-md-80">
                        <img src="{{ url('assets/images/about/about.webp') }}" alt="img" class="image-fit">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title left-align">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            About Us
                        </p>
                        <h3 class="title">We Buy. We Are Your One-Stop Solution For Selling Used Devices.</h3>
                        <p>We are BikriWorld an organization built of people committed to helping you find the best prices for your used devices. That is why we are. We exist because we buy.</p>
                    </div>
                    <ul class="about_list row">
                        <li class="col-md-6">
                            <div class="icon">
                                <img src="{{ url('assets/images/icons/icon-tick.webp') }}" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Awesome Prices</h6>
                                <p class="mb-0">Nothing but awesome prices all-around at BikriWorld.</p>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <div class="icon">
                                <img src="{{ url('assets/images/icons/icon-tick.webp') }}" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Transparent Selling</h6>
                                <p class="mb-0">It’s as easy as counting. Sell your used device in one click.</p>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <div class="icon">
                                <img src="{{ url('assets/images/icons/icon-tick.webp') }}" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">All Devices</h6>
                                <p class="mb-0">When we say all devices, we mean it. Sell any used device to us.</p>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <div class="icon">
                                <img src="{{ url('assets/images/icons/icon-tick.webp') }}" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Full Protection</h6>
                                <p class="mb-0">When you sell to us, we are committed to maintaining your safety.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
     <!-- Counter Box Start -->
    <div class="section-padding pt-0">
        <div class="container">
            <div class="row">
                <!-- Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/people.png') }}" alt="icon" class="image-fit">
                        </div>
                        <div class="text">
                            <div class="counter">
                                <b data-from="0" data-to="369">0</b>
                            </div>
                            <p class="mb-0">Loving Customers</p>
                        </div>
                    </div>
                </div>
                <!-- Box -->
                <!-- Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/payment.png') }}" alt="icon" class="image-fit">
                        </div>
                        <div class="text">
                            <div class="counter">
                                <b data-from="0" data-to="264">0</b>
                            </div>
                            <p class="mb-0">Devices Sold</p>
                        </div>
                    </div>
                </div>
                <!-- Box -->
                <!-- Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/handshake.png') }}" alt="icon" class="image-fit">
                        </div>
                        <div class="text">
                            <div class="counter">
                                <b data-from="0" data-to="259">0</b>
                            </div>
                            <p class="mb-0">Fulfillment Partners</p>
                        </div>
                    </div>
                </div>
                <!-- Box -->
                <!-- Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/money.png') }}" alt="icon" class="image-fit">
                        </div>
                        <div class="text">
                            <div class="counter">
                                <b data-from="0" data-to="568">0</b>
                            </div>
                            <p class="mb-0">Cash Transactions</p>
                        </div>
                    </div>
                </div>
                <!-- Box -->
            </div>
        </div>
    </div>
    <!-- Counter Box End -->
    <!-- About Us Start -->
    <section class="section section-bg about_bg about style_2" style="background-image: url(assets/images/bg/bg_1.png);">
        <div class="container">
            <div class="row justify-content-between flex-row-reverse">
                <div class="col-lg-6">
                    <div class="image_boxes style_2 relative z-1 h-100">
                        <div class="video_warp style_2 relative z-1 big_img">
                            <img src="assets/images/about/about_img_2.jpg" alt="img">
                            <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube transform-center justify-content-center d-flex">
                                <img src="assets/images/icons/youtube.png" alt="icon">
                            </a>
                        </div>
                        <!-- elements -->
                        <img src="assets/images/elements/element_22.png" class="element_1" alt="Element">
                        <img src="assets/images/elements/element_23.png" class="element_2 rotate_elem" alt="Element">
                        <img src="assets/images/elements/element_24.png" class="element_3 rotate_elem" alt="Element">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-md-80">
                    <div class="section-title left-align">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            WHAT MAKES BIKRIWORLD
                        </p>
                        <h3 class="title">BikriWorld ♥ Your Expectations & Your Used Devices</h3>
                        <p class="mb-0">We exist to buy used devices of all conditions. Furthermore, we exist because we know how hard it is to find a quote that matches your expectations. Here’s why you should sell your used device to us:- </p>
                    </div>
                    <ul class="about_list style_2 mb-xl-30">
                        <li>
                            Best Market Valuations
                        </li>
                        <li>
                            Free Pickup at Desired Location
                        </li>
                        <li>
                            100% Seller Protection
                        </li>
                    </ul>
                    <a href="{{ url('/contact-us') }}" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle">
                        Join Us
                        <i class="fal fa-chevron-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->
    <!-- Team Start -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Our Wizards
                        </p>
                        <h3 class="title">Meet The Wizards At BikriWorld</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Block Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="team_block style_2">
                        <div class="team_img">
                            <div class="team-image">
                                <img src="assets/images/team/1.jpg" alt="img" class="image-fit">
                            </div>
                        </div>
                        <div class="team-content" >
                            <h6 class="mb-1"><a href="javascript:void(0)">Wallace D. Grace</a></h6>
                            <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                        </div>
                    </div>
                </div>
                <!-- Block End -->
                <!-- Block Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="team_block style_2">
                        <div class="team_img">
                            <div class="team-image">
                                <img src="assets/images/team/1.jpg" alt="img" class="image-fit">
                            </div>
                        </div>
                        <div class="team-content" >
                            <h6 class="mb-1"><a href="javascript:void(0)">Wallace D. Grace</a></h6>
                            <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                        </div>
                    </div>
                </div>
                <!-- Block End -->
                <!-- Block Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="team_block style_2">
                        <div class="team_img">
                            <div class="team-image">
                                <img src="assets/images/team/1.jpg" alt="img" class="image-fit">
                            </div>
                        </div>
                        <div class="team-content" >
                            <h6 class="mb-1"><a href="javascript:void(0)">Wallace D. Grace</a></h6>
                            <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                        </div>
                    </div>
                </div>
                <!-- Block End -->
                <!-- Block Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="team_block style_2">
                        <div class="team_img">
                            <div class="team-image">
                                <img src="assets/images/team/1.jpg" alt="img" class="image-fit">
                            </div>
                        </div>
                        <div class="team-content" >
                            <h6 class="mb-1"><a href="javascript:void(0)">Wallace D. Grace</a></h6>
                            <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                        </div>
                    </div>
                </div>
                <!-- Block End -->
               
            </div>
        </div>
    </section>
    <!-- Team End -->
    <!-- Testimonials Start -->
    <section class="section section-bg relative z-1 bg-thm-color-one" style="background-image: url(assets/images/bg/bg_4.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align white">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Our Testimonials
                        </p>
                        <h3 class="title mb-0">What’s Our Clients<br> About Us</h3>
                    </div>
                </div>
            </div>
            <div class="testimonial_slider style_2 row">
                <!-- Testimonial Item -->
                <div class="slide-item col-12">
                    <div class="testimonial_item style_dark">
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
                    <div class="testimonial_item style_dark">
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
                    <div class="testimonial_item style_dark">
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
                    <div class="testimonial_item style_dark">
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
                    <div class="testimonial_item style_dark">
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
                    <div class="testimonial_item style_dark">
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
    </section>
    <!-- Testimonials End -->
    
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection