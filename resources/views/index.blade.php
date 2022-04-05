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
                            <h3 class="title"><span>Sell Your Old Phone</span> Sell your own phone at the best price</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accan tium doloremque laudantium totam rem aperiam</p>
                            <a href="{{ url('selling-categories') }}" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rounded mr-4 mb-4"> Sell Product <i class="fal fa-chevron-right ml-2"></i></a>
                            <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="video_btn video_text popup-youtube mb-4">
                                <i class="fas fa-play video_icon bg-thm-color-three"></i>
                                <span>Watch Videos</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image_box relative">
                            <img src="https://via.placeholder.com/837x500" alt="img" class="image-fit">
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
    <!-- About Start -->
    <section class="section-padding pt-0 about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="image_box">
                        <img src="assets/images/about/image_1.jpg" alt="img" class="image-fit image_1 rounded-circle">
                        <img src="assets/images/about/image_2.jpg" alt="img" class="image-fit image_2 rounded-circle">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title left-align">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            What We Provide
                        </p>
                        <h3 class="title">We Care About Your Life For Better.</h3>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatue velillum </p>
                    </div>
                    <ul class="about_list">
                        <li>
                            <div class="icon">
                                <img src="assets/images/icons/icon_5.png" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Master Certified Coach</h6>
                                <p class="mb-0">Quis autem vel eum iure reprehenderit quein ea voluptate velit esse quam</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="assets/images/icons/icon_5.png" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Coach Certification Program</h6>
                                <p class="mb-0">Quis autem vel eum iure reprehenderit quein ea voluptate velit esse quam</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
    
    <!-- Testimonials Start -->
    <section class="section-padding pt-0 relative z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title left-align">
                        <p class="subtitle mb-4">
                            <i class="fal fa-book"></i>
                            Our Testimonials
                        </p>
                        <h3 class="title mb-0">What’s Our Clients<br> About Us</h3>
                    </div>
                </div>
            </div>
            <div class="testimonial_slider row arrows_none">
                <!-- Testimonial Item -->
                <div class="slide-item col-12">
                    <div class="testimonial_item">
                        <div class="author">
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/1.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Herminia F. Hudson</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Web Designer</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
                        </p>
                        <div class="ratings">
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star"></i>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
                <!-- Testimonial Item -->
                <div class="slide-item col-12">
                    <div class="testimonial_item">
                        <div class="author">
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/2.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Robert M. Morales</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Business Manager</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
                        </p>
                        <div class="ratings">
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star"></i>
                            <i class="fal fa-star"></i>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
                <!-- Testimonial Item -->
                <div class="slide-item col-12">
                    <div class="testimonial_item">
                        <div class="author">
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/3.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Nicolas Vanderpool</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Apps Developer</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
                        </p>
                        <div class="ratings">
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
                <!-- Testimonial Item -->
                <div class="slide-item col-12">
                    <div class="testimonial_item">
                        <div class="author">
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/1.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Herminia F. Hudson</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Web Designer</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
                        </p>
                        <div class="ratings">
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star"></i>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
                <!-- Testimonial Item -->
                <div class="slide-item col-12">
                    <div class="testimonial_item">
                        <div class="author">
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/2.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Robert M. Morales</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Business Manager</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
                        </p>
                        <div class="ratings">
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star"></i>
                            <i class="fal fa-star"></i>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
                <!-- Testimonial Item -->
                <div class="slide-item col-12">
                    <div class="testimonial_item">
                        <div class="author">
                            <div class="image bg-thm-color-two">
                                <img src="assets/images/author/3.jpg" alt="img" class="image-fit">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Nicolas Vanderpool</h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Apps Developer</p>
                            </div>
                        </div>
                        <p class="comment">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae
                        </p>
                        <div class="ratings">
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Item -->
            </div>
        </div>
        <div class="circle_wave"></div>
    </section>
    <!-- Testimonials End -->
    

    <!-- Why Us Start -->
    <section class="section-padding about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="section-title left-align">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            What We Offer
                        </p>
                        <h3 class="title">People Why Choose Our Coachs</h3>
                    </div>
                    <ul class="why-us-list">
                        <li>
                            <i class="icon fal fa-check"></i>
                            <div class="text">
                                <h6 class="mb-2">We Teach You How To Coach Yourself</h6>
                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus sit voluptatemec accusantium doloremque laudantium</p>
                            </div>
                        </li>
                        <li>
                            <i class="icon fal fa-check"></i>
                            <div class="text">
                                <h6 class="mb-2">We Teach You How To Feel Better</h6>
                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus sit voluptatemec accusantium doloremque laudantium</p>
                            </div>
                        </li>
                        <li>
                            <i class="icon fal fa-check"></i>
                            <div class="text">
                                <h6 class="mb-2">We Teach You How To Take Massive</h6>
                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus sit voluptatemec accusantium doloremque laudantium</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-7">
                    <div class="image_box relative why_us_box mb-0">
                        <img src="assets/images/why_us.png" alt="img" class="image-fit">
                        <span class="bg-thm-color-three circle_element"></span>
                        <img src="assets/images/elements/element_3.png" class="element_1 zoom-fade" alt="Element">
                        <img src="assets/images/elements/element_4.png" class="element_2 rotate_elem" alt="Element">
                        <img src="assets/images/elements/element_5.png" class="element_3 rotate_elem" alt="Element">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Us End -->
    <!-- Plane Start -->
    <div class="bg-thm-color-two plane_box relative z-1">
        <div class="container relative z-1">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11 relative z-1">
                    <img src="assets/images/elements/element_6.png" class="element_1 rotate_elem" alt="Element">
                    <h2 class="thm-color-white">The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training</h2>
                </div>
            </div>
            <img src="assets/images/elements/element_7.png" class="element_2 zoom-fade" alt="Element">
        </div>
    </div>
    <!-- Plane End -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection