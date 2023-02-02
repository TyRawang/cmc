@extends('fronts.layouts.app')
@php
 $userlogin = Auth::User();
@endphp

@section('meta')
<title>FAQ Moving Company Canada | Moving Services in Calgary</title>
<meta name="description" content="Cargo Movers Canada is best-moving company In Canada, commercial moving In Canada, We providing Packing, Storage Services if you have any query please FAQ ."/>
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="canonical" href="{{ \Request::fullUrl() }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="FAQ Moving Company Canada | Moving Services in Calgary" />
<meta property="og:description" content="Cargo Movers Canada is best-moving company In Canada, commercial moving In Canada, We providing Packing, Storage Services if you have any query please FAQ ." />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta property="article:publisher" content="https://www.facebook.com/CargoMoversCanada" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Cargo Movers Canada is best-moving company In Canada, commercial moving In Canada, We providing Packing, Storage Services if you have any query please FAQ ." />
<meta name="twitter:title" content="FAQ Moving Company Canada | Moving Services in Calgary" />
<meta property="og:title" content="FAQ"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{ \Request::fullUrl() }}"/>
<meta property="og:site_name" content="Cargo Movers Canada "/>
<meta property="og:description" content="ASK &amp; WE ANSWER 
FREQUENTLY ASKED QUESTIONS       

Frequently Asked Questions"/>
<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection


@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h2>Faqs</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a >Faqs</a></li>
    </ul>
  </div>
</section>
<section class="sec-padding faq-page">
  <div class="thm-container">
    <div class="">
      <div class="sec-title">
        <h2><span>Frequently Asked Questions</span></h2>
        <p> You have questions. We have answers. </p>
      </div>
      <div class="accrodion-grp faq-accrodion" data-grp-name="faq-accrodion">
        <h2>Insurance</h2>
        <?php $pos=1 ?>
        @foreach($faqs as $val)
        
        @if($val->cattype=='1')
        <div class="accrodion <?php if($pos==1) {?> active <?php }?>">
          <div class="accrodion-title">
            <h4>{{ $val->title }}</h4>
          </div>
          <div class="accrodion-content" >
            <!-- <h3>{{ $val->title }}</h3> -->
            <p>{!! $val->description !!}</p>
          </div>
        </div>
        @endif
        <?php  $pos++ ?>
        @endforeach
        <h2>Others</h2>
        <?php $poss=1 ?>
        @foreach($faqs as $val)
        
        @if($val->cattype=='2')
        <div class="accrodion <?php if($poss==1) {?> active <?php }?>">
          <div class="accrodion-title">
            <h4>{{ $val->title }}</h4>
          </div>
          <div class="accrodion-content" >
            <!-- <h3>{{ $val->title }}</h3> -->
            <p>{!! $val->description !!}</p>
          </div>
        </div>
        @endif
        <?php  $poss++ ?>
        @endforeach
        <h2>Payments</h2>
        <?php $posss=1 ?>
        @foreach($faqs as $val)
        
        @if($val->cattype=='3')
        <div class="accrodion <?php if($posss==1) {?> active <?php }?>">
          <div class="accrodion-title">
            <h4>{{ $val->title }}</h4>
          </div>
          <div class="accrodion-content" >
            <!-- <h3>{{ $val->title }}</h3> -->
            <p>{!! $val->description !!}</p>
          </div>
        </div>
        @endif
        <?php  $posss++ ?>
        @endforeach </div>
    </div>
  </div>
</section>
@endsection
@section('style')
<style type="text/css">
  .accrodion-title h4{
      color: #b11120 !important;
      font-weight: 700 !important;
      font-size: 20px !important;
  }
</style>
@endsection