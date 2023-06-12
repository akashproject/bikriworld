@extends('layouts.main')

    @section('content')
    <!-- Subheader Start -->
    <div class="subheader relative z-1" style="background-image: url({{ url('assets/images/inner_banner.png') }});">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-12">
                    <h1 class="page_title">Refer & Earn</h1>
                    <p style="font-size: 19px;line-height: 25px;"> Refer Your contacts and Earn Flat upto 500 BW Coins when your friends sells device on BikriWorld. <br> Your friend will get flat 500/- Extra on first sell. </p>
                    <p> * 1BW Coin = Rs. 1.00/- <p>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Refer & Earn</li>
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
    <section class="section-padding">
        <div class="container">
            <div class="refferel-code">
                <div class="row">
                        <div class="col-md-5">
                            <h5> Your referral code: </h5>
                            <h4> BW202144AEE {{$user->referral_code }}</h4>
                        </div>
                        <div class="col-md-7">
                            <h5> Share Button: </h5>
                            <ul class="social-share">
                                <li>
                                    <a href="javascript:void(0)" class="btn-outline clickToCopy" style="font-size: 15px;"> Click to Copy</a>
                                    <textarea class="copyLink" style="display:none">{{ $shareLink }}</textarea>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=sadas">
                                        <img src="{{ url('assets/images/icons/facebook.png') }}" alt="icon" class="image-fit-contain">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/share?url={{ $shareLink }}&text=Enroll In Eduversity Programme&via=<USERNAME>">
                                        <img src="{{ url('assets/images/icons/twitter.png') }}" alt="icon" class="image-fit-contain">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/shareArticle?url={{ $shareLink }}&title=Enroll In Eduversity Programme&summary=Enroll In Eduversity Programme&source={{ $shareLink }}">
                                        <img src="{{ url('assets/images/icons/linkedin.png') }}" alt="icon" class="image-fit-contain">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/?text={{ $shareLink }}">
                                        <img src="{{ url('assets/images/icons/whatsapp-share.png') }}" alt="icon" class="image-fit-contain">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </section>
   <!-- Contact Faq Box Start -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            How Refer & Earn work
                        </p>
                        <h5 class="title">Process how refer & earn works</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact_faq_box refer-process shadow_1">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/login.png') }}" alt="icon" class="image-fit-contain">
                        </div>
                        <div class="text">
                            <h4>Login/Register</h4>
                            <p>After your Registration on Bikriworld account. you will get unique Referral Code on your dashboard.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_faq_box refer-process shadow_1">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/share.png') }}" alt="icon" class="image-fit-contain">
                        </div>
                        <div class="text">
                            <h4>Share</h4>
                            <p>Share your Referral code with your contacts on Whatsapp, Instagram, Facebook or Other Platform </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_faq_box refer-process shadow_1">
                        <div class="icon">
                            <img src="{{ url('assets/images/icons/coin.png') }}" alt="icon" class="image-fit-contain">
                        </div>
                        <div class="text">
                            <h4>Earn BW Coins</h4>
                            <p> Earn BW Coins on your BikriWorld account. Reedem Anytime when you sell your device</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Faq Box End -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection