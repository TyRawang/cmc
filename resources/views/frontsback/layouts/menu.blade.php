@php
$menuquery = App\Category::where('isActive',1)->get();
@endphp



<div class="">

<nav class="navbar menubar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      @if(Auth::user())
      <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('coaching-center') }}">COACHING CENTER</a></li>
      @endif
      <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT</a></li>

      @foreach($menuquery as $val)
    <li class="nav-item"><a class="nav-link" href="{{ route('listing',['slug' => $val->slug ]) }} ">{{ $val->category_name }}</a></li>

      @endforeach
    <li class="nav-item"><a class="nav-link" href="{{ route('contact-us') }}">CONTACT</a></li>
    @if(Auth::user())
    <li class="nav-item"><a class="nav-link" href="{{ route('account-setting') }}">Account Setting</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('front-logout') }}">Logout</a></li>

    @else
    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
    @endif

    </ul>
  </div>
</nav>

</div>
