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
                                <li class="breadcrumb-item"><a href="{{  url('') }}">Home</a></li>
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
    <!-- Features Start -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
            @if($categories)
                @foreach ($categories as $value)
                <!-- Feature Box Start -->
                <div class="col-lg-2 col-6">
                    <div class="features_box">
                        <div class="icon">
                        <a href="{{ url('selling-brands') }}/{{ $value->id }}"> <img src="assets/images/icons/icon_1.png" alt="img"></a>
                        </div>
                        <h5 class="text-center" ><a href="{{ url('selling-brands') }}/{{ $value->id }}"> {{ $value->name }}</a></h5>
                        <a href="{{ url('selling-brands') }}/{{ $value->id }}" class="text-center">
                            <span>View</span>
                            <i class="fal fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Feature Box End -->
                @endforeach	
            @endif
            </div>
        </div>
    </section>
    <!-- Features End -->
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
                        <h5 class="title mb-0">our top selling brand people likes</h4>
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
                        <h6 class="text-center">Apple</h6>
                    </div>
                </div>
                <!-- Feature Box End -->
            </div>
           
        </div>
    </section>

    <section class="section-padding wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Top Selling Models
                        </p>
                        <h5 class="title mb-0">our top selling model people likes</h4>
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