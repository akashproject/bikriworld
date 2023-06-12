@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Your Device : {{ $vehicle->name }}</h4>
                    <p> Here At The Right Valuation: Get Cash In 24 Hours</p>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $vehicle->name }}</li>
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
                            @if($vehicle->image)
                            <img src="https://administrator.bikriworld.com/public/images/{{ $vehicle->image }}" alt="img">
                            @else 
                            <img src="https://via.placeholder.com/180x180" alt="img" class="">
                            @endif 
                        </div>
                    </article>
                </div>
                <div class="col-lg-7 col-8">
                    <form class="form-horizontal" method="post" action="{{ url('given-document') }}" id="checkexactvalue" enctype="multipart/form-data">
                        <div class="product-right-content">
                            <h3> {{ $vehicle->name }} </h3>
                            
                            <p > Get upto </p>
                            <h3 class="product-price"> ₹ <span class="product-price_amount"> {{ number_format($vehicle->max_price) }}</span> /- </h3>
                            <div class="variant_wrap row" >
                                <div class="col-12" >
                                    <h6>Select The Options Below </h6>                                
                                </div>
                                @if($year != '')
                                <div class="col-12" >
                                    <div class="form-group form_style">
                                        <label class="padding-30px-left-right">Select Year <span class="required">*</span></label>
                                        <select name="year" id="deviceYear"  class="form-control vehicle-configuration" required>
                                            <option  value=""> Release Year  </option>
                                            @foreach ($year as $value)
                                                <option  value="{{$value->name}}"> {{$value->name}} </option>
                                            @endforeach	
                                        </select>   
                                    </div>                   
                                </div>
                                @endif
                                <div class="col-12" >
                                    <div class="form-group form_style">
                                        <label class="padding-30px-left-right">Registration City <span class="required">*</span></label>
                                        <input type="text" list="city" placeholder="Registration City" name="city" class="form-control vehicle-configuration" required />
                                        <!-- <datalist id="city" >
                                            <option  value=""> Select City </option>
                                            @foreach ($city as $value)
                                                <option  value="{{$value->name}}"> {{$value->name}} </option>
                                            @endforeach	
                                        </datalist>    -->
                                    </div>                   
                                </div>
                                <div class="col-12" >
                                    <div class="form-group form_style">
                                        <label class="padding-30px-left-right">Kilometer Driven <span class="required">*</span></label>
                                        <select name="kmdriven" id="kmdriven"  class="form-control vehicle-configuration" required>
                                            <option  value="">Kilometer Driven   </option>
                                            @foreach ($km as $value)
                                                <option  value="{{$value->name}}"> {{$value->name}} </option>
                                            @endforeach	
                                        </select>   
                                    </div>                   
                                </div>
                            </div>
                            <div class="calculate-price-btn">
                                @csrf             
                                <input type="hidden" value="{{ $vehicle->id }}" id="vehicle_id" name="vehicle_id">    
                                @if($user)                                                                       
                                    <button type="submit" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Next <i class="fal fa-chevron-right ml-2"></i></button>
                                @else
                                    <a href="javascript:void(0)" id="product_sign_in" class="open-login head_trigger thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Next <i class="fal fa-chevron-right ml-2"></i></a>
                                @endif      
                                <!-- @if($user)
                                    
                                @else
                                    <a href="javascript:void(0)" class="open-login head_trigger thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Schedule Appointment <i class="fal fa-chevron-right ml-2"></i></a>
                                @endif -->
                                
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