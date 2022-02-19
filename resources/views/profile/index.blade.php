@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2" data-aos="fade-right">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item""><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mb-3" data-aos="fade-right">
            <a href="{{ url('home') }}" class="btn border-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12" data-aos="fade-up">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12 mb-5">
                        <h3><i class="fa-solid fa-user"></i> Profile</h3>
                        <hr>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <h4>Informasi Profil</h4>
                            <h6><i class="fa-solid fa-pen-clip"></i> Perbarui informasi profil dan alamat email akun Anda.</h6>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tbody>
                                    <form action="{{ url('profile') }}" method="POST">
                                        @csrf
                                        <tr>
                                            <td>Nama</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><input id="name" value="{{ $user->name }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror</td>
                                            <td width="150"></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" name="email" autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror</td>
                                            <td width="150"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td align="center"><button type="submit" class="btn btn-warning">Save</button></td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr class="mb-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Informasi Profil Tambahan</h4>
                            <h6><i class="fa-solid fa-pen-clip"></i> Perbarui informasi nomor telepon dan alamat rumah.</h6>
                        </div>
                        <div class="col-md-6 mb-5">
                            <table class="table table-borderless">
                                <tbody>
                                        <tr>
                                            <td>No Telepon</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><input id="nohp" value="{{ $user->nohp }}" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" autocomplete="nohp" autofocus>

                                                @error('nohp')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror</td>
                                            <td width="150"></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat">{{ $user->alamat }}</textarea>

                                                @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror</textarea></td>
                                            <td width="150"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td align="center"><button type="submit" class="btn btn-warning">Save</button></td>
                                        </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                        <hr class="mb-5">
                        <div class="row mb-3">
                            <div class="col-md-10">
                                <h4><i class="fa-solid fa-lock"></i> Perbarui Kata Sandi</h4>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('change-password') }}"><button class="btn btn-warning">Change Password</button></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
