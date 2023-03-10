@extends('layouts.auth')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Register</h4>
        </div>

        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form class="user needs-validation" method="POST" action="{{route('registeruser')}}">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input id="nama"
                            type="text"
                            class="form-control"
                            name="nama"
                            autofocus>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email"
                        type="email"
                        class="form-control"
                        name="email">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="password"
                            class="d-block">Password</label>
                        <input id="password"
                            type="password"
                            class="form-control pwstrength"
                            data-indicator="pwindicator"
                            name="password">
                        <div id="pwindicator"
                            class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="password_confirmation"
                            class="d-block">Password </label>
                        <input id="password_confirmation"
                            type="password"
                            class="form-control"
                            name="password_confirmation">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit"
                        class="btn btn-primary btn-lg btn-block">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
