@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Sell Old Mobile Phone</h4>
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
                            <div class="variant_wrap row" >
                                @if($product->variant != '')
                                @foreach(json_decode($product->variant) as $key => $variant)
                                <div class="col-lg-4">
                                    <div class="form-group custom_form_style">
                                        <label for="veriation_price_{{$key}}" class="text-center variant" data-price="{{$variant->price}}" > {{$variant->ram}} | {{$variant->storage}} </label>
                                        <input id="veriation_price_{{$key}}" type="radio" name="veriation_price" class="veriation_price" class="form-control" value="{{$variant->price}}" required >
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            
                            <p > get upto </p>
                            <h3 class="product-price"> ₹ <span class="product-price_amount"> {{ number_format($product->max_price) }}</span> /- </h3>
                            <div class="calculate-price-btn">
                                @if($user)
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="product_id">
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
    <section class="section-padding wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Top Selling Brand
                        </p>
                        <h5 class="title mb-0">our top selling brand people likes</h4>
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
                        <h5 class="title mb-0">our top selling model people likes</h4>
                    </div>
                </div>
            </div>
            <div class="brand_slider wow fadeInUp">
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