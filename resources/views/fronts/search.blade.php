@extends('fronts.layouts.app')
@php
 $userlogin = Auth::User();
@endphp
@section('content')
<div id="heading" style="background-image: url({{ asset('assets/front/images/56.jpg')}});margin-top: 81px;">
  <div class="row row-tight">
    <div class="medium-12 small-12 columns">
      <h2 class="service-title white text-center">Search</h2>
      <ol class="bredcrumdf clearfix" >
        <li><a href="{{ route('/') }}">home</a></li>
        <li class="tg-active">Search</li>
      </ol>
    </div>
  </div>
</div>
<br />
<br />
<section>
  <div class="listclear"> @if(count($featured)!='')
    
    
    
    @foreach($featured as $val)
    <div class="tg-postbook">
      <div class="row">
        <div class="col-md-2 col-sm-4">
          <div class="tg-frontcover"><a href=""> @if($val->book_cover=='') <img src="{{ asset($val->book_cover) }}" alt="{{ $val->title }}"/> <img src="{{ asset($val->book_cover) }}" class="backimage" alt="{{ $val->title }}"/> @else <img src="{{ asset('assets/front/images/11860_1570170605.jpg')}}" alt="{{ $val->title }}"/> <img src="{{ asset('assets/front/images/11860_1570170605.jpg')}}" class="backimage" alt="{{ $val->title }}"/> @endif </a></div>
        </div>
        <div class="col-md-10 col-sm-8">
          <h3><a href="">{{ $val->title }}</a></h3>
          <p>by: {{ $val->author_name }}</p>
          <div class="tg-postbookcontent"> <span>{{ $val->price }}</span></div>
        </div>
      </div>
    </div>
    @endforeach
    
   
     @else
        <br />
<br />

      <p > <h4 class="text-center"> No record found</h4></p>
        <br />
<br />

        @endif 
    
    
    
    </div>
  <br />
  <br />
</section>
@endsection