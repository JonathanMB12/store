<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Musical Store -  Tu tienda musical en línea</title>
  <style>
    #body-index-profile {
      
      margin-top: -50px;
      padding-top: 120px;
      text-align: center;
      background-attachment: relative;
      background-position: center center;
      min-height: 650px;
      width: 100%;
      -webkit-background-size: 100%;
      -moz-background-size: 100%;
      -o-background-size: 100%;
      background-size: 100%;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
      
    }
  </style>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/guitars-icon.png" rel="icon">
  <!--<link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/icomoon/icomoon.css" rel="stylesheet">
  <link href="lib/animate/animate.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dot
    Template URL: https://templatemag.com/dot-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main">

  <div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-radio-checked" style="font-size:30px; color:#1abc9c;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm smoothscroll" href="#home"><span class="icon icon-radio-checked" style="font-size:18px; color:#1abc9c;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothscroll">Home</a></li>
            <li> <a href="#about" class="smoothscroll"> Descubre</a></li>
            <li> <a href="#services" class="smoothscroll"> Servicios</a></li>
            <li> <a href="#team" class="smoothscroll"> Contacto</a></li>
            <!--<li> <a href="#portfolio" class="smoothscroll"> Portfolio</a></li>
            <li> <a href="#blog" class="smoothscroll"> Blog</a></li>
            <li> <a href="#pricing" class="smoothscroll"> Pricing Tables</a></li>-->
            
          </ul>
            <div id="submenu-nav-profile">
              <ul class="nav navbar-nav">
                <li> <a href="#contact" class="smoothscroll"> Mi carrito</a></li>
                @if (Route::has('login'))
                
                    
                        @auth
                            <li><a href="{{ route('user.profile') }}">Mi perfil</a></li>
                            
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth
                   
                @endif
              </ul>
            </div>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <!-- ==== HEADERWRAP ==== -->
  <div id="home"></div>
  <!--<div id="headerwrap" name="home"> -->
    @yield('background-image')
    <header class="clearfix">
      @yield('content')
    </header>
  </div>
  
  </div>
  @yield('contenido')
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
