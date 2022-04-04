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
                            <a href="about-2.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rounded mr-4 mb-4"> Sell Product <i class="fal fa-chevron-right ml-2"></i></a>
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
    <!-- Team Start -->
    <section class="section-padding bg-thm-color-two-gradient z-1 team_main_wrap pb-extra">
        <img src="{{ url('assets/images/elements/element_1.png') }}" class="element_1" alt="Element">
        <img src="{{ url('assets/images/elements/element_2.png') }}" class="element_2" alt="Element">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Our Professionals
                        </p>
                        <h3 class="title">Meet Our Professinoal Team Members</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Block Start -->
                <div class="col-lg col-md-6">
                    <div class="team_block">
                        <div class="team_img">
                            <img src="assets/images/team/1.jpg" alt="img" class="image-fit">
                            <a href="team-details.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-circle link">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <h6 class="mb-1"><a href="team-details.html">Wallace D. Grace</a></h6>
                        <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                    </div>
                </div>
                <!-- Block End -->
                <!-- Block Start -->
                <div class="col-lg col-md-6">
                    <div class="team_block">
                        <div class="team_img">
                            <img src="assets/images/team/2.jpg" alt="img" class="image-fit">
                            <a href="team-details.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-circle link">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <h6 class="mb-1"><a href="team-details.html">Evan A. Ethridge</a></h6>
                        <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                    </div>
                </div>
                <!-- Block End -->
                <!-- Block Start -->
                <div class="col-lg col-md-6">
                    <div class="team_block">
                        <div class="team_img">
                            <img src="assets/images/team/3.jpg" alt="img" class="image-fit">
                            <a href="team-details.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-circle link">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <h6 class="mb-1"><a href="team-details.html">Marcus L. Duncan</a></h6>
                        <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                    </div>
                </div>
                <!-- Block End -->
                <!-- Block Start -->
                <div class="col-lg col-md-6">
                    <div class="team_block">
                        <div class="team_img">
                            <img src="assets/images/team/4.jpg" alt="img" class="image-fit">
                            <a href="team-details.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-circle link">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <h6 class="mb-1"><a href="team-details.html">Paul B. Gilliland</a></h6>
                        <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                    </div>
                </div>
                <!-- Block End -->
                <!-- Block Start -->
                <div class="col-lg col-md-6">
                    <div class="team_block">
                        <div class="team_img">
                            <img src="assets/images/team/5.jpg" alt="img" class="image-fit">
                            <a href="team-details.html" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-circle link">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <h6 class="mb-1"><a href="team-details.html">Donald T.Lewis</a></h6>
                        <p class="thm-color-two mb-0 font-weight-bold">Coach Teacher</p>
                    </div>
                </div>
                <!-- Block End -->
            </div>
        </div>
    </section>
    <!-- Team End -->
    <!-- Cta Start -->
    <div class="cta_box">
        <div class="container relative z-1">
            <div class="bg-thm-color-two cta_box_inner z-1 mt-negative">
                <img src="assets/images/elements/shape.png" alt="shape" class="shape_1 zoom-fade">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="text_block">
                            <div class="section-title left-align white">
                                <p class="subtitle">
                                    <i class="fal fa-book"></i>
                                    Our Professionals
                                </p>
                                <h3 class="title">Do You Want to Transform Your Life For Better ?</h3>
                                <a href="contact.html" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rounded">Contact Us <i class="fal fa-chevron-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="image_box relative z-1">
                            <img src="assets/images/elements/square_shape.png" alt="shape" class="shape_2 rotate_elem">
                            <img src="assets/images/cta_image.png" alt="img" class="image-fit">
                            <div class="arrows slideRight">
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrows to_up slideTop">
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
            </div>
        </div>
    </div>
    <!-- Cta End -->
    <!-- Video Start -->
    <section class="section-padding isotope-filter-items">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Latest video gallery
                        </p>
                        <h3 class="title">We Provide Life-Changing Video Tutorials</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="filter-btns mb-5">
                        <ul>
                            <li class="active filter-trigger" data-filter="*">
                                <a href="#">All</a>
                            </li>
                            <li class="filter-trigger" data-filter=".lifestyle">
                                <a href="#">Lifestyle</a>
                            </li>
                            <li class="filter-trigger" data-filter=".goals">
                                <a href="#">Goals</a>
                            </li>
                            <li class="filter-trigger" data-filter=".fashion">
                                <a href="#">Fashion</a>
                            </li>
                            <li class="filter-trigger" data-filter=".health">
                                <a href="#">Health</a>
                            </li>
                            <li class="filter-trigger" data-filter=".business">
                                <a href="#">Business</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row filteritems">
                <!-- Box Start -->
                <div class="col-lg-4 col-md-6 masonry-item lifestyle fashion business">
                    <div class="video_box">
                        <img src="assets/images/video/1.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">Free</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">How To Gain Knowledge</h6>
                            <p class="mb-0 thm-color-light">By Frank L. Pierce</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
                <!-- Box Start -->
                <div class="col-lg-4 col-md-6 masonry-item goals health lifestyle">
                    <div class="video_box">
                        <img src="assets/images/video/2.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">$59</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">Bring About Maintenance Home</h6>
                            <p class="mb-0 thm-color-light">By Janine T. Hostetter</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
                <!-- Box Start -->
                <div class="col-lg-4 col-md-6 masonry-item fashion business goals">
                    <div class="video_box">
                        <img src="assets/images/video/3.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">$59</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">How To Growth Your Business</h6>
                            <p class="mb-0 thm-color-light">By Joan J. Young</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
            </div>
            <div class="row filteritems">
                <!-- Box Start -->
                <div class="col-xl-3 col-lg-4 col-md-6 masonry-item health lifestyle fashion">
                    <div class="video_box">
                        <img src="assets/images/video/4.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">Free</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">How To Gain Knowledge</h6>
                            <p class="mb-0 thm-color-light">By Frank L. Pierce</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
                <!-- Box Start -->
                <div class="col-xl-3 col-lg-4 col-md-6 masonry-item business goals health">
                    <div class="video_box">
                        <img src="assets/images/video/5.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">$59</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">How To Fit Your Health</h6>
                            <p class="mb-0 thm-color-light">By Janine T. Hostetter</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
                <!-- Box Start -->
                <div class="col-xl-3 col-lg-4 col-md-6 masonry-item lifestyle fashion business">
                    <div class="video_box">
                        <img src="assets/images/video/6.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">Free</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">How To Gain Knowledge</h6>
                            <p class="mb-0 thm-color-light">By Frank L. Pierce</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
                <!-- Box Start -->
                <div class="col-xl-3 col-lg-4 col-md-6 masonry-item goals health lifestyle">
                    <div class="video_box">
                        <img src="assets/images/video/7.jpg" alt="img" class="image-fit">
                        <div class="video_badges">
                            <span class="tag_badge bg-thm-color-four">$59</span>
                        </div>
                        <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="popup-youtube video_btn">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="video_text">
                            <h6 class="text-white mb-0">Investment Planning</h6>
                            <p class="mb-0 thm-color-light">By Janine T. Hostetter</p>
                        </div>
                    </div>
                </div>
                <!-- Box End -->
            </div>
        </div>
    </section>
    <!-- Video End -->
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
    <!-- Coach Grid Start -->
    <section class="section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Popular Coach
                        </p>
                        <h3 class="title">We Provide Professional Life Coachs</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Coach block -->
                <div class="col-xl-4 col-md-6">
                    <div class="coach_block">
                        <div class="coach_img">
                            <img src="assets/images/coach/1.jpg" alt="img" class="image-fit">
                            <div class="coach_badges">
                                <span class="tag_badge bg-thm-color-four">Free</span>
                            </div>
                            <a href="course-details.html" class="thm-btn thm-color-two bg-thm-color-white thm-color-two-shadow btn-circle link">
                                <i class="fal fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="coach_caption">
                            <div class="coach_meta">
                                <a href="courses.html" class="coach_cat thm-btn bg-thm-color-three thm-color-three-shadow btn-rounded">Business</a>
                                <div class="ratings">
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star"></i>
                                </div>
                            </div>
                            <h5 class="title mb-xl-20">
                                <a href="course-details.html">
                                    Most Powerful Thing You Have Self Coaching Scholars
                                </a>
                            </h5>
                            <div class="author">
                                <img src="assets/images/author/1.jpg" alt="img" class="image-fit">
                                <a href="courses.html" class="thm-color-one">Wilbert A. Toney</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Coach block -->
                <!-- Coach block -->
                <div class="col-xl-4 col-md-6">
                    <div class="coach_block">
                        <div class="coach_img">
                            <img src="assets/images/coach/2.jpg" alt="img" class="image-fit">
                            <div class="coach_badges">
                                <span class="tag_badge bg-thm-color-four">$50</span>
                            </div>
                            <a href="course-details.html" class="thm-btn thm-color-two bg-thm-color-white thm-color-two-shadow btn-circle link">
                                <i class="fal fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="coach_caption">
                            <div class="coach_meta">
                                <a href="courses.html" class="coach_cat thm-btn bg-thm-color-three thm-color-three-shadow btn-rounded">Lifestyle</a>
                                <div class="ratings">
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                </div>
                            </div>
                            <h5 class="title mb-xl-20">
                                <a href="course-details.html">
                                    Coach Certification Programs Most Powerful Coach
                                </a>
                            </h5>
                            <div class="author">
                                <img src="assets/images/author/2.jpg" alt="img" class="image-fit">
                                <a href="courses.html" class="thm-color-one">Emma H. Parish</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Coach block -->
                <!-- Coach block -->
                <div class="col-xl-4 col-md-6">
                    <div class="coach_block">
                        <div class="coach_img">
                            <img src="assets/images/coach/3.jpg" alt="img" class="image-fit">
                            <div class="coach_badges">
                                <span class="tag_badge bg-thm-color-four">Free</span>
                            </div>
                            <a href="course-details.html" class="thm-btn thm-color-two bg-thm-color-white thm-color-two-shadow btn-circle link">
                                <i class="fal fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="coach_caption">
                            <div class="coach_meta">
                                <a href="courses.html" class="coach_cat thm-btn bg-thm-color-three thm-color-three-shadow btn-rounded">Business</a>
                                <div class="ratings">
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </div>
                            </div>
                            <h5 class="title mb-xl-20">
                                <a href="course-details.html">
                                    Matter How Great Your Life Al Ready, We’ll Give Syatem
                                </a>
                            </h5>
                            <div class="author">
                                <img src="assets/images/author/3.jpg" alt="img" class="image-fit">
                                <a href="courses.html" class="thm-color-one">Junior N. West</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Coach block -->
            </div>
        </div>
    </section>
    <!-- Coach Grid End -->
    <!-- Sponsors Start -->
    <div class="section-padding pt-0">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-auto">
                    <div class="sponsors_img">
                        <img src="assets/images/sponsors/1.png" alt="img">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sponsors_img">
                        <img src="assets/images/sponsors/2.png" alt="img">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sponsors_img">
                        <img src="assets/images/sponsors/3.png" alt="img">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sponsors_img">
                        <img src="assets/images/sponsors/4.png" alt="img">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sponsors_img">
                        <img src="assets/images/sponsors/5.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sponsors End -->
    <!-- Newsletter Start -->
    <section class="section bg-thm-color-two-gradient z-1 newsletter_form_sec">
        <img src="assets/images/elements/element_1.png" class="element_1" alt="Element">
        <img src="assets/images/elements/element_2.png" class="element_2" alt="Element">
        <div class="container relative z-1">
            <div class="arrows to_right slideRight">
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
            </div>
            <div class="arrows to_up slideTop">
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title mx-width-100">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            Our Newsletters
                        </p>
                        <h3 class="title">Get More Every Single Update To Join Our Newsletters</h3>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="newsletter_form">
                        <form>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter Your Email" autocomplete="off" name="#">
                                <div class="input-group-append ml-0">
                                    <button type="submit" class="thm-btn bg-thm-color-three btn-rounded">
                                        Subscribe Now
                                        <i class="fal fa-chevron-right ml-2"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="condition" name="condition" checked>
                                <label class="custom-control-label" for="condition">Get Update Monthly Subscription</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter End -->
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