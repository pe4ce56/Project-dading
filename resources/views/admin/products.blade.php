@extends('layouts.app')

@section('content')
<div class="container-fluid bg-white">
  <div class="container pt-4 pb-3">
    <h3>Admin</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent p-0">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item" aria-current="page">Admin</li>
      </ol>
    </nav>
  </div>
</div>
<div class="container-fluid p-0">
    <div class="card px-3">
        <div class="card-body">
            <h2 class="my-3">Data Produk</h2>
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <a href="/admin/products/create" class="btn btn-main text-light"><i class="fas fa-plus mr-2"></i> Tambah Produk</a>
            <div class="table-responsive">
                <table class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Kode</th>
                            <th class="text-center" scope="col">Nama</th>
                            <th class="text-center" scope="col">Deskripsi</th>
                            <th class="text-center" scope="col">Gambar</th>
                            <th class="text-center" style="width:8%" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{$product->code}}</td>
                            <td>{{$product->name}}</td>
                            <td>
                                <ul>
                                    @foreach ($product->details as $detail)
                                    <li>{{$detail->information}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <img src="{{Storage::url('product_image/'.$product->image)}}" style="max-width: 10rem"  alt="...">
                                </div>
                            </td>
                            <td>
                                <a href="/admin/products/{{$product->id}}/edit" class="btn btn-success btn-sm align-items-center" style="width:5rem">Ubah</a>
                                <form action="/admin/products/{{$product->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mt-1" style="width:5rem">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection