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
                                        <label for="exampleInputEmail1" class="form-label">ID Petugas</label>
                                        <input type="text" name="id_petugas" value="{{$data->id_petugas}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">NIS</label>
                                        <input type="text" name="nis" value="{{$data->nis}}" class="form-control"
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
