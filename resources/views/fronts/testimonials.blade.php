@extends('fronts.layouts.app')
@php
$userlogin = Auth::User();
$menuquery = App\Category::where('isActive',1)->get();
$homecategory  = App\Category::Orderby('order_by_cat','ASC')->where('p_id','0')->where('top','0')->get();
@endphp

@section('meta')
<title>Cargo Movers Canada | Moving Services Canada Testimonials</title>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Cargo Movers Canada | Moving Services Canada Testimonials" />
<meta property="og:description" content="Testimonials Cargo Movers Canada provides a wide range of packing, moving and storage services. Call @ 1-855-206-9407 for booking." />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta property="article:publisher" content="https://www.facebook.com/CargoMoversCanada" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Testimonials Cargo Movers Canada provides a wide range of packing, moving and storage services. Call @ 1-855-206-9407 for booking." />
<meta name="twitter:title" content="Cargo Movers Canada | Moving Services Canada Testimonials" />
         
    
    
    
        
    <meta property="og:title" content="Testimonials"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{ \Request::fullUrl() }}"/>
    <meta property="og:site_name" content="Cargo Movers Canada "/>
    <meta property="og:description" content="TESTIMONIALS 
OUR EXTREMELY HAPPY CUSTOMERS     
Barry Tim 
“We got the service of Cargo Movers for our moving on Aug 2018. We are extremely happy about their service. Mike and the team did a professional work. They did everything very nicely, efficiently"/>

<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection

@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h2>Testimonials</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a >Testimonials</a></li>
    </ul>
  </div>
</section>
<section id="mycustomsection">
  <div class="container">
    <div class="servicesdetails clearfix" style="padding:0 0 20px 0;">
      <h1><span>OUR EXTREMELY HAPPY CUSTOMERS</span></h1>
    </div>
    <div class="moretestimoblas">
      <ul>
        @foreach($testimonials as $val)
        <li> {!! $val->description !!}
          <div class="namert"><strong><em>{{ $val->title }}</em></strong> </div>
        </li>
        @endforeach
      </ul>
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