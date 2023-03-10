@extends('layouts.app')

@section('title', 'Tambah Data Pembayaran')
    
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Pembayaran</h1>
            </div>
            <div class="row">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body" style="width: 90%">
                                    <form action="{{ route('insertpembayaran') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">ID Petugas</label>
                                            <input type="text" name="id_petugas"  class="form-control
                                            @error('id_petugas')
                                                is-invalid
                                            @enderror"aria-describedby="emailHelp" value="">
                                            @error('id_petugas')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </input>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">NIS</label>
                                            <input type="text" name="nis"  class="form-control
                                            @error('nis')
                                                is-invalid
                                            @enderror"aria-describedby="emailHelp" value="">
                                            @error('nis')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </input>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">SPP Bulan</label>
                                            <input type="text" name="spp_bulan"  class="form-control
                                            @error('spp_bulan')
                                                is-invalid
                                            @enderror"aria-describedby="emailHelp" value="">
                                            @error('spp_bulan')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </input>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Jumlah Bayar</label>
                                            <input type="text" name="jumlah_bayar"  class="form-control
                                            @error('jumlah_bayar')
                                                is-invalid
                                            @enderror" aria-describedby="emailHelp" value="">
                                            @error('jumlah_bayar')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </input>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">
                                                        SPP &nbsp;
                                                    </label>
                                                </div>
                                                <select name="nominal" class="custom-select @error('nominal') is-invalid @enderror"
                                                    {{ count($data) == 0 ? 'disabled' : '' }}>
                                                    @if(count($data) == 0)
                                                    <option>Pilihan tidak ada</option>
                                                    @else
                                                    <option value="">Silahkan Pilih</option>
                                                    @foreach($data as $value)
                                                    <option value="{{ $value->id_spp }}">
                                                        {{ 'Tahun '.$value->tahun.' - '.'Rp.'.$value->nominal. '.000' }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            @error('nominal')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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