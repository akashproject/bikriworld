<footer class="footer">
    <div class="container">
        <div class="footer_top section-padding">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="ft_widget ft_about">
                        <a href="{{  url('') }}" class="logo">
                            <img src="{{ url('assets/images/logo.png') }}" alt="logo" class="image-fit">
                        </a>
                        <ul class="info">
                            <li>
                                <a href="#">256 Elizaberth Ave Str, Brooklyn, CA, 90025</a>
                            </li>
                            <li>
                                <a href="tel:+01234567899">+012 (345) 678 99</a>
                            </li>
                            <li>
                                <a href="mailto:example@example.com">example@example.com</a>
                            </li>
                        </ul>
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
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ft_widget ft_menu">
                        <h6 class="ft-title">Sell Us</h6>
                        <ul>
                            @foreach ($footerCategories as $key => $footerCategory)
                            <li>
                                <a class="menu-link" href="{{ url('selling-brands') }}/{{ $footerCategory->id }}">{{ $footerCategory->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ft_widget ft_menu">
                        <h6 class="ft-title">More Info</h6>
                        <ul>
                            @foreach ($moreinfo as $key => $info)
                            <li class="menu-item">
                                <a class="menu-link" href="{{ url($key) }}">{{ $info }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ft_widget ft_apps">
                        <h6 class="ft-title">Apps Download</h6>
                        <p class="mb-xl-20">Sed ut perspici unde omnis iste natus error sit voluptatem accus</p>
                        <a href="#" class="app_img">
                            <img src="/assets/images/google_store.jpg" alt="img">
                        </a>
                        <a href="#" class="app_img">
                            <img src="/assets/images/apple_store.jpg" alt="img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <p class="mb-0">
                © {{ date('Y') }} <a href="#">Wellco</a>. All Rights Reserved, Design By BikriWorld
            </p>
        </div>
    </div>
</footer>
<div id="select-city-popup" class="white-popup mfp-hide">
    <h5 class="text-center">Choose your city to sell your Old Device</h2>
    <div class="row relative">
        <div class="col-12">
            <div class="form-group custom_form_style">
                <input type="text" id="searchcity" class="form-control" autocomplete="off" placeholder="Please Type your city Here" >
            </div>
        </div>
        <div class="search-city-content_wrap">

        </div>
    </div>
    <p class="text-center">Popular Cities</p>
    <div class="row">
        <div class="col-4 col-lg-2">
            <div class="city-icon">
                <a href="javascript:void(0)" class="city-search-list" data-city="Mumbai">
                   <img src="{{ url('assets/images/Mumbai.png') }}">
                   <p class="text-center" style="color: #565353;font-weight: 600;" >Mumbai</p>
                </a>
            </div>
        </div>
        <div class="col-4 col-lg-2">
             <a href="javascript:void(0)" class="city-search-list" data-city="Delhi">
                <img src="{{ url('assets/images/Delhi.png') }}">
                <p class="text-center" style="color: #565353;font-weight: 600;" >Delhi NCR</p>
            </a>
        </div>
        <div class="col-4 col-lg-2">
             <a href="javascript:void(0)" class="city-search-list" data-city="Bengaluru">
                <img src="{{ url('assets/images/Bangalore.png') }}">
                <p class="text-center" style="color: #565353;font-weight: 600;" >Bengaluru</p>
            </a>
        </div>
        <div class="col-4 col-lg-2">
             <a href="javascript:void(0)" class="city-search-list" data-city="Chennai">
                <img src="{{ url('assets/images/Chennai.png') }}">
                <p class="text-center" style="color: #565353;font-weight: 600;" >Chennai</p>
            </a>
        </div>
        <div class="col-4 col-lg-2">
             <a href="javascript:void(0)" class="city-search-list" data-city="Kolkata">
                <img src="{{ url('assets/images/Kolkata.png') }}">
                <p class="text-center" style="color: #565353;font-weight: 600;" >Kolkata</p>
            </a>
        </div>
        <div class="col-4 col-lg-2">
             <a href="javascript:void(0)" class="city-search-list" data-city="Pune">
                <img src="{{ url('assets/images/Pune.png') }}">
                <p class="text-center" style="color: #565353;font-weight: 600;" >Pune</p>
            </a>
        </div>
    </div>
</div>
<!-- Footer End -->
<a href="#" data-target="html" class="back-to-top ft-sticky">
    <i class="fal fa-long-arrow-up"></i>
</a>
<!-- Scripts -->