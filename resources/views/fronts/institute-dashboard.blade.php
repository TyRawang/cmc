<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Welcome To Dashboard</h5>
            <form class="form-signin" method="post" action="{{ route('institutedologin') }}">
              @csrf
              
              <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>