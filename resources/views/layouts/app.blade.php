<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{url('css/app.css')}}">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>PT. Risky Putra Kasih</title>
  </head>
  <body>
    <div class="header-top d-none d-lg-block py-3">
      <div class="container">
        <div class="row text-white pt">
          <div class="col-lg-6 ">
            Welcome to PT. Risky Putra Kasih
          </div>
          <div class="col-lg-6 text-right pt">
            Contact us : <i class="far fa-envelope"></i> pt.riskyputrakasih@yahoo.com  
            <i class="fas fa-phone-alt"></i> (0341)3041063 - Toll Free
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="https://endo.id/images/logo-endo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-3" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item @if($active==='home') active @endif">
              <a class="nav-link text-white" href="/">Home</a>
            </li>
            <li class="nav-item @if($active==='about') active @endif">
              <a class="nav-link text-white" href="/about">About</a>
            </li>
            <li class="nav-item @if($active==='product') active @endif">
              <a class="nav-link text-white" href="#">Products</a>
            </li>
            <li class="nav-item @if($active==='career') active @endif">
              <a class="nav-link text-white" href="/recruitment/register">Career</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="app">
      @yield('content')
    </div>
    <!-- NAVBAR -->
    <div class="container-flex pt-5 pr-5 pb-4 pl-5 bg-dark">
      <div class="container text-light pt-5">
        <div class="row">
          <div class="col-lg-4">
            <h4 class="col-header mb-5">About</h4>
            <p class="text-low">ENDO INDONESIA was founded in 2006 as a company engaged in importation and distribution of Medical Equipment. Today our products include Electromedical Equipment, Reagents, Reusable and Disposable Medical Devices, among many others and accessories. And now we had grown into the manufacturing field of Medical Recording Chart Paper.</p>
            <p class="text-low">ENDO is a company that fulfills legal requirements and receives approval from company's legal entity of Indonesia, with number C-05336 HT.01.01.TH.2006. Supported by experienced technicians and proper equipments, we also provide repairs and calibration for electromedical equipment. ENDO exist to serve your various needs of Medical Equipments and highly concerned about customer satisfaction to promote long term working relationship.</p>
          </div>
          <div class="col-lg-4">
            <h4 class="col-header mb-5">Links</h4>
            <div class="row links">
              <div class="col-lg-6">
                <ul>
                  <li><a class="text-low" href="/">Home</a></li>
                  <li><a class="text-low" href="/about">About</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a class="text-low" href="#">Product</a></li>
                  <li><a class="text-low" href="/recruitment/register">Career</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h4 class="col-header mb-5">Newsletter Sign Up</h4>
            <p class="text-low">Stay updated with latest news from PT ENDO Indonesia.</p>
              <form>
                <div class="form-group">
                  <label for="username">(Company / Institution / Personal)'s name</label>
                  <input type="text" class="form-control outline-0" id="username">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control outline-0" id="email">
                </div>
                <button type="submit" class="btn btn-main text-light mt-2 outline-0 border-0">Submit</button>
            </form>
          </div>
          </div>
      </div>
      <div class="container text-light pt-4 border-top border-low border-3">
        <h6 class="text-low">Copyright © RIZKY PUTRA KASIH, PT.</h6>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{url('js/app.js')}}"></script>
  <script src="{{url('js/careers.js')}}"></script>
  </body>
</html>