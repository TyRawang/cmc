@include('fronts.layouts.header')

<div id="wrapper">


<section class="sectionpanel">
<div class="contentSec">
        @if($userid!='')
        @include('fronts.layouts.menu')
        @endif


  <div class="container">
    <h2 class="page_heading">Disclaimer</h2>


<p>Disclaimer To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website (including, without limitation, any warranties implied by law in respect of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill). Nothing in this disclaimer will:</p>
<p>limit or exclude our or your liability for death or personal injury resulting from negligence;</p>
<p>limit or exclude our or your liability for fraud or fraudulent misrepresentation; limit any of our or your liabilities in any way that is not permitted under applicable law; or exclude any of our or your liabilities that may not be excluded under applicable law.</p>
<p>The limitations and exclusions of liability set out in this Section and elsewhere in this disclaimer: (a)are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer or in relation to the subject matter of this disclaimer, including liabilities arising in contract, in tort (including negligence) and for breach of statutory duty. To the extent that the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>


<br/>
  </div><!-- end of container -->
</div><!-- end of contentSec -->
</section><!-- end of loginScreen -->

<a href="{{ route('register-form') }}" class="nextBtn"><img src="{{ asset('assets/front/images/right-arrow.png') }}"></a><!-- end of nextBtn -->
<ul class="footNav">
<li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
  <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
</ul>
  <div class="copyright primary t15 noStyky">Copyright © 2019 RojgarBharatNews - All Rights Reserved</div>



<a href="#!" class="scrollToTop" style="display: block;"><i class="fa fa-angle-up fa-2x"></i></a>
</div><!-- end of wrapper -->
@include('fronts.layouts.footer')
