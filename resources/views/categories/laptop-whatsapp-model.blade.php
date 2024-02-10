@extends('layouts.main')
    @section('content')

    <style>
        .bg-banner:before {
           background-image: none;
        }
    </style>
   <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Sell Old LAPTOP</h4>
                    <p style="font-size: 20px;"> Sell old laptop in <strong>10 minutes</strong> At The Best Valuation: Get cash instantly </p>
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
    <!-- Team Start -->
    <section class="section-padding bg-thm-color-two-gradient style_2 z-1 team_page_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
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
                        <p class="thm-color-two mb-3 font-weight-bold">
                            <a href="{{ url('sell-used-model') }}/{{ $value->slug }}" class="brand_icon">
                                {{ $value->name }}
                            </a>
                        </p>
                        <p class="mb-0 mr-0 font-weight-bold thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle ">
                            <a style="color: white;" href="https://api.whatsapp.com/send?phone=7439995068&text=Want to sell {{ $value->name }} Laptop">
                                Sell Now
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
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection