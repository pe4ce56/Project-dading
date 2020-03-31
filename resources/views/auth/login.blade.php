@extends('layouts.boot')

@section('content')
<div class="container-flex login-all">
    <div class="row login-content align-self-center mt-5">
        <div class="col-lg-8 offset-lg-2 col-sm-10 mt-5">
            <div class="card rounded-0 border-0 card-login shadow">
                <div class="card-body row p-0">
                    <div class="col-lg-5 col-sm-12 p-5 bg-main">
                        <div class="row login-brand">
                            <img class="banner align-self-center mx-auto" src="{{'/img/login/logo-big.png'}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12 p-5">
                        <h3 class="mb-5">Login Admin</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group mb-4">
                                <label for="email">{{ __('E-Mail Address') }}</label>

                                <!-- <div class="col-md-6"> -->
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <!-- </div> -->
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>

                                <!-- <div class="col-md-6"> -->
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <!-- </div> -->
                            </div>

                            <div class="form-group row mt-5">
                                <div class="col-lg-4 offset-lg-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Login') }}
                                    </button>

                                </div>
                            </div>
                        </form>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
