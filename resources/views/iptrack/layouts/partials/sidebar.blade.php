<div id="wrapper"> 
  <!-- Sidebar -->                                                                                        
  <div id="sidebar-wrapper"> <a class="navbar-brand with-text" title="PSD to HTML" href="index.html"><img src="{{ asset('assets/institute/images/logo.png') }}" width="152" height="58" alt=""></a>
    <ul class="sidebar-nav">
           <li><a href="{{ route('student-dashboard') }}">My Book <span><i class="fa fa-user"></i></span></a></li>
      <!-- <li><a href="institute-manager.html">Institute Manager <span><i class="fa fa-user"></i></span></a></li>       -->
      <!-- <li><a href="member-profile.html">Profile <span><i class="fa fa-user"></i></span></a></li> -->
      <li><a href="{{ route('setting') }}">Account Setting <span><i class="fa fa-user"></i></span></a></li>
      <li><a href="{{ route('password-setting') }}">Change Password <span><i class="fa fa-user"></i></span></a></li>
      <!-- <li  ><a href="{{ route('my-book') }}">My Book <span><i class="fa fa-user"></i></span></a></li> -->
      <li><a href="{{ route('logout-institute')}}">Logout</a></li>
    </ul>
  </div>