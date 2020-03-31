@extends('layouts.app')

    
@section('content')
    <div class="container-flex bg-white">
        <div class="container pt-4 pb-3">
            <h3>Service</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page">Service</li>
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
                    <img class="d-block w-100" src="{{'img/service/img1.jpg'}}" alt="First slide">
                </div>
                <div class="carousel-item" data-pause="false">
                    <img class="d-block w-100" src="{{'img/service/img2.jpg'}}" alt="Second slide">
                </div>
                <div class="carousel-item" data-pause="false">
                    <img class="d-block w-100" src="{{'img/service/img3.jpg'}}" alt="Third slide">
                </div>
                <div class="carousel-item" data-pause="false">
                    <img class="d-block w-100" src="{{'img/service/img4.jpg'}}" alt="Forth slide">
                </div>
                <div class="carousel-item" data-pause="false">
                    <img class="d-block w-100" src="{{'img/service/img5.jpg'}}" alt="Fifth slide">
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
                <div class="container-flex mt-5">
                    <h3 class="my-4 text-center">Servis Elektrik</h3>
                    
                </div>
            </div>
        </div>
    </div>

@endsection