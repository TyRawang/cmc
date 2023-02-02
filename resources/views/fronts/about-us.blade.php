@extends('fronts.layouts.app')
@php
 $userlogin = Auth::User();
@endphp

@section('meta')
<title>Cargo Movers Residential and Commercial Moving Company in Canada</title>
<meta name="description" content="Cargo Movers Canada one of the best professional and reliable packing, moving and storage company. we provides all services at affordable prices."/>
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="canonical" href="{{ \Request::fullUrl() }}" />
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
@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h2>{{ $aboutus->title }}</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a >{{ $aboutus->title }}</a></li>
    </ul>
  </div>
</section>
<section class="products-sec-nsd-2">
  <div class="container">
    <div class="servicesdetails clearfix">
      <div class="im-ns"> <img src="{{ url($aboutus->image) }}" class="img-responsive"> </div>
      {!! $aboutus->description !!} </div>
  </div>
</section>
@endsection
