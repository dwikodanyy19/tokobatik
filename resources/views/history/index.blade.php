@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2" data-aos="fade-right">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item""><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transaction</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mb-3" data-aos="fade-right">
            <a href="{{ url('home') }}" class="btn border-secondary"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
            
        <div class="col-md-12" data-aos="fade-up">
            <div class="card"> 
                <div class="card-body">
                    <h3><i class="fa-solid fa-memo"></i> Check Out</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Detail</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach($pesanans as $pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->tanggal }}</td>
                                <td>
                                    @if($pesanan->status == 1)
                                    Belum Dibayar
                                    @else
                                    Sudah Dibayar
                                    @endif
                                </td>
                                <td>Rp {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</td>
                                <td><a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn bg-transparant text-warning"><i class="fa-solid fa-circle-info"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection