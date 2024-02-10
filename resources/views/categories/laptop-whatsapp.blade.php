@extends('layouts.main')
    @section('content')

    <style>
        .bg-banner:before {
           background-image: none;
        }

    </style>
    <section id="home" class="bg-banner relative z-1" style="background-image: url({{ url('assets/images/banner/landing-page-banner.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 relative z-1 text-center">
                    <div class="banner_text">
                        <h2 class="title thm-color-white" style="font-size: 30px;color: #00986b;"> SELL OLD <strong>LAPTOP</strong> AT THE BEST PRICE AND GET CASH INSTANTLY <?php //echo isset($_GET['city'])?$_GET['city']:"Kolkaa"; ?> </h2>    
                    </div>
                    <div class="banner-content text-white">
                        <ul style="color: #00986b;font-size: 20px;margin: 28px 0;font-weight: 600;">
                            <li> “Our aim is to create opportunities for everyone”   </li>
                            <li> Get Actual Price, No Surprise. Most Trusted Used Laptops Buyer. Sell Old Laptops In Kolkata. </li>
                        <ul>
                    </div>
                </div>
            </div>

            <div class="authorized_content">
                
            </div>
            <div class="text-center">
            <a href="https://api.whatsapp.com/send?phone=7439995068&text=Want to sell my device" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rounded mr-4 mb-4" tabindex="0"> Sell My laptop <i class="fal fa-chevron-right ml-2"></i></a>
            </div>
            
        </div>
    </section>


    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection