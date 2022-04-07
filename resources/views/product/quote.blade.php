@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/subheader.jpg') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h4 class="page_title">Sell Old Mobile Phone</h4>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Select Brands</li>
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
    </div>
    <!-- Subheader End -->
     <!-- Section Start -->
     <div class="section-padding">
        <div class="container">
            <div class="row justify-content-between ">
                <div class="col-lg-8 mb-md-80">
                    <!-- post details -->
                    <article class="row ">
                        <div class="col-md-12" >
                            <div class="product-quote-wrap row" >
                                <div class="col-lg-6 col-md-6 text-center">
                                    <img src="https://via.placeholder.com/300x350" alt="img" class="">
                                </div>
                                <div class="col-lg-6 col-md-6 text-left">
                                    <h5> Apple iPhone 5 (1 GB/64 GB) </h5>
                                    <p class="quote-msg"> Product Selling Price </p>
                                    <h3 class="quote-price"> ₹2,350/- </h3>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar style_3">
                        <div class="sidebar_widget">
                            <h5 class="widget_title">Project Details</h5>
                            <div class="sidebar_widget_inner">
                                <ul class="info_widget">
                                    <li>
                                        <span>Clients</span>
                                        Blaine D. Cotton
                                    </li>
                                    <li>
                                        <span>Project</span>
                                        VR Learning
                                    </li>
                                    <li>
                                        <span>Service</span>
                                        Courses/Learning
                                    </li>
                                    <li>
                                        <span>Category</span>
                                        VR Coach
                                    </li>
                                    <li>
                                        <span>Date</span>
                                        25 May 2021
                                    </li>
                                    <li>
                                        <span>Share</span>
                                        <ul class="social">
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-behance"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section End -->
    <section class="section-padding wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Top Related Products
                        </p>
                        <h5 class="title mb-0">our top selling related product people likes</h4>
                    </div>
                </div>
            </div>
            <div class="brand_slider wow fadeInUp">
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Iphone 13</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Iphone 12</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Iphone 12</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Apple</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Iphone 11</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="{{ url('assets/images/iphone.png') }}" alt="img">
                        </div>
                        <h6 class="text-center">Iphone 9</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
            </div>
           
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection