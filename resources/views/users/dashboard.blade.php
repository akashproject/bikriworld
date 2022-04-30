@extends('layouts.main')

    @section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row" >
                <div class="col-lg-4 ">
                    <div class="sidebar style_2">
                        <div class="sidebar_widget">
                            <!-- <h5 class="widget_title">Category</h5> -->
                            <ul class="category_widgets">
                                <li class="active">
                                    <a href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{ url('pickups') }}">Pickups</a>
                                </li>
                                <li>
                                    <a href="{{ url('payments') }}">Payments</a>
                                </li>
                                <li>
                                    <a href="{{ url('addresses') }}">Addresses</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <h5 class="page_title"> Personal Information </h5>
                    <form class="form-horizontal" id="checkoutform" method="post" action="{{ url('save-info') }}" enctype="multipart/form-data">
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
                        @if ($message = Session::get('message'))
                         <p class="alert ">{{ Session::get('message') }}</p>
                        @endif
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Name<span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control" autocomplete="off" value="{{$user->name}}" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Email Address<span class="required">*</span></label>
                                    <input type="text" name="email" class="form-control" autocomplete="off" value="{{$user->email}}" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Mobile Number<span class="required">*</span></label>
                                    <input type="text" name="mobile" class="form-control" autocomplete="off" value="{{$user->mobile}}" required="" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Alternative Number</label>
                                    <input type="text" name="alt_mobile" class="form-control" placeholder="Enter Alternative Number" autocomplete="off" value="{{$user->alt_mobile}}" >
                                </div>
                            </div>
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