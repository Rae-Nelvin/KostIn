@extends('layouts.templateFullBlue')

@section('title', 'KostIn - Penyedia Kos Mahasiswa')

@section('cssPage')
    <link rel="stylesheet" href={{ asset('assets/css/akun.css') }}>
@endsection

@section('additionalExtention')
    <!-- Datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
@endsection

@section('content')
    <section class="bg-banner">
        <div class="container">
            <div class="row with-gap">
                <div class="col-xl-3 col-lg-3 col-md-12 no-padding">
                    @include('layouts.sidebar')
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 no-padding">
                    <div class="akun-layer">
                        <div class="layer-title-inside">
                            <div class="back">
                                <a href="{{ route('admin.manage-requests') }}"><i class='bx bx-arrow-back'></i></a>
                            </div>
                            <h1>Detail Request Kos Owner</h1>
                        </div>
                        <div class="layer-detail">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 no-padding">
                                    <div class="owner-detail-img">
                                        <img src="{{ asset('storage/' . $kost->detail->cover->path ) }}" alt="{{ $kost->name }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                    <div class="owner-detail-text">
                                        <ul>
                                            {{-- Nama User --}}
                                            <li>Nama : <strong>{{ $request->user->name }}</strong></li>
                                            {{-- Email User --}}
                                            <li>Email : <strong>{{ $request->user->email }}</strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                    <div class="owner-detail-text">
                                        <ul>
                                            {{-- Phone User --}}
                                            <li>Phone : <strong>{{ $request->user->phone }}</strong></li>
                                            {{-- Kota User --}}
                                            <li>Kota : <strong>Jakarta</strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 no-padding">
                                    <a href="{{ route('admin.accept-request', $request->id) }}"><button class="accept-btn">Accept Request</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
