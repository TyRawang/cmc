@include('fronts.layouts.header')
<div id="wrapper">


<section class="sectionpanel">
<div class="contentSec">
@if(Auth::user())
 @include('fronts.layouts.menu')
 @endif

  <div class="container">
    <h2 class="page_heading">ABOUT US</h2>
    <style>
    .Font-h4{ font-size: 26px;
    color: #464646;
    font-weight: bold;}



    </style>

{!! html_entity_decode($aboutdata->description) !!}
<br/>
  </div><!-- end of container -->
</div><!-- end of contentSec -->
</section><!-- end of loginScreen -->
<ul class="footNav">
<li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
  <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
</ul>
  <div class="copyright primary t15 noStyky">Copyright © 2019 RojgarBharatNews - All Rights Reserved</div>

  @include('fronts.layouts.footer')

