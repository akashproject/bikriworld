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
                            <img src="https://administrator.bikriworld.com/public/images/{{ $product->image }}" alt="img">
                            @else 
                            <img src="https://via.placeholder.com/180x180" alt="img" class="">
                            @endif 
                        </div>
                    </article>
                </div>
                <div class="col-lg-7 col-8">
                    <form class="form-horizontal" method="post" action="{{ url('question') }}" id="checkexactvalue" enctype="multipart/form-data">
                        @csrf
                        <div class="product-right-content">
                            <h3> {{ $product->name }} </h3>
                           
                            <div class="variant_wrap row" >
                                @if($product->variant != '')
                                <span style="display: block;width: 100%;margin-left: 12px;margin-bottom: 8px;font-weight: 600;line-height: 15px;" > Please Select device specification </span>
                                <div class="col-12" >
                                    <div class="form-group form_style">
                                        <select name="veriation_choice" id="macbook_config"  class="form-control mackbook_veriation_price" required>
                                            <option value="" > Select Your Configuration
                                            @foreach(json_decode($product->variant) as $key => $variant)
                                                <option value="{{$variant->price}}" > {{$variant->ram}} {{($variant->ram)?'|':''}} {{$variant->storage}} </option>
                                            @endforeach	
                                        </select>   
                                    </div>                   
                                </div>
                               
                                @endif
                            </div>
                            
                            <p > get upto </p>
                            <h3 class="product-price"> ₹ <span class="product-price_amount"> {{ number_format($product->max_price) }}</span> /- </h3>
                            <div class="calculate-price-btn">
                                <input type="hidden" value="{{ $product->id }}" name="product_id">
                                <input type="hidden" name="veriation_type" id="veriation_type">
                                <input type="hidden" name="veriation_price" id="veriation_price" value="{{$product->max_price}}" >
                                <input type="hidden" name="series_price" id="series_price" value="{{(isset($series->price))?$series->price:''}}" >
                                @if($user)                                                                       
                                    <button type="submit" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Get Exact Value <i class="fal fa-chevron-right ml-2"></i></button>
                                @else
                                    <a href="javascript:void(0)" id="product_sign_in" class="open-login head_trigger thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Get Exact Value <i class="fal fa-chevron-right ml-2"></i></a>
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