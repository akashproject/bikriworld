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
    <!-- Team Start -->
    <section class="section-padding bg-thm-color-two-gradient style_2 z-1 team_page_bg" style="background-image: url({{ url('assets/images/bg/bg_6.png') }});">
        <img src="{{ url('assets/images/elements/element_31.png') }}" class="element_1" alt="Element">
        <img src="{{ url('assets/images/elements/element_32.png') }}" class="element_2" alt="Element">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="title">Select Brands</h3>
                    </div>
                </div>
            </div>
            <div class="row">
            @if($brands)
                @foreach ($brands as $value)
                <!-- Block Start -->
                <div class="col-lg-2 col-md-4">
                    <div class="team_block style_2 style_3">
                        <div class="team_img">
                            <img src="https://via.placeholder.com/180x180" alt="img" class="">
                            <a href="team-details.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-circle link">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <p class="thm-color-two mb-0 font-weight-bold">{{ $value->name }}</p>
                    </div>
                </div>
                <!-- Block End -->
                @endforeach	
            @endif               
            </div>
            <!-- Pagination -->
            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a href="#" class="page-link">
                            <i class="fal fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">01</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">02</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">03</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">
                            <i class="fal fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav> -->
            <!-- Pagination -->
        </div>
    </section>
    <!-- Team End -->
    <section class="section-padding wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Top Selling Brand
                        </p>
                        <h3 class="title mb-0">Top Selling Brand </h3>
                    </div>
                </div>
            </div>
            <div class="brand_slider wow fadeInUp">
                <div class="section-title left-align wow fadeInUp">
                    <p class="subtitle">
                        <i class="fal fa-book"></i>
                        Top Selling Brand
                    </p>
                    <h3 class="title">Our Special Brand</h3>
                </div>
                <!-- Feature Box Start -->
                <div class="slide-item col-12">
                    <div class="features_box">
                        <div class="icon">
                            <img src="https://via.placeholder.com/80x80" alt="img">
                        </div>
                        <p>Apple</p>
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