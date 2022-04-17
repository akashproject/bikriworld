@extends('layouts.main')

    @section('content')
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
                            <h3 class="title" style="font-size: 30px;"><span>Sell Old Phone & Laptops</span> Online In One Click- Cash At Your Doorstep In 24 Hours </h3>
                            <p>Old Phones And Laptops Gathering Dust? Simply Sell Old Laptops & Old Phones For Cash In One Click! Grab 100% Seller Protected Best Price For Old Phones, Laptops, And Other Gadgets. </p>
                            <a href="{{ url('selling-categories') }}" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rounded mr-4 mb-4"> Sell My Device <i class="fal fa-chevron-right ml-2"></i></a>
                            <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="video_btn video_text popup-youtube mb-4">
                                <i class="fas fa-play video_icon bg-thm-color-two"></i>
                                <span>Watch Videos</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image_box relative">
                            <img src="assets/images/banner_1.png" alt="img" class="image-fit">
                            <span class="bg-thm-color-two circle_element"></span>
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
    <section class="section-padding" style="padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <h6 class="title mb-0">Select your device for sell</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($categories)
                    @foreach ($categories as $value)
                    <!-- Feature Box Start -->
                    <div class="col-lg-2 col-6">
                        <div class="features_box style_2">
                            <div class="icon">
                                <a href="{{ url('selling-brands') }}/{{ $value->id }}"> 
                                    <i class="fa fa-{{ strtolower($value->name) }} cat-icon" aria-hidden="true"></i>
                                </a>
                            </div>
                            <h5 class="text-center" ><a href="{{ url('selling-brands') }}/{{ $value->id }}"> {{ $value->name }}</a></h5>
                            <a href="{{ url('selling-brands') }}/{{ $value->id }}" style="margin-left: 26px;">
                                <span>Sell Now</span>
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
                        <p class="subtitle" style="font-size: 12px;">
                            <i class="fal fa-book"></i>
                            Best Way To Sell Old Phone For Cash: Sell & Get On-Spot Cash 
                        </p>
                        <h3 class="title" style="font-size: 30px;">Get Cash For Your Old Gadget In 3 Simple Steps.</h3>
                        <p>Avail doorstep pickup from your home or work at a convenient time slot and get doorstep payment.</p>
                    </div>
                    <ul class="about_list">
                        <li>
                            <div class="icon">
                                <img src="assets/images/icons/icon_5.png" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Compute Price-Quote</h6>
                                <p class="mb-0">Simply select your gadget & answer some questions about the current condition of your device. An instant buyback quote will be generated based on the best price for your device in its current condition.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="assets/images/icons/icon_5.png" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Choose PickUp Mode</h6>
                                <p class="mb-0">Once you like the price, you can simply choose the When & Where! Get doorstep pickup from your home or work at a time slot that fits you.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="assets/images/icons/icon_5.png" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Get Cash On PickUp</h6>
                                <p class="mb-0">Once our Bikri Wizard inputs the Secret Code, you get paid. You can walk away with cash in your hands or get paid with GPay. Either way, you get cash for selling your phone.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
    
    <!-- Testimonials Start -->
    <section class="section about_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Online Phone Selling: Our Reviews
                        </p>
                        <h3 class="title mb-0" style="font-size: 30px;">Customers ❤ BikriWorld:<br> What Are They Saying?</h3>
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
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/2.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Robert M. Morales</h6>
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
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/3.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Nicolas Vanderpool</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Apps Developer</p>
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
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/1.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Herminia F. Hudson</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Web Designer</p>
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
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/2.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Robert M. Morales</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Business Manager</p>
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
                </div>
                <!-- Testimonial Item -->
            </div>
        </div>
        <div class="circle_wave"></div>
    </section>
    <!-- Testimonials End -->

    <!-- Why Us Start -->
    <section class="section-padding about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="section-title left-align">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                                Our Offer: Cash For Phones
                        </p>
                        <h3 class="title" style="font-size:29px">Why People Choose BikriWorld To Sell Old Phones?</h3>
                    </div>
                    <ul class="why-us-list">
                        <li>
                            <i class="icon fal fa-check"></i>
                            <div class="text">
                                <h6 class="mb-2">100% Ensured Seller Protection.</h6>
                                <p class="mb-0">When you sell old phones to us, we provide two things: Data Protection & Seller Paperwork. Your anonymity is ensured when you sell to us.</p>
                            </div>
                        </li>
                        <li>
                            <i class="icon fal fa-check"></i>
                            <div class="text">
                                <h6 class="mb-2">Mind-Blowing BuyBack Prices</h6>
                                <p class="mb-0">Apart from the cash on buying, we give the best market value prices for your used gadgets. Sell smartphones, TVs and Smartwatches at the best prices.</p>
                            </div>
                        </li>
                        <li>
                            <i class="icon fal fa-check"></i>
                            <div class="text">
                                <h6 class="mb-2">Lightning Fast Buying Process</h6>
                                <p class="mb-0">Sell your phones and laptops instantly. Once you confirm the pickup time and date, the wheels of the machine roll. Get cash on the spot in 24 hours.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-7">
                    <div class="image_box relative why_us_box mb-0">
                        <img src="assets/images/why_us.png" alt="img" class="image-fit">
                        <span class="bg-thm-color-two circle_element"></span>
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
                    <h2 class="thm-color-white">BikriWorld is Trusted By 20.25 Lac+ Customers Across India For Selling Old Phones.</h2>
                </div>
            </div>
            <img src="assets/images/elements/element_7.png" class="element_2 zoom-fade" alt="Element">
        </div>
    </div>
    <!-- Plane End -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection