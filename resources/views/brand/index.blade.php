@extends('layouts.main')

    @section('content')
    @if(isset($_COOKIE['userCity']) && !in_array($_COOKIE['userCity'],$serviceLocation))
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
    <!-- {{ session()->get('category_id') }} -->
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-7">
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Select Brands</li>
                            </ol>
                        </nav>
                    </div>
                    <h4 class="page_title">Sell Old {{$category->name}} At The Best Valuation: Quickly Get Paid In Cash</h4>
                    <p style="font-size: 14px;margin-left: 20px;"> Are you ready to purchase the next {{$category->name}} but don’t know what to do with the old one? Welcome to Bikri World, your trusted platform to sell used {{$category->name}} and get the best price.
                     </p>
                    <h4 class="page_title">Why Choose Us to Sell Old {{$category->name}}?</h4>
                    <ul class="text-white mb-4" style="font-size: 14px;margin-left: 20px;">
                        <li><strong><i class="fal fa-check-circle"></i> Simple & Hassle-Free Process:</strong> Selling your old {{$category->name}} has never been easier.</li>
                        <li><strong><i class="fal fa-check-circle"></i> Proper Valuation:</strong> We ensure you get the best possible price for your used {{$category->name}}.</li>
                        <li><strong><i class="fal fa-check-circle"></i> Seller Protection:</strong> Your data security and anonymity is our top priority.</li>
                        <li><strong><i class="fal fa-check-circle"></i> Eco-Friendly:</strong> Selling your used {{$category->name}}s promotes sustainability by reducing electronic waste</li>
                    </ul>
                </div>
                
            </div>
            <img src="{{ url('assets/images/elements/element_19.png') }}" alt="element" class="element_1 slideRightTwo">
            <img src="{{ url('assets/images/elements/element_10.png') }}" alt="element" class="element_2 zoom-fade">
            <img src="{{ url('assets/images/elements/element_20.png') }}" alt="element" class="element_3 rotate_elem">
            <img src="{{ url('assets/images/elements/element_21.png') }}" alt="element" class="element_4 rotate_elem">
        </div>
    </div>
    <!-- Subheader End -->
    <!-- Team Start -->
    <section class="section-padding bg-thm-color-two-gradient style_2 z-1 team_page_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hide-in-mobile">
                    <div class="section-title left-align">
                        <p class="subtitle mb-0">
                            <i class="fal fa-book"></i>
                            Please select brand
                        </p>
                        <h5 class="title mb-0">choose brand what you like to sell</h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <div class="search_bar">
                            <input type="text" name="#" id="search_product" placeholder="Search Device Brand" autocomplete="off">
                            <i class="fal fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            @if($brands)
                @foreach ($brands as $value)
                <!-- Block Start -->
                <div class="col-lg-2 col-4 product_filter_list">
                    <div class="team_block style_2 style_3 brand_listing">
                        <div class="team_img">                            
                            <a href="{{ url('sell-used-model') }}/{{ $value->slug }}" class="">
                                
                                <img src="https://administrator.bikriworld.com/public/images/{{ $value->image }}" alt="img" class="">
                            </a>
                        </div>
                        <p class="thm-color-two mb-0 font-weight-bold">
                            <a href="{{ url('sell-used-model') }}/{{ $value->slug }}" class="brand_icon">
                                {{ $value->name }}
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Block End -->
                @endforeach	
            @endif               
            </div>
            <!-- Pagination -->
            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a href="#" class="page-link">
                            <i class="fal fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">01</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">02</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">03</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">
                            <i class="fal fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav> -->
            <!-- Pagination -->
        </div>
    </section>
    <!-- Team End -->
    @endif
    <section class="section-padding wow fadeInUp" style="background-color: #4caf5014;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Our Best USP
                        </p>
                        <h5 class="title mb-0">What Makes Bikri World Your Best Choice to Sell Used {{$category->name}}s?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/icons/price-tag.png') }}" style="width: auto;"> 
                        <span style="margin-left: 20px;"style="margin-left: 20px;"> Wide Acceptance</span> 
                    </h6>
                    <p>We accept all major brands, including Apple, Samsung, Xiaomi, OnePlus, and more.</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/pickup.png') }}" style="width: auto;">
                        <span style="margin-left: 20px;">Doorstep PickUp Mode </span> 
                    </h6>
                    <p>You can choose doorstep pickup from your office or your home, according to your convenience.</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/icons/mobile.png') }}" style="width: auto;"> 
                        <span style="margin-left: 20px;"> Customer-Centric Approach </span> 
                    </h6>
                    <p>Our team is always here to help you with any queries.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Why Choose us
                        </p>
                        <h5 class="title mb-0">Why Do You Need to Sell Used {{$category->name}}s?</h4>
                    </div>
                </div>
            </div>     
            <div class="row">
                <div class="col-lg-4 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/icons/tick-inside-circle.png') }}" style="width: auto;"> 
                        <span style="margin-left: 20px;"style="margin-left: 20px;"> Free Your Space</span> 
                    </h6>
                    <p>Free up space in your home by selling old devices you no longer use.</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/icons/tick-inside-circle.png') }}" style="width: auto;">
                        <span style="margin-left: 20px;">Upgrade Easily</span> 
                    </h6>
                    <p>Use the price you earn to fund the purchase of your next smartphone.</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/icons/tick-inside-circle.png') }}" style="width: auto;"> 
                        <span style="margin-left: 20px;"> Contribute to Sustainability </span> 
                    </h6>
                    <p>By selling old {{$category->name}}s, you’re contributing to reducing electronic waste..</p>
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
                            Faq
                        </p>
                        <h5 class="title mb-0">Frequently Ask Questions</h4>
                    </div>
                </div>
            </div>
            <div class="accordion accordion-style style_2 mb-xl-30" id="generalaccordion">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemOne" aria-expanded="false" aria-controls="GeneralItemOne">
                            How do I know the value of my old {{$category->name}}?
                        </button>
                    </div>
                    <div id="GeneralItemOne" class="collapse" aria-labelledby="GeneralItemOne" data-parent="#generalaccordion">
                        <div class="card-body">
                        You can get an instant quote by providing the details of your {{$category->name}}, i.e. brand, model, condition, etc. on our platform. Our system will evaluate your device and offer the best possible price.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemTwo" aria-expanded="false" aria-controls="GeneralItemTwo">
                        How to sell used {{$category->name}}?
                        </button>
                    </div>
                    <div id="GeneralItemTwo" class="collapse" aria-labelledby="GeneralItemTwo" data-parent="#generalaccordion">
                        <div class="card-body">
                        Our website follows a very easy-to-follow process to sell your used {{$category->name}}. Your convenience is our top priority.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemThree" aria-expanded="false" aria-controls="GeneralItemThree">
                            Is it safe to sell used {{$category->name}}?
                        </button>
                    </div>
                    <div id="GeneralItemThree" class="collapse" aria-labelledby="GeneralItemThree" data-parent="#generalaccordion">
                        <div class="card-body">
                            We understand the growing concern. However, your used phones will be in safe hands with Bikri World. Our platform ensures a safe and reliable transaction process.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemFour" aria-expanded="false" aria-controls="GeneralItemFour">
                            How will I get paid?
                        </button>
                    </div>
                    <div id="GeneralItemFour" class="collapse" aria-labelledby="GeneralItemFour" data-parent="#generalaccordion">
                        <div class="card-body">
                            Payment will be made based on your preferred method such as cash, bank transfer, UPI etc
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemFive" aria-expanded="false" aria-controls="GeneralItemFive">
                            What brands do you accept?
                        </button>
                    </div>
                    <div id="GeneralItemFive" class="collapse" aria-labelledby="GeneralItemFive" data-parent="#generalaccordion">
                        <div class="card-body">
                            We accept all major {{$category->name}} brands, including Apple, Samsung, Xiaomi, OnePlus, Google, and more. Check our website for the full list.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemSix" aria-expanded="false" aria-controls="GeneralItemSix">
                        How does the pickup process work?
                        </button>
                    </div>
                    <div id="GeneralItemSix" class="collapse" aria-labelledby="GeneralItemSix" data-parent="#generalaccordion">
                        <div class="card-body">
                            The pickup process is an easy process that you’ll choose the place and time. You can either choose your house or your workplace according to your convenience. You can also choose the time for pickup.
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection