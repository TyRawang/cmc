@include('fronts.layouts.header')

<div id="wrapper">


<section class="egistrationScreen">


<div class="contentSec">
  <div class="container">
    <h2 class="page_heading ">Login Form</h2>


  <form name = "dologin" method = "post" action = "{{ route('dologin') }}">
    @csrf
<table class="table table-bordered tableList">
        @if(Session::has('message'))
        <div class="alert alert-danger">{{ Session::get('message') }}</div>
      @endif<p>
  <tbody>
    <tr>
    <td>EMAIL ID</td>
    <td><input type="email" name="email" value="" required id="email">
         @if ($errors->has('email'))
        <strong style="color:red;">{{ $errors->first('email') }}</strong>
       @endif</td>
    </tr>
    <tr>
        <td>PASSWORD</td>
        <td><input type="password" name="password" value="" required id="password">
            @if ($errors->has('password'))
          <strong style="color:red;">{{ $errors->first('password') }}</strong>
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
  <div class="copyright primary t15">
        <ul class="footNav">
        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
        <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
              </ul>
    Copyright © 2019 RojgarBharatNews - All Rights Reserved</div>



  @include('fronts.layouts.footer');
