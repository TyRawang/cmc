@extends('fronts.layouts.app')
@php
$currentURL = \Request::fullUrl();
$menuquery = App\Category::where('isActive',1)->get();
$exp = explode('/',$currentURL);
$parentcategories = $exp[4];

$userlogin = Auth::User();
@endphp

@section('meta')
<!-- This site is optimized with the Yoast SEO plugin v12.4 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>

<?php
if(strtolower($currentURL)=='https://cargomoverscanada.com/l/moving' || strtolower($currentURL)=='https://cargomoverscanada.com/l/services/moving'){
	$alt = "Long distance movers Calgary";
	?>
<title>Cargo Movers | Moving Services in Vancouver Canada - Long Distance Movers - Office Movers</title>
<meta name="description" content="{!! $shortdescription !!}"/>
    <link rel="canonical" href="https://cargomoverscanada.com/l/services/moving" />
    <?php
}
elseif(strtolower($currentURL)=='https://cargomoverscanada.com/l/packing' || strtolower($currentURL)=='https://cargomoverscanada.com/l/services/packing'){
	$alt = "home packing services Calgary";
	?>
<title>Cargo Movers | Moving Services in Vancouver Canada - Home Packing Services - Packers Services in Winnipeg</title>
<meta name="description" content="{!! $shortdescription !!}"/>
    <link rel="canonical" href="https://cargomoverscanada.com/l/services/packing" />
    <?php
}
elseif(strtolower($currentURL)=='https://cargomoverscanada.com/l/storage' || strtolower($currentURL)=='https://cargomoverscanada.com/l/services/packing'){
	$alt = "";
	?>
<title>Cargo Movers | Moving Services in Vancouver Canada</title>
<meta name="description" content="{!! $shortdescription !!}"/>
    <link rel="canonical" href="https://cargomoverscanada.com/l/services/storage" />
    <?php
}
else{
	$alt = "";
	?>
<title>Cargo Movers | Moving Services in Vancouver Canada</title>
<meta name="description" content="{!! $shortdescription !!}"/>
<link rel="canonical" href="{{ \Request::fullUrl() }}" />
    <?php
}
?>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $categoryname }}" />
<meta property="og:description" content="{!! $shortdescription !!}" />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta property="article:publisher" content="https://www.facebook.com/CargoMoversCanada" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="{!! $shortdescription !!}" />
<meta name="twitter:title" content="{{ $categoryname }}" />
        
<meta property="og:title" content="Services"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{ \Request::fullUrl() }}"/>
<meta property="og:site_name" content="Cargo Movers Canada "/>
<meta property="og:description" content="{!! $shortdescription !!}  Read More"/>
<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection
@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h2>{{ $categoryname }}</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      @if($parent_category)
      <li><a >{{ $parent_category }}</a></li>
      @endif
      <li><a >{{ $categoryname }}</a></li>
    </ul>
  </div>
</section>
@if(count($categories))
<section class="products-sec-nsd">
  <div class="container">
    <div class="servicesdetails">
      <h1><span>{{ $subcatname }} </span></h1>
      <p> {!! $shortdescription !!} </p>
    </div>
    <div class="row"> @foreach($categories as $cat)
      <div class="col-md-4 col-sm-6 ">
        <div class="mns">
          <div class="rjmd"> <a href="{{ $cat->slug }}"><img src="{{ asset($cat->image) }}" class="img-responsive"> </a></div>
          <div class="heading-pr">
            <h2><a href="{{ $cat->slug }}">@if($cat->subcatname)
              {!! $cat->subcatname !!}
              @else        
              {{ $cat->category_name }} 
              @endif</a></h2>
          </div>
          <p>{!! $cat->shortdescription !!}</p>
          <p><a href="{{ $cat->slug }}" class="thm-btn">Read More <i class="fa fa-arrow-right"></i></a></p>
        </div>
      </div>
      @endforeach </div>
  </div>
</section>
@endif

@if($description)
<section class="products-sec-nsd-2">
  <div class="container">
    <div class="servicesdetails clearfix">
      <div class="im-ns"> <img alt="<?php echo $alt; ?>" src="{{ asset( $image  )}}" class="img-responsive"> </div>
      <h1><span>{{ $subcatname }}</span></h1>
      {!! $description !!} </div>
  </div>
</section>
@endif








@if(count($book))
<section>
  <div class="row row-tight mylistleftpanel">
    <div class="listclear "> @foreach($book as $val)
      <div class="tg-postbook">
        <div class="row">
          <div class="col-md-2 col-sm-4">
            <div class="tg-frontcover"><a > @if($val->book_cover=='') <img src="{{ asset($val->book_cover) }}" alt="{{ $val->title }}"/> <img src="{{ asset($val->book_cover) }}" class="backimage" alt="{{ $val->title }}"/> @else <img src="{{ asset('assets/front/images/11860_1570170605.jpg')}}" alt="{{ $val->title }}"/> <img src="{{ asset('assets/front/images/11860_1570170605.jpg')}}" class="backimage" alt="{{ $val->title }}"/> @endif </a></div>
          </div>
          <div class="col-md-10 col-sm-8">
            <h3><a >{{ $val->title }}</a></h3>
            <div class="tg-postbookcontent">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <p>by: {{ $val->author_name }}</p>
                  <p>{{ $val->isbn }}</p>
                  <span>{{ $val->price }}</span> </div>
                <div class="col-md-6 col-sm-6">
                  <p><strong>Year:</strong> {{ $val->publish_year }}</p>
                  <p><strong>Publisher:</strong> {{ $val->publisher }}</p>
                  <a href="{{ route('/')}}/{{ $val->pdf }}" target="_blank"><span>PDF <i class="fa fa-download"></i></span></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="listpagination clearfix"> {{ $book->links() }} </div>
    </div>
    <div class="absolleftpanel"> @include('fronts.layouts.categorymenu')</div>
  </div>
</section>
@else

@endif
@endsection
@section('style')
<style type="text/css">
.mns{
    border: 1px solid #ddd;
    margin-bottom: 50px;
    padding: 10px;
}
</style>
@endsection
