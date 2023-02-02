@include('fronts.layouts.header')

<div id="wrapper">


<section class="sectionpanel">
<div class="contentSec">

    @include('fronts.layouts.menu')

  <div class="container">
    <h2 class="page_heading">Home</h2>

{{-- <h4 class="primary">LOGIN ID - XYZ<br/>
PASSWARD – 1234</h4> --}}

<br/>
@php
$menuquery = App\Category::where('isActive',1)->take(12)->orderBy('id','ASC')->get();
@endphp

<ul class="row list-unstyled listSer">
 @foreach($menuquery as $val)
 <li class="col-lg-3 col-md-4 col-sm-12"><a href="{{ route('listing',['slug' => $val->slug ]) }}"><span>{{ $val->category_name }}</span></a></li>
 @endforeach
</ul><!-- end of row -->



  </div><!-- end of container -->
</div><!-- end of contentSec -->
</section><!-- end of loginScreen -->

  {{-- <a href="jobs.html" class="nextBtn"><img src="images/right-arrow.png"></a><!-- end of nextBtn --> --}}
  <div class="copyright primary t15">
        <ul class="footNav">
        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
        <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
              </ul>
    Copyright © 2019 RojgarBharatNews - All Rights Reserved</div>

  @include('fronts.layouts.footer')



