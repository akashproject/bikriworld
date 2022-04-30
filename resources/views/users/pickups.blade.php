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
                                <li>
                                    <a href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="active">
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
                    <h5 class="page_title"> Selling Information </h5>
                @if($order)
                    @foreach ($order as $key => $value)
                        <div class="row order_wraper">
                            <div class="col-6 col-lg-10">
                                <h5 style="margin:0"> {{ $value->name }} </h5>
                                <p> {{ $value->variation_type }}</p>
                            </div>
                            <div class="col-6  col-lg-2">
                                <div class="" >
                                    @if($value->image)
                                    <img src="/administrator/public/images/{{ $value->image }}" alt="img">
                                    @else 
                                    <img src="https://via.placeholder.com/180x180" alt="img" class="">
                                    @endif 
                                </div>
                            </div>
                            <div class="col-12 order_list">
                                <h6 >Order Status : <span style="color:red" >{{ $value->status }} </span> </h6>
                                <h6 >Pickup Date : {{ $value->pickup_schedule }} </h6>
                                <h6> Selling Amount : Rs. {{ $value->amount }}/- </h6>
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