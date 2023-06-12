@extends('layouts.main')

    @section('content')
    <!-- Subheader End -->
    <section class="section-padding">
        <div class="container">
            <div class="row" >
                <div class="col-lg-4 ">
                    <div class="sidebar style_2">
                        <div class="sidebar_widget">
                            <!-- <h5 class="widget_title">Category</h5> -->
                            <ul class="category_widgets">
                                <li>
                                    <a href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{ url('pickups') }}">Pickups</a>
                                </li>
                                <li class="active">
                                    <a href="{{ url('payments') }}">Payments</a>
                                </li>
                                <li>
                                    <a href="{{ url('addresses') }}">Addresses</a>
                                </li>
                                <li>
                                    <a href="{{ url('bw-earning') }}">BW Earning</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order_list">
                    <h5 class="page_title"> Payment Information </h5>
                    <form class="form-horizontal" id="paymentform" method="post" action="{{ url('save-payment') }}" enctype="multipart/form-data">
                    @csrf
                        @if ($message = Session::get('message'))
                         <p class="alert ">{{ Session::get('message') }}</p>
                        @endif
                        <h6 style="margin-top: 26px;"> Bank Details </h6>
                        <div class="row ">
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Bank Name <span class="required">*</span></label>
                                    <input type="text" value="{{$payment->bank_name}}" name="bank_name" class="form-control" autocomplete="off" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Account Number <span class="required">*</span></label>
                                    <input type="number" value="{{$payment->account_no}}" name="account_no" class="form-control" id="account_no" autocomplete="off" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Confirm Account Number <span class="required">*</span></label>
                                    <input type="password" value="{{$payment->account_no}}" name="c_account_no" class="form-control" autocomplete="off" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Account Holder Name<span class="required">*</span></label>
                                    <input type="text" value="{{$payment->account_holder_name}}" name="account_holder_name" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">IFSC Code<span class="required">*</span></label>
                                    <input type="text" value="{{$payment->ifsc_code}}" name="ifsc_code" class="form-control" autocomplete="off">
                                </div>
                            </div>                           
                        </div>
                        <h6 style="margin-top: 26px;"> UPI Details </h6>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">UPI Id<span class="required">*</span></label>
                                    <input type="text" value="{{$payment->upi_id}}" name="upi_id" class="form-control" autocomplete="off" placeholder="Enter Your UPI ID" >
                                </div>
                            </div> 
                        </div>
                        <h6 style="margin-top: 26px;"> Online Payment </h6>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">PhonePay/Gpay/PayTm<span class="required">*</span></label>
                                    <input type="number" value="{{$payment->online_payment_no}}" name="online_payment_no" class="form-control" autocomplete="off" placeholder="Enter Mobile Number" >
                                </div>
                            </div> 
                        </div>
                        <div class="row " style="margin-top: 30px;">
                            <div class="col-12">
                                <input type="hidden" name="user_id" value="{{$user->id}}" >
                                <button type="submit" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Update <i class="fal fa-chevron-right ml-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection