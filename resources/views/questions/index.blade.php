@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/report-banner.jpg') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Your Device Report</h4>
                    <p> Let us finalize your device value exactly by selecting to the following questions. </p>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Device Report</li>
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
                        <form class="form-horizontal" id="question_list_form" method="post" action="{{ url('given-accessories') }}" enctype="multipart/form-data">
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
                                                            <input class="form-check-input yes" questionval="{{ $value->description }}" type="radio" name="question_id[{{ $value->id }}]" id="answer_yes_{{$key}}" value="1" required>
                                                            <label class="form-check-label" for="answer_yes_{{$key}}">Yes</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="answer_list"  >
                                                        <div class="form-check ">
                                                            <input class="form-check-input no" type="radio" name="question_id[{{ $value->id }}]" id="answer_no_{{$key}}" value="0" required>
                                                            <label class="form-check-label" for="answer_no_{{$key}}">No</label>
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
                            <input type="hidden" name="veriation_type" id="veriation_type" value="{{$veriationType}}" >
                            <button type="submit" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle" style="margin-top: 20px;"> Continue <i class="fal fa-arrow-right ml-2"></i></button>
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
                                        <p> {{$veriationType}} </p>
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
            <div class="brand_slider wow fadeInUp">
                @foreach ($tobSellingProducts as $value)
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box product_image_box">
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