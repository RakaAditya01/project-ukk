@extends('layouts.app')

@section('title', 'Edit Data Pembayaran')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Pembayaran</h1>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="/updatepembayaran/{{$data->id_petugas}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Petugs</label>
                                        <input type="text" name="nama" value="{{$data->nama}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">NISN</label>
                                        <input type="text" name="nisn" value="{{$data->nisn}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">SPP Bulan</label>
                                        <input type="text" name="spp_bulan" value="{{$data->spp_bulan}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jumlah Bayar</label>
                                        <input type="text" name="jumlah_bayar" value="{{$data->jumlah_bayar}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
