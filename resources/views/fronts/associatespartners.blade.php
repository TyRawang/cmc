@extends('fronts.layouts.app')
@php
 $userlogin = Auth::User();
@endphp
@section('content')
<div id="heading" style="background-image: url({{ asset('assets/front/images/56.jpg')}});margin-top: 81px;">
  <div class="row row-tight">
    <div class="medium-12 small-12 columns">
      <h2 class="service-title white text-center"> Associates Partners </h2>
      <ol class="bredcrumdf clearfix" >
        <li><a href="{{ route('/') }}">home</a></li>
        <li class="tg-active">Associates Partners</li>
      </ol>
    </div>
  </div>
</div>
<section><br />

  <div class="row"><div class="col-md-12">
    <ul class="partners row">
      @foreach($associatespartners as $val)
      <li class="col-lg-2 col-md-3 col-sm-4 col-xs-6 "> <a><img src="{{ asset($val->slider_image) }}" alt="{{ $val->title }}"> </a> </li>
      @endforeach
    </ul>
  </div>
  </div>
</section>
@endsection