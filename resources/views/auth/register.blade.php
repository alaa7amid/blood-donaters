
<!doctype html>
<html lang="en">
  @include('backend.layout.head')
  <body class="light ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form class="col-lg-6 col-md-8 col-10 mx-auto" method="POST" action="{{ route('register') }}">
            @csrf
          <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
            <h2 class="my-3">Register</h2>
          </div>
          <div class="form-group">
            <label for="inputEmail4">Email</label>
            <input type="email"  name="email" class="form-control" id="inputEmail4">
          </div>
          <div class="form-row">
            <div class="form-group col-md">
              <label for="firstname">Full Name</label>
              <input type="text" name="name" id="firstname" class="form-control">
            </div>
          </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md">
              <div class="form-group">
                <label for="inputPassword5">New Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword5">
              </div>
              <div class="form-group">
                <label for="inputPassword6">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="inputPassword6">
              </div>
            </div>
            
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
          {{-- <p class="mt-5 mb-3 text-muted text-center">© 2020</p> --}}
          <div class="text-center mt-3">
          <p>Already have an account? 
            <a href="{{ route('login') }}" class="text-primary">Log in</a>
          </p>
        </div>
        </form>
        
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
</body>
</html>