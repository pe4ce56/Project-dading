@extends('layouts.app')

    
@section('content')
    <div class="container-flex bg-white">
        <div class="container pt-4 pb-3">
            <h3>About</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container mb-3 mt-5">
        <div class="row">
            <div class="col-lg-8 offset-md-2">
                <img src="https://endo.id/images/endo_about.jpg" alt="PT. RIZKY PUTRA KASIH" class="img-thumbnail">
                <div class="container-flex">
                    <h3 class="my-4">About Us</h3>
                    <p class="text-secondary">ENDO INDONESIA was founded in 2006 as a company engaged in importation and distribution of Medical Devices. Today, among many others, our product portfolio consists of Electromedical Devices, Instruments, Disposables, Orthopaedic Implants, and accessories. Since 2012 we established a subsidiary company named PT. Meditronik Hospilab Indonesia specializing in manufacturing. The product made at the moment are Medical Chart Paper and Electromedics.</p>
                    <h3 class="my-4">Our Vision</h3>
                    <p class="text-secondary">"Improving health care of Indonesian society by providing good quality products at affordable prices."</p>
                    <h3 class="my-4">Our Mission</h3>
                    <p class="text-secondary mb-5">"Consistent development and continuously increasing employee's well-being while maintaining integrity in daily routines."</p>
                </div>
            </div>
        </div>
    </div>

@endsection