@include('fronts.layouts.header')
<div id="wrapper">


<section class="loginScreen">




<div class="contentSec text-center">
  <div class="container">
    <br/>
    <h3 class="t24 primary">"We are tring to search the best government jobs according to your qualification."</h3>
    <h3 class="hindi t24 primary">"आप आपकी योग्यता के अनुसार सरकारी नौकरी खोजने की कोशिस कर रहे है "</h3>

<div class="custom-control custom-checkbox" style="display: inline-block;">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">I understand and have read the <a href="">Privacy Policy & Terms and Conditions</a>,<br/> Disclaimer. Please take me to the next step.</label>
</div>

    {{-- <a href="#!" class="btn btn-outline-primary btnlarge"> <span>Get Mobile No. OTP LOGIN</span></a> --}}
  <a href="{{ route('login') }}" class="btn btn-outline-primary btnlarge"> <span>LOGIN HERE</span></a>
    <div class="clear"></div><!-- end of clear -->
  <a href="{{ route('register-form') }}" class="btn btn-outline-primary btnlarge"> <span>Registration<br/> Apply Here</span></a>

    <img src="" class="bultIcon" alt="">
    <h4 class="primary">Registration last Date 25 June 2019</h4>
  </div><!-- end of container -->
</div><!-- end of contentSec -->




</section><!-- end of loginScreen -->

  <a href="{{ route('register-form') }}" class="nextBtn"><img src="{{ asset('assets/front/images/right-arrow.png') }}"></a><!-- end of nextBtn -->
  <div class="copyright primary t15">
        <ul class="footNav">
        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
        <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
              </ul>
    Copyright © 2019 RojgarBharatNews - All Rights Reserved</div>

 @include('fronts.layouts.footer');

