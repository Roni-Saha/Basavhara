 
<br><br><br><br>
<br><br><br><br><br><br>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('css/style.css')}}" rel="stylesheet" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">


        <h2 class="text-center">Login Now</h2>


        <form class="login-form" method="post" action="{{ URL::to('loginStore')}}">
          {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Email</label>
    <input type="text" class="form-control" placeholder="">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="">
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
    <button type="submit" class="btn btn-login float-right">Submit</button>
  </div>
  
</form>


<div class="copy-text">Don't have an account?
 <i class="fa fa-heart"></i>  <a href="http:singup">Sign Up</a></div>
    </div>


      </div>
</div>
</section>
<br><br><br><br>

