@extends('layouts.app')

    
@section('content')
<div class="sosmed">
    <div style="color: #878787">SOSMED</div>
    <ul class="list-group rounded-0">
      <a href="https://www.facebook.com/distributoralkeslabmlg/"><li class="list-group-item rounded-0" style="background-color:#3b5998"><i class="fab fa-facebook-f"></i></li></a>
      <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=pt.riskyputrakasih@yahoo.com&tf=1"><li class="list-group-item rounded-0" style="background-color:#db4437"><i class="far fa-envelope"></i></li></a>
    </ul> 
  </div>
    <div class="container-flex bg-white">
        <div class="container pt-4 pb-3">
            <h3>Tentang Kami</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container mb-3 mt-5">
        <div class="row">
            <div class="col-lg-8 offset-md-2">
            <div id="carouselControls" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" data-pause="false">
                <div class="carousel-item active" data-pause="false">
                    <img class="d-block w-100" src="{{'img/about/1.jpg'}}" alt="First slide">
                </div>
                <div class="carousel-item" data-pause="false">
                    <img class="d-block w-100" src="{{'img/about/2.jpg'}}" alt="Second slide">
                </div>
                <div class="carousel-item" data-pause="false">
                    <img class="d-block w-100" src="{{'img/about/3.jpg'}}" alt="Third slide">
                </div>
                <div class="carousel-item" data-pause="false">
                    <img class="d-block w-100" src="{{'img/about/4.jpg'}}" alt="Forth slide">
                </div>
                <div class="carousel-item" data-pause="false">
                    <img class="d-block w-100" src="{{'img/about/5.jpg'}}" alt="Fifth slide">
                </div>
                <div class="carousel-item" data-pause="false">
                    <img class="d-block w-100" src="{{'img/about/6.jpg'}}" alt="Sixth slide">
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
                <div class="container-flex">
                    <h3 class="my-4">Tentang Kami</h3>
                    <p class="text-secondary pt">PT.RISKY PUTRA KASIH yang bergerak dalam Bidang Service Alat Kesehatan. Baik Mechanical maupun Electrical (Medis dan Non Medis). Kami Juga Menyediakan berbagai macam Spare Part untuk Alat-Alat Kesehatan. Selain itu kami juga menjual Alat-Alat Kesehatan atau Medical Equipment misalnya : Patient Monitor (Pasien Monitor), Alat USG, Suction Pump, Bed Pasien, dll. Medical Equipment atau Alat-Alat Kesehatan yang kami sediakan Baru maupun bekas (Second) namun dengan kondisi normal. Waktu Pengerjaan Untuk Service Alat-Alat Kesehatan Electrical yang kami butuhkan satu minggu.</p>
                    <h3 class="my-4">Visi</h3>
                    <p class="text-secondary pt">"Meningkatkan pelayanan kesehatan masyarakat Indonesia dengan menyediakan produk-produk berkualitas dengan harga terjangkau."</p>
                    <h3 class="my-4">Misi</h3>
                    <p class="text-secondary pt mb-5">"Pengembangan yang konsisten dan terus-menerus meningkatkan kesejahteraan karyawan sambil mempertahankan integritas dalam rutinitas sehari-hari."</p>
                </div>
            </div>
        </div>
    </div>

@endsection