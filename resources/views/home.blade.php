@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4" data-aos="zoom-in">
            <img src="{{ url('img/logo.png') }}" class="rounded mx-auto d-block" width="400" alt="">
        </div>
        @foreach ($barangs as $barang)
        <div class="col-md-4" data-aos="zoom-in-up">
            <div class="container">
                <div class="card mb-3 mx-auto" style="width: 20rem;">
                    <a href="{{ url('pesan') }}/{{ $barang->id }}"><img class="card-img-top" src="{{ url('uploads') }}/{{ $barang->gambar }}" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                        <p class="card-text flex-row">
                            Rp {{ number_format($barang->harga) }}<a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn-light fw-bold" style="margin-left: 9rem;font-size: 10px;text-decoration-line: none"> LEBIH BANYAK</a>
                        </p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('footer')
<footer id="footer" class="bg-warning text-dark text-center p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Created By a Man From SMKN 5 Kab.Tangerang <br> <a href="https://www.instagram.com/dwikodanyy_19/" class="text-dark fw-bold" style="text-decoration: none"><i class="fa-brands fa-instagram"></i> Dwiko Dany Rananta</a></p>
            </div>
            <div class="col-md-6">
                <p>Know More About Me<br> <a href="https://dwikodanyy19.github.io/portfolio/"><img src="{{ url('img/qrcode.png') }}" width="70"></a></p>
            </div>
        </div>
    </div>
</footer>
@endsection