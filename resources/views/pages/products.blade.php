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

  <div class="collapse navbar-collapse category-product" id="categoryProduct">
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
<div class="container">
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
        <div class="card" style="max-width: 16rem;" data-toggle="modal" data-target="#modalDetails" v-on:click="details({{$product->id}})">
          <div class="card-body d-flex justify-content-center align-items-center  p-0" style="height: 4rem">
            {{$product->name}}
          </div>
          <div class="image">
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