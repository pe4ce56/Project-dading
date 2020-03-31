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
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <h3>Produk</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent p-0">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item" aria-current="page">Produk</li>
          </ol>
        </nav>
      </div>
      <div class="col-lg-4 col-sm-12 px-4">
        <label for="" class="row">&nbsp;</label>
        <div class="row">
            <form action="" method="GET">
              <div class="input-group mb-3">
                <input type="text" class="form-control outline-0" name="search" placeholder="Produk" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-main text-light" type="submit" id="button-addon2"><i class="fas fa-search"> </i> Cari</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-light">
  <div class="navbar-toggler category">
    @switch(Request::url())
      @case(url('products'))
      Semua Produk
      @break
      @case(url('products/category/1'))
      Alat Medis
      @break
      @case(url('products/category/2'))
      Bahan Habis Pakai
      @break
      @case(url('products/category/3'))
      Alat dan Bahan LAB
      @break
      @case(url('products/category/4'))
      Sparepart Alkes
      @break
    @endswitch
  </div>
  <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#categoryProduct" aria-controls="categoryProduct" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse category-product mt-3" id="categoryProduct">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item btn-category-product ml-1 @if(Request::url() === url('products')) active @endif">
        <a class="nav-link text-white " href="/products">Semua Produk</a>
      </li>
      <li class="nav-item btn-category-product ml-1 @if(Request::url() === url('products/category/1')) active @endif">
        <a class="nav-link text-white" href="/products/category/1">Medical Equipment</a>
      </li>
      <li class="nav-item btn-category-product ml-1 @if(Request::url() === url('products/category/2')) active @endif">
        <a class="nav-link text-white" href="/products/category/2">Bahan Habis Pakai</a>
      </li>
      <li class="nav-item btn-category-product ml-1 @if(Request::url() === url('products/category/3')) active @endif">
        <a class="nav-link text-white" href="/products/category/3">Alat dan Bahan LAB</a>
      </li>
      <li class="nav-item btn-category-product ml-1 @if(Request::url() === url('products/category/4')) active @endif">
        <a class="nav-link text-white" href="/products/category/4">Sparepart Alkes</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mb-4">
  <div class="row">
    @php
        $i=0;
    @endphp
    @foreach ($products as $product)
      @if (Request::url() === url('products') && $i+1 === $product->category_id)
        <h1 class="col-12 mt-4 text-center">{{$category[$i]->name}}</h1>
        @php
            $i++;
        @endphp
      @endif
      <div class="col-lg-3 col-md-4 col-6 product mt-3">
        <div class="card border-0" style="max-width: 16rem;" data-toggle="modal" data-target="#modalDetails" v-on:click="details({{$product->id}})">
          <div class="card-body d-flex justify-content-center align-items-center p-0" style="height: 4rem">
            {{$product->name}}
          </div>
          <div class="image border">
            <img src="{{Storage::url('product_image/'.$product->image)}}" class="card-img-top" alt="...">
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
<modal-details v-bind:loading="loading" v-bind:data="data"></modal-details>
@endsection


@section('footer')
  <script src="{{url('js/products.js')}}"></script>
@endsection