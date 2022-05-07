@extends('layouts.main')
    @section('content')
    <div class="section-padding">
        <div class="container ">
            <div class="row text-center" >
                <div style="width: 100%;">
                    <img src="{{ url('assets/images/icons/404.png') }}" style="width: auto;margin-bottom: 21px;">
                    <h5> Sorry! We are not recived valid input! Please Restart The Process </h5>
                </div>
                <div style="width: 100%;">
                    <a href="/selling-categories" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Restart <i class="fal fa-chevron-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection