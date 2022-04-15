@extends('layouts.main')
    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/subheader.jpg') }});">
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
            <form class="form-horizontal" id="checkoutform" method="post" action="{{ url('confirm-pickup') }}" enctype="multipart/form-data">
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
                            <div class="col-lg-12">
                                <h3> Pickup Location </h3>
                            </div>
                            <div class="col-lg-12">
                            <div class="row answer_row" >
                                <div class="col-4">
                                    <div class="answer_list"  >
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="type" id="" value="home" >
                                            <label class="form-check-label" for="">Home</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="answer_list"  >
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="type" id="" vale="office" >
                                            <label class="form-check-label" for="">Office</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="answer_list"  >
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="type" id="" vale="other" >
                                            <label class="form-check-label" for="">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Address <span class="required">*</span></label>
                                    <input type="text" name="address_1" class="form-control" autocomplete="off" value="" placeholder="Please Enter Address" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">City <span class="required">*</span></label>
                                    <input type="text" name="city" class="form-control" autocomplete="off" value="" placeholder="Please Enter City" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">State <span class="required">*</span></label>
                                    <input type="text" name="state" class="form-control" autocomplete="off" value="" placeholder="Please Enter State" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Pincode <span class="required">*</span></label>
                                    <input type="text" name="pincode" class="form-control" autocomplete="off" value="" placeholder="Please Enter Pincode" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h3> Payment Mode </h3>
                            </div>
                            <div class="col-lg-12">
                                <div class="row answer_row" >
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="payment_mode" id="" value="Bank Transfar" >
                                                <label class="form-check-label" for="">Bank Transfar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="payment_mode" id="" value="Upi" >
                                                <label class="form-check-label" for="">UPI</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="payment_mode" id="" value="Online Payment" >
                                                <label class="form-check-label" for="">Online Payment</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h3> Schedule Pickup Time </h3>                                
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
                        <h3> Selling Product </h3>
                        <div class="sidebar style_3">
                            <div class="sidebar_widget recent_widgets">
                                <h5 class="widget_title">Device Details</h5>
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
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="sidebar_widget text-center">
                                <div class="sidebar_widget_inner">
                                    <ul class="info_widget">
                                        <li>
                                            <span style="float:left">Base Price</span>
                                            <span style="float:right">₹{{ number_format($calculatedData['exact_price'])}}/- </span>
                                        </li>
                                        <li >
                                            <span style="float:left">Pickup Charges</span>
                                            <span style="float:right"><s style="color:red;margin-right:20px" >₹50/- </s> Free</span>
                                        </li>
                                        <li>
                                            <span style="float:left">Total Amount</span>
                                            <span style="float:right">₹{{ number_format($calculatedData['exact_price'])}}/- </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar_widget_inner">
                                    <input type="hidden" name="user_id" id="" value="{{ $user->id }}" >
                                    <input type="hidden" name="product_id" id="" value="{{ $product->id }}" >
                                    <button type="submit" class="sell-now-btn custom-cta-btn bg-thm-color-two btn-rectangle"> Confirm Pickup <i class="fal fa-chevron-right ml-2"></i></button>
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