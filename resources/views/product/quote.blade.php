@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Get The Best Price</h4>
                    <p> Get The Best Price at based on the your device condition. </p>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Select Brands</li>
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
     <!-- Section Start -->
     <div class="section-padding">
        <div class="container">
            <div class="row justify-content-between ">
                <div class="col-lg-8 mb-md-80">
                    <div class="product-quote-wrap row" >
                        <div class="col-5 text-center">
                            @if($product->image)
                            <img src="/administrator/public/images/{{ $product->image }}" alt="img">
                            @else 
                            <img src="https://via.placeholder.com/180x180" alt="img" class="">
                            @endif 
                        </div>
                        <div class="col-7 text-left">
                            <h5> {{ $product->name }} ( {{ $calculatedData['variation_type'] }}  )</h5>
                            @if($calculatedData['exact_price'] > 100)
                            <p class="quote-msg"> Product Selling Price </p>
                            <h3 class="quote-price" style="margin-bottom: 10px;"> ₹{{ number_format($calculatedData['exact_price'])}}/- </h3>
                            <p style="font-size: 13px;margin-bottom: 0;">The amount is based on the your device condition as you mentioned. </p>
                            @else
                            <div class="sorry_message" >
                                <h5> We Are Sorry </h5>
                                <p> Price is too low as per your device condition </p>
                            </div>
                            @endif
                            <!-- <a href="javascript:void(0)" class="view-report" > View Report</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar style_3">
                        
                        <div class="sidebar_widget text-center">          
                            <h5 class="widget_title">Price Summary</h5>                 
                            <div class="sidebar_widget_inner">
                                @if($calculatedData['exact_price'] > 100)
                                
                                <ul class="info_widget">
                                    <li>
                                        <span style="float:left">Base Price</span>
                                        <span style="float:right">₹{{ number_format($calculatedData['exact_price'])}}/- </span>
                                    </li>
                                    <li >
                                        <span style="float:left">Pickup Charges</span>
                                        <span style="float:right"><s style="color:red;margin-right:20px" >₹50/- </s> Free</span>
                                    </li>
                                    <li>
                                        <span style="float:left">Total Amount</span>
                                        <span style="float:right">₹{{ number_format($calculatedData['exact_price'])}}/- </span>
                                    </li>
                                    
                                </ul>
                                @else 
                                <p> Price is too low as per your device condition </p>
                                @endif
                            </div>
                            <div class="sidebar_widget_inner">
                                @if($calculatedData['exact_price'] > 100)
                                <a href="{{ url('checkout') }}" class="sell-now-btn custom-cta-btn bg-thm-color-two btn-rectangle"> Sell Now <i class="fal fa-chevron-right ml-2"></i></a>
                                @else
                                <a href="{{ url('selling-categories') }}" class="sell-now-btn head_trigger custom-cta-btn bg-thm-color-two btn-rectangle"> Sell Another Device <i class="fal fa-chevron-right ml-2"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section End -->
    @include('common.top-brand')
    @include('common.top-product')

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
                        Where to sell my phone for the best price in India?
                        </button>
                    </div>
                    <div id="GeneralItemOne" class="collapse" aria-labelledby="GeneralItemOne" data-parent="#generalaccordion">
                        <div class="card-body">
                        There are a lot of online buyback platforms in India for sellers looking to sell old mobiles, but BikriWorld offers the best prices for all your old devices. 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemTwo" aria-expanded="false" aria-controls="GeneralItemTwo">
                        How can I sell my phone to get paid instantly?
                        </button>
                    </div>
                    <div id="GeneralItemTwo" class="collapse" aria-labelledby="GeneralItemTwo" data-parent="#generalaccordion">
                        <div class="card-body">
                        Sell your phone at BikriWorld, and get the best offers for your old mobile phone. Sell mobile phones, laptops and any unused devices for the best valuation possible, Check your device’s price today!
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemThree" aria-expanded="false" aria-controls="GeneralItemThree">
                            Can I sell my phone online?
                        </button>
                    </div>
                    <div id="GeneralItemThree" class="collapse" aria-labelledby="GeneralItemThree" data-parent="#generalaccordion">
                        <div class="card-body">
                        Yes, you can sell your phone online. Also, yes, it’s completely risk free. All our purchases are made with proper invoices, and every device is scrubbed of all user information and data.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemFour" aria-expanded="false" aria-controls="GeneralItemFour">
                        How to sell an old phone online?
                        </button>
                    </div>
                    <div id="GeneralItemFour" class="collapse" aria-labelledby="GeneralItemFour" data-parent="#generalaccordion">
                        <div class="card-body">
                        Simply go on to bikriworld.com and select your type of gadget. Once you have done that, you can proceed to set the pickup location for our agent to pick up and assess your device. Once our agent reaches the location at your convenient time, you get on spot payment after the device’s condition is verified.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemFive" aria-expanded="false" aria-controls="GeneralItemFive">
                        What is the best way to sell old mobile phones?
                        </button>
                    </div>
                    <div id="GeneralItemFive" class="collapse" aria-labelledby="GeneralItemFive" data-parent="#generalaccordion">
                        <div class="card-body">
                        The best way to sell old mobile phones is to check your price across all online buyback platforms. BikriWorld offers the best valuation for your old mobile phone. Sell your old mobile today and get cash in your hands within 24 hours!
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#GeneralItemSix" aria-expanded="false" aria-controls="GeneralItemSix">
                        Where can I sell my phone for cash today?
                        </button>
                    </div>
                    <div id="GeneralItemSix" class="collapse" aria-labelledby="GeneralItemSix" data-parent="#generalaccordion">
                        <div class="card-body">
                        If you want cash within 24 hours, you can sell old mobiles you have laying around at BikriWorld. BikriWorld offers transparent and easy selling of mobile phones and gadgets to consumers across India with Zero Pick Up Costs!
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