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
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/catagory-banner.jpg') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h5 class="page_title">Select the Category of device to repair </h5>
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
            @if($categories)
                @foreach ($categories as $value)
                <!-- Feature Box Start -->
                <div class="col-lg-2 col-6">
                    <div class="features_box style_2">
                        <div class="icon">
                            <a href="{{ url('repair-select-brand') }}/{{ $value->slug }}"> <img src="{{ url('assets/images/icons') }}/{{$value->icon}}.png" style="width: auto;"> </a>
                        </div>
                        <h5 class="text-center" ><a href="{{ url('repair-select-brand') }}/{{ $value->slug }}"> Repair {{ $value->name }}</a></h5>
                        <a href="{{ url('repair-select-brand') }}/{{ $value->slug }}" class="text-center">
                            <span>View</span>
                            <i class="fal fa-wrench"></i>
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
    <!-- Team End -->
    <section class="section-padding wow fadeInUp" style="background-color: #4caf5014;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            How We Work
                        </p>
                        <h5 class="title mb-0">How BikriWorld Helps You Get The Most Cash For Phones!</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/icons/price-tag.png') }}" style="width: auto;"> 
                        <span style="margin-left: 20px;"style="margin-left: 20px;"> Get The Right Price-Quote</span> 
                    </h6>
                    <p>Simply pick your device and answer questions. Get an instant best price for your gadget’s current condition.</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/pickup.png') }}" style="width: auto;">
                        <span style="margin-left: 20px;">Choose Mode of PickUp </span> 
                    </h6>
                    <p>Select the Location & Time after you like the Price! Get your old devices picked up from your home or work at your convenience.</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h6 style="margin:10px 0">
                        <img src="{{ url('assets/images/icons/mobile.png') }}" style="width: auto;"> 
                        <span style="margin-left: 20px;"> Get Cash For Phone/Gadget </span> 
                    </h6>
                    <p>You will get on spot payment. As soon as our Wizard enters the secret code, you are all set with cash and paperwork.</p>
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
                            Why People Like...
                        </p>
                        <h5 class="title mb-0">As Easy As 1,2,3: Why Sell Old Mobiles To BikriWorld?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <h6 style="margin:0">
                        <i class="fal fa-check-circle text-thm-color" aria-hidden="true"></i> Best Valuation
                    </h6>
                    <p> Prices set on Market Value and Usage Only. </p>
                </div>
                <div class="col-lg-4 col-12">
                    <h6 style="margin:0">
                        <i class="fal fa-check-circle text-thm-color" aria-hidden="true"></i> Protected Payment
                    </h6>
                    <p>Sell Old Mobile Online & Get Protected Payment In Desired Location & Mode.</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h6 style="margin:0">
                        <i class="fal fa-check-circle text-thm-color" aria-hidden="true"></i> As Easy As Counting 
                    </h6>
                    <p> Pick Price >> Set Pickup >> Get Cash </p>
                </div>
                <div class="col-lg-4 col-12">
                    <h6 style="margin:0">
                        <i class="fal fa-check-circle text-thm-color" aria-hidden="true"></i> Door Pickup
                    </h6>
                    <p> Get Free Pickup from Anywhere in India. Zero Packing & Transport Costs. </p>
                </div>
                <div class="col-lg-4 col-12">
                    <h6 style="margin:0">
                        <i class="fal fa-check-circle text-thm-color" aria-hidden="true"></i> 100% Data Deletion
                    </h6>
                    <p> No data gets leftover, and anonymity is ensured when you sell old mobiles to us. </p>
                </div>
                <div class="col-lg-4 col-12">
                    <h6 style="margin:0">
                        <i class="fal fa-check-circle text-thm-color" aria-hidden="true"></i> Valid Documentation
                    </h6>
                    <p> Worried about what happens to your device after you sell it? Rest easy with invoices. </p>
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
    
    @endif
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection