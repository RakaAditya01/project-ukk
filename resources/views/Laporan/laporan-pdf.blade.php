@extends('layouts.app')

@section('title', 'Laporan')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap4.min.css" />
@endpush
    
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Laporan</h1>
            </div>
            <div class="row">
                <div class="coml-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body p-0">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection