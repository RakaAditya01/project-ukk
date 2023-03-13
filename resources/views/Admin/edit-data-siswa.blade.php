@extends('layouts.app')

@section('title', 'Edit Data Siswa')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Siswa</h1>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="/updatesiswa/{{$data['nisn']}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">NISN</label>
                                        <input type="text" name="nisn" value="{{$data['nisn']}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">NIS</label>
                                        <input type="text" name="nis" value="{{$data['nis']}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                                        <input type="text" name="nama" value="{{$data['nama']}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text">Kelas</label>
                                            </div>
                                            <select name="id_kelas" class="custom-select @error('id_kelas') is-invalid @enderror">
                                                {{ count($data) == 0 ? 'disabled' : '' }}>
                                                @if (count($data) == 0 )
                                                    <option>Pilihan Tidak Ada</option>
                                                    @else
                                                    <option value="">Silahkan Pilih</option>
                                                    
                                                        <option value="{{ strval($data["id_kelas"]) }}"
                                                            {{ strval($data["id_kelas"]) == strval($data["id_kelas"]) ? 'selected' : '' }}>{{ $data["id_kelas"] }} {{ $data['kompetensi_keahlian'] }}
                                                        </option>

                                                @endif
                                            </select>
                                        </div>
                                        @error('id_kelas')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" value="{{$data->alamat}}" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                        @error('alamat')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No.Telp</label>
                                        <input type="text" name="no_telp" value="{{$data->no_telp}}" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                        @error('no_telp')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text">
                                                    SPP &nbsp;
                                                </label>
                                            </div>
                                            <select name="nominal" class="custom-select @error('nominal') is-invalid @enderror"
                                                {{ count($spp) == 0 ? 'disabled' : '' }}>
                                                @if(count($spp) == 0)
                                                <option>Pilihan tidak ada</option>
                                                @else
                                                <option value="">Silahkan Pilih</option>
                                                @foreach($spp as $value)
                                                <option value="{{ $value->id_spp }}">
                                                    {{ 'Tahun '.$value->tahun.' - '.'Rp.'.$value->nominal }}</option>
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
