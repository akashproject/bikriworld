@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <section class="subheader relative z-1" style="background-image: url({{ url('https://static.vecteezy.com/system/resources/thumbnails/002/375/040/small/modern-white-background-free-vector.jpg') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Dashboard</h4>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
    </section>
    <!-- Subheader End -->
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
                                <!-- <li>
                                    <a href="blog-grid.html">Addresses</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <h5 class="page_title"> Personal Information </h5>
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
                            <div class="col-12">
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