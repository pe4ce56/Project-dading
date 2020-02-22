@extends('layouts.app')

@section('content')

<div class="container-flex bg-white">
    <div class="container pt-4 pb-3">
        <h3>Katalog</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item" aria-current="page">Katalog</li>
            </ol>
        </nav>
    </div>
</div>
@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse category-product" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item btn-category-product ml-1">
          <a class="nav-link active" href="#">Semua Produk</a>
        </li>
        <li class="nav-item btn-category-product ml-1">
          <a class="nav-link active" href="#">Alat Medis</a>
        </li>
        <li class="nav-item btn-category-product ml-1">
          <a class="nav-link active" href="#">Bahan Habis Pakai</a>
        </li>
        <li class="nav-item btn-category-product ml-1">
          <a class="nav-link active" href="#">Alat dan Bahan LAB</a>
        </li>
        <li class="nav-item btn-category-product ml-1">
          <a class="nav-link active" href="#">Sparepart Alkes</a>
        </li>
    </ul>
</div>
  </nav>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                
                <div class="col-md-3 col-sm-4 product mt-3 mb-5">
                    <div class="card" style="width: 16rem;">
                        <div class="card-body">
                            <p class="card-text">{{$product->name}}</p>
                        </div>
                         <img src="{{url('Product_images')}}/{{$product->image}}" class="card-img-top" alt="...">
                    </div>
                </div>
            
            @endforeach
        </div>
    </div>
@endsection