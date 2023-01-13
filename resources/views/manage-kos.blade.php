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
                            <li><a href="#">Manage Kos</a></li>
                            <li><a href="#">Manage Transaksi</a></li>
                            <li><a href="#">Manage Profile</a></li>
                            <li><a href="#" class="logout"><i class='bx bxs-user-circle'></i> Logout</a></li>

                            {{-- Untuk Admin --}}
                            {{--                            <li><a href="#">Manage Request Owner</a></li>--}}
                            {{--                            <li><a href="#">Manage Request Kos</a></li>--}}
                            {{--                            <li><a href="#">Manage Kos</a></li>--}}
                            {{--                            <li><a href="#">Manage Transaksi</a></li>--}}
                            {{--                            <li><a href="#">Manage User</a></li>--}}
                            {{--                            <li><a href="#">Manage Profile</a></li>--}}
                            {{--                            <li><a href="#" class="logout"><i class='bx bxs-user-circle'></i> Logout</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 no-padding">
                    <div class="akun-layer">
                        <div class="layer-title">
                            <h1>Manage Kos</h1>
                            {{-- If admin, tombol ga ditampilin --}}
                            <button>Tambah Kos</button>
                        </div>
                        <table id="datatables">
                            <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Kos</td>
                                <td>Verified</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
{{--                                    <button class="default-btn">Detail</button>--}}
{{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>9 Square VIP Residence</td>
                                <td>Verified</td>
                                <td>
                                    {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                    {{--                                    <button class="default-btn">Detail</button>--}}
                                    {{--                                    <button class="default-btn">Delete</button>--}}

                                    {{-- Untuk User tampil semua --}}
                                    <button class="default-btn">Edit Image</button>
                                    <button class="default-btn">Edit Data</button>
                                    <button class="default-btn">Detail</button>
                                    <button class="default-btn">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $('#datatables').DataTable();
        });
    </script>
@endsection
