@include('fronts.layouts.header')
<div id="wrapper">


<section class="sectionpanel">
<div class="contentSec">
 @include('fronts.layouts.menu')
 <h2 class="page_heading">COACHING CENTRE</h2>

<div class="row justify-content-md-center">
  <div class="form-group col-md-4">
<select name="search_state_job" id ="state" class="form-control btn btn-danger">
            <option value="">Select State</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
            <option value="Daman and Diu">Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Orissa">Orissa</option>
            <option value="Pondicherry">Pondicherry</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttaranchal">Uttaranchal</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="West Bengal">West Bengal</option>
            </select>
</div>
<div class="form-group col-md-4">
<select name="search_state_job" id ="state" class="form-control mb-2 btn btn-danger">
<option>Select District</option><option value="DL001">Central Delhi</option><option value="DL002">East Delhi</option><option value="DL003">New Delhi</option><option value="DL004">North Delhi</option><option value="DL005">North East  Delhi</option><option value="DL006">North West  Delhi</option><option value="DL011">Shahdara</option><option value="DL007">South Delhi</option><option value="DL010">South East Delhi</option><option value="DL008">South West  Delhi</option><option value="DL009">West Delhi</option>
            </select>
</div>
  </div><!-- end row -->

<br/>
<br/>
<br/><!-- end of container -->
</div><!-- end of contentSec -->
</section><!-- end of loginScreen -->
<ul class="footNav">
<li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
  <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
</ul>
  <div class="copyright primary t15 noStyky">Copyright © 2019 RojgarBharatNews - All Rights Reserved</div>

  @include('fronts.layouts.footer')

