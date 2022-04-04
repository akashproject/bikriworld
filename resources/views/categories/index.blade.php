@extends('layouts.main')

    @section('content')
    <!-- Banner Start -->
    <div class="banner relative z-1">
        <img src="assets/images/banner/element_1.png" class="element_1" alt="Element">
        <img src="assets/images/banner/element_line.png" class="element_line" alt="Element Line">
        <!-- Texts -->
        <div class="transform-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="text_box">
                            <h1 class="title"><span>Modern Life</span> Coach School Podcast</h1>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accan tium doloremque laudantium totam rem aperiam</p>
                            <a href="about-2.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rounded mr-4 mb-4"> Sell Product <i class="fal fa-chevron-right ml-2"></i></a>
                            <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="video_btn video_text popup-youtube mb-4">
                                <i class="fas fa-play video_icon bg-thm-color-three"></i>
                                <span>Watch Videos</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image_box relative">
                            <img src="assets/images/banner/banner_img.png" alt="img" class="image-fit">
                            <span class="bg-thm-color-three circle_element"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Line -->
        <div class="bottom-line container"></div>
    </div>
    <!-- Banner End -->
    <!-- Features Start -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
            @if($categories)
                @foreach ($categories as $value)
                <!-- Feature Box Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="features_box">
                        <div class="icon">
                            <img src="assets/images/icons/icon_1.png" alt="img">
                        </div>
                        <h5>{{ $value->name }}</h5>
                        <p>Quis autem vel eum reprehenderit quin eavoluptate</p>
                        <a href="services.html">
                            <span>Read More</span>
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
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection