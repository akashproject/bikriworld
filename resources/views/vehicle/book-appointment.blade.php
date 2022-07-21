@extends('layouts.main')
    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Fill up your Information</h4>
                    <p> Please fill up the right details for pickup </p>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Book Appointment </li>
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
            <form class="form-horizontal" id="checkoutform" method="post" action="{{ url('confirm-booking') }}" enctype="multipart/form-data">
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
                <div class="row">
                    <div class="col-lg-8 mb-md-80">
                        <h3> Personal Information </h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Name<span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control" autocomplete="off" value="{{ $user->name }}" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Email Address<span class="required">*</span></label>
                                    <input type="text" name="email" class="form-control" autocomplete="off" value="{{ $user->email }}" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Mobile Number<span class="required">*</span></label>
                                    <input type="text" name="mobile" class="form-control" autocomplete="off" value="{{ $user->mobile }}" required="" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Alternative Number</label>
                                    <input type="text" name="alt_mobile" class="form-control" placeholder="Enter Alternative Number" autocomplete="off" value="{{$user->alt_mobile}}" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h3> Vehicle Location </h3>
                            </div>
                            <div class="col-lg-12">
                                <div class="row answer_row" >
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input address_type" type="radio" name="type" id="type_home" value="Home" >
                                                <label class="form-check-label" for="type_home">Home</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input address_type" type="radio" name="type" id="type_offile" value="Office" >
                                                <label class="form-check-label" for="type_offile">Office</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input address_type" type="radio" name="type" id="type_other" value="Other" >
                                                <label class="form-check-label" for="type_other">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Address <span class="required">*</span></label>
                                    <input type="text" name="address_1" id="address_1" class="form-control" autocomplete="off" value="" placeholder="Please Enter Address" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">City <span class="required">*</span></label>
                                    <input type="text" name="city" id="city" class="form-control" autocomplete="off" value="" placeholder="Please Enter City" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">State <span class="required">*</span></label>
                                    <input type="text" name="state" id="state" class="form-control" autocomplete="off" value="" placeholder="Please Enter State" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Pincode <span class="required">*</span></label>
                                    <input type="text" name="pincode" id="pincode" class="form-control" autocomplete="off" value="" placeholder="Please Enter Pincode" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h3> Schedule Appointment Time </h3>                                
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Date TIme <span class="required">*</span></label>
                                    <input type="text" name="pickup_schedule" class="form-control" autocomplete="off" id="datepicker" value="" placeholder="Please Select Date" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3> Selling Vehicle </h3>
                        <div class="sidebar style_3">
                            <div class="sidebar_widget recent_widgets">
                                <h5 class="widget_title">Vehicle Details</h5>
                                <ul>
                                    <li style="padding: 10px 25px;">
                                        <div class="image">
                                            @if($product->image)
                                            <img src="/administrator/public/images/{{ $product->image }}" alt="img">
                                            @else 
                                            <img src="https://via.placeholder.com/180x180" alt="img" class="">
                                            @endif 
                                        </div>
                                        <div class="text">
                                            <h6 class="mb-0">
                                                <a href="javascript:void(0)"> {{ $product->name }}</a>
                                            </h6>
                                            <p> {{ $vehicleData['variation_type'] }}</p>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="sidebar_widget text-center">
                                <div class="sidebar_widget_inner">
                                    <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}" >
                                    <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}" >
                                    <input type="hidden" name="variation_type" id="" value="{{ $vehicleData['variation_type'] }}" >
                                    <button type="submit" class="sell-now-btn custom-cta-btn bg-thm-color-two btn-rectangle"> Confirm Booking <i class="fal fa-chevron-right ml-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Section End -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection