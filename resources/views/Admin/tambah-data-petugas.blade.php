@extends('layouts.app')

@section('title', 'Update Data Petugas')
    
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Petugas</h1>
            </div>
            <div class="row">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body" style="width: 90%">
                                    <form action="{{ route('insertpetugas') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">ID Petugas</label>
                                            <input type="text" name="id_petugas"  class="form-control" aria-describedby="emailHelp" value="">
                                            </input>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                                            <input type="text" name="nama"  class="form-control" aria-describedby="emailHelp" value="">
                                            </input>
                                        </div>

                                        <div class="row">
                                            <div class="col mb-lg-2 mb-1">
                                                <label for="exampleFormControlSelect1" class="form-label">Role</label>
                                                <select class="form-select @error('level') is-invalid @enderror" id="exampleFormControlSelect1" aria-label="Default select example" name="level">
                                                    {{-- <option selected value="{{ $user->role }}">{{ $user->role }}</option> --}}
                                                    <option value="admin">Admin</option>
                                                    <option value="petugas">Petugas</option>
                                                </select>
                                            </div>
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