@extends('fronts.layouts.app')
@section('meta')
<title>Cargo Movers | Moving Services in Vancouver Canada</title>

<!-- This site is optimized with the Yoast SEO plugin v12.4 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="Cargo Movers Canada offers professional moving &amp; packing services in Regina, Winnipeg, Canada with in-house trained staff. Ring us or email us today."/>
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="canonical" href="{{ \Request::fullUrl() }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Cargo Movers | Moving Services in Vancouver Canada" />
<meta property="og:description" content="Cargo Movers Canada offers professional moving &amp; packing services in Regina, Winnipeg, Canada with in-house trained staff. Ring us or email us today." />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta property="article:publisher" content="https://www.facebook.com/CargoMoversCanada" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Cargo Movers Canada offers professional moving &amp; packing services in Regina, Winnipeg, Canada with in-house trained staff. Ring us or email us today." />
<meta name="twitter:title" content="Cargo Movers | Moving Services in Vancouver Canada" />
        
<meta property="og:title" content="Services"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{ \Request::fullUrl() }}"/>
<meta property="og:site_name" content="Cargo Movers Canada "/>
<meta property="og:description" content="WE ARE A PROFESSIONAL 
Professional Moving &amp; Packing Services in Canada  
Moving 
Are you looking for a Moving Company with an affordable rate. We are what you are looking for, we are fully insured professionals with years of experience.  Read More"/>
<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection

@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h2>Services</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a >Services</a></li>
    </ul>
  </div>
</section>
<section class="products-sec-nsd">
  <div class="container">
    <div class="servicesdetails">
      <h1><span>Our Featured Services </span></h1>
      <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
</div>
    <div class="row">
            <div class=" col-md-4 col-sm-6 ">
        <div class="mns">
          <div class="rjmd"> <img src="{{ url('services-image/moving.png') }}" class="img-responsive"> </div>
          <div class="heading-pr">
            <h2>Moving</h2>
          </div>
          <p>Moving to a new location is one of the most exciting changes, but it is challenging as well.</p>
          <p><a href="{{ url('moving-services') }}">READ MORE</a></p>
        </div>
      </div>
            <div class=" col-md-4 col-sm-6 ">
        <div class="mns">
          <div class="rjmd"> <img src="{{ url('services-image/packaging.png') }}" class="img-responsive"> </div>
          <div class="heading-pr">
            <h2>Packing</h2>
          </div>
          <p>Cargo Movers offers one of the best packing services in Regina at affordable prices.</p>
          <p><a href="{{ url('packing-services') }}">READ MORE</a></p>
        </div>
      </div>
            <div class=" col-md-4 col-sm-6 ">
        <div class="mns">
          <div class="rjmd"> <img src="{{ url('services-image/storage.png') }}" class="img-responsive"> </div>
          <div class="heading-pr">
            <h2>Storage</h2>
          </div>
          <p>With Cargo Movers, you can be assured of getting matchless storage services in Winnipeg for</p>
          <p><a href="{{ url('/storage-services') }}">READ MORE</a></p>
        </div>
      </div>
          </div>
  </div>
</section>
@endsection
@section('style')

@endsection