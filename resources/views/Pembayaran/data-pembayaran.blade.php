@extends('layouts.app')

@section('title', 'Data Pembayaran')

@push('style')
<link rel="stylesheet" href="{{ asset('library/prismjs/themes/prism.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap4.min.css" />
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pembayaran</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body p-0">
                            <div class="p-2 flex-grow-1 bd-highlight text-right">
                                <a href="{{route('tambah-pembayaran')}}" type="button"
                                    class="btn btn-primary mt-2 mb-4">Tambah+</a>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-striped table" id="table-1">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">ID Petugas</th>
                                            <th scope="col">NIS</th>
                                            <th scope="col">SPP Bulan</th>
                                            <th scope="col">Jumlah Bayar</th>
                                            <th scope="col">Tgl.Pembayaran</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        <tr>
                                            @foreach ($data as $no => $row)
                                            <th scope="row">{{ intval($no) + 1 }}</th>
                                            <td>{{$row->id_petugas}}</td>
                                            <td>{{$row ->nis}}</td>
                                            <td>{{$row ->spp_bulan}}</td>
                                            <td>{{'Rp '.$row ->jumlah_bayar. '.000'}}</td>
                                            <td>{{$row ->created_at->format('Y-m-d')}}</td>
                                            <td>
                                                <div class="container d-flex" style="margin: 0;padding: 0;">
                                                    <a href="{{route('deletepembayaran', ['id'=>$row->id_petugas])}}"
                                                        class="btn btn-icon btn-danger m-1 ml-3 mt-1 mb-3 delete swal-confrim">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                        
                                                    <a href="{{route('viewpembayaran', ['id' => $row->id_petugas])}}"
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
<!-- JS Libraies -->
<script src="{{ asset('library/prismjs/prism.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>
@endpush