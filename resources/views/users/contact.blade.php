@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h1 class="page_title">Contact Us</h1>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
    <!-- Contact Faq Box Start -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Get Support
                        </p>
                        <h5 class="title">Need Help Selling Your Device? Send Your Queries</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_faq_box shadow_1">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/icon_14.png') }}" alt="icon" class="image-fit-contain">
                        </div>
                        <div class="text">
                            <h4>Need Support?</h4>
                            <p>Are you stuck with payment issues or not getting the right price? Reach out & we will work our magic.</p>
                            <a href="#" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle">Mail Us <i class="fal fa-chevron-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact_faq_box shadow_1">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/icon_15.png') }}" alt="icon" class="image-fit-contain">
                        </div>
                        <div class="text">
                            <h4>Need help selling?</h4>
                            <p>SHave Any Questions about BikriWorld. Write to us & we will answer them happily.</p>
                            <a href="#contact-form" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle">Contact Us <i class="fal fa-chevron-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Faq Box End -->
    <!-- Contact Map & Info Start -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-5">
                <div class="section-title left-align">
                    <p class="subtitle">
                        <i class="fal fa-book"></i>
                        Contact Us
                    </p>
                    <h5 class="title">The Way To Instant Cash</h3>
                </div>
                <div class="contact_info mb-md-80">
                    <ul>
                        <li>
                            <i class="icon fal fa-map-marker-alt"></i>
                            <div class="text">
                                <h6>Location</h6>
                                <p>354 Oakridge, Camden NJ 08102 - USA</p>
                            </div>
                        </li>
                        <li>
                            <i class="icon fal fa-envelope-open-text"></i>
                            <div class="text">
                                <h6>Email Address</h6>
                                <p>supportcoachinfo@gmail.com</p>
                            </div>
                        </li>
                        <li>
                            <i class="icon fal fa-phone"></i>
                            <div class="text">
                                <h6>Contact Us</h6>
                                <p><strong>Mobile: </strong> +012 (345) 789 99</p>
                                <p><strong>Hotline: </strong> +563 789 55</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact_map relative z-1" id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.738550227143!2d88.3189632!3d22.6262364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882b08e73c9b9%3A0x93270c763865fdbb!2sBhattanagar%20Rd%2C%20Liluah%2C%20Howrah%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1649931505834!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Map & Info End -->
    <!-- Contact Form Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Drop A Message
                        </p>
                        <h5 class="title">Have Any Questions Let’s Started Talk</h5>
                    </div>
                </div>
            </div>
            <form class="form-horizontal" method="post" action="{{ url('save-contact') }}" enctype="multipart/form-data" id="contact-form" >
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
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle">Send Your Message <i class="fal fa-chevron-right ml-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Contact Form End -->
    <!-- Cta Start -->
    <div class="cta_box style_2">
        <div class="container relative z-2">
            <div class="bg-thm-color-two cta_box_inner z-2 mb-negative">
                <img src="{{ url('assets/images/elements/shape.png') }}" alt="shape" class="shape_1 zoom-fade">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="text_block">
                            <div class="section-title left-align white">
                                <p class="subtitle">
                                    <i class="fal fa-book"></i>
                                    Our Professionals
                                </p>
                                <h5 class="title">BikriWorld Helps You Get The Best Value For Your Old Gadgets. Get Free Pickup & Cash In Your Hands In 24 Hours!</h3>
                                <a href="contact.html" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle">Contact Us <i class="fal fa-chevron-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="image_box relative z-1">
                            <img src="{{ url('assets/images/elements/square_shape.png') }}" alt="shape" class="shape_2 rotate_elem">
                            <img src="{{ url('assets/images/cta_image.png') }}" alt="img" class="image-fit">
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
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection