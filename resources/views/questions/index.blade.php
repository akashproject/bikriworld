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
    <section class="section-padding wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="summary-wrap" >
                        <div class="question-summary" >
                            <h4 class="summary-heading" > Let us know some questions about your device ! </h4>
                            <p class="summary-description" > What is the current condition of your device </p>
                        </div>
                        <form class="form-horizontal" method="post" action="{{ url('calculate-price') }}" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if($questions)
                                @foreach ($questions as $key => $value)
                                    <div class="row question_list" >
                                        <div class="col-lg-12">
                                            <h5 >{{$key+1}}. <span class="question_data">{{ $value->question }} <span> </h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="row answer_row" dataquestion="{{$value->id}}">
                                                <div class="col-lg-6 ">
                                                    <div class="answer_list"  >
                                                        <div class="form-check ">
                                                            <input class="form-check-input yes" questionval="{{ $value->description }}" type="radio" name="question_id[{{ $value->id }}]" id="" value="1" >
                                                            <label class="form-check-label" for="">Yes</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="answer_list"  >
                                                        <div class="form-check ">
                                                            <input class="form-check-input no" type="radio" name="question_id[{{ $value->id }}]" id="" value="0" >
                                                            <label class="form-check-label" for="">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach	
                            @endif 
                            <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}" >
                            <input type="hidden" name="veriation_price" id="veriation_price" value="{{$veriationPrice}}" >
                            <button type="submit" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Calculate Price <i class="fal fa-calculator ml-2"></i></a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="sidebar style_3">
                        <div class="sidebar_widget recent_widgets">
                            <h5 class="widget_title">Device Details</h5>
                            <ul>
                                <li style="padding: 10px 25px;">
                                    <div class="image">
                                    @if($product->image)
                                    <img src="/administrator/public/images/{{ $product->image }}" alt="img" class="image-fit">
                                    @else 
                                    <img src="https://via.placeholder.com/180x180" alt="img" class="image-fit">
                                    @endif 
                                    </div>
                                    <div class="text">
                                        <h6 class="mb-0">
                                            <a href="course-details.html">{{$product->name}}</a>
                                        </h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar_widget">
                            <div class="sidebar_widget_inner">
                                <h6> Device Summary </h6>
                                <ul class="info_widget device_summary">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Iphone 13</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Iphone 12</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Iphone 12</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Apple</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Iphone 11</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Iphone 9</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
            </div>
           
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection