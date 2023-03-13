@extends('layouts.app')

@section('title', 'Edit Data Spp')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Spp</h1>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="/updatespp/{{$data->id_spp}}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tahun</label>
                                        <input type="text" name="tahun" value="{{$data->tahun}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                        <input type="text" name="nominal" value="{{$data->nominal}}" class="form-control"
                                            id="" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
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
