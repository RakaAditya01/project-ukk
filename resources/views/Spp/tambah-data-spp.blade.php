@extends('layouts.app')

@section('title', 'Tambah Data SPP')
    
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data SPP</h1>
            </div>
            <div class="row">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body" style="width: 90%">
                                    <form action="{{ route('insertspp') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">ID SPP</label>
                                            <input type="text" name="id_spp"  class="form-control
                                            @error('id_spp')
                                                is-invalid
                                            @enderror"aria-describedby="emailHelp" value="">
                                            @error('id_spp')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </input>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tahun</label>
                                            <input type="text" name="tahun"  class="form-control
                                            @error('tahun')
                                                is-invalid
                                            @enderror"aria-describedby="emailHelp" value="">
                                            @error('tahun')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </input>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                            <input type="text" name="nominal"  class="form-control
                                            @error('nominal')
                                                is-invalid
                                            @enderror" aria-describedby="emailHelp" value="">
                                            @error('nominal')
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