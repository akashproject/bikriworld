@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Your Device : {{ $product->name }}</h4>
                    <p> Here At The Right Valuation: Get Cash In 24 Hours</p>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
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
            <div class="row justify-content-between prodduct-detail-wrap">
                <div class="col-lg-5 col-4 mb-md-80">
                    <!-- post details -->
                    <article class="post post_list style_2 post_details mb-0 product-left-image text-center">
                        <div class="post_img">
                            @if($product->image)
                            <img src="/administrator/public/images/{{ $product->image }}" alt="img">
                            @else 
                            <img src="https://via.placeholder.com/180x180" alt="img" class="">
                            @endif 
                        </div>
                    </article>
                </div>
                <div class="col-lg-7 col-8">
                    <form class="form-horizontal" method="post" action="{{ url('question') }}" id="checkexactvalue" enctype="multipart/form-data">
                        <div class="product-right-content">
                            <h3> {{ $product->name }} </h3>
                            <p > get upto </p>
                            <h3 class="product-price"> ₹ <span class="product-price_amount"> {{ number_format($product->max_price) }}</span> /- </h3>                            
                            <div class="variant_wrap row" >
                                <div class="col-12" >
                                    <h6>Select configuration For calculate exact price</h6>                                
                                </div>
                                <div class="col-12" >
                                    <div class="form-group form_style">
                                        <label class="padding-30px-left-right">Select Processor <span class="required">*</span></label>
                                        <select name="processor" id="deviceProcessor"  class="form-control device-configuration" required>
                                            <option  value=""> Click Here </option>
                                            @foreach ($processer as $value)
                                                <option  value="{{$value->price}}"> {{$value->price}} </option>
                                            @endforeach	
                                        </select>   
                                    </div>                   
                                </div>
                                <div class="col-12" >
                                    <div class="form-group form_style">
                                        <label class="padding-30px-left-right">Select Ram <span class="required">*</span></label>
                                        <select name="ram" id="deviceRam" class="form-control device-configuration" required>
                                            <option  value=""> Click Here</option>
                                            @foreach ($ram as $value)
                                                <option value="{{$value->price}}"> {{$value->value}} </option>
                                            @endforeach	
                                        </select>   
                                    </div>                   
                                </div>
                                <div class="col-12" >
                                    <div class="form-group form_style">
                                        <label class="padding-30px-left-right">Select Hard Disk<span class="required">*</span></label>
                                        <select name="hdd" id="deviceHarddisk" class="form-control device-configuration" required>
                                            <option  value=""> Click Here </option>
                                            @foreach ($hdd as $value)
                                                <option value="{{$value->price}}"> {{$value->value}} </option>
                                            @endforeach
                                        </select>   
                                    </div>                   
                                </div>
                            </div>
                            <div class="calculate-price-btn">
                                @if($user)
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                                    <input type="hidden" name="veriation_type" id="veriation_type">
                                    <input type="hidden" name="veriation_price" id="veriation_price" value="{{$product->max_price}}" >
                                    <button type="submit" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Get Exact Value <i class="fal fa-chevron-right ml-2"></i></button>
                                @else
                                    <a href="javascript:void(0)" class="open-login head_trigger thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Get Exact Value <i class="fal fa-chevron-right ml-2"></i></a>
                                @endif
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Section End -->
    @include('common.top-brand')
    @include('common.top-product')
    
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection