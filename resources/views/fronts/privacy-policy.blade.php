@extends('fronts.layouts.app')
@php
 $userlogin = Auth::User();
@endphp
@section('content')
<div class="nagvation clearfix ">
  <div class="container">
    <ul class="clearfix fr">
            <li><a href="{{ route('/') }}">Home</a></li>
            <li><a href="#">{{$getslug->title  }}</a></li>
          </ul>
  </div>
</div>
<div class="main">
<div class="container">
  <div id="content"  class="innersection">
    <div class="row"> 
<div class="col-md-3 sidebar sidebar-shop">
<h3 class="widget-title" style="text-align:left; margin:0 auto; background: #231f20; color:#fff !important; padding:10px 25px;"> Cetagories</h3>
<div class="widget widget-box widget-shop-category active newsub">
@include('fronts.layouts.categorymenu')
</div>
  </div>
      <div class="col-md-9">
        <div id="cart">
          <div class="row">
          <div class="lead text-center">
                {!! $getslug->description !!}
                  </div>
         </div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-left"></div>
          <!-- <div class="col-sm-12 text-right">Showing 1 to 8 of 8 (1 Pages)</div> -->
        </div>
                        <div> </div>
      </div>
    </div>
  </div>
</div>
@endsection
</div>

