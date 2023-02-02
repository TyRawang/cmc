@extends('fronts.layouts.app')
@section('meta')
<title>{{ $newsdetail->title ?? ''}}</title>

<!-- This site is optimized with the Yoast SEO plugin v12.4 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="canonical" href="{{ \Request::fullUrl() }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $newsdetail->title ?? ''}}" />
<meta property="og:description" content="Moving can be a very stressful task. Before you hire professional movers make sure that you are aware of a &hellip;" />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta property="article:publisher" content="https://www.facebook.com/CargoMoversCanada" />
<meta property="article:tag" content="moving companies in Calgary" />
<meta property="article:tag" content="moving services Canada" />
<meta property="article:section" content="Moving Tips" />
<meta property="article:published_time" content="2019-10-10T06:03:33+00:00" />
<meta property="article:modified_time" content="2019-10-10T06:07:45+00:00" />
<meta property="og:updated_time" content="2019-10-10T06:07:45+00:00" />
<meta property="og:image" content="{{ asset($newsdetail->slider_image)}}" />
<meta property="og:image:secure_url" content="{{ asset($newsdetail->slider_image)}}" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="{{ $newsdetail->description }}" />
<meta name="twitter:title" content="{{ $newsdetail->title ?? ''}}" />

<meta property="og:title" content="{{ $newsdetail->title ?? '' }}"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{ \Request::fullUrl() }}"/>
<meta property="og:site_name" content="Cargo Movers Canada "/>
<meta property="og:description" content="{{ $newsdetail->description }}"/>

<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection
@php
 $userlogin = Auth::User();
@endphp
@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h1>{{ $newsdetail->title ?? ''}}</h1>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a href="{{ route('/blogs') }}" >Blogs</a></li>
      <li><a >{{ $newsdetail->title ?? ''}}</a> </li>
    </ul>
  </div>
</section>
<section class="latest-blog sec-padding">
  <div class="thm-container">

    <div class="sec-title" style="margin-bottom:30px;">
      <h2><span>{{ $newsdetail->title ?? ''}}</span></h2>
    </div>

 <div class="date"> <span>{{ date('d', strtotime($newsdetail->created_at)) }}</span>/{{ date('M', strtotime($newsdetail->created_at)) }} </div>
    <div class="blogdetails clearfix"> <img src="{{ asset($newsdetail->slider_image)}}"/> {!! $newsdetail->description ?? ''!!} </div>
  </div>
</section>
@endsection