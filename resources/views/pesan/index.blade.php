@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2" data-aos="fade-right">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item""><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12" data-aos="fade-right">
            <a href="{{ url('home') }}" class="btn border-secondary"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        <div class="col-md-12">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6" data-aos="zoom-in-right">
                        <img src="{{ url('uploads') }}/{{ $barang->gambar }}" width="100%" class="rounded mx-auto d-block" alt="">
                    </div>
                    <div class="col-md-6 mt-2" data-aos="fade-left">
                        <h2>{{ $barang->nama_barang }}</h2>
                        <hr>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td>Rp. {{ number_format($barang->harga) }}</td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>:</td>
                                    <td>{{ number_format($barang->stok) }}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td>{{ $barang->keterangan }}</td>
                                </tr>
                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td>:</td>
                                        <td>
                                            <form action="{{ url('pesan') }}/{{ $barang->id }}" method="POST">
                                            @csrf
                                                <input type="number" min="1" name="jumlah_pesan" class="form-control" required="">
                                                <button type="submit" class="btn btn-warning mt-2 mb-2"><i class="fa-solid fa-plus"></i> Cart</button>
                                                @if (session('failed'))
                                                <div class="alert alert-danger">
                                                    {{ session('failed') }}
                                                </div>
                                                @endif <br><br><br><br><br><br><br><br><br><br><br>
                                            </form>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection