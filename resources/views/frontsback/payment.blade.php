@include('fronts.layouts.header')
<div id="wrapper">

<section class="sectionpanel">
<div class="contentSec">
  <div class="container">


    <h2 class="page_heading">Payment</h2>

<form name = "form1" method = "post" action="{{ route('save-payment') }}">
    @csrf
<div class="contentSec">
  <div class="container">
    <h2 class="primary heading">Payment</h2>
<ul class="list-unstyled listPayInfo">
  <li class="row">
    <div class="col"><h4 class="primary">{{ $smslink->title }}</h4></div>
  <input type="radio" name="amount" required  value="{{ $smslink->price }}"><div class="col"><a href="#"  class="btn btn-primary">{{ $smslink->price }}/-</a> <a href="#" class="btn btn-primary">Pay</a></div>
  </li>
  <li class="row">
    <div class="col"><h4 class="primary">{{ $email->title }}</h4></div>
    <input type="radio" name="amount" required  value="{{ $email->price }}"> <div class="col"><a href="#" class="btn btn-primary">{{ $email->price }}/-</a> <a href="#" class="btn btn-primary">Pay</a></div>
  </li>
  <li class="row">
    <div class="col"><h4 class="primary">{{ $whatsapp->title }}</h4></div>
    <input type="radio" name="amount" required  value="{{ $whatsapp->price }}"><div class="col"><a href="#" class="btn btn-primary">{{ $whatsapp->price }}/-</a> <a href="#" class="btn btn-primary">Pay</a></div>
  </li>
  <li class="row">
    <div class="col"><h4 class="primary">{{ $all->title }}</h4></div>
    <input type="radio" name="amount" required  value="{{ $all->price }}"><div class="col"><a href="#" class="btn btn-primary">{{ $all->price }}/-</a> <a href="#" class="btn btn-primary">Pay</a></div>
  </li>
</ul>

<hr/>



{{-- <a href="payment.html" class="btn btn-primary payBtn btn-lg">Payment Getaway</a>
<div class="clear"></div>
<a href="payment.html" class="btn btn-outline-primary payBtn btn-lg">Payment Modes</a>

<ul class="list-unstyled payinfo list-inline">
  <li class="list-inline-item"><a href="#!" class="btn btn-light btn-lg">All Bank Debit / Credit Card</a></li>
  <li class="list-inline-item"><a href="#!" class="btn btn-light btn-lg">Net Banking</a></li>
  <li class="list-inline-item"><a href="#!" class="btn btn-light btn-lg">Wallet/UPI BHIM / Paytm</a></li>
</ul>--}}

@if ($errors->has('sms'))
<strong style="color:red;">{{ $errors->first('sms') }}</strong>
@endif
<input type="submit" name = "submit" value = "PAY NOW" class="btn btn-primary btn-lg btnSubmit">

</form>

  </div><!-- end of container -->
</div><!-- end of contentSec -->

</section><!-- end of loginScreen -->

  {{-- <a href="{{ route('final-submit') }}" class="nextBtn"><img src="{{ asset('assets/front/images/right-arrow.png') }}"></a><!-- end of nextBtn --> --}}
  <div class="copyright primary t15">Copyright © 2019 RojgarBharatNews - All Rights Reserved</div>

  @include('fronts.layouts.footer');>
