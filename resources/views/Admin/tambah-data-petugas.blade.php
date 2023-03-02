@extends('layouts.app')

@section('title', 'Tambah Data Petugas')
    
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
                                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                                            <input type="text" name="nama"  class="form-control
                                            @error('nama')
                                                is-invalid
                                            @enderror" aria-describedby="emailHelp" value="">
                                            @error('nama')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </input>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="text" name="email" id="email" class="form-control 
                                            @error('email')
                                                is-invalid
                                            @enderror" aria-describedby="emailHelp">
                                            @error('email')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Password</label>
                                            <input type="text" name="password" id="password" class="form-control 
                                            @error('password')
                                                is-invalid
                                            @enderror" aria-describedby="emailHelp">
                                            @error('password')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
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