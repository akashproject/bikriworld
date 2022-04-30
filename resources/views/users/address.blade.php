@extends('layouts.main')

    @section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row" >
                <div class="col-lg-4 ">
                    <div class="sidebar style_2">
                        <div class="sidebar_widget">
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
                    <h5 class="page_title" style="float:left"> Pickup Address Information </h5>
                    <div class="text-right" >
                        <a href="{{ url('add-address') }}" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Add Address </a>
                    </div>
                @if($address)
                    @foreach ($address as $key => $value)
                        <div class="row order_wraper">
                            <h6 style="width: 100%;margin: 0;">Address Type : <span style="color:red" >{{ $value->type }} </span> </h6>
                            <h6 >{{ $value->address_1 }}, {{ $value->city }} {{ $value->state }}, {{ $value->pincode }} - Near ( {{ $value->landmark }} )  </h6>
                            <div  style="width: 100%;margin: 0;">
                                <a href="{{ url('edit-address') }}/{{$value->id}}" > Edit Address </a> | <a href="{{ url('delete-address') }}/{{$value->id}}" onclick="return confirm('Are you sure to delete ?')"; > Delete Address </a> 
                            </div>
                        </div>
                        
                    @endforeach	
                @else 
                    <div class="row order_wraper">
                        <h6> No Address added </h6>
                    </div>
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