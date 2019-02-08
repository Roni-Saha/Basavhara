<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="lo/images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="lo/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="lo/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="lo/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="lo/vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="lo/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="lo/vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="lo/vendor/select2/select2.min.css">

  <link rel="stylesheet" type="text/css" href="lo/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="lo/css/util00.css">
  <link rel="stylesheet" type="text/css" href="lo/css/main00.css">
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
          <span class="login100-form-title-1">
            Sign In
          </span>
        </div>
        <form class="login100-form validate-form" id="login" method="post" action="{{ URL::to('loginStore') }}">
          {{ csrf_field() }}
          <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
            <span class="label-input100">Email<font style="color:rgb(255,0,0);">*</font><font style="color:white">........</font></span>
            <input class="input100" type="email" name="email" placeholder="Email" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password<font style="color:rgb(255,0,0);">*</font></span>
            <input class="input100" type="password" name="password" placeholder="Password" required>
            <span class="focus-input100"></span>
          </div>

          <div class="flex-sb-m w-full p-b-30">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            <div>
              <a href="{{URL::to('/register')}}">
                Click here to <font style="color:orange;">Register!</font>
              </a>
            </div>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  <script src="lo/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="lo/vendor/animsition/js/animsition.min.js"></script>
  <script src="lo/vendor/bootstrap/js/popper.js"></script>
  <script src="lo/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="lo/vendor/select2/select2.min.js"></script>
  <script src="lo/vendor/daterangepicker/moment.min.js"></script>
  <script src="lo/vendor/daterangepicker/daterangepicker.js"></script>
  <script src="lo/vendor/countdowntime/countdowntime.js"></script>
  <script src="lo/js/main00.js"></script>

</body>
</html>