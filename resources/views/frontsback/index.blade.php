@include('fronts.layouts.header')

<style>
    .header{
        display: none;
    }
</style>
<section class="loadinScreen">
  <div class="container">
    <div class="row text-center">

      <div class="col-sm-12 d-flex align-items-end justify-content-md-center">
      <div class="col-sm-12">
        <h1 class="hindi htitle">रोजगार भारत न्यूज़ </h1>
        <h3 class="ht3 white">ROJGAR BHARAT NEWS</h3>
        <h5 class="ht5 white">( Only for Government Jobs )</h5>
      </div>
      </div>

      <div class="col-sm-12 d-flex align-items-end justify-content-md-center">
        <div class="copyright">
                <a href="admitcard.html" class="nextBtn"><img src="images/right-arrow.png"></a><!-- end of nextBtn -->

                  <div class="copyright primary t15 noStyky">
                        <ul class="footNav">
                        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                              </ul>

                    Copyright© 2019 RojgarBharatNews - All Rights Reserved</div>

      </div><!-- end of col -->

    </div><!-- end of row -->
<a href="{{ route('rojgar-process') }}" class="nextBtn"><img src="{{ asset('assets/front/images/right-arrow.png') }}"></a><!-- end of nextBtn -->

  </div><!-- end of loadinScreen -->
</section><!-- end of loadinScreen -->

@include('fronts.layouts.footer')
