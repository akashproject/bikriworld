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
            <form class="form-horizontal" method="post" action="{{ url('book-repair') }}" id="checkexactvalue" enctype="multipart/form-data">
            @csrf
            <div class="row ">               
                <div class="col-lg-8 summary-wrap">
                    <div class="row">
                        <div class="col-lg-2">
                            <article class="post post_list style_2 post_details mb-0 product-left-image text-center">
                                <div class="post_img" style="width:95px">
                                    @if($product->image)
                                    <img src="https://administrator.bikriworld.com/public/images/{{ $product->image }}" alt="img">
                                    @else 
                                    <img src="https://via.placeholder.com/180x180" alt="img" class="">
                                    @endif 
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-9">
                            <h6 style="margin:0;"> {{ $product->name }} </h6>
                            <span style="display: block;width: 100%;font-weight: 600;line-height: 15px;" > 
                                    Please add parts you want to repair </span>
                        </div>
                    </div>
                    
                    <div class="product-right-content">
                        <div class="calculate-price-btn">
                            <div class="row accessories_list">
                                @if($parts)
                                    @foreach ($parts as $key => $value)
                                    <div class="col-md-2 col-6 relative">
                                        <input type="checkbox" name="parts[]" id="accessory_{{$value->id}}" class="accessory_input" value="{{$value->id}}">   
                                        <label for="accessory_{{$value->id}}" class="accessories_wrap" dataquestion="{{$value->id}}" style="padding: 10px 0 0 0;overflow: hidden;">
                                            <img src="https://bikriworld.com/assets/images/icons/charger.png" style="width: auto;">
                                            <h6> {{$value->name}} </h6>
                                            <span class="parts-price" > {{$value->price}}/- </h6>
                                        </label>
                                    </div>
                                    @endforeach	
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4">
                    <!-- post details -->
                    <div class="sidebar style_3">
                        <div class="sidebar_widget text-center">          
                            <h5 class="widget_title">Price Summary</h5>                 
                            <div class="sidebar_widget_inner">
                                <ul class="info_widget repair-part-lists">
                                    <li id="1"> Display <span> 1200 </span></li>
                                    <li id="2"> Speaker <span> 1200 </span></li>
                                    <li id="4"> Mic <span> 1200 </span></li>
                                </ul>
                            </div>
                            <div class="sidebar_widget_inner">
                                @if($user)                                                                       
                                    <button type="submit" class="sell-now-btn custom-cta-btn bg-thm-color-two btn-rectangle"> Book Now <i class="fal fa-chevron-right ml-2"></i></button>
                                @else
                                    <a href="javascript:void(0)" id="product_sign_in" class="open-login head_trigger sell-now-btn custom-cta-btn bg-thm-color-two btn-rectangle"> Book Now <i class="fal fa-chevron-right ml-2"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <input type="hidden" value="{{ $product->id }}" name="product_id">   
            </form>   
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