@extends('layouts.main')

    @section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row" >
                <div class="col-md-12" >
                    <div class="summary-wrap">
                        <h5 class="report-heading"> Order Number : {{ $order->service_no }} 
                        @if($order->status == "pending")
                            <a href="#cancel-order" class="thm-btn bg-thm-color-six thm-color-two-shadow btn-rectangle cancel_payment_btn open-popup-link"> Cancel Order</a>
                        @endif 
                        </h5>
                        
                        <div class="row" >
                            <div class="col-lg-6 col-12"> 
                                <h6 style="margin:0;"> {{ $order->product_name }} ( {{ $order->variation_type }} ) </h6>
                                <p style="margin:0;"> Selling Price : ₹. <strong>{{ number_format($order->amount) }}/-  </strong></p>
                                <p> Payment Mode :<strong>{{ $order->payment_mode }}  </strong></p>
                            </div>
                            <div class="col-lg-6 col-12 text-right" style="margin-bottom: 20px;">
                                 @if($order->status == "pending")
                                <a href="javascript:void(0)" class="thm-btn bg-thm-color-one thm-color-two-shadow btn-rectangle payment_mode_form_btn" style="margin-bottom:20px"> Change Payment </a>
                                
                                <a href="{{ url('payments') }}" class="thm-btn bg-thm-color-one thm-color-two-shadow btn-rectangle "> Add Payment </a>
                                @endif
                            </div>
                        </div>
                        <form class="form-horizontal" id="updateOrder" method="post" action="{{ url('update-order') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row payment_mode_form" style="display:none;" >
                            <div class="col-lg-12">
                                <div class="row answer_row" >
                                    <div class="col-12 col-lg-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="payment_mode" value="Bank Transfar" {{ ($order->payment_mode=="Bank Transfar")? "checked" : "" }} >
                                                <label class="form-check-label" for="">Bank Transfar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="payment_mode" value="Upi" {{ ($order->payment_mode=="Upi")? "checked" : "" }}>
                                                <label class="form-check-label" for="">UPI</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="answer_list"  >
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="payment_mode" value="Online Payment" {{ ($order->payment_mode=="Online Payment")? "checked" : "" }}>
                                                <label class="form-check-label" for="">Online Payment</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" class=" thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Save</a>
                                </div>
                            </div>
                        </div>
                        <h6 class="report-heading"> Order Summary </h6>
                        <div class="row" >
                            <div class="col-lg-9 col-12">
                                <h6 style="margin:0;">Pickup Address : {{ $order->pickup_address }} {{ $order->pickup_city }} {{ $order->pickup_state }} {{ $order->pincode }} </h5>
                                <p style="margin:0;"> Pickup Schedule : <strong> {{ $order->pickup_schedule }} </strong> </p>
                                <p style="margin:0;"> Order Status : <strong> {{ $order->status }} </strong></p> 
                                @if($order->status == "cancelled")
                                <p> Cancellation Reason : <strong> {{ $order->reason }} </strong></p> 
                                @endif
                            </div>
                            <div class="col-lg-3 col-12 text-right">
                                @if($order->status == "pending")
                                <a href="javascript:void(0)" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle address_form_btn"> Edit</a>
                                @endif
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
                                                <input class="form-check-input address_type" type="radio" name="type" id="type_home" value="Home" {{ ($order->type=="Home")? "checked" : "" }} >
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
                                    <input type="text" name="pickup_address" id="address_1" class="form-control" autocomplete="off" value="{{ $order->pickup_address }}" placeholder="Please Enter Address" required="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">City <span class="required">*</span></label>
                                    <input type="text" name="pickup_city" id="city" class="form-control" autocomplete="off" value="{{ $order->pickup_city }}" placeholder="Please Enter City" required="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">State <span class="required">*</span></label>
                                    <input type="text" name="pickup_state" id="state" class="form-control" autocomplete="off" value="{{ $order->pickup_state }}" placeholder="Please Enter State" required="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Pincode <span class="required">*</span></label>
                                    <input type="text" name="pincode" id="pincode" class="form-control" autocomplete="off" value="{{ $order->pincode }}" placeholder="Please Enter Pincode" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h6 style="margin:0;"> Pickup Schedule </h6>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Date Time <span class="required">*</span></label>
                                    <input type="text" name="pickup_schedule" class="form-control" autocomplete="off" id="datepicker" value="{{ $order->pickup_schedule }}" placeholder="Please Select Date" required="" >
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class=" thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle" > Save</a>
                            </div>
                        </div>
                        <div class="">
                            <input type="hidden" name="order_id" value="{{ $order->id }}" >
                            
                        </div>
                        </form>
                    </div>
                </div >
            </div>
        </div>
    </section>
    <div id="success-message" class="white-popup mfp-hide text-center">
        <h3 style="color:#00986b"><i class="fal fa-check-circle"></i> Success</h3>
        <p>Your Order has been successfully updated</p>
    </div>

    <div id="cancel-order" class="white-popup mfp-hide">
        <h5 style="color:#00986b" class="text-center"><i class="fal fa-check-circle"></i> Reason for cancellation</h3>
        <p> Can you let us know the reason for cancellation </p>
        <form class="form-horizontal" id="cancelOrder" method="post" action="{{ url('cancel-order') }}" enctype="multipart/form-data">
        @csrf
        <ul>
            <li> <input type="radio" name="reason" id="better" value="Got a better price" required> <label for="better" >Got a better price </label> </li>
            <li> <input type="radio" name="reason" id="network" value="Sold it in my network" required> <label for="network" > Sold it in my network </label> </li>
            <li> <input type="radio" name="reason" id="someone" value="Gave it to someone" required>  <label for="someone" > Gave it to someone </label></li>
            <li> <input type="radio" name="reason" id="reschedule" value="Would like to reschedule" required> <label for="reschedule" > Would like to reschedule </label></li>
            <li> <input type="radio" name="reason" id="contact" value="No one from Bikriworld contacted me" required> <label for="contact" > No one from Bikriworld contacted me </label></li>
            <li> <input type="radio" name="reason" id="documents" value="Required documents not available" required> <label for="documents" > Required documents not available </label></li>
            <li> <input type="radio" name="reason" id="payment" value="Not Bikriworld about payment" required> <label for="payment" > Not Bikriworld about payment </label></li>
            <li> <input type="radio" name="reason" id="emi" value="Device is still under EMI" required> <label for="emi" > Device is still under EMI </label></li>
            <li> <input type="radio" name="reason" id="confident" value="Not confident about Bikriworld!" required> <label for="confident" > Not confident about Bikriworld! </label></li>
            <li> <input type="radio" name="reason" id="interested" value="Not interested, was just exploring the option!"> <label for="interested" > Not interested, was just exploring the option! </label></li>
            <li> <input type="radio" name="reason" id="other" required> <label for="other" > Others! </li>
            <li class="form-group custom_form_style">
                <textarea name="custom_reason" class="form-control" id="other_field" placeholder="Please type reason" style="display:none" ></textarea>
            </li>    
        </ul>
        <input type="hidden" name="order_id" value="{{ $order->id }}" >
        <button type="submit" class="thm-btn bg-thm-color-one thm-color-two-shadow btn-rectangle "> Submit </button>
        </form>
    </div>
    <a href="#success-message" class="open-popup-link" style="visibility:hidden" >Enquire Now</a>

    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection