@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pengaturan</div>

                <div class="card-body">
            @if(session('status'))
                @if(session('status') == 'Password Salah')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @else
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                @endif
                        {{session('status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            @endif
                    <form method="POST" action="{{url('/admin/setting',[$user->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$user->email) }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="old-password" class="col-md-4 col-form-label text-md-right">Password saat ini</label>

                            <div class="col-md-6">
                                <input id="old-password" type="password" class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword" autocomplete="current-password">

                                @error('oldPassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="new-password" class="col-md-4 col-form-label text-md-right">Password baru</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Tulis ulang password baru</label>

                            <div class="col-md-6">
                                <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-4 mb-2">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Simpan Perubahan
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
