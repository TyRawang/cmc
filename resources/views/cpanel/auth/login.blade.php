<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Sign In | ADMIN PANEL</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/adminlogin/login.css') }}" rel="stylesheet">
</head>

<body class="login-page">
<div class="loginboxinner">
  <div class="card">
    <div class="body">
      <h1>Cargo Movers Canada </h1>
      <p>Sign in to start your session</p>
      <form id="sign_in" method="POST" action="{{ route('ad_post_login') }}">
        @csrf
        <div class="msg"></div>
        <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
          <div class="form-line {{ $errors->has('email') ? 'error' : '' }}">
            <input value="{{ old('email') }}" type="text" class="form-control" name="email" placeholder="Email" autofocus>
          </div>
          @if($errors->has('email'))
          <label id="email-error" class="error"> {{ $errors->first('email') }} </label>
          @endif
          
          @if(session()->has('status'))
          <label for="" class="error"> {{ session('status') }} </label>
          @endif </div>
        <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">lock</i> </span>
          <div class="form-line {{ $errors->has('password') ? 'error' : '' }}">
            <input type="password" class="form-control" name="password" placeholder="Password" >
          </div>
          @if($errors->has('password'))
          <label id="password-error" class="error"> {{ $errors->first('password') }} </label>
          @endif </div>
        <button class="loginbutton" type="submit">SIGN IN</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
