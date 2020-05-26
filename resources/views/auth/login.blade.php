
 <link rel="stylesheet" type="text/css" href="css/adminlogin.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@include('admin.partials.header')
<section class="login-block">
    <div class="container">
    <div class="row">
        <div class="col-md-4 login-sec">
            <h2 class="text-center">Login</h2>
           <!--  <div class="panel-heading">{{ trans('quickadmin::auth.login-login') }}</div> -->
            <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>{{ trans('quickadmin::auth.whoops') }}</strong> {{ trans('quickadmin::auth.some_problems_with_input') }}
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            <form class="login-form"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">
            <!-- <form class="login-form"> -->
                <div class="form-group">
                    
                    <label class="text-uppercase">{{ trans('quickadmin::auth.login-email') }}</label>
                
                        <div class="col-md-9">
                            <input type="email"
                                   class="form-control"
                                   name="locationkey"
                                   value="{{ old('locationkey') }}">
                        </div>
                    </div>
  
  <div class="form-group">
  <label class="text-uppercase">{{ trans('quickadmin::auth.login-password') }}</label>
    <div class="col-md-9">
    <input type="password" class="form-control" name="password">
    </div>
    </div>
    
    <div class="form-check">
    <label class="form-check-label">
    <label>
        <input type="checkbox" name="remember">{{ trans('quickadmin::auth.login-remember_me') }}
    </label>
      <!-- <input type="checkbox" class="form-check-input"> -->
      <!-- <small>Remember Me</small> -->
    </label>
    <button type="submit" class="btn btn-primary"                                   style="margin-right: 15px;">
     {{ trans('quickadmin::auth.login-btnlogin') }}
     </button>
     <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
  </div>
</form>
<div class="copy-text"></div>
        </div>
        <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/cidimg/1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">   
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/cidimg/2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/cidimg/wbp.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">   
    </div>
  </div>
</div>     
            
        </div>
    </div>
</div>
</div>

</section> 
@include('admin.partials.footer')