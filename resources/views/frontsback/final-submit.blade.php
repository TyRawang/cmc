@include('fronts.layouts.header')

<style>

.listFormFinal li{
    margin-bottom: 25px;
}    
    
</style>
<div id="wrapper">


<section class="sectionpanel">
<form name="post" method ="post" action = "{{ route('all-submit') }}">
    @csrf
<div class="contentSec">
 @include('fronts.layouts.menu')


  <div class="container">
    <h2 class="page_heading"> Form Info</h2>

<ul class="list-unstyled text-center listFormFinal">
  <li>
  <h4 class="primary">Select education qualification according to which you are searching job?</h4>
  <h4 class="hindi primary">आप अपनी किस शैक्षणिक योग्यता की नौकरी खोजना चाहते है ?</h4>
  <div class="btn-group">
    <a href="#!" class="btn btn-primary"><label style="margin: 0;"><input type="radio" required name="education" value="10th" /> <span>10th</span></label></a>
    <a href="#!" class="btn btn-primary"><label style="margin: 0;"><input type="radio" required name="education" value="12th" /> <span>12th</span></label></a>
    <a href="#!" class="btn btn-primary"><label style="margin: 0;"><input type="radio" required name="education" value="UG" /> <span>UG</span></label></a>
    <a href="#!" class="btn btn-primary"><label style="margin: 0;"><input type="radio" required name="education" value="PG" /> <span>PG</span></label></a>
    <a href="#!" class="btn btn-primary"><label style="margin: 0;"><input type="radio" required name="education" value="DOCTORATE" /> <span>DOCTORATE</span></label></a>
    <a href="#!" class="btn btn-primary"><label style="margin: 0;"><input type="radio" required name="education" value="ALL" /> <span>ALL</span></label></a>
  </div><!-- end group -->
  </li>
  <li>
  <h4 class="primary">In which state you are searching a Job ?</h4>
  <h4 class="hindi primary">आप भारत के किस राज्य में नौकरी खोजना चाहते है ?</h4>
  <div class="btn-group">
    <a href="#!" class="btn btn-primary"><label style="margin: 0;"><input type="radio" name="state_search" id="state_search" /> <span>List all state and select State/UTs</span></label></a>
</div><!-- end group -->
<td>
    <div id="state" style="display:none;">
    <select name="search_state_job" id ="state" class="form-control btn btn-danger" style="
    max-width: 300px;
    margin: 11px auto 0;
">
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
           </td>
        </div>

  </li>
  <li>
  <h4 class="primary">Are you searching job in all Indian states ?</h4>
  <h4 class="hindi primary">क्या आप भारत के सभी राज्य में नौकरी खोजना चाहते है ?</h4>
  <div class="btn-group">
    <a href="#!" class="btn btn-primary"><label style="margin: 0;"><input type="radio" value = "yes" required name="search_all_state_job" /> <span>YES</span></label></a>
    <a href="#!" class="btn btn-primary"><label style="margin: 0;"><input type="radio" value = "no" required name="search_all_state_job" /> <span>NO</span></label></a>
  </div><!-- end group -->
  </li>
  <li>
  <h4 class="primary">* Are you searching nearby coaching centers?</h4>
  <h4 class="hindi primary">क्या आपको अपने नजदीक कोचिंगं सेन्टर खोजना है ?</h4>
  <div class="btn-group">
    <a href="#!" class="btn btn-primary"><label style="margin: 0;"><input type="radio" value="yes" name="coaching_center" /> <span>YES</span></label></a>
    <a href="#!" class="btn btn-primary"><label style="margin: 0;"><input type="radio" value = "no" name="coaching_center" /> <span>NO</span></label></a>
  </div><!-- end group -->
  </li>
  <li>
  <h4 class="primary">In which city you want to search coaching center?</h4>
  <h4 class="hindi primary">आप किस शहर में कोचिंग सेंटर खोजना चाहते है ?</h4>
  <div class="btn-group form-group">
<select name="search_state_job" id ="state" class="form-control mb-2 btn btn-danger">
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
      &nbsp;&nbsp;
<select name="search_state_job" id ="state" class="form-control mb-2 btn btn-danger">
<option>Select District</option><option value="DL001">Central Delhi</option><option value="DL002">East Delhi</option><option value="DL003">New Delhi</option><option value="DL004">North Delhi</option><option value="DL005">North East  Delhi</option><option value="DL006">North West  Delhi</option><option value="DL011">Shahdara</option><option value="DL007">South Delhi</option><option value="DL010">South East Delhi</option><option value="DL008">South West  Delhi</option><option value="DL009">West Delhi</option>
            </select>
            
  </div><!-- end group -->
  </li>
</ul>




<input type = "submit" name = "submit" value = "FINAL SUBMIT"class="btn btn-primary btn-lg btnSubmit">

  </div><!-- end of container -->
</form>
</div><!-- end of contentSec -->
</section><!-- end of loginScreen -->

  <a href="{{ route('home') }}" class="nextBtn"><img src="{{ asset('assets/front/images/right-arrow.png') }}"></a><!-- end of nextBtn -->
  <div class="copyright primary t15 noStyky">Copyright © 2019 RojgarBharatNews - All Rights Reserved</div>

  @include('fronts.layouts.footer')
  <script>
   $(document).ready(function(){
   $('#state').hide();
   $('#state_search').click(function(){
    var statechecked = $('input[name=state_search]').is(':checked');
    $('#state').show();
   })

   })
  </script>
