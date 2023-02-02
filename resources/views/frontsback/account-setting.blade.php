@include('fronts.layouts.header')
<div id="wrapper">
<section class="sectionpanel">
<div class="contentSec">

@include('fronts.layouts.menu')

  <div class="container">
    <h2 class="page_heading">Account Setting</h2>
    @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
      @endif

<div class="row">
<div class="col-md-6 col-sm-12">
<form name = "form1" method = "post" action="{{ route('saveAccount-setting') }}">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="">NAME</label>
    <input type="text" name="name" value="{{ auth::user()->name }}" required   class="form-control" id="name" placeholder="Name">
    @if ($errors->has('name'))
    <strong style="color:red;">{{ $errors->first('name') }}</strong>
   @endif
</div>
    <div class="form-group col-md-12">
      <label for="">EMAIL</label>
      <input type="email" name="email" value="{{ auth::user()->email }}" required  class="form-control" id="" placeholder="Email">
      @if ($errors->has('email'))
      <strong style="color:red;">{{ $errors->first('email') }}</strong>
     @endif
    </div>
    <div class="form-group col-md-12">
      <label for="">MOBILE NO.</label>
      <input type="number" name= "mobile" value="{{ auth::user()->mobile }}" required  class="form-control" id="" placeholder="Mobile No.">
      @if ($errors->has('mobile'))
      <strong style="color:red;">{{ $errors->first('mobile') }}</strong>
     @endif
    </div>
    <div class="form-group col-md-12">
            <label for="">Password.</label>
            <input type="password" name= "password" value=""  class="form-control" required id="" placeholder="Password.">
            @if ($errors->has('password'))
      <strong style="color:red;">{{ $errors->first('password') }}</strong>
     @endif
          </div>

  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="col-md-6 col-sm-12 text-center">
  <br/>
  <a class="t17" href="mailto:info@rojgaarbharat.com">info@rojgaarbharat.com</a>

</div>

</div><!-- end of row -->

  <br/>
  </div><!-- end of container -->
</div><!-- end of contentSec -->
</section><!-- end of loginScreen -->

  <div class="copyright primary t15 noStyky">Copyright © 2019 RojgarBharatNews - All Rights Reserved</div>

  @include('fronts.layouts.footer')
