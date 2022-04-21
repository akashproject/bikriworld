@extends('layouts.main')

    @section('content')
    <!-- {{ session()->get('category_id') }} -->
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Sell Old {{$category->name}}</h4>
                    <p> Sell {{$category->name}} At The Best Valuation: Quickly Get Paid In Cash </p>
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
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Please select brand
                        </p>
                        <h5 class="title mb-0">choose brand what you like to sell</h4>
                    </div>
                </div>
            </div>
            <div class="row">
            @if($brands)
                @foreach ($brands as $value)
                <!-- Block Start -->
                <div class="col-lg-2 col-4">
                    <div class="team_block style_2 style_3 brand_listing">
                        <div class="team_img">                            
                            <a href="{{ url('selling-products') }}/{{ $value->id }}" class="">
                                <img src="/administrator/public/images/{{ $value->image }}" alt="img" class="">
                            </a>
                        </div>
                        <p class="thm-color-two mb-0 font-weight-bold">
                            <a href="{{ url('selling-products') }}/{{ $value->id }}" class="brand_icon">
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
    <section class="section-padding wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Top Selling Brand
                        </p>
                        <h5 class="title mb-0">Top Selling Brands People Love</h4>
                    </div>
                </div>
            </div>
            <div class="brand_slider wow fadeInUp">
                @foreach ($tobSellingBrands as $value)
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="/administrator/public/images/{{ $value->image }}" alt="img">
                        </div>
                        <h6 class="text-center"> {{ $value->name }} </h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                @endforeach               
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
                            Top Selling Models
                        </p>
                        <h5 class="title mb-0">Top Selling Models People Love</h4>
                    </div>
                </div>
            </div>
            <div class="model_slider wow fadeInUp">
                @foreach ($tobSellingProducts as $value)
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="/administrator/public/images/{{ $value->image }}" alt="img">
                        </div>
                        <h6 class="text-center"> {{ $value->name }} </h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                @endforeach     
            </div>
           
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection