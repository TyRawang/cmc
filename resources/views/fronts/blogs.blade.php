@extends('fronts.layouts.app')
@section('meta')
<title>Blog- Latest Updates, News, Tips by Cargomovers Canada</title>

<!-- This site is optimized with the Yoast SEO plugin v12.4 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="Subscribe to Cargomovers Blog to get information related to commercial moving company canada. To get regular posts/ articles about Latest Movers."/>
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="canonical" href="{{ \Request::fullUrl() }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Blog- Latest Updates, News, Tips by Cargomovers Canada" />
<meta property="og:description" content="Subscribe to Cargomovers Blog to get information related to commercial moving company canada. To get regular posts/ articles about Latest Movers." />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta property="article:publisher" content="https://www.facebook.com/CargoMoversCanada" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Subscribe to Cargomovers Blog to get information related to commercial moving company canada. To get regular posts/ articles about Latest Movers." />
<meta name="twitter:title" content="Blog- Latest Updates, News, Tips by Cargomovers Canada" />   
    <meta property="og:title" content="Blog"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{ \Request::fullUrl() }}"/>
    <meta property="og:site_name" content="Cargo Movers Canada "/>
    <meta property="og:description" content="MOVERS BLOG 
THE LATEST NEWS &amp; RESOURCES           
HAPPY CUSTOMERS 
Testimonials   
Terran James 
“Cargo Movers Canada were really big help to me and my family. I had to move to"/>
<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection
@php
 $userlogin = Auth::User();
@endphp

@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h2>Blogs</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a >Blogs</a></li>
    </ul>
  </div>
</section>
<section class="latest-blog sec-padding">
  <div class="thm-container">
    <div class="sec-title">
      <h2><span>latest Blog</span></h2>
    </div>
    <div class="row">
    
     @foreach($news as $val)
    
      <div class="col-md-6">
        <div class="single-blog-post img-cap-effect">
          <div class="img-box"> <img src="{{ asset($val->slider_image) }}" alt="{{ $val->title }}">
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
        <br>
        <br>
      </div> @endforeach
      
      
    </div>
  </div>
</section>
@endsection