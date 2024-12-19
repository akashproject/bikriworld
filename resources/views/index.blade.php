@extends('layouts.main')

    @section('content')
    <!-- Banner Start -->
    <div class="banner relative z-1">
        <img src="assets/images/banner/element_1.png" class="element_1" alt="Element">
        <img src="assets/images/banner/element_line.png" class="element_line" alt="Element Line">
        <!-- Texts -->
        <div class="transform-center">
            <div class="container">
                <div class="header_banner row align-items-center desktop-version">
                    <div class="slide-item col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text_box">
                                    <h3 class="title"><span>Sell Old Phone</span> & Laptops In One Click </h3>
                                    <p>Don’t know what to do with your old phones & laptops? Simply Sell Old Phones For Cash At Your Door In 24 Hours. </p>
                                    <p>✔Best Prices ✔Proper Valuation ✔ Seller Protection </p>
                                    
                                    <a href="{{ url('sell-old-used-product') }}" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rounded mr-4 mb-4"> Sell My Device <i class="fal fa-chevron-right ml-2"></i></a>
                                    <a href="https://www.youtube.com/watch?v=BFrKemXxiN0" class="video_btn video_text popup-youtube mb-4">
                                        <i class="fas fa-play video_icon bg-thm-color-two"></i>
                                        <span>Watch Videos</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image_box relative">
                                    <img src="assets/images/banner/banner_image-1.png" alt="img" class="image-fit">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text_box">
                                    <h3 class="title"><span>Free PickUp</span> For All Devices </h3>
                                    <p>Are your old devices gathering dust? Sell your laptops & devices in one click & get cash at your door in 24 Hours with free pickup.</p>
                                    <p>✔Best Prices ✔Proper Valuation ✔ Free Pick-Up</p>                                   
                                    <a href="{{ url('sell-old-used-product') }}" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rounded mr-4 mb-4"> Sell My Device <i class="fal fa-chevron-right ml-2"></i></a>
                                    <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="video_btn video_text popup-youtube mb-4">
                                        <i class="fas fa-play video_icon bg-thm-color-two"></i>
                                        <span>Watch Videos</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image_box relative">
                                    <img src="assets/images/banner/banner_image-2.png" alt="img" class="image-fit">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text_box">
                                    <h3 class="title"><span>Get Paid</span> In Full For Cash</h3>
                                    <p>Want to upgrade your next SMART Device?  Short on your budget? Sell TV Online In One Click & Get Cash in your Hand/Bank Account/GPay in 24 hours.</p>
                                    <p>✔Best Prices ✔Proper Valuation ✔ Seller Protection</p>                                   
                                    <a href="{{ url('sell-old-used-product') }}" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rounded mr-4 mb-4"> Sell My Device <i class="fal fa-chevron-right ml-2"></i></a>
                                    <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="video_btn video_text popup-youtube mb-4">
                                        <i class="fas fa-play video_icon bg-thm-color-two"></i>
                                        <span>Watch Videos</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image_box relative">
                                    <img src="assets/images/banner/banner_image-3.png" alt="img" class="image-fit">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_banner row align-items-center mobile-version">
                    <div class="slide-item col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="image_box relative">
                                    <img src="assets/images/banner/mobile banner-1.png" alt="img" class="image-fit">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="image_box relative">
                                    <img src="assets/images/banner/mobile banner-2.png" alt="img" class="image-fit">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="image_box relative">
                                    <img src="assets/images/banner/mobile banner-3.png" alt="img" class="image-fit">
                                    
                                </div>
                            </div>
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
                    <div class="col-lg-2 col-4 product_filter_list">
                        <div class="features_box style_2">
                            <a class="icon" href="{{ url('select-brand') }}/{{ $value->slug }}">
                                <img src="{{ url('assets/images/icons') }}/{{$value->icon}}.png" style="width: auto;">
                                <h5 class="text-center" style="font-size: 12px;font-weight: 600;" >{{ $value->name }}</h5>
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

    <!-- Features Start -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <h6 class="title mb-0">Select device for Repair</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($categories)
                    @foreach ($categories as $value)
                    <!-- Feature Box Start -->
                    <div class="col-lg-2 col-4 product_filter_list">
                        <div class="features_box style_2">
                            <div class="icon">
                                @if($value->status == '1')
                                <a href="{{ url('repair-select-brand') }}/{{ $value->slug }}"> 
                                    <img src="{{ url('assets/images/icons') }}/{{$value->icon}}.png" style="width: auto;">
                                </a>
                                @else 
                                <a href="javascript:void(0)"> 
                                    <img src="{{ url('assets/images/icons') }}/{{$value->icon}}.png" style="width: auto;">
                                </a>
                                @endif
                            </div>
                            <h5 class="text-center" ><a href="{{ url('repair-select-brand') }}/{{ $value->slug }}"> {{ $value->name }} </a></h5>
                            @if($value->status != '1')
                            <a href="javescript:void(0)" >
                                <span>Coming Soon</span>
                            </a>
                            @endif
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
    <section class="section-padding about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="image_box">
                        <img src="assets/images/about/image_1.png" alt="img" class="image-fit image_1 rounded-circle">
                        <img src="assets/images/about/image_2.png" alt="img" class="image-fit image_2 rounded-circle">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title left-align">
                        <p class="subtitle" style="font-size: 12px;">
                            <i class="fal fa-book"></i>
                            Best Way To Sell Old Phone For Cash: Sell & Get On-Spot Cash 
                        </p>
                        <h3 class="title">Get Cash For Your Old Gadget In 3 Simple Steps.</h3>
                        <p>Avail doorstep pickup from your home or work at a convenient time slot & get doorstep payment.</p>
                    </div>
                    <ul class="about_list">
                        <li>
                            <div class="icon">
                                <i class="fal fa-calculator" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Compute Price-Quote</h6>
                                <p class="mb-0">Simply select your gadget & answer some questions about the current condition of your device. An instant buyback quote will be generated based on the best price for your device in its current condition.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fal fa-shopping-bag"></i>
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Choose PickUp Mode</h6>
                                <p class="mb-0">Once you like the price, you can simply choose the When & Where! Get doorstep pickup from your home or work at a time slot that fits you.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                            <i class="fal fa-hryvnia"></i>
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
    <section class="section-padding about_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Online Phone Selling: Our Reviews
                        </p>
                        <h3 class="title mb-0">Customers ❤ BikriWorld:<br> What Are They Saying?</h3>
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
                        <!-- <span class="bg-thm-color-two circle_element"></span> -->
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