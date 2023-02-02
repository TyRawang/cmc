@extends('fronts.layouts.app')
@section('meta')
<title>Free Quote - Cargo Movers Canada</title>

<!-- This site is optimized with the Yoast SEO plugin v12.4 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="canonical" href="{{ \Request::fullUrl() }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Free Quote - Cargo Movers Canada" />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta property="article:publisher" content="https://www.facebook.com/CargoMoversCanada" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Free Quote - Cargo Movers Canada" />
        
<meta property="og:title" content="Free Quote"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{ \Request::fullUrl() }}"/>
<meta property="og:site_name" content="Cargo Movers Canada "/>
<meta property="og:description" content="FREE QUOTE 
REQUEST A NO OBLIGATION       
Quote Request Form 
We aim to respond to all quote requests within a 24 hour period Monday-Friday. However if this isn&#039;t the case, please be patient as we receive a lot of emails every day."/>
<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection
@php
 $userlogin = Auth::User();
@endphp
@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h2>Get Free Quote</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a >Get Free Quote</a></li>
    </ul>
  </div>
</section>
<section class="sec-padding contact-page-content">
  <div class="thm-container">
    <div class="sec-title">
      <h2><span>GET FREE QUOTE</span></h2>
      <p>GET FREE QUOTE</p>
    </div>
    <div class="row">
      <div class="col-md-12">
  <form id="msform" method="post" action="{{ url('free-quote/send') }}">

@if(session()->has('quote_success_message'))
  <fieldset>
    <h2 class="fs-title">Thank you!</h2>
    <h3 class="fs-subtitle">Your request has been submitted and we look forward to helping you with your move on </h3>
      <div class="fs-subtitle">
        Our professional movers will contact you shortly with your quote.
      </div>
  </fieldset>


  @else

  <fieldset>
    <h2 class="fs-title">Save up to 65% on your move</h2>
    <!-- <h3 class="fs-subtitle"></h3> -->
    <div class="row">
      <div class="col-lg-5 form-group">
        <div class="radio">Moving From : 
          <label>
            <input type="radio" name="moving_from" value="ca" checked="checked">Canada <span></span></label>
          <label><input type="radio" name="moving_from" value="us" >USA <span></span></label> 
        </div>
        <input type="text" name="from_location" id="from_location" class="form-control inn-s" required="">
        <input type="hidden" name="from_venue_city" id="from_venue_city">
        <input type="hidden" name="from_venue_postal_code" id="from_venue_postal_code" >
        <input type="hidden" name="from_venue_state" id="from_venue_state">
        <input type="hidden" name="from_venue_country" id="from_venue_country" >
      </div>
       <div class="col-lg-5 form-group">
          <div class="radio">Moving To :
            <label><input type="radio" name="moving_to" value="ca" checked="checked">Canada<span></span></label>
            <label><input type="radio" name="moving_to" value="us">USA<span></span></label> 
          </div>
        <input type="text" name="to_location" id="to_location" class="form-control inn-s" required="">
        <input type="hidden" name="to_venue_city" id="to_venue_city">
    <input type="hidden" name="to_venue_postal_code" id="to_venue_postal_code" >
    <input type="hidden" name="to_venue_state" id="to_venue_state">
    <input type="hidden" name="to_venue_country" id="to_venue_country" >
      </div>
      <div class="col-lg-2 form-group">
        <label> &nbsp;</label>
        <button type="button" class="next btn btn-danger inn-b" style="margin-top: 15px;">Next <i class="fa fa-arrow-right"></i></button>
      </div>
    </div>
 
  </fieldset>
  <fieldset>
    <h2 class="fs-title">I would like to move on…</h2>
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="" id="datepicker"></div>
      </div>
    </div>
    <input type="hidden" name="move_date" id="move_date">
    
    <!-- <input type="button" name="previous" class="previous btn btn-danger on-top-place" value="Previous" /> -->
    <button type="button" name="previous" class="previous btn btn-danger on-top-place"><i class="fa fa-arrow-left"></i> Previous </button>
     
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Select property type</h2>
    <!-- <h3 class="fs-subtitle">Your presence on the social network</h3> -->
   

    <div class="row text-center property-bx">  
      <div class="col-lg-4 col-xs-4">
      <label>
        <input type="radio" name="property_type" value="House"  class="styles-inp property-type-cls ">
        <img src="{{ url('UserImage/house.png') }}" style="width: 100%; padding:20% 20% 5% 20%;">
        <p>House</p>
      </label>
    </div>
    <div class="col-lg-4 col-xs-4">

      <label>
        <input type="radio" name="property_type" value="Apartment" class="styles-inp property-type-cls">
        <img src="{{ url('UserImage/apartment.png') }}" style="width: 100%; padding:20% 20% 5% 20%;">
        <p>Apartment</p>
      </label>
    </div>
    <div class="col-lg-4 col-xs-4">
      <label>
        <input type="radio" name="property_type" value="Commercial" class="styles-inp property-type-cls">
        <img src="{{ url('UserImage/business-building.png') }}" style="width: 100%; padding:20% 20% 5% 20%;">
        <p>Commercial</p>
      </label>
    </div>
  </div>
  
    <button type="button" name="previous" class="previous btn btn-danger on-top-place"><i class="fa fa-arrow-left"></i> Previous </button>
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Select property size</h2>
    <!-- <h3 class="fs-subtitle">Your presence on the social network</h3> -->
    <div class="for_house_aprtment_bx text-center">
        <div class="row">
          <div class="col-lg-4 col-xs-6">
         <label>
          <input type="radio" name="propery_size" value="STUDIO" class="styles-inp">
          <div class="property-size property-size-cls"> STUDIO </div>
          </label>
        </div>
        <div class="col-lg-4 col-xs-6">
          <label>
            <input type="radio" name="propery_size" value="1 bedroom" class="styles-inp">
            <div class="property-size property-size-cls"> 1 bedroom </div>
          </label>
        </div>
        <div class="col-lg-4 col-xs-6">
          <label>
            <input type="radio" name="propery_size" value="2 bedrooms" class="styles-inp">
            <div class="property-size property-size-cls"> 2 bedrooms </div>
          </label>
        </div>
        <div class="col-lg-4 col-xs-6">
            <label>
              <input type="radio" name="propery_size" value="3 bedrooms" class="styles-inp">
              <div class="property-size property-size-cls"> 3 bedrooms </div>
            </label>
          </div>
          <div class="col-lg-4 col-xs-6">
            <label>
              <input type="radio" name="propery_size" value="4 bedrooms" class="styles-inp">
              <div class="property-size property-size-cls"> 4 bedrooms </div>
            </label>
          </div>
          <div class="col-lg-4 col-xs-6">
            <label>
              <input type="radio" name="propery_size" value="5+ bedrooms" class="styles-inp">
              <div class="property-size property-size-cls"> 5+ bedrooms </div>
            </label>
        </div>
      </div>
    </div>

     <div class="for_business_bx text-center" style="display: none;">
        <div class="row">
          <div class="col-lg-4 col-xs-6">
         <label>
            <input type="radio" name="propery_size" value="1 room" class="styles-inp">
            <div class="property-size property-size-cls"> 1 room </div>
          </label>
          </div>
          <div class="col-lg-4 col-xs-6">
          <label>
            <input type="radio" name="propery_size" value="2 rooms" class="styles-inp">
            <div class="property-size property-size-cls"> 2 rooms </div>
          </label>
          </div>
          <div class="col-lg-4 col-xs-6">
           <label>
              <input type="radio" name="propery_size" value="3 rooms" class="styles-inp">
              <div class="property-size property-size-cls"> 3 rooms </div>
            </label>
        </div>
          <div class="col-lg-4 col-xs-6">
        
           
            <label>
              <input type="radio" name="propery_size" value="4 rooms" class="styles-inp">
              <div class="property-size property-size-cls"> 4 rooms </div>
            </label>
            </div>
          <div class="col-lg-4 col-xs-6">
            <label>
              <input type="radio" name="propery_size" value="5 rooms" class="styles-inp">
              <div class="property-size property-size-cls"> 5 rooms </div>
            </label>
            </div>
          <div class="col-lg-4 col-xs-6">

                <label>
              <input type="radio" name="propery_size" value="6+ rooms" class="styles-inp">
              <div class="property-size property-size-cls"> 6+ rooms </div>
            </label>
          </div>
        </div>


    </div>
    <button type="button" name="previous" class="previous btn btn-danger on-top-place"><i class="fa fa-arrow-left"></i> Previous </button>
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Searching for movers in your area…..</h2>
    <div class="">
      <div class="progress" style="position: relative; margin: 100px 0px;">
          <div class="progress-bar progress-bar-striped indeterminate">
          </div>
      </div>
    </div>
    <button type="button" name="previous" class="previous btn btn-danger on-top-place"><i class="fa fa-arrow-left"></i> Previous </button>
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Your quote is only a click away</h2>
      <div class="row">
        <div class="col-lg-3 col-xs-12 form-group">
          <label>Name</label>
          <input type="text" name="name" placeholder="Name" class="form-control inn-s" />
        </div>
        <div class="col-lg-4 col-xs-12 form-group">
          <label>Email</label>
          <input type="text" name="email" placeholder="Email" class="form-control inn-s" />
        </div>
        <div class="col-lg-3 col-xs-12 form-group">
          <label>Phone</label>
          <input type="text" name="phone" placeholder="xxx-xxx-xxxx" class="form-control inn-s" autocomplete="off" />
        </div>
        <div class="col-lg-2 col-xs-12 form-group">
          <label> &nbsp;</label>
          <button name="next" class="user_info_btn btn btn-danger inn-b">
           Submit <i class="fa fa-arrow-right"></i>
          </button> 
        </div>
      </div>
   <button type="button" name="previous" class="previous btn btn-danger on-top-place"><i class="fa fa-arrow-left"></i> Previous </button>
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Your quote is only a click away</h2>
    <div class="row text-center">
      <div class="col-xs-6">
        <label>Do you need storage?</label>
         <div class="radio form-group">
          <label><input type="radio" name="storage" value="Yes"> Yes <span></span></label>
          <label><input type="radio" name="storage" value="No" checked="checked"> No <span></span></label>
        </div>
      </div>
      <div class="col-xs-6">
        <label>Vehicle Transport?</label>
        <div class="radio">
          <label><input type="radio" name="transport" value="Yes"> Yes <span></span></label>
          <label><input type="radio" name="transport" value="No" checked="checked"> No <span></span></label>
        </div>
      </div>
    </div>

    <div class="row vihcle_transport_box" style="display: none;">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-lg-4 col-xs-4 form-group">
            <label>Make</label>
            <input type="text" name="make" id="make" class="form-control" >
          </div>
          <div class="col-lg-4 col-xs-4 form-group">
            <label>Model</label>
            <input type="text" name="model" id="model" class="form-control" >
          </div>
          <div class="col-lg-4 col-xs-4 form-group">
            <label>Year</label>
            <input type="text" name="year" id="year" class="form-control" >
          </div>

          <div class="col-lg-12 text-center">
            <label>Is the car in running condition? </label>
             <div class="form-group radio">
                <label><input type="radio" name="car_running_cond" value="Yes" checked="checked"> Yes <span></span> </label>
                <label><input type="radio" name="car_running_cond" value="No"> No <span></span></label>
              </div>
          </div>
        </div>
      </div>
    </div>

      <button type="button" name="previous" class="previous btn btn-danger on-top-place"><i class="fa fa-arrow-left"></i> Previous </button>

      <div class="row">
        <div class="col-md-4"></div>
       <div class="col-md-4">
          <div class="g-recaptcha-contact" data-sitekey="6LfibNYUAAAAAKE7KLMn8qe9dyAn9Ub3v6I-xisz" id="RecaptchaField"></div>
          <input type="hidden" class="hiddenRecaptcha" name="hiddenRecaptcha" id="hiddenRecaptcha">
          <div class="recaptcha-error"></div>
       </div>
    </div>
    <div class="row">
      <div class="col-lg-12 form-group text-center">
        <br>
        <input type="button" name="next" class="btn btn-danger request_submit_btn inn-b" value="GET FREE QUOTES" style="width: 200px;" />
      </div>
    </div>
  </fieldset>

  @endif
</form>
      </div>
    </div>
  </div>
</section>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/request-frm.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/jquery-ui.min.css') }}">
<style type="text/css">
  #msform .radio label input[type='radio']:checked+span {
    border-radius: 11px;
    width: 10px;
    height: 10px;
    position: absolute;
    top: 10px;
    left: 25px;
    display: block;
    background-color: #880b17;
}

<<<<<<< HEAD
.recaptcha-error{
  color: red;
}

=======
>>>>>>> b19b5b547ad4f6ba78630171678ac39ecc16c843
@media screen and (max-width: 425px){
  #msform .radio label input[type='radio']:checked+span {
    left: 5px;
  }
}
</style>
@endsection
@section('script')
<script src="{{ url('assets/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/jquery-input-mask-phone-number.min.js') }}"></script>

<script type="text/javascript">
  $(function(){

     if($(window).width() <= 800){
       $( "#datepicker" ).datepicker('destroy');
       $( "#datepicker" ).datepicker({
          minDate: 0,
          onSelect: function(dateText, inst) {
            $("#move_date").val(dateText);
            var elem = $('#move_date');
             next_func(elem);
          }
        });
     }
        



    $('#msform input[name="phone"]').usPhoneFormat({
        format: 'xxx-xxx-xxxx',
    }); 

    // $('#phone').inputmask('999-999-9999');
    $( "#datepicker" ).datepicker({
      numberOfMonths:2,
      minDate: 0,
      onSelect: function(dateText, inst) {
        $("#move_date").val(dateText);
        var elem = $('#move_date');


         next_func(elem);
      }
    });
  })
//jQuery time
var current_fs, next_fs, previous_fs; 
var left, opacity, scale; 
var animating;

$(".next").click(function(){
  next_func(this);
});

$(".property-type-cls").click(function(){
  var property_type = $(this).val();
  if(property_type == "Commercial"){
    $('.for_house_aprtment_bx').hide();
    $('.for_business_bx').show();
    next_func(this);
  }else{
    $('.for_house_aprtment_bx').show();
    $('.for_business_bx').hide();
    next_func(this);
  }
});

$('body').on('click','input[name="transport"]', function(){
  var transport = $(this).val();
  if(transport == "Yes"){
    $('.vihcle_transport_box').show();
    $('#make').attr('required', true);
    $('#model').attr('required', true);
    $('#year').attr('required', true);
  }else{
    $('.vihcle_transport_box').hide();
    $('#make').removeAttr('required');
    $('#model').removeAttr('required');
    $('#year').removeAttr('required');
  }

});

$(".property-size-cls").click(function(){
  next_func(this);
  setTimeout(function(){
    var elem = $('.progress-bar');
    next_func(elem);
  }, 3000);
});

$('body').on('click', '.user_info_btn', function(e){
    e.preventDefault();
    var _this = this;
    var form = $("#msform");
    form.validate({
      rules: {
        name: {
          required: true,
        },
        email: {
          required: true,
          email: true,
        },
        phone: {
          required: true,
          // number: true
        }
      },
      messages: {
        name: {
          required: "Enter your name.",
        },
        email: {
          required: "Enter your email.",
          email: "Enter valid email.",
        },
        phone: {
          required: "Enter your Phone.",
          number: "Enter valid phone.",
        },
      }
    });
    if (form.valid() == true){
      next_func(_this);
    }
});


$('body').on('click', '.request_submit_btn', function(e){
  e.preventDefault();
   var _this = this;
    var form1 = $("#msform");
    form1.validate({
      rules: {
        make: {
          required: true,
        },
        model: {
          required: true,
        },
        year: {
          required: true,
        }
      },
      messages: {
        make: {
          required: "Enter your make.",
        },
        model: {
          required: "Enter your model.",
        },
        year: {
          required: "Enter your year.",
        },
      }
    });
    if (form1.valid() == true){
        var hiddenRecaptchaV =  $('#hiddenRecaptcha').val();
        if (hiddenRecaptchaV.length  == 0) {
          e.preventDefault();
          $('#msform').find('.recaptcha-error').text('please verify you are humann!');
          return false;
        }else{
          $('#msform').submit();
        }
    }

});


function next_func(_this){
  if(animating) return false;
  animating = true;
  current_fs = $(_this).closest('fieldset');
  next_fs = $(_this).closest('fieldset').next();
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  next_fs.show(); 
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      scale = 1 - (1 - now) * 0.2;
      left = (now * 50)+"%";
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    easing: 'easeInOutBack'
  });
}

$(".previous").click(function(){
  if(animating) return false;
  animating = true;  
  current_fs = $(this).closest('fieldset');
  previous_fs = $(this).closest('fieldset').prev();
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  previous_fs.show(); 
  
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      scale = 0.8 + (1 - now) * 0.2;
      left = ((1-now) * 50)+"%";
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    easing: 'easeInOutBack'
  });
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSlhXQ8ixpBW6CLmCJWOIvQXmwzXwlbj4&v=3.exp&sensor=false&libraries=places"></script>
<script type="text/javascript" src="{{ asset('assets/front/autocomplete.js') }}"></script>
<script type="text/javascript">
  var option = '';
  $(function(){

        var option = $("#from_location").geocomplete({
            componentRestrictions: {country: "ca"}
        });

        var option = $("#to_location").geocomplete({
            componentRestrictions: {country: "ca"}
        });

        $('body').on('change', 'input[name="moving_from"]', function(){
          var country = $(this).val();
          $('#from_location').geocomplete("destroy");
          var option = $("#from_location").geocomplete({
              componentRestrictions: {country: country}
          });
        });

        $('body').on('change', 'input[name="moving_to"]', function(){
          var country = $(this).val();
          $('#to_location').geocomplete("destroy");
          var option = $("#to_location").geocomplete({
              componentRestrictions: {country: country}
          });
        });


        option.bind("geocode:result", function (event, result) {
            var location_arr = {};
            for (var i in result.address_components) {
                var obj = result.address_components[i];
                var val = obj.long_name;
                var type = obj.types[0];
                if (type == "country") {
                    val = obj.short_name;
                }
                if (type == "administrative_area_level_1") {
                    val = obj.short_name;
                }
                location_arr[type] = val;
            }
            
            var address = "";
            if (typeof location_arr.route != "undefined") {
                address = location_arr.route;
            }
            if (typeof location_arr.street_number != "undefined") {
                address = location_arr.street_number + ", " + address;
            }
            if (typeof location_arr.sublocality_level_1 != "undefined") {
                address = address + ", " + location_arr.sublocality_level_1;
            }
            if (typeof location_arr.sublocality_level_2 != "undefined") {
                address = address + ", " + location_arr.sublocality_level_2;
            }
            $("#from_venue_city").val(location_arr.locality);
            $("#from_venue_state").val(location_arr.administrative_area_level_1);
            $("#from_venue_postal_code").val(location_arr.postal_code);
            $("#from_venue_country").val(location_arr.country);
        });

        option.bind("geocode:result", function (event, result) {
            var location_arr = {};
            for (var i in result.address_components) {
                var obj = result.address_components[i];
                var val = obj.long_name;
                var type = obj.types[0];
                if (type == "country") {
                    val = obj.short_name;
                }
                if (type == "administrative_area_level_1") {
                    val = obj.short_name;
                }
                location_arr[type] = val;
            }
            
            var address = "";
            if (typeof location_arr.route != "undefined") {
                address = location_arr.route;
            }
            if (typeof location_arr.street_number != "undefined") {
                address = location_arr.street_number + ", " + address;
            }
            if (typeof location_arr.sublocality_level_1 != "undefined") {
                address = address + ", " + location_arr.sublocality_level_1;
            }
            if (typeof location_arr.sublocality_level_2 != "undefined") {
                address = address + ", " + location_arr.sublocality_level_2;
            }
            $("#to_venue_city").val(location_arr.locality);
            $("#to_venue_state").val(location_arr.administrative_area_level_1);
            $("#to_venue_postal_code").val(location_arr.postal_code);
            $("#to_venue_country").val(location_arr.country);
        });
    });
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit"
        async defer>
    </script>
 <script type="text/javascript">
    var CaptchaCallback = function() {
        var widgetId;
        widgetId = grecaptcha.render('RecaptchaField', {'sitekey' : '6LfibNYUAAAAAKE7KLMn8qe9dyAn9Ub3v6I-xisz', 'callback' : correctCaptcha});
     
    };
    var correctCaptcha = function(response) {
        $("#hiddenRecaptcha").val(response);
    };
</script>
@endsection