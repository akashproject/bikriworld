@extends('layouts.main')
    @section('content')
    <section class="section-padding mb-5" style="background-image:url(https://demo.bravisthemes.com/wellco/wp-content/uploads/2021/08/about-bg-section1.png);">
        <div class="container">
            <div class="login_screen_container">
                <div class="row">
                    <div class="col-1">
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <ul class="about_list">
                            <li>
                                <div class="icon">
                                    <img src="https://student.icacourse.in/assets/images/montage.png" alt="img" class="image-fit">
                                </div>
                                <div class="text">
                                    <h6 class="mb-0">Sell Devices</h6>
                                    <p class="mb-0">Sell Old Mobile Phone, Laptop or Other gadgets in one click </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="https://student.icacourse.in/assets/images/training.png" alt="img" class="image-fit">
                                </div>
                                <div class="text">
                                    <h6 class="mb-0">Free PickUp</h6>
                                    <p class="mb-0">Free PickUp For All Devices </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="https://student.icacourse.in/assets/images/writing.png" alt="img" class="image-fit">
                                </div>
                                <div class="text">
                                    <h6 class="mb-0">Get Paid</h6>
                                    <p class="mb-0">Get Paid In Full For Cash instantly after recive the device</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-xs-12 text-center">
                        <div class="register_box">
                            <div class="login_title"> 
                                <h3> Let's get started </h3>
                            </div>
                            <div class="login_input_box ">
                                <div class="lead_page_form">
                                    <p> Enter your mobile number to sign up / sign in to your account </p>                                       
                                    <form method="post" id="lead_generate_form" action="">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group form_style">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" name="name" class="form-control" placeholder="Please enter your name" autocomplete="off" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group form_style">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" name="email" class="form-control" placeholder="Please enter your email" autocomplete="off" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group form_style">
                                                    <label>Mobile <span class="required">*</span></label>
                                                    <input type="number" name="mobile" class="form-control" placeholder="Mobile Number" autocomplete="off" required="">
                                                </div>
                                            </div>  
                                            <div class="col-lg-12">
                                                <div class="form-group form_style">
                                                    <label>Referral Code<span class="required">*</span></label>
                                                    <input type="text" name="referral_code" class="form-control" placeholder="Enter Referral Code" autocomplete="off" value="{{(isset($_GET['ref']) && $_GET['ref'] !='')?$_GET['ref']:''}}">
                                                </div>
                                            </div>                                          
                                            <div class="col-lg-12 text-center response_success" style="display:none;">
                                                <div>
                                                    <p class="margin-0px-bottom response_status"> Invalid One Time Password </p>
                                                    <p class="margin-0px-bottom">Please Enter OTP or <a href="javascript:void(0)" class="resendOtp">Resend OTP</a> </p>
                                                    <p class="margin-0px-bottom">OTP will expire after 2mins : <span class="countdown"> 2:00 </span></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group form_style response_success" style="display:none;">
                                                    <label>One time password<span class="required">*</span></label>
                                                    <input type="number" name="verify_otp" class="form-control verify_otp" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                                <button type="submit" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> 
                                                    Continue <i class="fal fa-chevron-right ml-2"></i>
                                                </button>                                                 
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection