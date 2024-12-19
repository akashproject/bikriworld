@extends('layouts.main')

    @section('content')
    @if(isset($_COOKIE['userCity']) && array_search($_COOKIE['userCity'], array_column($serviceLocation, 'name')) !== FALSE)
    <div class="section-padding">
        <div class="container ">
            <div class="row text-center" >
                <div style="width: 100%;">
                    <img src="{{ url('assets/images/icons/404.png') }}" style="width: auto;margin-bottom: 21px;">
                    <h5> Sorry! This Service is not availble on your city </h5>
                </div>
                <div style="width: 100%;">
                    <a href="/" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Back to Home <i class="fal fa-chevron-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>

    @else
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/catagory-banner.jpg') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-7">
                    <h5 class="page_title">Welcome to BikriWorld – Your Trusted Source for Second-Hand Laptop & Mobile Parts
                    </h5>
                    <p> At BikriWorld, we understand the importance of quality and affordability when it comes to replacing or upgrading parts for your laptops and mobiles. That's why we offer reliable second-hand parts that are:</p>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Select Category</li>
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
    <!-- Features Start -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title left-align">
                        <h6 class="title mb-0">Select device of Parts</h6>
                    </div>
                </div>
            </div>
            <div class="row mt-5" style="justify-content: center;">
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
    <!-- Team End -->
    <section class="section-padding wow fadeInUp" style="background-color: #4caf5014;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Why choose us
                        </p>
                        <h5 class="title mb-0">Why Choose BikriWorld?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/icons/price-tag.png') }}" style="width: auto;"> 
                        <span style="margin-left: 20px;"style="margin-left: 20px;"> Half Price Deals </span> 
                    </h6>
                    <p>Save big with our affordable second-hand parts, priced at just half the cost of brand-new components. Quality and savings—both guaranteed!</p>
                </div>
                <div class="col-lg-6 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/pickup.png') }}" style="width: auto;">
                        <span style="margin-left: 20px;">PAN India Delivery </span> 
                    </h6>
                    <p>No matter where you are, our efficient delivery network ensures your order reaches your doorstep, anywhere across India</p>
                </div>
                <div class="col-lg-6 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/icons/mobile.png') }}" style="width: auto;"> 
                        <span style="margin-left: 20px;"> Cash on Delivery (COD) </span> 
                    </h6>
                    <p>You will get on spot payment. As soon as our Wizard enters the secret code, you are all set with cash and paperwork.</p>
                </div>
                <div class="col-lg-6 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/pickup.png') }}" style="width: auto;">
                        <span style="margin-left: 20px;">Hassle-Free Payments </span> 
                    </h6>
                    <p>Choose from multiple secure payment options to make your shopping experience smooth and convenient.
                    </p>
                </div>
            </div>
                     
        </div>
    </section>

    <section class="section-padding wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            What We Offer 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title left-align">
                        <h5 class="title mb-0">Laptop Parts</h4>
                        <p>Find second-hand screens, keyboards, batteries, motherboards, and more for all major laptop brands.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title left-align">
                        <h5 class="title mb-0">Mobile Parts</h4>
                        <p>Explore our wide range of mobile screens, cameras, charging ports, batteries, and other essential components compatible with leading brands.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Why Second-Hand Parts? 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title left-align">
                        <h5 class="title mb-0">Eco-Friendly: </h4>
                        <p>Reduce electronic waste and support sustainable practices. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title left-align">
                        <h5 class="title mb-0">Budget-Friendly</h4>
                        <p>High-quality parts at a fraction of the cost. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section-title left-align">
                        <h5 class="title mb-0">Our Promise  </h4>
                        <p>At BikriWorld, we carefully inspect and certify every part we sell to ensure reliability and performance. When you shop with us, you get. </p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="section-title text-center">
                        <h5 class="title mb-0">Genuine components</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-title text-center">
                        <h5 class="title mb-0">Tested quality assurance</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-title text-center">
                        <h5 class="title mb-0">Dedicated customer support</h4>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Ready to Upgrade? 
                        </p>
                        <h5 class="title">Need Help Selling Your Device? Send Your Queries</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact_faq_box shadow_1" style="padding: 30px 10px;">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/support.png') }}" alt="icon" class="image-fit-contain">
                        </div>
                        <div class="text">
                            <h4 style="font-size: 11px;">Find Your Part Today?</h4>
                            <a href="mailto:support@bikriworld.com" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle">Mail Us <i class="fal fa-chevron-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_faq_box shadow_1" style="padding: 30px 10px;">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/question.png') }}" alt="icon" class="image-fit-contain">
                        </div>
                        <div class="text">
                            <h4 style="font-size: 11px;">Get a Quick Quote for the part you need ?</h4>
                            <a href="tel:7439995068" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle">Contact Us <i class="fal fa-chevron-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_faq_box shadow_1" style="padding: 30px 10px;">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/question.png') }}" alt="icon" class="image-fit-contain">
                        </div>
                        <div class="text">
                            <h4 style="font-size: 11px;">Have Questions? Speak with our experts now  ?</h4>
                            <a href="tel:7439995068" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle">Call Us <i class="fal fa-phone ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection