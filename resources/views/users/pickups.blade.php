@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <!-- <section class="subheader relative z-1" style="background-image: url({{ url('https://static.vecteezy.com/system/resources/thumbnails/002/375/040/small/modern-white-background-free-vector.jpg') }});">
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
    </section> -->
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
                                <li class="active">
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
                    <h5 class="page_title"> Selling Information </h5>
                @if($order)
                    @foreach ($order as $key => $value)
                        <div class="row order_wraper">
                            <div class="col-6 col-lg-10">
                                <h5> {{ $value->name }} </h5>
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