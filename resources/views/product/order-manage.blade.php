@extends('layouts.main')

    @section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row" >
                <div class="col-md-12" >
                    <div class="summary-wrap">
                        <h5 class="report-heading"> Order Number : {{ $order->service_no }} </h5>
                        <div class="row" >
                           <div class="col-lg-6 col-12"> 
                                <h6 style="margin:0;"> {{ $order->product_name }} ( {{ $order->variation_type }} ) </h6>
                                <p style="margin:0;"> Selling Price : ₹. <strong>{{ number_format($order->amount) }}/-  </strong></p>
                                <p> Payment Mode :<strong>{{ $order->payment_mode }}  </strong></p>
                            </div>
                           <div class="col-lg-6 col-12 text-right">
                                <a href="javascript:void(0)" class="thm-btn bg-thm-color-one thm-color-two-shadow btn-rectangle payment_mode_form_btn"> Change Payment </a>
                                <a href="{{ url('payments') }}" class="thm-btn bg-thm-color-one thm-color-two-shadow btn-rectangle payment_mode_form_btn"> Add Payment </a>
                            </div>
                        </div>
                        <div class="row payment_mode_form" style="display:none;" >
                            <div class="col-lg-12">
                                <div class="row answer_row" >
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="payment_mode" id="" value="Bank Transfar" {{ ($order->payment_mode=="Bank Transfar")? "checked" : "" }} >
                                                <label class="form-check-label" for="">Bank Transfar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="payment_mode" id="" value="Upi" {{ ($order->payment_mode=="Upi")? "checked" : "" }}>
                                                <label class="form-check-label" for="">UPI</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="payment_mode" id="" value="Online Payment" {{ ($order->payment_mode=="Online Payment")? "checked" : "" }}>
                                                <label class="form-check-label" for="">Online Payment</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="report-heading"> Order Summary </h6>
                        <div class="row" >
                            <div class="col-lg-9 col-12">
                                <h6 style="margin:0;">Pickup Address : {{ $order->pickup_address }} {{ $order->pickup_city }} {{ $order->pickup_state }} {{ $order->pincode }} </h5>
                                <p> Pickup Schedule : <strong> {{ $order->pickup_schedule }} </strong>
                            </div>
                            <div class="col-lg-3 col-12 text-right">
                                <a href="javascript:void(0)" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle address_form_btn"> Edit</a>
                            </div>
                        </div>
                        <div class="row address_form"  style="display:none;">
                            <div class="col-lg-12">
                                <h6 style="margin:0;"> Pickup Location </h6>
                            </div>
                            <div class="col-lg-12">
                                <div class="row answer_row" >
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input address_type" type="radio" name="type" id="type_home" value="Home" {{ ($order->type=="Home")? "checked" : "" }}>
                                                <label class="form-check-label" for="type_home">Home</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input address_type" type="radio" name="type" id="type_offile" value="Office" {{ ($order->type=="Office")? "checked" : "" }}>
                                                <label class="form-check-label" for="type_offile">Office</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input address_type" type="radio" name="type" id="type_other" value="Other"  {{ ($order->type=="Other")? "checked" : "" }}>
                                                <label class="form-check-label" for="type_other">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Address <span class="required">*</span></label>
                                    <input type="text" name="address_1" class="form-control" autocomplete="off" value="{{ $order->pickup_address }}" placeholder="Please Enter Address" required="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">City <span class="required">*</span></label>
                                    <input type="text" name="city" class="form-control" autocomplete="off" value="{{ $order->pickup_city }}" placeholder="Please Enter City" required="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">State <span class="required">*</span></label>
                                    <input type="text" name="state" class="form-control" autocomplete="off" value="{{ $order->pickup_state }}" placeholder="Please Enter State" required="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Pincode <span class="required">*</span></label>
                                    <input type="text" name="pincode" class="form-control" autocomplete="off" value="{{ $order->pincode }}" placeholder="Please Enter Pincode" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h6 style="margin:0;"> Pickup Schedule </h6>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Date TIme <span class="required">*</span></label>
                                    <input type="text" name="pickup_schedule" class="form-control" autocomplete="off" id="datepicker" value="{{ $order->pickup_schedule }}" placeholder="Please Select Date" required="" >
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="save_order_btn thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle" style="display:none"> Save</a>
                        </div>
                    </div>
                </div >
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection