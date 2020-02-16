<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('css/app.css')}}">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>PT. ENDO Indonesia</title>
  </head>
  <body>
    <div class="px-5 py-3 header-top d-none d-lg-block">
      <div class="row">
          <div class=" col-lg-5 col-md-5 text-white pt">
          Welcome to PT. ENDO Indonesia
          </div>
          <div class="col-lg-5 col-md-5 text-right text-white pt">
              Contact us : <i class="far fa-envelope"></i> info@endo.id  
              <i class="fas fa-phone-alt"></i> 0800.177.ENDO (3636) - Toll Free
          </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
      
      <a class="navbar-brand ml-5" href="#"><img src="https://endo.id/images/logo-endo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class="collapse navbar-collapse ml-3" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item @if($active==='home') active @endif">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item @if($active==='about') active @endif">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item @if($active==='product') active @endif">
            <a class="nav-link " href="#">Products</a>
          </li>
          <li class="nav-item @if($active==='career') active @endif">
            <a class="nav-link " href="#">Career</a>
          </li>
        </ul>
      </div>
    </nav>
    @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{url('js/app.js')}}"></script>

  </body>
</html>