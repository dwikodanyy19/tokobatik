@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2" data-aos="fade-right">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item""><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item""><a href="{{ url('history') }}">Transaction</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transaction Details</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mb-3" data-aos="fade-right">
            <a href="{{ url('history') }}" class="btn border-secondary"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
            
        <div class="col-md-12" data-aos="fade-up">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa-solid fa-file-invoice-dollar"></i> Pembayaran</h3>
                    <h6>Pesanan anda sudah di periksa, lakukan pembayaran untuk melanjutkan proses.</h6>
                    <hr class="mt-3">

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <h4>Transaksi</h4>
                            <h6><i class="fa-solid fa-credit-card"></i> Lakukan transaksi dengan melakukan transfer pada No Rekening Berikut.</h6>
                        </div>
                        <div class="col-md-6 mb-5">    
                            <div class="row">
                                <div class="card mx-2 mb-2" style="width: 14rem;">
                                    <img src="{{ url('img/bca.png') }}" class="card-img-top">
                                    <div class="card-body">
                                        <p class="card-text">243-020-1226</p>
                                    </div>
                                </div>
                                <div class="card mx-2 mb-2" style="width: 14rem;">
                                    <img src="{{ url('img/bri.png') }}" class="card-img-top">
                                    <div class="card-body">
                                        <p class="card-text">367-843-000-192-723</p>
                                    </div>
                                </div>
                                <div class="card mx-2 mb-2" style="width: 14rem;">
                                    <img src="{{ url('img/bni.png') }}" class="card-img-top">
                                    <div class="card-body">
                                        <p class="card-text">053-065-2286</p>
                                    </div>
                                </div>
                                <div class="card mx-2 mb-2" style="width: 14rem;">
                                    <img src="{{ url('img/mandiri.png') }}" class="card-img-top">
                                    <div class="card-body">
                                        <p class="card-text">0200-000-256-847</p>
                                    </div>
                                </div>
                                <h5 class="mt-3">Lakukan transfer pada salah satu layanan bank diatas, <br>
                                dengan nominal : <strong>Rp {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong></strong>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2"> 
                <div class="card-body">
                    <h3><i class="fa fa-cart-shopping"></i> Transaction Details</h3>
                    @if(!empty($pesanan))
                    <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img width="100" src="{{ url('uploads') }}/{{ $pesanan_detail->barang->gambar }}"></td>
                                <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                <td>{{ $pesanan_detail->jumlah }} Kain</td>
                                <td>Rp {{ number_format($pesanan_detail->barang->harga) }}</td>
                                <td>Rp {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                            </tr
                            @endforeach
                        </tbody>
                    </table>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td  align="right"><strong>Total Harga :</strong></td>
                                <td><strong>Rp {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                <td align="right"><strong>Pajak :</strong></td>
                                <td><strong>Rp {{ number_format($pesanan->kode) }}</strong></td>
                                <td  align="right"><strong>Total Yang Harus Dibayar :</strong></td>
                                <td><strong>Rp {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection