@extends('fronts.layouts.app')
@php
 $userlogin = Auth::User();
@endphp
@section('content')
<div id="heading" style="background-image: url({{ asset('assets/front/images/56.jpg')}});margin-top: 81px;">
  <div class="row row-tight">
    <div class="medium-12 small-12 columns">
      <h2 class="service-title white text-center"> Solutions </h2>
      <ol class="bredcrumdf clearfix" >
        <li><a href="{{ route('/') }}">home</a></li>
        <li class="tg-active">Solutions</li>
      </ol>
    </div>
  </div>
</div>
</div>
<div class="tg-sectionspace tg-haslayout">
  <div class="container">
    <div class="row"> </div>
  </div>
</div>
</div>
@endsection