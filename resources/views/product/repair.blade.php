@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Select {{$brand->name}} Model  </h4>
                    <p> Get Certified original parts of {{$brand->name}} </p>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Select Model</li>
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
    <section class="section-padding" style="">

        <div class="container">  
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title left-align">
                        <p class="subtitle mb-0">
                            <i class="fal fa-book"></i>
                            Please select device
                        </p>
                        <h6 class="title mb-0">choose device of parts</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <div class="search_bar">
                            <input type="text" name="#" id="search_product" placeholder="Search Your Device" autocomplete="off">
                            <i class="fal fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>        
            <div class="row">
                @if($products)
                @foreach ($products as $value)
                <div class="col-lg-2 col-6 product_filter_list">
                    <div class="team_block style_2 style_3">
                        <div class="team_img product_img">
                            <a href="https://api.whatsapp.com/send?phone=7439995068&amp;text=Want to Buy Part of {{ $value->name }}" >
                            @if($value->image)
                            <img src="https://administrator.bikriworld.com/public/images/{{ $value->image }}" alt="img">
                            @else 
                            <img src="https://via.placeholder.com/180x180" alt="img" class="">
                            @endif   
                            </a>
                            
                        </div>
                        <p class="thm-color-two mb-0 font-weight-bold"><a href="javascript:void(0)" style="font-size: 13px;line-height: 18px;" > {{ $value->name }} </a></p>
                        <p class="mb-0 mr-0 font-weight-bold bg-thm-color-two thm-color-two-shadow btn-rectangle ">
                            <a style="color: white;" href="https://api.whatsapp.com/send?phone=7439995068&amp;text=Want to Buy Part of {{ $value->name }}">
                                Connect to seller
                            </a>
                        </p>
                    </div>
                </div>
                @endforeach	
                @else
                <div class="col-12 text-center">
                    <h3> No Product Found Yet! We Are Coming Soon Here </h3>
                </div>
                @endif                    
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Could not find your device?
                        </p>
                        <h6 class="">Click <a href="/add-device" style="color:#007bff;" >Here</a> to add your device</h6>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <!-- Team End -->
    @include('common.top-brand')
    @include('common.top-product')
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection