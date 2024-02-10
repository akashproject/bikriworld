@extends('layouts.main')

    @section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row" >
                <div class="col-lg-4 ">
                    <div class="sidebar style_2">
                        <div class="sidebar_widget">
                            <!-- <h5 class="widget_title">Category</h5> -->
                            @include('common.user-menu')
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <h5 class="page_title"> Service Orders </h5>
                    @if($order)
                        @foreach ($order as $key => $value)
                            <div class="row order_wraper">
                                <div class="col-6 col-lg-10">
                                    <h5 style="margin:0"> {{ $value->name }} </h5>
                                    
                                </div>
                                <div class="col-6  col-lg-2">
                                    <div class="" >
                                        @if($value->image)
                                        <img src="https://administrator.bikriworld.com/public/images/{{ $value->image }}" alt="img">
                                        @else 
                                        <img src="https://via.placeholder.com/180x180" alt="img" class="">
                                        @endif 
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 order_list">
                                    <h6 >Order Status : <span style="color:red" >{{ $value->status }} </span> </h6>
                                    <h6 >Pickup Date : {{ $value->schedule }} </h6>
                                    <h6> Service Amount : Rs. {{ $value->amount }}/- </h6>
                                </div>
                                <div class="col-12 col-lg-6 text-right">
                                <a href="{{ url('repair-device') }}" class="thm-btn bg-thm-color-one thm-color-two-shadow btn-rectangle" style="margin-top: 32px;">   Book Again</a>
                                <a href="{{ url('manage-service') }}/{{ $value->service_no}}" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle" style="margin-top: 32px;">   Details</a>
                                </div>
                            </div>
                        @endforeach	
                    @endif 
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection