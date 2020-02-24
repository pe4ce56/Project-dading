@extends('layouts.app')

@section('content')
<div class="container-flex bg-white">
  <div class="container pt-4 pb-3">
      <h3>Produk</h3>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent p-0">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item" aria-current="page">Produk</li>
          </ol>
      </nav>
  </div>
</div>
<div class="container">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

        <h1>Data Produk</h1>
        <form method="post" action="/products" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Kode Produk</label>
                  <div class="col-sm-9 ">
                  <input type="text" class="form-control @error('code') is-invalid @enderror" name="code">
                    @error('code')
                      <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Produk</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                    @error('name')
                      <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>
                </div>
               </div>
               <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Gambar Produk</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image">
                    @error('image')
                      <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>
                </div>
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
              </div>
              <button class="btn btn-primary btn-block">Simpan</button>
            </div>
          </form>
    </div>
@endsection