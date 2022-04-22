(function($) {
    'use strict';
    // Preloader
    $(window).on('load', function() {
        $('.preloader').addClass('hidden');
        $('[data-popup="tooltip"]').tooltip();
    });

    $("#checkexactvalue").validate({
        rules : {
            'veriation_price': {
                required: true,
            }
        },
        messages: {
            'veriation_price': "Please Select your device veriation.",
        },
    })

    $("#paymentform").validate({
        rules : {
            c_account_no : {
                equalTo : "#account_no"
            },messages: {
                'c_account_no': "Account No & Confirm Account No must be same.",
            },
        }
    });    

    $("#signin_form").validate({
        rules: {
            'mobile': {
                required: true,
                number: true,
                maxlength: 10,
                minlength: 10,
            }
        },
        messages: {
            'mobile': "Please type valid mobile number.",
        },
        submitHandler: function(form) {
            var formId = "signin_form";
            var verifyOtp = $("#" + formId + " .verify_otp").val();
            var responsedOtp = $("#" + formId + " .responsed_otp").val();
            var isUserRegister = $("#" + formId + " .isUserRegister").val();

            if(isUserRegister == 1){
                registerUser($(form).serialize());
            }
            if (verifyOtp != '' && verifyOtp == responsedOtp) {
                let mobileNo = jQuery("#" + formId + " input[name='mobile']").val();
                loginProcess(mobileNo);
            } else if (verifyOtp != '' && verifyOtp != responsedOtp) {
                console.log(verifyOtp);
                $("#" + formId + " .response_status").html("OTP is Invalid");
            } else {
                var otpcallingresponse = sendMobileOtp(formId);
                $("#" + formId + " .submit_login_btn").html("Verify OTP");
            }
        } 
    });

    $("#checkoutform").validate({

    });

    $("#adddevice").validate({
        rules: {
            'category_id': {
                required: true,
            },
            'brand_id': {
                required: true,
            },
            'name': {
                required: true,
            },
            'storage': {
                required: true,
            },
            'ram': {
                required: true,
            },
        },
        messages: {
            'category_id': "Please Select your device category.",
            'brand_id': "Please Select your device brand.",
            'name': "Please Type your device name.",
            'ram': "Please Type your Ram Memory.",
            'storage': "Please Type your Storage Memory.",
        }
    });

    $(".add-device-category").change(function(){
        $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: `http://${window.location.hostname}/get-question`,
            type: "post",
            data: {
                category_id: $(this).val(),
            },
            success: function(result) {
                let htmlContent = '<h5>Device Conditions</h5>';
                $.each(result, function (key, data) {
                    htmlContent += '<div class="row question_list"><div class="col-lg-12"><h5><span class="question_data">'+data.question+'<span> </span></span></h5></div><div class="col-lg-8"><div class="row answer_row" dataquestion="'+data.id+'"><div class="col-lg-6 "><div class="answer_list"><div class="form-check "><input class="form-check-input yes" questionval="'+data.description+'" type="radio" name="question_id['+data.id+']" id="" value="1" required=""><label class="form-check-label" for="">Yes</label></div></div></div><div class="col-lg-6"><div class="answer_list"><div class="form-check "><input class="form-check-input no" type="radio" name="question_id['+data.id+']" id="" value="0" required=""><label class="form-check-label" for="">No</label></div></div></div></div></div></div>';
                });
                $(".question-content_wrap").html(htmlContent);
                $(".question-content_wrap").show();
            }
        });
    });
    
    $(".form-check-input.yes").click(function(){
        let questionval = $(this).attr("questionval");
        let questionid = $(this).parent().parent().parent().parent().attr("dataquestion");
        $(".device_summary").append('<li class="question_'+questionid+'">'+questionval+'</li>');
    });

    $(".form-check-input.no").click(function(){
        let questionid = $(this).parent().parent().parent().parent().attr("dataquestion");
        $(".question_"+questionid).remove();
    });

    // Canvas 
    $(".desktop_trigger, .trigger-right").on('click', function() {
        $(".desktop_trigger").toggleClass('active');
        $(".aside_canvas").toggleClass('open');
    });

    $(".open-login, .trigger-right").on('click', function() {
        $(".sell-now-btn").toggleClass('active');
        $(".aside_canvas").toggleClass('open');
    });
    
    $(".close_aside").on('click', function() {
        $(".aside_canvas").removeClass('open');
    });


    // Search 
    $(".search_trigger>a, .close-search-trigger").on('click', function() {
        $(".search-form-wrapper").toggleClass('open');
    });
    // Mobile Menu
    $(".mobile_trigger, .trigger-left").on('click', function() {
        $(".mobile_trigger").toggleClass('active');
        $(".aside_mobile").toggleClass('open');
    });
    $(".aside_mobile .menu-item-has-children > a").on('click', function(e) {
        var submenu = $(this).next(".sub-menu");
        e.preventDefault();
        submenu.slideToggle(200);
    });
    var header = $(".can-sticky");
    var footer = $(".ft-sticky");
    var headerHeight = header.innerHeight();
    var FooterHeight = footer.innerHeight();

    function doSticky() {
        if (window.pageYOffset > headerHeight) {
            header.addClass("sticky");
        } else {
            header.removeClass("sticky");
        }
        if (window.pageYOffset > FooterHeight) {
            footer.addClass("d-flex");
        } else {
            footer.removeClass("d-flex");
        }
    }
    jQuery( "#datepicker" ).datepicker({ format: 'mm/dd/yyyy', changeMonth: true,changeYear: true,minDate: new Date('today') });
    
    jQuery(".resendOtp").click(function() {
        var formId = jQuery(this).closest("form").attr('id');
        jQuery("#" + formId + " .response_status").html("");
        sendMobileOtp(formId);
    });

    function registerUser(data){
        $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: `http://${window.location.hostname}/register`,
            type: "post",
            data: data,
            success: function(result) {
                location.reload();
                // //result = JSON.parse(result);
                // if (result) {
                //     location.reload();
                // }
            }
        });
    }

    function loginProcess(mobile){
        $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: `http://${window.location.hostname}/check-exist`,
            type: "post",
            data: {
                mobile: mobile,
            },
            success: function(result) {
                if(result.userrecord == 'not-exist'){
                    $('.userRagisterField').show();
                    $(".submit_login_btn").html("Register");
                    $(".isUserRegister").val("1");
                    $('.one_time_password').hide();
                    jQuery(" .response_status").html("Please Register Yourself");
                } else {
                    location.reload();
                    //window.location = $(".redirectUrl").val();
                }
            }
        });
    }



    function sendMobileOtp(formId) {
        var mobileNo = jQuery("#" + formId + " input[name='mobile']").val();
        $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: `http://${window.location.hostname}/submit-mobile-otp`,
            type: "post",
            data: {
                mobile: mobileNo,
            },
            success: function(result) {
                //result = JSON.parse(result);
                if (result) {
                    jQuery("#" + formId + " .responsed_otp").val(result.otp);
                    jQuery("#" + formId + " .one_time_password").show();
                    jQuery("#" + formId + " .response_status").html("OTP Has Been Sent Successfully");
                    return true;
                } else {
                    jQuery("#" + formId + " .response_status").html("OTP Sent Failed! Please Try Again Later");
                    return true;
                }
            }
        });
    }

    doSticky();
    //On scroll events
    $(window).on('scroll', function() {
        doSticky();
    });
    if ($(".back-to-top").length) {
        $(".back-to-top").on("click", function() {
            var target = $(this).attr("data-target");
            // animate
            $("html, body").animate({
                    scrollTop: $(target).offset().top,
                },
                1000
            );

            return false;
        });
    }

    $('.header_banner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: true,
        autoplaySpeed: 10000,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    arrows: false
                }
            }
        ]
    });

    // testimonial Slider
    $('.testimonial_slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    arrows: false
                }
            }
        ]
    });
    $('.testimonial_slider_single').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true,
        autoplaySpeed: 2000
    });
    $('.testimonial_slider_main').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: false,
        infinite: true,
        autoplaySpeed: 2000,
        asNavFor: '.testimonial_slider_nav',
        responsive: [{
            breakpoint: 991,
            settings: {
                arrows: false
            }
        }]
    });
    $('.testimonial_slider_nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true,
        infinite: true,
        autoplaySpeed: 2000,
        asNavFor: '.testimonial_slider_main',
        focusOnSelect: true
    });
    // Coach Slider
    $('.coach_slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true,
        dotsClass: "slick-dots style_2",
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1499,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.model_slider').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true,
        dotsClass: "slick-dots style_2",
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1499,
                settings: {
                    slidesToShow: 7
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });

    $('.brand_slider').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    arrows: false
                }
            }
        ]
    });
    // Magnific Popup
    $('.popup-youtube').magnificPopup({ type: 'iframe' });
    $('.gallery-thumb').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    // Filter Isotope
    function doIsotope() {
        var $filterGrid = '';

        $('.masonry').imagesLoaded(function() {
            $filterGrid = $('.filteritems').isotope({
                itemSelector: '.masonry-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.masonry-item'
                }
            });
        });

        $('.filter-btns').on('click', '.filter-trigger', function() {
            var filterValue = $(this).attr('data-filter');
            $filterGrid.isotope({ filter: filterValue });
        });

        $('.filter-trigger').on('click', function(e) {
            $(this).closest('.filter-btns').find('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
        // init isotope on features
        $('.feature-masonry').isotope({
            itemSelector: '.grid-item',
            percentPosition: true
        });
        // init isotope on features
        $('.blog-masonry').isotope({
            itemSelector: '.masonry-item',
            percentPosition: true
        });

    }
    doIsotope();
    // Counter
    $(".counter>b").each(function() {
        var $this = $(this);
        $this.one('inview', function(event, isInView) {
            if (isInView) {
                $this.countTo({ speed: 2000 });
            }
        });
    });
    // Progress bar
    $(".progress_block").each(function() {
        var progressBar = $(this).find(".progress-bar");
        var progressTitle = $(this).find(".title>b");
        $(progressBar).one('inview', function(event, isInView) {
            if (isInView) {
                $(progressBar).animate({
                    width: $(progressBar).attr("aria-valuenow") + "%"
                });
            }
        });
        $(progressTitle).one('inview', function(event, isInView) {
            if (isInView) {
                $(progressTitle).animate({
                    left: $(progressTitle).attr("data-to") + "%"
                });
            }
        });
    });

    $(".product-right-content .variant").click(function() {
        $(".product-right-content .variant").removeClass("active");
        $(this).addClass("active");
    });

    $('.veriation_price').click(function(){
        $(".product-price_amount").html(addCommas($(this).val()))
        //$(".product-price_amount_int").val($(this).attr('data-price'))
    })
    // Easy pie bar
    $(".circle_bar").each(function() {
        var circleBar = $(this);
        $(circleBar).one('inview', function(event, isInView) {
            if (isInView) {
                $(circleBar).easyPieChart({
                    //your configuration goes here
                    easing: 'easeOut',
                    delay: 3000,
                    scaleColor: false,
                    lineWidth: 6,
                    trackWidth: 6,
                    animate: 2000,
                });
            }
        });
    });
    $(".countdown-timer").each(function() {
        var $this = $(this);
        $this.countdown($this.data('countdown'), function(event) {
            $(this).text(
                event.strftime('%D : %H : %M : %S')
            );
        });
    });

    $("#searchcity").focusout(function(){
        //$(".search-city-content_wrap").hide()
    });

    $("#search_field").focusout(function(){
        //$(".search-city-content_wrap").hide()
    });

    $("#searchcity").keyup(function(){
        let inputData = $(this).val();
        $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: `http://${window.location.hostname}/get-city-search`,
            type: "post",
            data: {
                inputData: inputData,
            },
            success: function(result) {
                if (result.length > 0) {
                    let htmlContent = '';
                    $.each(result, function (key, data) {
                        htmlContent += '<li><a class="city-search-list" href="javascript:void(0)"  data-city="'+data.name+'" >'+data.name+'</a></li>';
                    });
                    $(".search-city-content_wrap").html(htmlContent);
                    $(".search-city-content_wrap").show()
                } else {
                    $(".search-city-content_wrap").hide()
                }
            }
        });
    });

    $("#search_field").keyup(function(){
        let inputData = $(this).val();
        $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: `http://${window.location.hostname}/get-product-search`,
            type: "post",
            data: {
                inputData: inputData,
            },
            success: function(result) {
                //result = JSON.parse(result);
                if (result.length > 0) {
                    let htmlContent = '';
                    $.each(result, function (key, data) {
                        htmlContent += '<li class="search-list"><a href="/view-product/'+data.id+'">'+data.name+'</a></li>';
                    });
                    $(".search-content_wrap").html(htmlContent);
                    $(".search-content_wrap").show()
                } else {
                    $(".search-content_wrap").hide()
                }
            }
        });
    });

    $('.open-city-popup').magnificPopup({
        type: 'inline',
        midClick: true,
        mainClass: 'mfp-fade'
    });

    $(document).on("click","#select-city-popup .city-search-list",function(){
        let city = $(this).attr('data-city');
        console.log(city);
        $('.user_selected_city').html(city);
        $.cookie('userCity', city, {expires: 100000000000});
        $(".search-city-content_wrap").hide()
        $(".mfp-close").trigger("click");
    });



})(jQuery);

function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}