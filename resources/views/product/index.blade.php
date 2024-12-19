@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Select Your {{$brand->name}} Device  </h4>
                    <p> Easily Sell you device Online For Cash In 24 Hours: Free PickUp </p>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Select Device</li>
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
                        <h6 class="title mb-0">choose device what you like to sell</h6>
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
            @if(count($series) > 1) 
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align" style="padding: 8px 0;">
                        <p class="subtitle mb-0">
                            <i class="fal fa-book"></i>
                            Select series
                        </p>
                    </div>
                </div>
            </div>
            <div class="row series_filter_wraper">
                
                    @foreach($series as $value)
                        <div class="col-lg-3 col-6 mt-2 series_filter">
                            <a href="javascript:void(0)" class="series_filter_list series_no_{{ $value->id }}" data-id="{{ $value->id }}" >
                                {{ $value->series }} <span class="reset_series" > <i class="fal fa-times-circle"></i> </span>
                            </a>
                        </div>
                    @endforeach
                
            </div> 
            @endif
            
            <div class="row model_wraper">
                @if($products)
                @foreach ($products as $value)
                <div class="col-lg-2 col-4 product_filter_list series_{{$value->series_id}}" data-series="" >
                    <div class="team_block style_2 style_3">
                        <div class="team_img product_img">
                            <a href="{{ url('sell-old-product') }}/{{ $value->slug }}" >
                            @if($value->image)
                            <img src="https://administrator.bikriworld.com/public/images/{{ $value->image }}" alt="img">
                            @else 
                            <img src="https://via.placeholder.com/180x180" alt="img" class="">
                            @endif   
                            </a>
                        </div>
                        <p class="thm-color-two mb-0 font-weight-bold"><a href="{{ url('sell-old-product') }}/{{ $value->slug }}" style="font-size: 13px;line-height: 18px;" > {{ $value->name }} </a></p>
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
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection