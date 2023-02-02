@extends('fronts.layouts.app')
@section('meta')
<title>Contact for Moving Packing Storage Services | Cargo Movers Canada</title>

<meta name="description" content="Get in touch with us for the best moving packing and storage services in Calgary, Winnipeg &amp; Regina for both residential and commercial goods. Call us or mail us today."/>
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="canonical" href="{{ \Request::fullUrl() }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Contact for Moving Packing Storage Services | Cargo Movers Canada" />
<meta property="og:description" content="Get in touch with us for the best moving packing and storage services in Calgary, Winnipeg &amp; Regina for both residential and commercial goods. Call us or mail us today." />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta property="article:publisher" content="https://www.facebook.com/CargoMoversCanada" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Get in touch with us for the best moving packing and storage services in Calgary, Winnipeg &amp; Regina for both residential and commercial goods. Call us or mail us today." />
<meta name="twitter:title" content="Contact for Moving Packing Storage Services | Cargo Movers Canada" />

    <meta property="og:title" content="Contact"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{ \Request::fullUrl() }}"/>
    <meta property="og:site_name" content="Cargo Movers Canada "/>
    <meta property="og:description" content="GET IN TOUCH 
WE&#039;D LOVE TO HEAR FROM YOU 
Get In Touch 
683 10 St SW #208, Calgary, AB T2P 5G3, Canada
Phone: (403) 768-0480
or
1-855-206-9407
Email: info@CargoMoversCanada.com
Send Us A Quick Email"/>

<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection


@php
 $userlogin = Auth::User();
@endphp
@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h2>Contact Us</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a >Contact Us</a></li>
    </ul>
  </div>
</section>
<section class="sec-padding contact-page-content">
  <div class="thm-container">
    <div class="sec-title">
      <h2><span>Get in touch</span></h2>
      <p>WE'D LOVE TO HEAR FROM YOU</p>
    </div>
    <div class="row">
      <div class="col-lg-12 form-group">
        @if(session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif                        
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 col-sm-6 col-xs-12 pull-left">
        <!-- class="contact-form contact-page"  -->
           <form class="contact-form contact-page" action="{{ url('contact/save') }}" role="form" method="post" id="contact_form" novalidate="novalidate">
          <p>
            <input type="text" placeholder="Name" name="name" value="{{ (old('name')) ? old('name') : '' }}">
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
          </p>
          <p>
            <input type="text" placeholder="Email" name="email" value="{{ (old('email')) ? old('email') : '' }}">
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
          </p>
          <p>
            <input type="text" placeholder="Subject" name="subject" value="{{ (old('subject')) ? old('subject') : '' }}">
            {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
          </p>
          <p>
            <textarea name="message" placeholder="Message"> {{ (old('message')) ? old('message') : '' }}</textarea>
            {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
          </p>
          <!-- <p>
            <div id="gogle-recaptch"></div>
            <div class="recaptcha-error"></div>
          </p> -->

          <button type="submit" class="thm-btn">Submit Now <i class="fa fa-arrow-right"></i></button>
        </form>
        <br>
        <br>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 pull-right">
        <div class="contact-info">
          <ul>
            <li>
              <div class="icon-box"> <i class="icon icon-Pointer"></i> </div>
              <div class="content">
                <p> <strong>Cargo Movers Canada</strong><br>
                  683 10 St SW #208, Calgary, AB T2P 5G3, Canada</p>
              </div>
            </li>
            <li>
              <div class="icon-box"> <i class="icon icon-Plaine"></i> </div>
              <div class="content">
                <p>info@CargoMoversCanada.com</p>
              </div>
            </li>
            <li>
              <div class="icon-box"> <i class="icon icon-Phone2"></i> </div>
              <div class="content">
                <p>(403) 768-0480<br>
                  1-855-206-9407</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.304783393328!2d-114.08862208471047!3d51.04745985204866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716f329d078c9f%3A0xb5cddacb06187f41!2sCargo+Movers+Canada!5e0!3m2!1sen!2sin!4v1564418260908!5m2!1sen!2sin" style="border: 0;" width="100%" height="450" frameborder="0"></iframe>
        </p>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
 <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('gogle-recaptch', {
          // 6Lcf5_UZAAAAAJszjZtEZN691kXyBN2oKgcU98Ak
          // 'sitekey' : '6LfibNYUAAAAAKE7KLMn8qe9dyAn9Ub3v6I-xisz'
          'sitekey' : '6Lcf5_UZAAAAAJszjZtEZN691kXyBN2oKgcU98Ak'

        });
      };


      document.getElementById("contact_form").addEventListener("submit",function(evt){
          var response = grecaptcha.getResponse();
          if(response.length == 0){
            $('#contact_form').find('.recaptcha-error').text("please verify you are humann!"); 
            evt.preventDefault();
            return false;
          }
      });
    </script>
@endsection

@section('style')
<style type="text/css">
  .help-block{
    color: red;
  }
  .recaptcha-error{
    color: red; 
  }
</style>
@endsection