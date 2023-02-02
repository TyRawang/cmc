
  @include('fronts.layouts.header')
<div id="wrapper">
<section class="sectionpanel">
<div class="contentSec">
 @if(Auth::user())
@include('fronts.layouts.menu')
@endif

  <div class="container">
    <h2 class="page_heading">CONTACT</h2>
    @if (Session::has('message'))
    <div class="alert alert-message">{{ Session::get('message') }}</div>
     @endif

<div class="row">
<div class="col-md-6 col-sm-12">
<form name = "form1" method = "post" action="{{ route('save-enquiry') }}">
                @csrf
	<div class="Form_boarder">
            <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="">NAME</label>
                      <input type="text" name="name" value="" required  class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="">EMAIL</label>
                      <input type="email" name="email" value="" required class="form-control" id="" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="">MOBILE NO.</label>
                      <input type="number" name= "mobile" value="" required class="form-control" id="" placeholder="Mobile No.">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">DESCRIPTION</label>
                    <textarea rows="4" name="description" required class="form-control"></textarea>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Send Now!</button>
                </form>

</div></div>


<div class="col-md-6 col-sm-12 text-center">

<div class="contactBox">

<p>If you have any questions or concerns about this Privacy Policy,<br/> please feel free to email us at </p>
<a href="mailto:info@rojgarbharatnews.in">info@rojgarbharatnews.in</a><br/> <a href="mailto:contact@rojgarbharatnews.in">contact@rojgarbharatnews.in</a>

</div></div>

</div><!-- end of row -->

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
