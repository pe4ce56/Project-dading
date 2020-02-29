@extends('layouts.app')


@section('content')
<!-- IMAGE CAROUSEL -->
  <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
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
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- FEATURE -->
  <div class="container text-center py-5 my-3">
    <div class="row py-3">
      <div class="col-lg-6 my-2">
        <div class="col-lg-12 py-3">
          <i class="fas fa-plus-square fa-5x feature text-main"></i>          
        </div>
        <div class="col-lg-12">
          <p class="hfeature my-2">Meningkatkan Kesehatan</p>
          <p class="dfeature text-secondary">Menyediakan produk-produk berkualitas tinggi dengan harga terjangkau.</p>          
        </div>
      </div>
      <div class="col-lg-6 my-2">
        <div class="col-lg-12 py-3">
          <i class="fas fa-user-md fa-5x feature text-main"></i>          
        </div>
        <div class="col-lg-12">
          <p class="hfeature my-2">Personil yang Berkualitas</p>
          <p class="dfeature text-secondary">Staf berpengalaman di bidangnya masing-masing.</p>          
        </div>
      </div>     
    </div>
    <div class="row py-3">
      <div class="col-lg-6 my-2">
        <div class="col-lg-12 py-3">
          <i class="fas fa-medkit fa-5x feature text-main"></i>          
        </div>
        <div class="col-lg-12">
          <p class="hfeature my-2">Jaringan</p>
          <p class="dfeature text-secondary">Melalui dokter, rumah sakit, distributor, dan reseller.</p>          
        </div>
      </div> 
      <div class="col-lg-6 my-2">
        <div class="col-lg-12 py-3">
          <i class="fas fa-ambulance fa-5x feature text-main"></i>          
        </div>
        <div class="col-lg-12">
          <p class="hfeature my-2">Pengiriman Cepat</p>
          <p class="dfeature text-secondary">Sebagian besar produk sudah tersedia.</p>          
        </div>
      </div>     
    </div>
  </div>

  <!-- VISI DAN MISI -->
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
    