@extends('layouts.app')

@section('content')
    <div class="container-sm mb-4">
        <div class="card mt-4 float-none">
            <div class="card-body">
                <form class="row form-register-carrers" action="/recruitment/register" method="POST">
                    {{-- action="/recruitment/register" method="POST" --}}
                    @csrf
                    <div class="col-lg-8 col-md-12 p-md-4">
                        <h2 class="mb-3">Akun</h2>
                        <!-- AKUN -->
                        <div class="container mt-2 px-sm-3 px-md-5">
                            <!-- Username & Email & Password -->
                            <div class="form-group">
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <label class="row">Username</label>
                                        <div class="row">
                                            <input type="text" class="form-control outline-0  @error('username') is-invalid @enderror " placeholder="Username" name="username" v-model="username" value="{{ old('username') }}">
                                            @error('username')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <label class="row">Email</label>
                                        <div class="row">
                                            <input type="email" class="form-control outline-0 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" v-model="email">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>                                
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-lg-5">
                                        <label class="row">Password</label>
                                        <div class="row">
                                            <input type="password" class="form-control outline-0  @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1">
                                        <label class="row">Repeat Password</label>
                                        <div class="row">
                                            <input type="password" class="form-control outline-0  @error('password') is-invalid @enderror " name="password_confirmation" placeholder="Repeat Password" placeholder="Repeat Password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                       
                        <!-- IDENTITAS -->
                        <h2 class="mb-4 mt-5">Identitas</h2>
                        <div class="container mt-2 px-sm-3 px-md-5">
                            <div class="form-group">
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <label class="row">Nama Lengkap</label>
                                        <div class="row">
                                        <input type="text" class="form-control outline-0 @error('name') is-invalid @enderror" placeholder="Nama Lengkap" value="{{old('name')}}" name="name">
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <label class="row">Posisi Yang Dilamar</label>
                                        <div class="row">
                                            <select class="form-control outline-0 @error('applied_position') is-invalid @enderror" name="applied_position">
                                                <option selected disabled value="">Silahkan Pilih</option>
                                                <option value="Product Specialist dan Marketing/Salaes">Product Specialist dan Marketing/Sales</option>
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
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <label class="row">Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-lg-6 px-0">
                                                <input type="text" class="form-control outline-0 ttl border-right-0 rounded-left @error('place_of_birth') is-invalid @enderror" placeholder="Tempat Lahir" value="{{old('place_of_birth')}}" name="place_of_birth">
                                                @error('place_of_birth')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6 px-0">
                                                <input type="date" class="form-control outline-0 ttl rounded-right @error('date_of_birth') is-invalid @enderror" placeholder="Tanggal Lahir" value="{{old('date_of_birth')}}" name="date_of_birth">
                                                @error('date_of_birth')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <label class="row">Agama</label>
                                        <div class="row">
                                            <select class="form-control outline-0 @error('religion') is-invalid @enderror" value="{{old('weight')}}" name="religion">
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
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-lg-5">
                                        <label class="row">Jenis Kelamin</label>
                                        <div class="row">
                                            <select class="form-control outline-0 @error('gender') is-invalid @enderror" name="gender">
                                                <option selected disabled value="">Silahkan Pilih</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            @error('gender')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-5 offset-lg-2">
                                        <label class="row">Status Pernikahan</label>
                                        <div class="row"> 
                                            <select class="form-control outline-0 @error('marital_status') is-invalid @enderror" name="marital_status">
                                                <option selected disabled value="">Silahkan Pilih</option>
                                                <option value="Laki-Laki">Belum Menikah</option>
                                                <option value="Perempuan">Menikah</option>
                                            </select>
                                            @error('marital_status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <label class="row">Tinggi/Berat Badan</label>
                                        <div class="row">
                                            <div class="col-lg-5 px-0">
                                                <div class="input-group">
                                                    <input type="number " class="form-control outline-0 @error('height') is-invalid @enderror" placeholder="Tinggi Badan" value="{{old('height')}}" name="height">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                    @error('height')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-5 offset-lg-2 px-0">
                                                <div class="input-group">
                                                    <input type="number" class="form-control outline-0  @error('weight') is-invalid @enderror" placeholder="Berat Badan" value="{{old('weight')}}" name="weight">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">kg</span>
                                                    </div>
                                                    @error('weight')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ALAMAT DOMISILI -->
                        <h2 class="mb-4 mt-5">Alamat Domisili</h2>
                        <div class="container mt-2 px-sm-3 px-md-5">
                            <div class="form-group">
                                <!-- Nama Jalan -->
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <label class="row">Nama Jalan</label>
                                        <div class="row">
                                            <input type="text" class="form-control outline-0 @error('religion') is-invalid @enderror" placeholder="Jalan" value="{{old('weight')}}" name="street">
                                            @error('religion')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- Kota -->
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <label class="row">Kota</label>
                                        <div class="row">
                                            <input type="text" class="form-control outline-0 @error('religion') is-invalid @enderror" placeholder="Kota" value="{{old('weight')}}" name="city">
                                            @error('religion')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- Provinsi -->
                                <div class="form-row mt-3">
                                    <div class="col">
                                        <label class="row">Provinsi</label>
                                        <div class="row">
                                            <input type="text" class="form-control outline-0 @error('religion') is-invalid @enderror" placeholder="Provinsi" value="{{old('weight')}}" name="province">
                                            @error('religion')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- Nomor HP & Telepon -->
                                <div class="form-row mt-3">
                                    <div class="col-lg-5">
                                        <label class="row">Nomor HP</label>
                                        <div class="row">
                                            <input type="number" class="form-control outline-0 @error('religion') is-invalid @enderror" placeholder="Nomor HP" value="{{old('weight')}}" name="phone_number">
                                            @error('religion')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-5 offset-lg-2">
                                        <label class="row">Nomor Telepon</label>
                                        <div class="row">
                                            <input type="number" class="form-control outline-0 @error('religion') is-invalid @enderror" placeholder="Nomor Telepon" value="{{old('weight')}}" name="telephone_number">
                                            @error('religion')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PENDIDIKAN TERAKHIR -->
                        <h2 class="mb-4 mt-5">Pendidikan Terakhir</h2>
                        <div class="container mt-2 px-sm-3 px-md-5">
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <input type="text" class="form-control outline-0 @error('religion') is-invalid @enderror" placeholder="Jenjang" value="{{old('weight')}}" name="level">
                                    @error('religion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control outline-0 @error('religion') is-invalid @enderror" placeholder="Institusi" value="{{old('weight')}}" name="institution">
                                    @error('religion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control outline-0 @error('religion') is-invalid @enderror" placeholder="Kota" value="{{old('weight')}}" name="city_of_institution">
                                    @error('religion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <input type="text" class="form-control outline-0 @error('religion') is-invalid @enderror" placeholder="Jurusan" value="{{old('weight')}}" name="majors">
                                    @error('religion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control outline-0 @error('religion') is-invalid @enderror" placeholder="IPK" value="{{old('weight')}}" name="ipk">
                                    @error('religion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- DESKRIPSI DIRI -->
                        <h4 class="mb-4 mt-5">Jelaskan dengan Singkat Diri Anda Dalam 3 Paragraf</h4>
                        <div class="container px-0">
                            <div class="form-group row">
                                <div class="col px-sm-3 px-md-5">
                                    <textarea class="form-control outline-0" rows="5" name="description_career"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- VISI & MISI -->
                        <h4 class="mb-4 mt-5">Jelaskan Visi dan Misi Hidup Anda</h4>
                        <div class="container px-0">
                            <div class="form-group row">
                                <div class="col px-sm-3 px-md-5">
                                    <textarea class="form-control outline-0" rows="5" name="vision_mision_career"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- RENCANA KARIR -->
                        <h4 class="mb-4 mt-5">Jelaskan Rencana Karir Anda</h4>
                        <div class="container px-0">
                            <div class="form-group row">
                                <div class="col px-sm-3 px-md-5">
                                    <textarea class="form-control outline-0" rows="5" name="plan"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-4 col-md-12 p-md-4">
                        <div class="form-group my-5">
                            <label class="form-label imgup">Kartu Tanda Penduduk</label>
                                <p class="imgformat">(Format File: JPG, JPEG, PNG, max 2 MB)</p>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="form-group my-5">
                            <label class="form-label imgup">Kartu Keluarga</label>
                                <p class="imgformat">(Format File: JPG, JPEG, PNG, max 2 MB)</p>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="form-group my-5">
                            <label class="form-label imgup">Foto Berwarna</label>
                                <p class="imgformat">(Format File: JPG, JPEG, PNG, max 2 MB)</p>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="form-group my-5">
                            <label class="form-label imgup">Ijazah Terakhir</label>
                                <p class="imgformat">(Format File: JPG, JPEG, PNG, max 2 MB)</p>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="form-group my-5">
                            <label class="form-label imgup">Transkrip Nilai</label>
                                <p class="imgformat">(Format File: JPG, JPEG, PNG, max 2 MB)</p>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="form-group my-5">
                            <label class="form-label imgup">Curriculum Vitae</label>
                                <p class="imgformat">(Format File: JPG, JPEG, PNG, max 2 MB)</p>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="mt-4">
                            <p>Darimana Anda mengetahui informasi lowongan ini?</p>
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">Instagram</label>
                                </div>
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">Linked.in</label>
                                </div>
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option3">
                                    <label class="form-check-label" for="exampleRadios2">Facebook</label>
                                </div>
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option4">
                                    <label class="form-check-label" for="exampleRadios2">Telegram</label>
                                </div>
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option5">
                                    <label class="form-check-label" for="exampleRadios2">Jobstreet / Jobindo.id / Topkarir.com</label>
                                </div>
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option6">
                                    <label class="form-check-label" for="exampleRadios2">Keluarga, saudara, teman</label>
                                </div>
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option7">
                                    <label class="form-check-label" for="exampleRadios2">Lainnya (sebutkan) :</label>
                                    <textarea name="lainnya" id=""></textarea>
                                </div>
                        </div>
                    </div>
                    <div class="container">
                        <button class="btn btn-primary btn-block btn-lg" disabled>Daftar</button>
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
                    </div>
                </form>
            </div>
        </div>    
    </div>    
@endsection


@section('footer')
<script src="{{url('js/careers.js')}}"></script>
@endsection