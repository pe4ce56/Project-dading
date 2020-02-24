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
          <h4 class="col-header">Meningkatkan Kesehatan</h4>
          <p class="d-inline tagline text-secondary">Menyediakan produk-produk berkualitas tinggi dengan harga terjangkau.</p>
        </div>
      </div>
      <!-- kiri -->
      <div class="col-lg-6 row p-5">
        <div class="col-lg-3">
          <i class="fas fa-medkit fa-4x d-inline px-0 text-main"></i>
        </div>
        <div class="col-lg-9 text-left align-middle px-0">
          <h4 class="col-header">Jaringan</h4>
          <p class="d-inline tagline text-secondary">Melalui dokter, rumah sakit, distributor, dan reseller.</p>
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
          <h4 class="col-header">Personil Yang Memenuhi Syarat</h4>
          <p class="d-inline tagline text-secondary">Staf berpengalaman di bidangnya masing-masing.</p>
        </div>
      </div>
      <!-- kiri -->
      <div class="col-lg-6 row p-5">
        <div class="col-lg-3">
          <i class="fas fa-ambulance fa-4x d-inline px-0 text-main"></i>
        </div>
        <div class="col-lg-9 text-left align-middle px-0">
          <h4 class="col-header">Pengiriman Cepat</h4>
          <p class="d-inline tagline text-secondary">Sebagian besar produk sudah tersedia.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container text-center mb-5">
    <h2 class="py-5">Visi dan Misi Kami</h2>
    <div class="vision pb-5">
      <h3>Visi</h3>
      <h5 class="text-secondary font-weight-normal mt-3">Bermanfaat bagi masyarakat, khususnya di bidang kesehatan.</h5>
    </div>
    <div class="mission pb-5">
      <h3>Misi</h3>
      <h5 class="text-secondary font-weight-normal mt-3">Untuk memberikan produk medis yang berkualitas dengan harga terjangkau, dan untuk berkembang bersama dengan mitra kami.</h5>
    </div>
  </div>
  @endsection
    