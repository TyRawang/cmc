<nav class="navbar mybackendheader">
  <div class="container-fluid">
    <div class="clearfix">
      <div class="navbar-header"> <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="{{ asset('assets/backend/images/logo.jpg') }}" width="220" height="71" alt="" /></a> </div>
      <div class="userright ">
        <div class="clearfix"><a href="#" class="userphoto"><span><img src="{{ asset('assets/backend/images/user.png') }}" width="48" height="48" alt="" /></span> {{ Auth::user()->name }}</a> <a class="nmobilehide">|</a> <a  href="{{ route('ad_logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Sign Out</a> <a href="javascript:void(0);" class="bars"></a> </div>
      </div>
    </div>
    <!-- <div class="email">{{ Auth::user()->email }}</div>--> 
    
  </div>
</nav>
