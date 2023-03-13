@extends('layouts.app')

@section('title', 'Data Siswa')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap4.min.css" />
@endpush

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
                                    <a href="{{route('tambah-data-siswa')}}" type="button"
                                        class="btn btn-primary mt-2 mb-4">Tambah+</a>
                                    <a href="{{route('pdf-siswa')}}" type="button"
                                        class="btn btn-danger mt-2 mb-4">PDF</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nisn</th>
                                                <th scope="col">Nis</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Kelas</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No.Telp</th>
                                                <th scope="col">Nominal SPP</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            <tr>
                                                @foreach ($data as $no => $row)
                                                <th scope="row">{{ $no + 1 }}</th>
                                                <td>{{$row ->nisn}}</td>
                                                <td>{{$row ->nis}}</td>
                                                <td>{{$row ->nama}}</td>
                                                <td>{{$row ->kelas->nama_kelas}} {{$row ->kelas->kompetensi_keahlian}}</td>
                                                <td>{{$row ->alamat}}</td>
                                                <td>{{$row ->no_telp}}</td>
                                                <td>{{ 'Rp. '. $row ->spp->nominal. '.000'}}</td>
                                                <td>
                                                    <div class="container d-flex" style="margin: 0;padding: 0;">
                                                        <a href="{{route('deletesiswa', ['id'=>$row->nisn])}}"
                                                            class="btn btn-icon btn-danger m-1 ml-3 mt-1 mb-3 delete swal-confrim">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                        <a href="{{route('viewsiswa', ['id' => $row->nisn])}}"
                                                            class="btn btn-primary m-1 mr-3 mb-3 mt-1 "><i
                                                                class="fas fa-pencil-alt "></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/select.bootstrap4.js"></script>
<script src="{{ asset('js/after.js') }}"></script>
<script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
