<footer class="footer text-center">
    <div class="container">
        <div class="footer_top section-padding">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="ft_widget ft_about">
                        <a href="{{  url('') }}" class="logo">
                            <img src="{{ url('assets/images/logo.webp') }}" alt="logo" class="image-fit">
                        </a>
                        <ul class="info">
                           
                            <li>
                                <a href="tel:+917439995068">+91 7439995068</a>
                            </li>
                            <li>
                                <a href="mailto:service@bikriworld.com">service@bikriworld.com</a>
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
                        <p class="mb-xl-20">Sell From Anywhere At The Best (₹) Price. Download The Bikri World App Now.</p>
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.bikriworld" class="app_img">
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
                © {{ date('Y') }} <a href="#">BikriWorld</a>. All Rights Reserved
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
                <p class="text-center" style="color: #565353;font-weight: 600;" >Delhi</p>
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
<a class="service-modal" href="#city-service" style="visibility:hidden">Open modal</a>

<div id="city-service" class="white-popup mfp-hide">
	<h4>Service will be coming soon on your city</h4>
	<p>Sorry ! Our Service is currently temporary disable on your city. We will get back to you soon</p>
	<p><a class="popup-modal-dismiss thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle" href="#">Dismiss</a></p>
</div>

<div id="confirm_withdrawal" class="white-popup mfp-hide">
	<h4> Have you insert payment option? </h4>
	<p>
        <a class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle" href="{{ url('confirm-withdrawal') }}">Yes</a>
        <a class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle" href="{{ url('payments') }}">Not Yet</a>
    </p>
</div>

<div class="sticky-footer-mobile">
    <div class="container">
        <div class="row text-center">
            <div class="col-6">
                <a class="sticky-btn" target="_blank" href="https://play.google.com/store/apps/details?id=com.bikriworld">
                    <img src="{{url('assets/images/icons')}}/playstore-m.png" style="width: auto;"> Download </a>
            </div>
            <div class="col-6">
                <a class="sticky-btn" href="https://api.whatsapp.com/send?phone=7439995068&text=Want to sell my device">
                    <img src="{{url('assets/images/icons')}}/whatsapp-m.png" style="width: auto;"> Whatsapp Chat</a>
            </div>
        </div>  
    </div>
</div>

<a href="https://api.whatsapp.com/send?phone=7439995068&text=Want to sell my device" target="_blank" class="whatsapp-chat desktop-version" style="">
    <img src="{{url('assets/images/icons')}}/whatsapp.png" style="width: auto;">
</a>

<a href="https://play.google.com/store/apps/details?id=com.bikriworld"  target="_blank" class="download-app desktop-version" style="">
    <i class="fab fa-google-play"></i>
    <span class="text-up-band" > Download Now</span>
</a>

<!-- Footer End -->
<a href="#" data-target="html" class="back-to-top ft-sticky">
    <i class="fal fa-long-arrow-up"></i>
</a>
<!-- Scripts -->