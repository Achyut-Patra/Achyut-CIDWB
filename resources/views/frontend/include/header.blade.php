<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap 4 cdn -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />  <!-- bootstrap 4 cdn -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/style.css">
       <script src="js/popper.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- Header Start -->
  <div class="row flag-s" style="margin-top: 10px;">
    
    <div class="col-sm-2">
        <img src="img/cid-logo.png" class="logoc">
    </div>
    
    <div class="col-sm-4">
      <div class="row">
      <div class="col-sm-12">
          <h4 class="bgflag">Criminal Investigation Department<br> West Bengal</h4>
      </div>  
    </div>
    </div>
    
    <div class="col-sm-3 hed">
      <div class="envelop"><i class="fa fa-envelope" style="font-size:40px;margin-left: 55px;"></i></div>
      <div>
        <span class="mail">MAIL US TODAY </span>
      </div>
      <div>
        <span class="mail"><b>occomp.cid-wb@gov.in</b></span>
      </div>
    </div>

    <div class="col-sm-3 hed">      
        <div style="float: left;"><i class="fa fa-phone-square" style="font-size:40px;"></i></div>
        <div><span class="mail">CALL US FOR HELP</span></div>
        <div><span class="mail"><b>(033) 24506100 / 24506174</b></span></div>
        <div style="margin-top: 20px; float: left;">SOCIAL MEDIA LINKS 
          <img src="img/fb.png">&nbsp;<img src="img/twitter.png">
          <!-- <div class="social">
        <a class="fa fa-twitter" title="" target="_blank" href="#"></a>
        <a class="fa fa-facebook" title="" target="_blank" href="#"></a>
      </div> -->
        </div>
    </div>

  </div>
  <!-- Header End -->

  <!-- Menu Start -->
  <div class="row">
    <div class="col-sm-12">      
      
      <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark"> -->        
      <nav class="navbar navbar-expand-md bg-dark navbar-dark menu-s">
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Links -->
        <!-- <ul class="navbar-nav"> -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav nav-fill w-100"> 
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('about-us') }}">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">KEY OFFICIALS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('functions') }}">FUNCTIONS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('organizational_stucture') }}">ORGANISATIONAL STRUCTURE</a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              CITIZEN CORNER
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Daily Arrest</a>
              <a class="dropdown-item" href="#">Most Wanted Criminals</a>
              <a class="dropdown-item" href="#">Report for Stolen Mobile</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('important-links') }}">IMPORTANT LINKS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contact-us') }}">CONTACT US</a>
          </li>
          
        </ul>
      </div>
      </nav>

    </div>    
  </div>