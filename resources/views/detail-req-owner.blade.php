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
                    <div class="akun-nav">
                        <ul>
                            {{-- Untuk User --}}
                            {{--                            <li><a href="#">Manage Profile</a></li>--}}
                            {{--                            <li><a href="#">Manage Transaksi</a></li>--}}
                            {{--                            <li><a href="#" class="kos-owner">Jadi Kos Owner</a></li>--}}
                            {{--                            <li><a href="#" class="logout"><i class='bx bxs-user-circle'></i> Logout</a></li>--}}

                            {{-- Request kos owner hanya bisa dikirim jika data diri lengkap --}}
                            {{-- Untuk pop up alert notif buat ngasi tau ap yang terjadi kayanya skip dlu, yang penting skema aplikasinya jalan dlu --}}

                            {{-- Untuk Owner --}}
{{--                            <li><a href="#">Manage Kos</a></li>--}}
{{--                            <li><a href="#">Manage Transaksi</a></li>--}}
{{--                            <li><a href="#">Manage Profile</a></li>--}}
{{--                            <li><a href="#" class="logout"><i class='bx bxs-user-circle'></i> Logout</a></li>--}}

                            {{-- Untuk Admin --}}
                            <li><a href="#">Manage Request Owner</a></li>
                            <li><a href="#">Manage Request Kos</a></li>
                            <li><a href="#">Manage Kos</a></li>
                            <li><a href="#">Manage Transaksi</a></li>
                            <li><a href="#">Manage User</a></li>
                            <li><a href="#">Manage Profile</a></li>
                            <li><a href="#" class="logout"><i class='bx bxs-user-circle'></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 no-padding">
                    <div class="akun-layer">
                        <div class="layer-title-inside">
                            <div class="back">
                                <a href="#"><i class='bx bx-arrow-back'></i></a>
                            </div>
                            <h1>Detail Request Kos Owner</h1>
                        </div>
                        <div class="layer-detail">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 no-padding">
                                    <div class="owner-detail-img">
                                        <img src="{{ asset('assets/images/kos.png') }}" alt="Foto Cover Kos">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                    <div class="owner-detail-text">
                                        <ul>
                                            {{-- Nama User --}}
                                            <li>Nama : <strong>Leo leo</strong></li>
                                            {{-- Email User --}}
                                            <li>Email : <strong>leo@gmail.com</strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                    <div class="owner-detail-text">
                                        <ul>
                                            {{-- Phone User --}}
                                            <li>Phone : <strong>081246868369</strong></li>
                                            {{-- Kota User --}}
                                            <li>Kota : <strong>Jakarta</strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 no-padding">
                                    <button class="accept-btn">Accept Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection