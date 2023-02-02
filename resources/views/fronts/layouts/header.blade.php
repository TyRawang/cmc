

<header id="header" class="stricky">
  <div class="thm-container clearfix">
    <div class="logo pull-left"> <a href="{{ route('/') }}"> <img src="{{ asset('assets/front/images/logo.png')}}" alt=""> </a> </div>
    <div class="header-info pull-right">
      <div class="info-box">
        <div class="icon-box no-border"> <i class="icon icon-Timer"></i> </div>
        <div class="text-box">
          <p class="highlighted">Mon - Sat 9.00 - 18.00</p>
          <p>Sunday Closed</p>
        </div>
      </div>
      <div class="info-box">
        <div class="icon-box"> <i class="icon icon-Phone2"></i> </div>
        <div class="text-box">
          <p class="highlighted">Call Us:</p>
          <p class="phone-number"><a href="tel:1-855-206-9407">1-855-206-9407</a></p>
        </div>
      </div>
     <!--  <div class="info-box search-box-wrapper">
        <div class="icon-box"> <i class="flaticon-search51"></i> </div>
        <form action="#" class="search-box-holder">
          <div class="search-box">
            <div class="form">
              <input type="text" placeholder="Track Your Shipment">
              <button type="submit"><span>GO</span></button>
            </div>
          </div>
        </form>
      </div> -->
    </div>
  </div>
</header>
<nav class="main-menu-wrapper stricky">
  <div class="thm-container menu-gradient ">
    <div class="clearfix">
      <div class="nav-holder pull-left">
        <div class="nav-header">
          <button><i class="fa fa-bars"></i></button>
        </div>
        <div class="nav-footer">
          <ul class="nav">
            <li> <a href="{{ route('/') }}">Home</a> </li>
            <li> <a href="{{ route('about',['about'=>'about-us']) }}" > About Us </a> </li>
            @foreach($category as $value)
             <li class="has-submenu"><a href="{{ route('l',['list'=>$value->slug])}}" class="dropdown-trigger" >{{ $value->category_name }} <i class="menu-toggle fa fa-angle-down"></i></a> @if($subcategory)
              <ul class="submenu">
                @foreach($subcategory as $v)
                @if($value->id == $v->p_id)
                <li ><a href="{{ route('l',['list'=>$value->slug,'catlist'=>$v->slug])}}" >{{ $v->category_name }}</a></li>
                @endif
                @endforeach
              </ul>
              @endif </li>
            @endforeach
            <!-- <li class="has-submenu"> 
              <a href="{{ url('services') }}"> Services
                  <i class="menu-toggle fa fa-angle-down"></i>
                  <button class="dropdown-expander"><i class="fa fa-bars"></i>
                  </button>
              </a>
              <ul class="submenu">
                    <li><a href="{{ url('moving-services') }}"> Moving</a></li>
                    <li><a href="{{ url('packing-services') }}"> Packing</a></li>
                    <li><a href="{{ url('storage-services') }}"> Storage</a></li>
              </ul>
            </li> -->
            <li> <a href="{{ route('/') }}/testimonials">Testimonial</a> </li>
            <li> <a href="{{ route('/') }}/faqs">Faq</a> </li>
            <li> <a href="{{ route('/') }}/blogs">blog</a> </li>
            <li><a href="{{ route('/') }}/contactus">contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="free-qoute-button pull-right"> <a href="{{ route('/') }}/free-quote">Get Free Quote</a> </div>
    </div>
  </div>
</nav>
              
              