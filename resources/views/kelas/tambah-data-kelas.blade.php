@extends('layouts.app')

@section('title', 'Tambah Data Kelas')
    
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Kelas</h1>
            </div>
            <div class="row">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body" style="width: 90%">
                                    <form action="{{ route('insertkelas') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                                            <input type="text" name="nama_kelas"  class="form-control
                                            @error('nama_kelas')
                                                is-invalid
                                            @enderror"aria-describedby="emailHelp" value="">
                                            @error('nama_kelas')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </input>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Kompetensi Keahlian</label>
                                            <input type="text" name="kompetensi_keahlian"  class="form-control
                                            @error('kompetensi_keahlian')
                                                is-invalid
                                            @enderror" aria-describedby="emailHelp" value="">
                                            @error('kompetensi_keahlian')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </input>
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