@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/catagory-banner.jpg') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h5 class="page_title">Select the Category of device to sell </h5>
                    <p> Get Paid In Cash Within 24 Hours </p>
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
                            <a href="{{ url('selling-brands') }}/{{ $value->id }}"> <i class="fa fa-{{ strtolower($value->icon) }} cat-icon" aria-hidden="true"></i></a>
                        </div>
                        <h5 class="text-center" ><a href="{{ url('selling-brands') }}/{{ $value->id }}"> Sell {{ $value->name }}</a></h5>
                        <a href="{{ url('selling-brands') }}/{{ $value->id }}" class="text-center">
                            <span>View</span>
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
    <!-- Team End -->
     

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