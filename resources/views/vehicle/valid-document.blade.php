@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/report-banner.jpg') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Your Vehicle Report</h4>
                    <p> Let us finalize your vehicle value exactly by selecting to the following questions. </p>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Valid Document</li>
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
                            <h4 class="summary-heading" > Let us know following valid document on your vahicle! </h4>
                            <p class="summary-description" > What you have Valid paper with your vahicle </p>
                        </div>
                        <form class="form-horizontal" id="device-accessories" method="post" action="{{ url('vehicle-condition') }}" enctype="multipart/form-data">
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
                            <div class="row accessories_list" >
                                @if($accessories)
                                    @foreach ($accessories as $key => $value)
                                    <div class="col-lg-3 col-6 relative">
                                        <input type="checkbox" name="accessories[]" id="accessory_{{$value->id}}" class="accessory_input" value="{{$value->id}}">   
                                        <label for="accessory_{{$value->id}}" class="accessories_wrap" dataquestion="{{$value->id}}">                                           
                                            <img src="{{ url('assets/images/icons') }}/{{$value->icon}}.png" style="width: auto;">
                                            <h6> {{$value->name}} </h6>
                                        </label>
                                    </div>
                                    @endforeach	
                                @endif
                            </div>
                            <button type="submit" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> 
                                Continue <i class="fal fa-arrow-right ml-2"></i>
                            </button>
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
                                        <p> {{ $veriationType }} </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar_widget">
                            <div class="sidebar_widget_inner">
                                <h6> Valid Paper with vehicle </h6>
                                <ul class="info_widget device_summary">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('common.top-brand')
    @include('common.top-product')
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection