@php
$category  = [];//App\Category::Orderby('category_name','ASC')->where('p_id','0')->where('top','1')->get();
$subcategory = [];//App\Category::Orderby('order_by_cat','ASC')->where('p_id','!=','0')->get();

@endphp
<a  id="calling_btn" href="tel:1-855-206-9407" title="1-855-206-9407"><i class="fa fa-phone"></i></a>
<footer id="footer" class="sec-padding">
  <div class="thm-container">
    <div class="row">
      <div class="col-md-3 col-sm-6 footer-widget">
        <div class="about-widget"> <a href="{{ url('/') }}"><img src="{{ asset('assets/front/images/logo.png')}}" alt="Awesome Image"/></a>
          <p>Cargo Movers started as a local business and now we are growing as one of the leading moving companies in Calgary.</p>
          <a href="{{ url('about/about-us') }}">Read More <i class="fa fa-angle-double-right"></i></a>
          <ul class="social">
            <li><a href="https://www.facebook.com/CargoMoversCanada/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/cargomoverscanada/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <!-- <li><a href="" target="_blank"><i class="fa fa-google-plus"></i></a></li> -->
            <li><a href="mailto:info@cargomoverscanada.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-xs-6 footer-widget">
        <div class="pl-30">
          <div class="title"> <a href="{{ url('/l/services') }}" >
            <h3><span> Services </span></h3>
            </a> </div>
          <ul class="link-list">
             @foreach($subcategory as $v)
            <li> <a href="{{ route('l',['list'=>$v->parent->slug,'catlist'=>$v->slug])}}"> {{ $v->category_name }}</a> </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="col-md-2 col-xs-6 footer-widget">
        <div class="title">
          <h3><span>Quick Links</span></h3>
        </div>
        <ul class="link-list">
          <li > <a href="{{ url('/') }}">Home</a> </li>
          <li > <a href="{{ url('about/about-us') }}" > About Us </a> </li>
          <!-- <li > <a href="{{ url('testimonials') }}">Testimonial</a> </li> -->
          <li > <a href="{{ url('faqs') }}">Faq</a> </li>
          <li > <a href="{{ url('blogs') }}">blog</a> </li>
          <li><a href="{{ url('contactus') }}">contact us</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-6 footer-widget">
        <div class="title">
          <h3><span>Quick Links</span></h3>
        </div>
        <ul class="contact-infos">
          <li>
            <div class="icon-box"> <a href="https://goo.gl/maps/HV4AyWvnxF6JrZkU8" target="_blank"><i class="fa fa-map-marker"></i> </a></div>
            <div class="text-box">
              <p><b>Cargo Movers Canada</b> <br>
                683 10 St SW #208, Calgary, AB T2P 5G3, Canada</p>
            </div>
          </li>
          <li>
            <div class="icon-box"> <i class="fa fa-phone"></i> </div>
            <div class="text-box">
              <p> <a href="tel:(403) 768-0480">(403) 768-0480</a> / <a href="tel:1-855-206-9407">1-855-206-9407</a></p>
            </div>
          </li>
          <li>
            <div class="icon-box"> <i class="fa fa-envelope-o"></i> </div>
            <div class="text-box">
              <p><a href="mailto:info@CargoMoversCanada.com">info@CargoMoversCanada.com</a></p>
            </div>
          </li>
          <li>
            <div class="icon-box"> <i class="icon icon-Timer"></i> </div>
            <div class="text-box">
              <p>Monday - Friday : 8.00 - 19.00</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<section class="bottom-bar">
  <div class="thm-container clearfix">
    <div class="pull-left">
      <p>Copyright &copy; 2019-20 Cargo Movers Canada. All Rights Reserved | <a target="_blank" href="{{ url('sitemap') }}">Site Map</a></p>
    </div>
    <div class="pull-right">
      <p> Powered by <a href="https://webdesigncalgary.net/" target="_blank"> WebDesign Calgary </a></p>
    </div>
  </div>
</section>
<script src="{{ asset('assets/front/plugins/jquery/jquery-1.11.3.min.js') }}"></script> 
<script src="{{ asset('assets/front/plugins/bootstrap/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('assets/front/plugins/jquery-ui-1.11.4/jquery-ui.min.js') }}"></script> 
<script src="{{ asset('assets/front/plugins/owl.carousel-2/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('assets/front/plugins/jquery-appear/jquery.appear.js') }}"></script> 
<script src="{{ asset('assets/front/plugins/jquery-countTo/jquery.countTo.js') }}"></script> 
<script src="{{ asset('assets/front/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script> 
<script src="{{ asset('assets/front/plugins/jquery.mixitup.min.js') }}"></script> 
<script src="{{ asset('assets/front/plugins/fancyapps-fancyBox/source/jquery.fancybox.pack.js') }}"></script> 
<script src="{{ asset('assets/front/plugins/typed.js-master/dist/typed.min.js') }}"></script> 
<script src="{{ asset('assets/front/js/main.js') }}"></script>
@section('script')
@show

