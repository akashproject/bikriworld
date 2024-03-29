@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <section class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Repair Order</h4>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Order Status</li>
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
            <div class="row text-center" >
                <div class="order_success">
                    <h1 class="order-success-heading"> <i class="fal fa-check-circle ml-2"></i> </h1>
                    <h4 class="order-success-subheading">Deal has been successfully confirmed</h4>
                </div>
                
                <div class="order_report">
                    <h5 class="report-heading"> Service Details </h5>
                    <div class="row" >
                        <div class="col-6">
                           <h5 class="report-content"> Service Number </h5>
                        </div>
                        <div class="col-6">
                            <h5 class="report-content"> {{ $order['service_no'] }} </h5>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-6">
                            <h5 class="report-content"> Service Status</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="report-content"> {{ $order['status'] }} </h5>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-6">
                            <h5 class="report-content"> Service Charge </h5>
                        </div>
                        <div class="col-6">
                            <h5 class="report-content"> {{ number_format($order['amount']) }}/- </h5>
                        </div>
                    </div>
                </div>
                <div class="order_report">
                    <h5 class="report-heading"> Order Details <h5>
                    <div class="row" >
                        <div class="col-6">
                            <h5 class="report-content">  Device </h5>
                        </div>
                        <div class="col-6">
                            <h5 class="report-content"> {{$order['product_name']}} </h5>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-6">
                            <h5 class="report-content">  Repairing Parts </h5>
                        </div>
                        <div class="col-6">
                            @foreach($order['parts'] as $part)
                            <h5 class="report-content" style="margin:0;padding-right: 5px;display: inline-grid;float: left;">{{ $part['name'] }}, </h5>
                            @endforeach
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-6">
                            <h5 class="report-content">  Address </h5>
                        </div>
                        <div class="col-6">
                            <h5 class="report-content">  {{ $order['address'] }}, {{ $order['city'] }}, {{ $order['state'] }}, {{ $order['pincode'] }} </h5>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-6">
                            <h5 class="report-content">  Service Date </h5>
                        </div>
                        <div class="col-6">
                            <h5 class="report-content"> {{ date('d M, Y', strtotime($order['schedule'])); }} </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-12 text-right" >
                    <a href="{{ url('dashboard') }}" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle" style="margin-bottom: 19px;"><i class="fal fa-chevron-left ml-2"></i> Goto Dashboard</a>

                    <!-- <a href="{{ url('manage-order') }}/{{$order['service_no']}}" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Manage Order</a> -->
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection