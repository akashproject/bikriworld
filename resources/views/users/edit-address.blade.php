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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order_list">
                    <h5 class="page_title"> Add New Address </h5>
                    <form class="form-horizontal" id="addressForm" method="post" action="{{ url('save-address') }}" enctype="multipart/form-data">
                    @csrf
                        @if ($message = Session::get('message'))
                         <p class="alert ">{{ Session::get('message') }}</p>
                        @endif
                        <div class="row answer_row" >
                            <div class="col-4">
                                <div class="answer_list"  >
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="type" id="" value="Home" {{($address->type == 'Home')?'checked':''}}>
                                        <label class="form-check-label" for="">Home</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="answer_list"  >
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="type" id="" value="Office" {{($address->type == 'Office')?'checked':''}}>
                                        <label class="form-check-label" for="">Office</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="answer_list"  >
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="type" id="" value="Other" {{($address->type == 'Other')?'checked':''}}>
                                        <label class="form-check-label" for="">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Address Line <span class="required">*</span></label>
                                    <input type="text" value="{{$address->address_1}}" name="address_1" class="form-control" autocomplete="off" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">City <span class="required">*</span></label>
                                    <input type="text" value="{{$address->city}}" name="city" class="form-control" id="city" autocomplete="off" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">State <span class="required">*</span></label>
                                    <input type="text" value="{{$address->state}}" name="state" class="form-control" autocomplete="off" >
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Pincode<span class="required">*</span></label>
                                    <input type="text" value="{{$address->pincode}}" name="pincode" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Landmark<span class="required">*</span></label>
                                    <input type="text" value="{{$address->landmark}}" name="landmark" class="form-control" autocomplete="off">
                                </div>
                            </div>                           
                        </div>
                        <div class="row " style="margin-top: 30px;">
                            <div class="col-12">
                                <input type="hidden" name="user_id" value="{{$address->user_id}}" >
                                <input type="hidden" name="address_id" value="{{$address->id}}" >
                                <button type="submit" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Submit <i class="fal fa-chevron-right ml-2"></i></button>
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