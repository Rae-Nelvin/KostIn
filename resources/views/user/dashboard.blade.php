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
                        <div class="layer-title">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="layer-owner">
                            <i class='bx bx-building-house'></i>
                            <div>
                                <h2>Punya <b>Kos</b> yang ingin dipasarkan?</h2>
                                <a href="{{ route('user.become-owner') }}">Daftar Jadi Kos Owner</a>
                            </div>
                        </div>
                        <div class="layer-fav">
                            <h2>Favorite Kos</h2>
                            <table id="datatables">
                                <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Kos</td>
                                    <td>Kota</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('additionalScript')
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
    </script>
@endsection
