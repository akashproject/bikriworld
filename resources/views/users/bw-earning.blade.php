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
                                <li>
                                    <a href="{{ url('bw-earning') }}">BW Earning</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <h5 class="page_title"> BW Earning </h5>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="row order_wraper">
                        <h6 style="width: 100%;margin: 0;">
                            My Total Earning : <span style="" >{{ number_format($user->earning) }} BW Coins </span> 
                        </h6>
                        <a href="#confirm_withdrawal" class="open-city-popup thm-btn bg-thm-color-two thm-color-two-shadow btn-rounded mr-4 mt-4" tabindex="0"> Withdraw Coins <i class="fal fa-chevron-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection