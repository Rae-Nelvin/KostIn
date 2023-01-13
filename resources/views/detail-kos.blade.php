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
                        <div class="layer-title-inside">
                            <div class="back">
                                <a href="#"><i class='bx bx-arrow-back'></i></a>
                            </div>
                            <h1>Detail Kos</h1>
                        </div>
                        <div class="layer-detail">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 no-padding">
                                    <div class="kos-detail-img">
                                        <img src="{{ asset('assets/images/kos.png') }}" alt="Foto Cover Kos" class="w-100">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12">
                                    <div class="kos-detail-text">
                                        {{-- Nama dan Kategori Kos --}}
                                        <h1>9 Square VIP <span>(Campur)</span></h1>
                                        {{-- Harga Kos --}}
                                        <h2>Rp 2,000,000</h2>
                                        <div class="fasilitas-icon">
                                            {{-- Forloop Fasilitas Kos --}}
                                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                            <div><i class='bx bxs-washer'></i><span>Laundry</span></div>
                                            <div><i class='bx bx-wind' ></i><span>Air Conditioner</span></div>
                                            <div><i class='bx bx-cabinet'></i><span>Lemari</span></div>
                                            <div><i class='bx bxs-dock-bottom'></i><span>Meja</span></div>
                                            <div><i class='bx bx-chair' ></i><span>Kursi</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 no-padding">
                                    <div class="kos-detail-kamar-text">
                                        {{-- Ukuran Kamar Kos (Panjang X Lebar) --}}
                                        <div>Ukuran Kamar Kos : <span>3 X 4</span></div>
                                        {{-- Jumlah Kamar Kos --}}
                                        <div>Jumlah Kamar Kos : <span>3</span></div>
                                        {{-- Jumlah Penghuni Kos --}}
                                        <div>Jumlah Penghuni Kos : <span>10</span></div>
                                    </div>
                                    <div class="kos-detail-text">
                                        <strong>Alamat Kos :</strong>
                                        {{-- Detail Alamat Kos (termasuk kecamatan dan kota) --}}
                                        <p>
                                            Jl. Tj. Duren Utara 7/7 No.561, Tj. Duren Utara, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470
                                        </p>
                                        <strong>Deskripsi Kos :</strong>
                                        {{-- Detail Kos --}}
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. A sint fugit quos porro repellat veritatis et velit, in laborum quis obcaecati, libero neque commodi modi sed iure expedita harum ex earum eaque nostrum eum. Voluptas consequuntur, doloremque saepe sit excepturi eveniet facere animi harum debitis, architecto fuga eligendi incidunt beatae! Assumenda esse aspernatur est sequi pariatur autem id nisi dicta explicabo totam, sunt quis maiores in laboriosam rerum ipsam corrupti voluptatibus aliquid ex necessitatibus! Possimus atque numquam nulla quo dolorem explicabo et non iste error deserunt vitae, in quis asperiores illum beatae blanditiis odit eos saepe nostrum! Quis, recusandae? Temporibus?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
