@extends('layouts.app')

@section('title', 'Edit Data User')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data User</h1>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="/updateuser/{{$data->id_user}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">nama</label>
                                        <input type="text" name="nama" value="{{$data->nama}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">email</label>
                                        <input type="text" name="email" value="{{$data->email}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col mb-lg-2 mb-1">
                                            <label for="exampleFormControlSelect1" class="form-label">Role</label>
                                            <select class="form-select @error('role') is-invalid @enderror"
                                                id="exampleFormControlSelect1" aria-label="Default select example"
                                                name="role">
                                                {{-- <option selected value="{{ $data->role }}">{{ $data->role }}
                                                </option> --}}
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
