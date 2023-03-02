@extends('layouts.app')

@section('title', 'Tambah Data Siswa')
    
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Siswa</h1>
            </div>
            <div class="row">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body" style="width: 90%">
                                    <form action="{{ route('insertsiswa') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">NISN</label>
                                            <input type="text" name="nisn"  class="form-control
                                            @error('nisn')
                                                is-invalid
                                            @enderror"aria-describedby="emailHelp" value="">
                                            @error('nisn')
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
                                            @enderror" aria-describedby="emailHelp" value="">
                                            @error('nis')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </input>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                                            <input type="text" name="nama" class="form-control 
                                            @error('nama')
                                                is-invalid
                                            @enderror" aria-describedby="emailHelp">
                                            @error('nama')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control 
                                            @error('alamat')
                                                is-invalid
                                            @enderror" aria-describedby="emailHelp">
                                            @error('alamat')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">No.Telepon</label>
                                            <input type="text" name="no_telp" class="form-control 
                                            @error('no_telp')
                                                is-invalid
                                            @enderror" aria-describedby="emailHelp">
                                            @error('no_telp')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text">Kelas</label>
                                            </div>
                                            <select name="nama_kelas" class="custom-select @error('nama_kelas') is-invalid @enderror">
                                                {{  count($data) == 0 ? 'disabled' : '' }}>
                                                @if (count($data) == 0 )
                                                    <option>Pilihan Tidak Ada</option>
                                                    @else
                                                    <option value="">Silahkan Pilih</option>
                                                    @foreach ($data as $data)
                                                        <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
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