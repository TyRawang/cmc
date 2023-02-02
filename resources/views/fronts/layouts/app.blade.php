@php
$currentURL = \Request::fullUrl();
if($currentURL) {
  $exp = explode('/',$currentURL);
  $metatitle = "Cargo Movers Canada";
  $metakeyword = "Cargo Movers Canada";
  $metadescription = "Cargo Movers Canada";
}
$menuquery = App\Category::where('isActive',1)->get();
$category  = [];//App\Category::Orderby('category_name','ASC')->where('p_id','0')->where('top','1')->get();
$subcategory = [];//App\Category::Orderby('order_by_cat','ASC')->where('p_id','!=','0')->get();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1" />
@section('meta')
@show
<link rel="shortcut icon" href="{{ url('UserImage/Favicon.png') }}" type="image/x-icon" />

<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/cargomoverscanada.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.3"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<meta name="google-site-verification" content="KOe_9-u7bCU5PCxgk1KtdVy22WmqvU8JN2XL6O_EQjo" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173965492-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173965492-1');
</script>
<link rel="stylesheet" href="{{ asset('assets/front/plugins/bootstrap/css/bootstrap.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/font-awesome/css/font-awesome.min.css') }}" media="all" type="text/css"/>
<link rel="stylesheet" href="{{ asset('assets/front/plugins/Stroke-Gap-Icons-Webfont/style.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/flaticon/flaticon.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/jquery-ui-1.11.4/jquery-ui.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/owl.carousel-2/assets/owl.carousel.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/owl.carousel-2/assets/owl.theme.default.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/animate.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/fancyapps-fancyBox/source/jquery.fancybox.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}" media="all" type="text/css" />
@section('style')
@show

<style type="text/css">

#calling_btn{
  display: none;
}
@media screen and (max-width: 768px) {
  #calling_btn{
    display: block;
  } 
}
#calling_btn {
    position: fixed;
    bottom: 19px;
    right: 15px;
    z-index: 99999;
    border: none;
    outline: none;
    background-color: #880b17;
    color: white;
    cursor: pointer;
    font-size: 18px;
    opacity: 9999;
    height: 50px;
    width: 50px;
    text-align: center;
    margin-top: 13px;
    border-radius: 50%;
}
#calling_btn i{
	padding-top: 15px;
    font-size: 24px;
}

#calling_btn:hover {
  background-color: #0072bc; /* Add a dark-grey background on hover */
}
</style>
</head>
<body class=" new-menu vertical-menu">

<div class="main-df">
@include('fronts.layouts.header')

@section('content')
@show


@include('fronts.layouts.footer')

</div>
</body></html>
              
