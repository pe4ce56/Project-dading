@extends('layouts.app')

@section('content')
    <div class="container-sm">
        <div class="card mt-4 float-none">
            <div class="card-body">
                <form class="row form-register-carrers" action="/recruitment/register" method="POST">
                    {{-- action="/recruitment/register" method="POST" --}}
                    @csrf
                    <div class="col-lg-8 col-md-12 p-md-4">
                        <h1 class="ml-3">Akun</h1>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Username</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control  @error('username') is-invalid @enderror " placeholder="Username" name="username" v-model="username" value="{{ old('username') }}">
                                @error('username')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" v-model="email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Repeat Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror " name="password_confirmation" placeholder="Repeat Password" placeholder="Repeat Password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                       
                        <h1 class="ml-3">Identitas</h1>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Nama Lengkap</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap" value="{{old('name')}}" name="name">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Posisi Yang Dilamar</label>
                            <div class="col-sm-8">
                                <select class="form-control @error('applied_position') is-invalid @enderror" name="applied_position">
                                    <option selected disabled value="">Silahkan Pilih</option>
                                    <option value="Product Specialist dan Marketing/Salaes">Product Specialist dan Marketing/Salaes</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Administrasi">Administrasi</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Accounting">Accounting</option>
                                    <option>Lainnya</option>
                                  </select>
                                  @error('applied_position')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Jenis Kelamin</label>
                            <div class="col-sm-3">
                                <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                    <option selected disabled value="">Silahkan Pilih</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                  </select>
                                  @error('gender')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                            </div>
                            <label class="col-sm-2 col-form-label pl-3">Status Pernikahan</label>
                            <div class="col-sm-3"> 
                                <select class="form-control @error('marital_status') is-invalid @enderror" name="marital_status">
                                    <option selected disabled value="">Silahkan Pilih</option>
                                    <option value="Laki-Laki">Belum Menikah</option>
                                    <option value="Perempuan">Menikah</option>
                                  </select>
                                  @error('marital_status')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-sm-3 col-form-label pl-3">Tempat Tanggal Lahir</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control @error('place_of_birth') is-invalid @enderror" placeholder="Tempat Lahir" value="{{old('place_of_birth')}}" name="place_of_birth">
                                @error('place_of_birth')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" placeholder="Tanggal Lahir" value="{{old('date_of_birth')}}" name="date_of_birth">
                                @error('date_of_birth')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Tinggi/Berat Badan</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="number " class="form-control @error('height') is-invalid @enderror" placeholder="Tinggi Badan" value="{{old('height')}}" name="height">
                                    <div class="input-group-append">
                                        <span class="input-group-text">cm</span>
                                    </div>
                                    @error('height')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="number" class="form-control  @error('weight') is-invalid @enderror" placeholder="Berat Badan" value="{{old('weight')}}" name="weight">
                                    <div class="input-group-append">
                                        <span class="input-group-text">kg</span>
                                    </div>
                                    @error('weight')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Agama</label>
                            <div class="col-sm-8">
                                <select class="form-control @error('religion') is-invalid @enderror" value="{{old('weight')}}" name="religion">
                                    <option  selected disabled value="">Silahkan Pilih</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="">Buddha</option>
                                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                                    <option value="Lainnya">Lainnya</option>
                                  </select>
                                  @error('religion')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                            </div>
                        </div>
                        <h1 class="ml-3">Alamat Domisili</h1>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Jalan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('religion') is-invalid @enderror" placeholder="Jalan" value="{{old('weight')}}" name="street">
                                @error('religion')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Kota</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('religion') is-invalid @enderror" placeholder="Kota" value="{{old('weight')}}" name="city">
                                @error('religion')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Provinsi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('religion') is-invalid @enderror" placeholder="Provinsi" value="{{old('weight')}}" name="province">
                                @error('religion')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Nomor HP</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control @error('religion') is-invalid @enderror" placeholder="Nomor HP" value="{{old('weight')}}" name="phone_number">
                                @error('religion')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label pl-3">Nomor telepon</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control @error('religion') is-invalid @enderror" placeholder="Nomor Telepon" value="{{old('weight')}}" name="telephone_number">
                                @error('religion')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <h1 class="ml-3">Pendidikan Terakhir</h1>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <input type="text" class="form-control @error('religion') is-invalid @enderror" placeholder="Jenjang" value="{{old('weight')}}" name="level">
                                @error('religion')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control @error('religion') is-invalid @enderror" placeholder="Institusi" value="{{old('weight')}}" name="institution">
                                @error('religion')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control @error('religion') is-invalid @enderror" placeholder="Kota" value="{{old('weight')}}" name="city_of_institution">
                                @error('religion')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control @error('religion') is-invalid @enderror" placeholder="Jurusan" value="{{old('weight')}}" name="majors">
                                @error('religion')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control @error('religion') is-invalid @enderror" placeholder="IPK" value="{{old('weight')}}" name="ipk">
                                @error('religion')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <h4 class="ml-3">Jelaskan dengan Singkat Diri Anda Dalam 3 Paragraf</h4>
                        <div class="form-group row">
                            <div class="col-sm-11">
                                <textarea class="form-control" rows="5" name="description_career"></textarea>
                            </div>
                        </div>
                        <h4 class="ml-3">Jelaskan Visi dan Misi Hidup Anda</h4>
                        <div class="form-group row">
                            <div class="col-sm-11">
                                <textarea class="form-control" rows="5" name="vision_mision_career"></textarea>
                            </div>
                        </div>
                        <h4 class="ml-3">Jelaskan Rencana Karir Anda</h4>
                        <div class="form-group row">
                            <div class="col-sm-11">
                                <textarea class="form-control" rows="5" name="plan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 p-md-4">
                        <div class="form-group">
                            <label class="form-label">Kartu Tanda Penduduk
                                (Format File: JPG, JPEG, PNG, max 2 MB)</label>
                            <input type="file" class="form-control">
                        </div>
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