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
            <div class="row justify-content-between prodduct-detail-wrap">
                <div class="col-lg-5 mb-md-80">
                    <!-- post details -->
                    <article class="post post_list style_2 post_details mb-0 product-left-image text-center">
                        <div class="post_img">
                            <img src="https://via.placeholder.com/300x350" alt="img" class="">
                        </div>
                    </article>
                </div>
                <div class="col-lg-7">
                    <div class="product-right-content">
                        <h3> Apple iPhone 5 (1 GB/64 GB) </h3>
                        <div class="variant_wrap" >
                            <span class="text-center variant" > 16GB </span>
                            <span class="text-center variant" > 32GB </span>
                            <span class="text-center variant" > 64GB </span>
                        </div>
                        
                        <p > get upto </p>
                        <h3 class="product-price"> ₹2,350/- </h3>
                        <div >
                            <a href="javascript:void(0)" class=" thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle"> Get Exact Value <i class="fal fa-chevron-right ml-2"></i></a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Section End -->
    <!-- Team Start -->
    <section class="section-padding" style="">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Top Selling Brand
                        </p>
                        <h5 class="title mb-0">our top selling brand people likes</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                  
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
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection