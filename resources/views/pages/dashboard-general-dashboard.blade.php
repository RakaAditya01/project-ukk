@extends('layouts.app')

@section('title', 'General Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
        </section>

        {{-- @dd(Auth::user()) --}}

        @if (auth()->user()->role == 'admin')
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image"
                            src="{{ asset('img/avatar/avatar-1.png') }}"
                            class="rounded-circle profile-widget-picture">
                    </div>
                    <div class="profile-widget-description">
                        <div class="profile-widget-name">{{auth()->user()->nama}}<div
                                class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div> {{auth()->user()->role}}
                            </div>
                        </div>
                        {{auth()->user()->nama}} is a superhero name in <b>Indonesia</b>, especially in my family. He is not a
                        fictional character but an original hero in my family, a hero for his children and for his
                        wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with
                        <b>'John Doe'</b>.
                    </div>
                </div>
            </div>
            <div class="mt-sm-5 col-12 col-md-12 col-lg-7">
                <div class="card">
                    <form method="post"
                        class="needs-validation"
                        novalidate="">
                        <div class="card-header">
                            <h4>Your Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Name</label>
                                    <input type="text"
                                        class="form-control"
                                        readonly
                                        value="{{auth()->user()->nama}}"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Email</label>
                                    <input type="text"
                                        class="form-control"
                                        readonly
                                        value="{{auth()->user()->email}}"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please fill in the last name
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Bio</label>
                                    <textarea class="form-control" name="aboutme"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif

        @if (auth()->user()->role == 'siswa')
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image"
                            src="{{ asset('img/avatar/avatar-1.png') }}"
                            class="rounded-circle profile-widget-picture">
                    </div>
                    <div class="profile-widget-description">
                        <div class="profile-widget-name">{{auth()->user()->nama}} <div
                                class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div> {{auth()->user()->role}}
                            </div>
                        </div>
                        {{auth()->user()->nama}} is a superhero name in <b>Indonesia</b>, especially in my family. He is not a
                        fictional character but an original hero in my family, a hero for his children and for his
                        wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with
                        <b>'John Doe'</b>.
                    </div>
                </div>
            </div>
            <div class="col-12 mt-sm-5 col-md-12 col-lg-7">
                <div class="card">
                    <form method="post"
                        class="needs-validation"
                        novalidate="">
                        <div class="card-header">
                            <h4>Your Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Name</label>
                                    <input type="text"
                                        class="form-control"
                                        readonly
                                        value="{{auth()->user()->nama}}"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>NISN</label>
                                    <input type="text"
                                        class="form-control"
                                        readonly
                                        value="{{auth()->user()->nisn}}"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please fill in the last name
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-7 col-12">
                                    <label>Email</label>
                                    <input type="email"
                                        class="form-control"
                                        readonly
                                        value="{{auth()->user()->email}}"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please fill in the email
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif

        @if (auth()->user()->role == 'petugas')
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image"
                            src="{{ asset('img/avatar/avatar-1.png') }}"
                            class="rounded-circle profile-widget-picture">
                    </div>
                    <div class="profile-widget-description">
                        <div class="profile-widget-name">{{auth()->user()->nama}} <div
                                class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div> {{auth()->user()->role}}
                            </div>
                        </div>
                        {{auth()->user()->nama}} is a superhero name in <b>Indonesia</b>, especially in my family. He is not a
                        fictional character but an original hero in my family, a hero for his children and for his
                        wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with
                        <b>'John Doe'</b>.
                    </div>
                </div>
            </div>
            <div class="mt-sm-5 col-12 col-md-12 col-lg-7">
                <div class="card">
                    <form method="post"
                        class="needs-validation"
                        novalidate="">
                        <div class="card-header">
                            <h4>Your Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Name</label>
                                    <input type="text"
                                        class="form-control"
                                        readonly
                                        value="{{auth()->user()->nama}}"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Email</label>
                                    <input type="text"
                                        class="form-control"
                                        readonly
                                        value="{{auth()->user()->email}}"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please fill in the last name
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif

    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
