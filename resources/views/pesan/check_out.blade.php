@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2" data-aos="fade-right">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item""><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mb-3" data-aos="fade-right">
            <a href="{{ url('home') }}" class="btn border-secondary"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
            
        <div class="col-md-12" data-aos="fade-up">
            <div class="card"> 
                <div class="card-body">
                    <h3><i class="fa fa-cart-shopping"></i> Check Out</h3>
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
                                <th></th>
                                <th>Aksi</th>
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
                                <td></td>
                                <td>
                                    <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-sm" onclick="return confirm('Anda yakin ingin menghapus barang ini dari list ?')"><i class="fa-solid fa-trash-can" style="color: #DC3545;"></i></button>
                                    </form>
                                </td>
                            </tr
                            @endforeach
                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td><strong>Rp {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                <td colspan="2">
                                    <a href="{{ url('konfirmasi-check-out') }}" onclick="return confirm('Barang akan segera di proses')" class="btn btn-warning">
                                        <i class="fa-solid fa-cart-flatbed"></i> Check Out
                                    </a>
                                </td>
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