<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Rojgar India</title>
<!-- Bootstrap -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/front/images/favicon.png') }}" />
<link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/front/css/responsive.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/front/css/owl.carousel.css') }}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Open+Sans:300,400,600,700,800" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


</head>
<body>


@php
$menuquery = App\Category::where('isActive',1)->get();
$notice = App\ImportantNotice::where('isActive',1)->latest()->first();

@endphp
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<div id="wrapper">
<header class="header">
  <div class="container">
    <div class="row align-items-center text-center justify-content-md-center">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <div class="row align-items-center">
          <div class="col padd0">
            <div class="logo">
              <a class="white" href="{{ route('home') }}"><img src="{{ asset('assets/front/images/logo.png') }}" alt=""></a> <br/>
              <small>उतिष्ठत। जाग्रत। प्राप्य वरान्निबोधत।</small>
            </div>
          </div><!-- end of col -->
          <div class="col-auto">
            <h3 class="t24 light">ROJGAR BHARAT <small>NEWS</small></h3>
            <small>Find Government Jobs</small>
          </div><!-- end of col -->
        </div><!-- end of row -->
      </div><!-- end of col -->

      <div class="col-lg-6 col-md-6 col-sm-12" style="margin-left: auto;">
        <div class="row align-items-center">
          <div class="col-auto">
            <h4 class="t14 light">
            @if(Auth::user())
                <a class="white" href="{{ route('home') }}">HOME</a>
           @endif

                &nbsp;&nbsp;  <a class="white" href="{{ route('about') }}">ABOUT</a>&nbsp;&nbsp; <a class="white" href="{{ route('contact-us') }}">CONTACT US</a></h4>
            <input type="search" name="" class="form-control googleSearch" placeholder="SEARCH">
          </div><!-- end of col -->
          <div class="col text-center">
             @if(Auth::user()=='')
            <a href="{{ route('login') }}" class="btn btn-light btn-sm clitogBtn form-control" style="width:200px;margin-bottom: 5px;">Login</a>
            <a href="{{ route('register-form') }}" class="btn btn-light btn-sm clitogBtn form-control" style="width:200px;">Register</a>
            <a href="" class="white" style="margin: 7px 0;display: block;" class="t13 white">Forget Password</a>
            @endif
            <h4 class="t16">रोजगार भारत न्यूज़ </h4>
          </div><!-- end of col -->
        </div><!-- end of row -->
      </div><!-- end of col -->
    </div><!-- end of row -->
  </div><!-- end of container -->
<nav class="navbar-expand-lg headNote">
<div class="container">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">IMORTANT NOTICE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CAUTION: KIND ATTENTION</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#!"><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="display: inherit;">{{ $notice ? $notice->title : '' }}</marquee></a>
      </li>
    </ul>
</div>
</nav>
</header><!-- end of header -->
</div>
