@include('fronts.layouts.header')
<div id="wrapper">


<section class="sectionpanel">
<div class="contentSec">

@include('fronts.layouts.menu')

  <div class="container">
  <h2 class="page_heading">{{ $category->category_name }}</h2>

<ul class="list-unstyled listInfo">
    @if(count($job) > 0)
    @foreach($job as $val)
        <li><a href="{{$val->job_url }}" target="blank">{{ $val->job_title }}</a></li>
     @endforeach
     @else
     <li>No Record Found</li>
     @endif

</ul><!-- end of listInfo -->



  </div><!-- end of container -->
</div><!-- end of contentSec -->
</section><!-- end of loginScreen -->

  {{-- <a href="result.html" class="nextBtn"><img src="images/right-arrow.png"></a><!-- end of nextBtn --> --}}
  <div class="copyright primary t15">
        <ul class="footNav">
        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
        <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
              </ul>
   Copyright © 2019 RojgarBharatNews - All Rights Reserved</div>


  @include('fronts.layouts.footer')




  </body>
</html>
