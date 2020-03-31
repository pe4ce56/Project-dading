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

    <!-- CAROUSEL -->
    <!-- <div class="container my-5">
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
            </div>
        </div>
    </div> -->
    
    <!-- NAV KATEGORI -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light mt-3">
        <div class="navbar-toggler category">
            Semua Service
        </div>
        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#categoryService" aria-controls="categoryService" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse category-service mt-3" id="categoryService">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item btn-category-service ml-1 active">
                    <a class="nav-link text-white " href="/service">Semua Service</a>
                </li>
                <li class="nav-item btn-category-service ml-1">
                    <a class="nav-link text-white" href="#">Alkes Electric</a>
                </li>
                <li class="nav-item btn-category-service ml-1">
                    <a class="nav-link text-white" href="#">Alkes Mekanik</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-flex mb-5 px-5">
        <div class="row service">
            <div class="col-lg-6 p-5">
                <div class="card rounded-0 border-0" data-toggle="modal" data-target="#modalDetail1">
                    <div class="card-header service-header bg-main text-light bold text-center rounded-0">
                        Service Alkes Electric
                    </div>
                    <div class="card-body p-0">
                        <img src="{{'img/1.jpg'}}" class="card-img-top service-img rounded-0" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-5">
                <div class="card rounded-0 border-0" data-toggle="modal" data-target="#modalDetail2">
                    <div class="card-header service-header bg-main text-light bold text-center rounded-0">
                        Service Alkes Mekanik
                    </div>
                    <div class="card-body p-0">
                        <img src="{{'img/2.jpg'}}" class="card-img-top service-img rounded-0" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalDetail1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h2 class="modal-title mx-auto bold" id="exampleModalLabel">Service Alkes Elektric</h2>
                </div>
                <div class="modal-body d-flex row px-5">
                    <div class="col">
                        <img src="{{'img/1.jpg'}}" class="img-fluid w-50 mx-auto row">
                        <p class="row mt-4 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit nobis repellat deleniti aut ducimus vel harum asperiores commodi tempore, doloremque maiores distinctio neque quas iste repudiandae rerum. Blanditiis, quam ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quibusdam modi temporibus officiis facere cumque voluptates sint nesciunt porro repudiandae quaerat impedit, necessitatibus consequatur debitis similique vero molestias quo qui?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalDetail2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h2 class="modal-title mx-auto bold" id="exampleModalLabel">Service Alkes Mekanik</h2>
                </div>
                <div class="modal-body d-flex row px-5">
                    <div class="col">
                        <img src="{{'img/2.jpg'}}" class="img-fluid w-50 mx-auto row">
                        <p class="row mt-4 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit nobis repellat deleniti aut ducimus vel harum asperiores commodi tempore, doloremque maiores distinctio neque quas iste repudiandae rerum. Blanditiis, quam ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quibusdam modi temporibus officiis facere cumque voluptates sint nesciunt porro repudiandae quaerat impedit, necessitatibus consequatur debitis similique vero molestias quo qui?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                </div>
            </div>
        </div>
    </div>

@endsection