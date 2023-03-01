@extends('layouts.app')

@section('title', 'Data Siswa')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Siswa</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body p-0">
                            <div class="bd-highlight d-flex">
                                <div class="p-2 flex-grow-1 bd-highlight text-right">
                                    <a href="" type="button" class="btn btn-primary mt-2 mb-4">Tambah+</a>
                                </div>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nisn</th>
                                        <th scope="col">Nis</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No.Telp</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    <tr>
                                        
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            {{-- <div class="container d-flex" style="margin: 0;padding: 0;">
                                                <form action="{{route('deleteuser',$row->id)}}"
                                                    id="delete{{$row->id}}" method="POST" class="d-block">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="#" data-id={{$row->id}}
                                                        class="btn btn-icon btn-danger m-1 ml-3 mt-1 mb-3 delete swal-confrim">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </form>
                                                <a href="{{route('tampilanuser',$row->id)}}"
                                                    class="btn btn-primary m-1 mr-3 mb-3 mt-1 "><i
                                                        class="fas fa-pencil-alt "></i></a>
                                            </div> --}}
                                        </td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection