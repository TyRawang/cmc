@extends('fronts.layouts.app')


@section('meta')
<title>Cargo Movers Residential and Commercial Moving Company in Canada</title>
<meta name="description" content="Cargo Movers Canada one of the best professional and reliable packing, moving and storage company. we provides all services at affordable prices."/>
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="canonical" href="https://cargomoverscanada.com" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Cargo Movers Residential and Commercial Moving Company in Canada" />
<meta property="og:description" content="Cargo Movers Canada one of the best professional and reliable packing, moving and storage company. we provides all services at affordable prices." />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Cargo Movers Canada one of the best professional and reliable packing, moving and storage company. we provides all services at affordable prices." />
<meta name="twitter:title" content="Cargo Movers Residential and Commercial Moving Company in Canada" />
<meta property="og:title" content="Cargo Movers Canada Home"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{ \Request::fullUrl() }}"/>
<meta property="og:site_name" content="Cargo Movers Canada "/>
<meta property="og:description" content="WE MAKE IT SIMPLE 
PROFESSIONAL SERVICE WITH QUALITY AND CUSTOMER SATISFACTION    GET A FREE QUOTE ONLINE NOW!    
Residential &amp; Commercial Moving Company 
We at Cargo Movers help you move your home from one place to the other by taking charge of"/>
<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection


@php
$userlogin = Auth::User();
$menuquery = App\Category::where('isActive',1)->get();
$homecategory  = [];//App\Category::Orderby('order_by_cat','ASC')->where('p_id','0')->where('top','0')->get();
$homeservices  = [];//App\Category::Orderby('order_by_cat','ASC')->where('p_id','0')->where('top','1')->get();
$homesubcategory = [];//App\Category::Orderby('order_by_cat','ASC')->where('p_id','!=',0)->where('top','1')->get();
$home_testimonial = [];
$latest_news = [];
@endphp
@section('content')
<section class="nbs-main">
  <div class="mainwraperab">

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
   

    <div class="row text-center property-bx" style="margin: 0px 150px;">  
      <div class="col-lg-4 col-xs-12">
      <label>
        <input type="radio" name="property_type" value="House"  class="styles-inp property-type-cls ">
        <img src="{{ url('UserImage/house.png') }}" style="width: 200px; padding:20% 20% 5% 20%;">
        <p>House</p>
      </label>
    </div>
    <div class="col-lg-4 col-xs-12">

      <label>
        <input type="radio" name="property_type" value="Apartment" class="styles-inp property-type-cls">
        <img src="{{ url('UserImage/apartment.png') }}" alt="apartment" style="width: 200px; padding:20% 20% 5% 20%;">
        <p>Apartment</p>
      </label>
    </div>
    <div class="col-lg-4 col-xs-12">
      <label>
        <input type="radio" name="property_type" value="Commercial" class="styles-inp property-type-cls">
        <img src="{{ url('UserImage/business-building.png') }}" alt="business building"style="width: 200px; padding:20% 20% 5% 20%;">
        <p>Commercial</p>
      </label>
    </div>
  </div>
  
    <button type="button" name="previous" class="previous btn btn-danger on-top-place"><i class="fa fa-arrow-left"></i> Previous </button>
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Select property size</h2>
    <!-- <h3 class="fs-subtitle">Your presence on the social network</h3> -->
    <div class="for_house_aprtment_bx text-center property-bx" style="margin: 0px 150px;">
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

     <div class="for_business_bx text-center" style="display: none; margin: 0px 150px;">
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
          <input type="text" name="name"class="form-control inn-s" placeholder="Name" />
        </div>
        <div class="col-lg-4 col-xs-12 form-group">
          <label>Email</label>
          <input type="text" name="email"  class="form-control inn-s" placeholder="Email" />
        </div>
        <div class="col-lg-3 col-xs-12 form-group">
          <label>Phone</label>
          <input type="text" name="phone" class="form-control inn-s" placeholder="xxx-xxx-xxxx" autocomplete="off" />
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

    <div class="vihcle_transport_box" style="display: none;">
      <div>
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
       <!-- <div class="col-md-4">
       6Lcf5_UZAAAAAJszjZtEZN691kXyBN2oKgcU98Ak
          <div class="g-recaptcha-contact" data-sitekey="6LfibNYUAAAAAKE7KLMn8qe9dyAn9Ub3v6I-xisz" id="RecaptchaField"></div>
          <div class="g-recaptcha-contact" data-sitekey="6Lcf5_UZAAAAAJszjZtEZN691kXyBN2oKgcU98Ak" id="RecaptchaField"></div>
          <input type="hidden" class="hiddenRecaptcha" name="hiddenRecaptcha" id="hiddenRecaptcha">
           <div class="recaptcha-error"></div>
       </div> -->
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
</section>
<section class="about-info-box sec-padding">
<h1 class="sec-title h2 text-center" style="font-weight: bold;text-transform: uppercase;font-family: 'Alegreya', sans-serif">Edmonton’s Trusted Moving Company</h1>
  <div class="thm-container">
    <div class="row">
      <div class="col-lg-4 hidden-md hidden-sm hidden-xs">
        <div class="img-cap-effect">
          <div class="img-box"> <img src="{{ url('assets/front/images/about-info-box/2.jpg') }}" alt="About Us"/>
            <div class="img-caption">
              <div class="box-holder"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="sec-title ">
          <h2><span>About Us</span></h2>
          <div class="mytextes">
            <p>Cargo Movers Canada started as a local business and now we are growing as one of the leading moving companies in Calgary. Our mission is to provide our services with professionalism, attention to each and every specific detail, and concern for the safety of our customer’s properties and belongings.</p>
            <p>
               Cargo movers understands that moving can be hard, expensive and stressful. Thats why we take the initative to ensure you dont experience the negative aspects of relocation. We offer competitive prices and 0% fuel surcharge. We ensure our communication with our customers are clear and done in a timely manner so our customers are confident their move is in good hands. Allowing Cargo Movers to handle your relocation means you dont have to move a muscle. All services are inclusive of the price you are quoted.
            </p>
           <!--  <ul>
              <li>Deliver Environmentally Responsible Client Services</li>
              <li>Provide Employees with an Attractive Working Environment</li>
              <li>Be an Active Community Partner</li>
              <li>Maintain High Ethical Standards</li>
              <li>Drive Continuous Improvement</li>
            </ul> -->
          </div>
          <a href="{{ url('l/services') }}" class="thm-btn">view our services <i class="fa fa-arrow-right"></i></a> </div>
      </div>
    </div>
  </div>
</section>
@foreach($homeservices as $value)
<section class="welcome-services home-one">
  <div class="thm-container">
    <div class="sec-title">
      <h2><span> {{ $value->category_name }}</span></h2>
      <p> {{ $value->category_name }}</p>
    </div>
    <div class="row"> 

      @foreach($homesubcategory as $v)
      @if($value->id == $v->p_id)
      <div class="col-md-6">
        <div class="welcome-single-services">
          <div class="img-box hidden-xs"><a href="{{ route('l',['list'=>$value->slug,'catlist'=>$v->slug])}}"><img src="{{ url($v->image) }}" alt="commercial moving company Canada"></a> </div>
          <div class="text-box">
            <div class="content"> <a href="{{ route('l',['list'=>$value->slug,'catlist'=>$v->slug])}}">
              <h3>{{ $v->category_name }}</h3>
              </a>
              <p>{{ $v->shortdescription }}</p>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach </div>
  </div>
</section>
@endforeach
<section class="call-to-action">
  <div class="thm-container">
    <div class="row">
      <div class="col-md-7 hidden-xs hidden-sm">
        <div class="right-full-image"> <img src="{{ asset('assets/front/images/call-to-action/1.png')}}" alt="Awesome Image"/> </div>
      </div>
      <div class="col-md-5">
        <div class="call-to-action-text">
          <h3>We Remove The Headache From Moving <br>
            Move With Ease</h3>
          <p>Our professional services are designed to take care of your goods right from the picking from your home to the next destination where you want to unload the goods. We have a solution for all your residential & commercial needs.</p>
          <a href="{{ url('l/services') }}" class="thm-btn">View services <i class="fa fa-arrow-circle-right"></i></a> </div>
      </div>
    </div>
	
  </div>
</section>
<section class="faq-section sec-padding">
<div class="thm-container">
    <div class="row">
      <div class="col-lg-12 col-md-12"> 
<p style="text-align: center;"><strong>The one-stop destination for all your moving, packing and storing needs.</strong><br>
 Let us take the load of moving from your hands, as with us you don’t have to move a muscle. <br>

argomoverscanada is one of the best commercial moving company in Canada. We pick your goods up from where you want and deliver them to your unloading destination. <br>

Begun with being a moving company of Calgary, we have grown throughout the years and now deliver the best professional services in Canada, Winnipeg Vancouver, and Edmonton.  Not only this, but we also work to serve all your residential and commercial needs, for packing, moving, and storing your goods. Our priority is to take care of your goods and provide the utmost safety, and you a painless, stressfree, moving experience. <br>

Enjoy the benefits of working with us! Best Quality services at affordable prices. Moving goods should not be a luxurious affair, but an affordable one. We make sure to deliver your goods on time and in one piece. At Cargomoverscanada we use the best equipment and excellent packaging materials. It helps in keeping your goods protected and safe from any externalities. <br>

For Global Shipping of Cargo, get a quote and let your biggest issue solve, without moving a muscle.</p>
  </div>
    </div>
	  </div>
  <!-- <div class="thm-container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="sec-title">
          <h2><span>some of our core values</span></h2>
        </div>
        <div class="accrodion-grp" data-grp-name="faq-accrodion">
          <div class="accrodion active">
            <div class="accrodion-title">
              <h4>Our Mission</h4>
            </div>
            <div class="accrodion-content">
              <div class="img-caption">
                <div class="img-box"> <img src="{{ asset('assets/front/images/accrodion/1.jpg')}}" alt="Awesome Image"/> </div>
                <div class="content-box">
                  <h4>Our Delivery is all our our country</h4>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehen- derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <ul>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accrodion ">
            <div class="accrodion-title">
              <h4>Our Vision</h4>
            </div>
            <div class="accrodion-content">
              <div class="img-caption">
                <div class="img-box"> <img src="{{ asset('assets/front/images/accrodion/1.jpg')}}" alt="Awesome Image"/> </div>
                <div class="content-box">
                  <h4>Our Delivery is all our our country</h4>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehen- derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <ul>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accrodion">
            <div class="accrodion-title">
              <h4>Our About</h4>
            </div>
            <div class="accrodion-content">
              <div class="img-caption">
                <div class="img-box"> <img src="{{ asset('assets/front/images/accrodion/1.jpg')}}" alt="Awesome Image"/> </div>
                <div class="content-box">
                  <h4>Our Delivery is all our our country</h4>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehen- derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <ul>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
     <!--  <div class="col-lg-4 col-md-4">
        <div class="sec-title">
          <h2><span>Our locations</span></h2>
        </div>
        <div class="view-location"> <img src="{{ asset('assets/front/images/view-location.png')}}" alt="Awesome Image"/>
          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non numquam eius modi.</p>
          <a href="#">view our locations</a> </div>
      </div> -->
    </div>
  </div>
</section>
<section class="request-qoute has-overlay">
  <div class="thm-container">
    <div class="row">
      <div class="col-md-6">
        <div class="sec-padding has-overlay">
          <div class="sec-title">
            <h2><span>Testimonials</span></h2>
          </div>
          <div class="testimonial-box with-carousel">
            <div class="owl-carousel owl-theme">
              @foreach($home_testimonial as $testi)
              <div class="item">
                <div class="content-box">
                  <div class="top">
                    <div class="qoute-box"> " </div>
                    <div class="title">
                      <h3></h3>
                    </div>
                  </div>
                  <div class="content">
                    <p>{!! $testi->description !!}</p>
                    <span> {{ $testi->title }}</span> <img src="{{ url('UserImage/default_profile.png') }}" alt=""> </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="sec-padding">
          <div class="sec-title">
            <h2><span>GET IN TOUCH</span></h2>
          </div>

          <form id="contact_form" action="{{ url('contact/save') }}" method="post" class="contact-form">
            <div class="row">
              <div class="col-lg-12 form-group">
                @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif                        
              </div>
            </div>
            <div class="form-grp full">
              <input type="text" name="name" placeholder="Name" value="{{ (old('name')) ? old('name') : '' }}">
              {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-grp full">
              <input type="text" name="email" placeholder="Email" value="{{ (old('email')) ? old('email') : '' }}">
              {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
              <div class="form-grp full">
                <input type="text" name="subject" placeholder="Subject" value="{{ (old('subject')) ? old('subject') : '' }}">
                 {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
              </div>
            <!-- </div> -->
            <div class="form-grp">
              <textarea name="message" placeholder="Message">{{ (old('subject')) ? old('subject') : '' }}</textarea>
               {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-grp">
                <div class="g-recaptcha-contact" data-sitekey="6LfibNYUAAAAAKE7KLMn8qe9dyAn9Ub3v6I-xisz" id="RecaptchaField1"></div>
                <input type="hidden" class="hiddenRecaptcha" name="hiddenRecaptcha1" id="hiddenRecaptcha1">
               <div class="recaptcha-error"></div>
            </div>
            <button type="submit" class="thm-btn">Submit Now <i class="fa fa-arrow-circle-right"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="latest-blog sec-padding">
  <div class="thm-container">
    <div class="sec-title">
      <h2><span>latest Blog</span></h2>
    </div>
    <div class="row">
      @foreach($latest_news as $val)
      <div class="col-md-6">
        <div class="single-blog-post img-cap-effect" style="margin-bottom: 15px;">
          <div class="img-box"> <img src="{{ asset($val->slider_image) }}"/>
            <div class="img-caption">
              <div class="box-holder">
                <ul>
                  <li><a href="{{ route('blog-detail',['slug'=>$val->slug])}}"><i class="fa fa-link"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="content-box">
            <div class="date"> <span>{{ date('d', strtotime($val->created_at)) }}</span>/{{ date('M', strtotime($val->created_at)) }} </div>
            <a href="{{ route('blog-detail',['slug'=>$val->slug])}}">
            <h3>{{ $val->title }}</h3>
            </a>
            <p>{!! $val->sort_desc() !!}</p>
            <a href="{{ route('blog-detail',['slug'=>$val->slug])}}" class="thm-btn">Read More <i class="fa fa-arrow-right"></i></a> </div>
        </div>
      </div>
      @endforeach
     
    </div>
  </div>
</section>



<section class="fact-counter sec-padding">
  <div class="thm-container">
    <div class="row">
      <div class="col-md-4 col-sm-12 text-center">
          <img src="{{ url('UserImage/company1.png') }}">
      </div>
      <div class="col-md-4 col-sm-12 text-center">
          <img src="{{ url('UserImage/company2.png') }}">
      </div>
      <div class="col-md-4 col-sm-12 text-center">
          <img src="{{ url('UserImage/company3.png') }}">
      </div>
    </div>
  </div>
</section>


<section class="footer-top">
  <div class="thm-container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6">
          <h3>Logistic and cargo</h3>
          <p>Contact us now to get quote for all your global <br>
            shipping and cargo need.</p>
        </div>
        <div class="col-md-6"> <a class="thm-btn" href="{{ url('contactus') }}">Contact Us <i class="fa fa-arrow-circle-right"></i></a> </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/request-frm.css') }}">
<style type="text/css">
.mainwraperab{
  top: 70% !important;
}

@media screen and (max-width: 768px){
  .mainwraperab{
    top: 55% !important;
  }
}
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

@media screen and (max-width: 425px){
  #msform .radio label input[type='radio']:checked+span {
    left: 5px;
  }
}

.help-block{
  color: red;
}
.recaptcha-error{
  color: red; 
  }
</style>
<link rel="stylesheet" href="{{ url('assets/css/jquery-ui.min.css') }}">
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
      
      $('#msform').submit();
      //commented recaptcha 

      // var hiddenRecaptchaV =  $('#hiddenRecaptcha').val();
      // if (hiddenRecaptchaV.length  == 0) {
      //   e.preventDefault();
      //   $('#msform').find('.recaptcha-error').text('please verify you are humann!');
      //   return false;
      // }else{
      //   $('#msform').submit();
      // }
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


  <script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit"
        async defer>
    </script>
 <script type="text/javascript">
  // Commented Recaptcha 
    // var CaptchaCallback = function() {
    //     var widgetId;
    //     var widgetId1;
    //     widgetId = grecaptcha.render('RecaptchaField', {'sitekey' : '6LfibNYUAAAAAKE7KLMn8qe9dyAn9Ub3v6I-xisz', 'callback' : correctCaptcha});
    //     widgetId1 = grecaptcha.render('RecaptchaField1', {'sitekey' : '6LfibNYUAAAAAKE7KLMn8qe9dyAn9Ub3v6I-xisz', 'callback' : correctCaptcha1});
    // };
    // var correctCaptcha = function(response) {
    //     $("#hiddenRecaptcha").val(response);
    // };
    // var correctCaptcha1 = function(response) {
    //     $("#hiddenRecaptcha1").val(response);
    // };


    // $('body').on('submit', '#contact_form', function(e){
    //   var hiddenRecaptchaV =  $('#hiddenRecaptcha1').val();
    //   if (hiddenRecaptchaV.length  == 0) {
    //     e.preventDefault();
    //     $('#contact_form').find('.recaptcha-error').text('please verify you are humann!');
    //     return false;
    //   }

    // })
</script>
 
<script type="text/javascript">
  var fromOption = '';
  var toOption = '';
  $(function(){

        var fromOption = $("#from_location").geocomplete({
            componentRestrictions: {country: "ca"}
        });

        var toOption = $("#to_location").geocomplete({
            componentRestrictions: {country: "ca"}
        });

        $('body').on('change', 'input[name="moving_from"]', function(){
          var country = $(this).val();
          $('#from_location').geocomplete("destroy");
          var fromOption = $("#from_location").geocomplete({
              componentRestrictions: {country: country}
          });
        });

        $('body').on('change', 'input[name="moving_to"]', function(){
          var country = $(this).val();
          $('#to_location').geocomplete("destroy");
          var toOption = $("#to_location").geocomplete({
              componentRestrictions: {country: country}
          });
        });


        fromOption.bind("geocode:result", function (event, result) {
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

        toOption.bind("geocode:result", function (event, result) {
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
@endsection
