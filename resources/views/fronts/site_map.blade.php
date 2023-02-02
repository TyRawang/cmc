@extends('fronts.layouts.app')
@section('meta')
<title>sitemap - Cargo Movers Canada</title>
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
    <h2>Site MAP</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a >Site MAP</a></li>
    </ul>
  </div>
</section>
<section id="mycustomsection">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h4 class="hdng-title">Company Info</h4>
        <ul class="site_map_items">
          <li><a href="{{ url('/') }}">Home </a></li>
          <li><a href="{{ url('/l/services') }}">Services </a></li>
          <li><a href="{{ url('/testimonials') }}">Testimonials </a></li>
          <li><a href="{{ url('/faqs') }}">FAQ's </a></li>
          <li><a href="{{ url('/about/about-us') }}">About us </a></li>
          <li><a href="{{ url('/blogs') }}">Blog </a></li>
          <li><a href="{{ url('/contactus') }}">Contact </a></li>
        </ul>
      </div>
      <div class="col-lg-4">
        <h4 class="hdng-title">Cargomovers’s Services</h4>
         <ul class="site_map_items">
          <?php 
          $subcategory = App\Category::Orderby('order_by_cat','ASC')->where('p_id','!=','0')->get();
          ?>
          @foreach($subcategory as $v)
            <li> <a href="{{ route('l',['list'=>$v->parent->slug,'catlist'=>$v->slug])}}"> {{ $v->category_name }}</a> </li>
            @endforeach
        </ul>
      </div>
      <div class="col-lg-4">
        <h4 class="hdng-title">Others</h4>
         <ul class="site_map_items">
          <li><a href="{{ url('/free-quote') }}">Request a free quote</a></li>
          <li><a href="{{ url('/testimonials') }}">Read our testimonials</a></li>
          <li><a href="{{ url('/faqs') }}">Having Trouble ?</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection
@section('style')
<style type="text/css">
  .site_map_items li{
    list-style: decimal;
    margin-left: 30px;
    line-height: 30px;
  }
  .hdng-title{
    color: #880b17;
    margin-bottom: 15px;
  }
</style>
@endsection
