@extends('layouts.app')

@section('content')
<div class="container-flex bg-white">
  <div class="container pt-4 pb-3">
    <h3>Tambah Produk</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent p-0">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item"><a href="/admin/products">Admin</a></li>
        <li class="breadcrumb-item" aria-current="page">Tambah Produk</li>
      </ol>
    </nav>
  </div>
</div>
<div class="container mt-4 mb-4">
  <h1 class="mb-4">Tambah Produk</h1>
  <form method="post" action="/admin/products" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Kode Produk</label>
          <div class="col-sm-9 ">
            <input type="text" class="form-control @error('code') is-invalid @enderror" value="{{old('code')}}" name="code">
            @error('code')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Nama Produk</label>
          <div class="col-sm-9">
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name">
            @error('name')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Detail Produk</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="information" id="" cols="30" rows="10"></textarea>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Kategori</label>
          <div class="col-sm-9">
            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
              @foreach ($category as $data)
              <option value="{{$data['id']}}">{{$data['name']}}</option>
              @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Gambar Produk</label>
          <div class="col-sm-9">
            <input type="file" @change="uploadImg" class="form-control-file @error('image') is-invalid @enderror" name="image">
            @error('image')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="image" class="offset-sm-3 col-sm-9">
            <img v-if="url" v-bind:src="url" style="width: 16rem" id="img-preview" class="img-thumbnail" alt="">
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block mt-3">Simpan</button>
    </div>
  </form>
</div>
@endsection


@section('footer')
  <script src="{{url('js/products.js')}}"></script>
@endsection