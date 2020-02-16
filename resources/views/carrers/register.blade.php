@extends('layouts.app')

@section('content')
    <div class="container-sm">
        <div class="card mt-4 float-none">
            <div class="card-body">
                <form class="row form-register-carrers" action="/recruitment/register" method="POST">
                    @csrf
                    <div class="col-lg-8 col-md-12 p-md-4">
                        <h1 class="ml-3">Akun</h1>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Username</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control  @error('username') is-invalid @enderror " name="username">
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control @error('email') is-invalid @enderror " name="email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Repeat Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror " name="password_confirmation">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                       
                        <h1 class="ml-3">Identitas</h1>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Posisi Yang Dilamar</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>Default select</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-sm-3 col-form-label pl-3">Tempat Tanggal Lahir</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Tinggi/Berat Badan</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="number" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">cm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="number" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">kg</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Agama</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>Default select</option>
                                  </select>
                            </div>
                        </div>
                        <h1 class="ml-3">Alamat Domisili</h1>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Jalan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Kota</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Provinsi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Nomor HP</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Nomor telepon</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <h1 class="ml-3">Pendidikan Terakhir</h1>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder="Jenjang">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Institusi">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder="Kota">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder="Jurusan">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder="IPK">
                            </div>
                        </div>
                        <h4 class="ml-3">Jelaskan dengan Singkat Diri Anda Dalam 3 Paragraf</h4>
                        <div class="form-group row">
                            <div class="col-sm-11">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <h4 class="ml-3">Jelaskan Visi dan Misi Hidup Anda</h4>
                        <div class="form-group row">
                            <div class="col-sm-11">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <h4 class="ml-3">Jelaskan Rencana Karir Anda</h4>
                        <div class="form-group row">
                            <div class="col-sm-11">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 p-md-4">
                        <div class="form-group">
                            <label class="form-label">Kartu Tanda Penduduk
                                (Format File: JPG, JPEG, PNG, max 2 MB)</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg" disabled>Daftar</button>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
                </form>
            </div>
        </div>    
    </div>    
@endsection