@extends('layouts.app')


@section('content')
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" data-pause="false">
      <div class="carousel-item active" data-pause="false">
        <img class="d-block w-100" src="{{'img/img1.jpg'}}" alt="First slide">
      </div>
      <div class="carousel-item" data-pause="false">
        <img class="d-block w-100" src="{{'img/img2.jpg'}}" alt="Second slide">
      </div>
      <div class="carousel-item" data-pause="false">
        <img class="d-block w-100" src="{{'img/img3.jpg'}}" alt="Third slide">
      </div>
      <div class="carousel-item" data-pause="false">
        <img class="d-block w-100" src="{{'img/img4.jpg'}}" alt="Third slide">
      </div>
      <div class="carousel-item" data-pause="false">
        <img class="d-block w-100" src="{{'img/img5.jpg'}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container text-center py-5">
    <div class="row">
      <!-- kanan -->
      <div class="col-lg-6 row p-5">
        <div class="col-lg-3">
          <i class="fas fa-plus-square fa-4x d-inline px-0 text-main"></i>
        </div>
        <div class="col-lg-9 text-left align-middle px-0">
          <h4 class="col-header">Improving Healthcare</h4>
          <p class="d-inline tagline text-secondary">Providing high quality products at affordable prices.</p>
        </div>
      </div>
      <!-- kiri -->
      <div class="col-lg-6 row p-5">
        <div class="col-lg-3">
          <i class="fas fa-medkit fa-4x d-inline px-0 text-main"></i>
        </div>
        <div class="col-lg-9 text-left align-middle px-0">
          <h4 class="col-header">Networking</h4>
          <p class="d-inline tagline text-secondary">Through doctors, hospitals, distributors, and resellers.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- kanan -->
      <div class="col-lg-6 row p-5">
        <div class="col-lg-3">
          <i class="fas fa-user-md fa-4x d-inline px-0 text-main"></i>
        </div>
        <div class="col-lg-9 text-left align-middle px-0">
          <h4 class="col-header">Qualified Personnels</h4>
          <p class="d-inline tagline text-secondary">Experienced staffs in their respective fields.</p>
        </div>
      </div>
      <!-- kiri -->
      <div class="col-lg-6 row p-5">
        <div class="col-lg-3">
          <i class="fas fa-ambulance fa-4x d-inline px-0 text-main"></i>
        </div>
        <div class="col-lg-9 text-left align-middle px-0">
          <h4 class="col-header">Fast Delivery</h4>
          <p class="d-inline tagline text-secondary">Most products are ready in stock.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container text-center mb-5">
    <h2 class="py-5">Our Vision and Mission</h2>
    <div class="vision pb-5">
      <h3>Vision</h3>
      <h5 class="text-secondary font-weight-normal mt-3">To be beneficial for the society, especially in the field of healthcare.</h5>
    </div>
    <div class="mission pb-5">
      <h3>Mission</h3>
      <h5 class="text-secondary font-weight-normal mt-3">To deliver good quality medical products at affordable prices, and to develop together with our partners.</h5>
    </div>
  </div>
  @endsection
    