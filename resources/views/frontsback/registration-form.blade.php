@include('fronts.layouts.header')

<div id="wrapper">


<section class="egistrationScreen">


<div class="contentSec">
  <div class="container">
    <h2 class="page_heading">Registration</h2>

  <form name = "register" method = "post" action = "{{ route('save-register') }}">
    @csrf
<table class="table table-bordered tableList">
  <tbody>
    <tr>
      <td>NAME</td>
      <td><input type="text" name="name" value="" required id="name">
          @if ($errors->has('name'))
        <strong style="color:red;">{{ $errors->first('name') }}</strong>
       @endif</td>

    </tr>
    <tr>
    <td>EMAIL ID</td>
    <td><input type="email" name="email" value="" required id="email">
         @if ($errors->has('email'))
        <strong style="color:red;">{{ $errors->first('email') }}</strong>
       @endif</td>
    </tr>
    <tr>
     <td>MOBILE NO.</td>
     <td><input type="tel" name="mobile" value="" required id="number">
        @if ($errors->has('number'))
        <strong style="color:red;">{{ $errors->first('number') }}</strong>
       @endif</td>
    </tr>
    <tr>
      <td>PASSWORD</td>
      <td><input type="password" name="password" required value="" id="password">
        @if ($errors->has('password'))
        <strong style="color:red;">{{ $errors->first('password') }}</strong>
       @endif</td>
    </tr>
    <tr>
        <td>CONFIRM PASSWORD</td>
        <td><input type="password" name="password_confirmation" required value="" id="password_confirmation">
            @if ($errors->has('password_confirmation'))
            <strong style="color:red;">{{ $errors->first('password_confirmation') }}</strong>
            @endif</td>
        </tr>

    <tr>
      <td>DATE OF BIRTH</td>
      <td>
            <select name="day">
                    @foreach(range(1,31) as $day)
                            <option value="{{strlen($day)==1 ? '0'.$day : $day}}">
                                    {{strlen($day)==1 ? '0'.$day : $day}}
                            </option>
                    @endforeach
              </select>
      <select name="month">
            @foreach(range(1,12) as $month)

                    <option value="{{$month}}">
                            {{date("M", strtotime('2016-'.$month))}}
                    </option>
            @endforeach
      </select>

      <select name="year">

            <?php
             $years = 1960;
            for ($year=1960; $year <= 2000; $year++): ?>
              <option value="<?=$year;?>"><?=$year;?></option>
            <?php endfor; ?>
            </select>

     </td>

    </tr>

    <tr>
      <td>QUALIFICATIONS</td>
      <td>
         <select name="qualification" required>
           <option value="">SELECT QUALIFICATION</option>
            <option value="10TH">10TH</option>
            <option value="12TH">12TH</option>
            <option value="GRADUATION">GRADUATION</option>
            <option value="PG">PG</option>
            <option value="DR">DOCTORATE</option>
            <option value="OTHER">OTHER</option>
        </select>
        @if ($errors->has('qualification'))
        <strong style="color:red;">{{ $errors->first('qualification') }}</strong>
       @endif</td>
    </tr>


    <tr>
      <td>GENDER</td>
          <td>
            <select name="gender" required>
               <option value="">SELECT GENDER</option>
               <option value="MALE">MALE</option>
               <option value="FEMALE">FEMALE</option>
               <option value="TRANSGENDER">TRANSGENDER</option>
           </select>
           @if ($errors->has('gender'))
           <strong style="color:red;">{{ $errors->first('gender') }}</strong>
          @endif</td>
    </tr>

    <tr>
      <td>RELIGION</td>
      <td>
        <select name="religion" required>
            <option value="">SELECT RELIGION</option>
            <option value="HINDU">HINDU</option>
            <option value="MUSLIM">MUSLIM</option>
            <option value="SIKH">SIKH</option>
            <option value="CHRISTIAN">CHRISTIAN</option>
        </select>
        @if ($errors->has('religion'))
        <strong style="color:red;">{{ $errors->first('religion') }}</strong>
       @endif</td>
    </tr>
    <tr>
      <td>CATEGORY</td>
      <td>
            <select name="category" required>
               <option value="">SELECT CATEGORY</option>
                <option value="GENERAL">GENERAL</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
                <option value="EWC">EWC</option>
            </select>
            @if ($errors->has('category'))
        <strong style="color:red;">{{ $errors->first('category') }}</strong>
       @endif</td>
    </tr>

    <tr>
      <td>STATE / UT</td>
      <td>
            <select name="state" id = "state" required>
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
                    @if ($errors->has('state'))
                    <strong style="color:red;">{{ $errors->first('state') }}</strong>
                   @endif</td>
    </tr>

  </tbody>

</table>
  <input type ='submit' name = "submit" class="btn btn-primary btn-lg btnSubmit">
</form>
  </div><!-- end of container -->
</div><!-- end of contentSec -->




</section><!-- end of loginScreen -->

  {{-- <a href="{{route('payment')}}" class="nextBtn"><img src="{{ asset('assets/front/images/right-arrow.png') }}"></a><!-- end of nextBtn --> --}}
  <div class="copyright primary t15">Copyright © 2019 RojgarBharatNews - All Rights Reserved</div>


  @include('fronts.layouts.footer');
