@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Your Device : {{ $product->name }}</h4>
                    <p> Pay After Parts Verify in your hand</p>
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
                                <div class="row parts_list">
                                    @if(count($parts) > 0)
                                        @foreach ($parts as $key => $value)
                                        <div class="col-md-2 col-6 relative">
                                            <input type="checkbox" name="parts[{{$value->id}}]" id="parts_{{$value->id}}" class="parts_input" value="{{$product->parts[$value->id]}}">   
                                            <label for="parts_{{$value->id}}" class="parts_wrap" dataquestion="{{$value->id}}" style="padding: 10px 0 0 0;overflow: hidden;">
                                                <img src="https://bikriworld.com/assets/images/parts/{{$value->icon}}.png" style="width: auto;">
                                                <h6> {{$value->name}} </h6>
                                                <span class="parts-price" > {{$product->parts[$value->id]}}/- </h6>
                                            </label>
                                        </div>
                                        @endforeach	
                                    @else 
                                        <div class="text-center"> 
                                            <h4> Coming Soon </h4>
                                        </div>
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
                                    <ul class="info_widget device_summary">
                                        @foreach ($parts as $key => $value)
                                            <li id="{{$value->id}}" style="display:none;text-align: left;" > {{$value->name}} <span class="" style="float: right;text-align: right;display: flow;font-size: 16px;font-weight: 800;" >₹{{$product->parts[$value->id]}}</span> </li >
                                        @endforeach	
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