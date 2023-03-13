@extends('layouts.app')

@section('title', 'History')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap4.min.css" />
<link rel="shortcut icon" href="img/pnj.ico" type="image/x-icon">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>History Pembayaran</h1>
        </div>
        {{-- <h2 class="section-title">Note.</h2> 
        <p class="">Silahkan ke PUSDATIN untuk mengambil barang dan Mohon Kembalikan Barang Yang Dipinjam Sesuai Batas Peminjaman.</p> --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-striped table" id="table-1" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">ID Petugas</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">SPP Bulan</th>
                                        <th scope="col">Jumlah Bayar</th>
                                        <th scope="col">Tgl.Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    <tr>
                                        @foreach ($data as $index => $row)
                                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                                        <td>{{$row ->id_petugas}}</td>
                                        <td>{{$row ->nis}}</td>
                                        <td>{{$row ->spp_bulan}}</td>
                                        <td>{{$row ->jumlah_bayar}}</td>
                                        <td>{{$row ->created_at->format('Y-m-d')}}</td>
                                    </tr>
                                    @endforeach
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

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/select.bootstrap4.js"></script>
<script src="{{ asset('js/after.js') }}"></script>
<script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush