@extends('layouts.templateHalfBlue')

@section('title', 'KostIn - Penyedia Kos Mahasiswa')

@section('cssPage')
    <link rel="stylesheet" href={{ asset('assets/css/homepage.css') }}>
@endsection

@section('headContent')
    <section class="bg-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="banner-text">
                        <h1>Cara Mudah Mencari Kos Yang Sesuai</h1>
                        <p>
                            Mencari kos menjadi lebih mudah dengan berbagai fitur penunjang untuk memudahkan dalam menyesuaikan dengan keinginan anda
                        </p>
                        <div class="banner-number">
                            <div><span>100+</span>Kos Terdaftar</div>
                            <div><span>1K+</span>Pengguna</div>
                            <div><span>10K+</span>Transaksi</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="banner-img">
                        <img src="{{ asset('assets/images/banner.png') }}" alt="Banner Image" class="w-100">
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="banner-search">
                        {{-- Form to search page --}}
                        <form action="" method="">
                            <div>
                                <label for="name">Nama Kos</label>
                                <input type="text" placeholder="Nama Kos" id="name" name="name">
                            </div>
                            <div>
                                {{-- Cek nama kota --}}
                                <label for="area">Area</label>
                                <input type="text" placeholder="Area" id="area" name="area">
                            </div>
                            <div>
                                <label for="minPrice">Harga</label>
                                <div class="harga">
                                    <input type="text" placeholder="Minimal" id="minPrice" name="minPrice">
                                    <input type="text" placeholder="Maksimal" id="maxPrice" name="maxPrice">
                                </div>
                            </div>
                            <div>
                                <button class="btn-cari"><i class='bx bx-search'></i>Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="bg-kos-populer">
        <div class="container">
            <h2>Kos Populer Sekitar Anda</h2>
            <div class="row">
                {{-- Forloop 4 top kos --}}
                <a class="col-xl-6 col-lg-6 col-md-12" href="#">
                    <div class="kos-card">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-img">
                                    {{-- Cover Kos --}}
                                    <img src="{{ asset('assets/images/kos.png') }}" alt="Kos">
                                    <div class="blackdrop">
                                        {{-- Kategori Kos --}}
                                        <div class="kos-type">Campur</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-detail">
                                    {{-- Nama Kos --}}
                                    <h3>Kost Mampang Residence 94 Mampang Prapatan</h3>
                                    {{-- Kecamatan dan Kota Kos --}}
                                    <span>Tegal Parang, Jakarta Selatan</span>
                                    <div class="kos-icon">
                                        {{-- Fasilitas Kos --}}
                                        <i class='bx bx-bed' ></i><i class='bx bx-bath' ></i><i class='bx bxs-washer' ></i><i class='bx bx-wifi' ></i><span>6+</span>
                                    </div>
                                    {{-- Harga Kos --}}
                                    <span class="kos-price">Rp. 2,750,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="kos-card">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-img">
                                    <img src="{{ asset('assets/images/kos.png') }}" alt="Kos">
                                    <div class="blackdrop">
                                        <div class="kos-type">Campur</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-detail">
                                    <h3>Kost Mampang Residence 94 Mampang Prapatan</h3>
                                    <span>Tegal Parang, Jakarta Selatan</span>
                                    <div class="kos-icon">
                                        <i class='bx bx-bed' ></i><i class='bx bx-bath' ></i><i class='bx bxs-washer' ></i><i class='bx bx-wifi' ></i><span>6+</span>
                                    </div>
                                    <span class="kos-price">Rp. 2,750,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="kos-card">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-img">
                                    <img src="{{ asset('assets/images/kos.png') }}" alt="Kos">
                                    <div class="blackdrop">
                                        <div class="kos-type">Campur</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-detail">
                                    <h3>Kost Mampang Residence 94 Mampang Prapatan</h3>
                                    <span>Tegal Parang, Jakarta Selatan</span>
                                    <div class="kos-icon">
                                        <i class='bx bx-bed' ></i><i class='bx bx-bath' ></i><i class='bx bxs-washer' ></i><i class='bx bx-wifi' ></i><span>6+</span>
                                    </div>
                                    <span class="kos-price">Rp. 2,750,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="kos-card">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-img">
                                    <img src="{{ asset('assets/images/kos.png') }}" alt="Kos">
                                    <div class="blackdrop">
                                        <div class="kos-type">Campur</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-detail">
                                    <h3>Kost Mampang Residence 94 Mampang Prapatan</h3>
                                    <span>Tegal Parang, Jakarta Selatan</span>
                                    <div class="kos-icon">
                                        <i class='bx bx-bed' ></i><i class='bx bx-bath' ></i><i class='bx bxs-washer' ></i><i class='bx bx-wifi' ></i><span>6+</span>
                                    </div>
                                    <span class="kos-price">Rp. 2,750,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <sction class="bg-area-populer">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="area-populer-img">
                        <img src="{{ asset('assets/images/map.png') }}" alt="Area Populer" class="w-100">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <h2>Area Kos Populer</h2>
                        </div>
                        {{-- Forloop 4 top area --}}
                        <a class="col-xl-6 col-lg-6 col-md-12" href="#">
                            <div class="area-populer-card">
                                {{-- Image Kota --}}
                                <img src="{{ asset('assets/images/Jakarta.png') }}" alt="Jakarta" class="w-100">
                                <span>Jakarta</span>
                            </div>
                        </a>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="area-populer-card">
                                <img src="{{ asset('assets/images/Yogyakarta.png') }}" alt="Yogyakarta" class="w-100">
                                <span>Yogyakarta</span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="area-populer-card">
                                <img src="{{ asset('assets/images/Surabaya.png') }}" alt="Surabaya" class="w-100">
                                <span>Surabaya</span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="area-populer-card">
                                <img src="{{ asset('assets/images/Bandung.png') }}" alt="Bandung" class="w-100">
                                <span>Bandung</span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            {{-- Link to search page --}}
                            <a href="#" class="btn-area-populer">Area Kos Lain</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </sction>
    <section class="bg-kos-kampus">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h2>Kos Sekitar Kampus</h2>
                </div>
                {{-- Forloop 6 top kampus --}}
                <a class="col-xl-4 col-lg-6 col-md-12" href="#">
                    <div class="kos-kampus-card">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                {{-- Image Kampus --}}
                                <img src="{{ asset('assets/images/UI.png') }}" alt="UI" class="w-100">
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="kos-kampus-text">
                                    {{-- Nama Kampus --}}
                                    <h3>UI</h3>
                                    {{-- Kota Kampus --}}
                                    <p>Jakarta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="kos-kampus-card">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <img src="assets/images/UB.png" alt="UB" class="w-100">
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="kos-kampus-text">
                                    <h3>UB</h3>
                                    <p>Malang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="kos-kampus-card">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <img src="assets/images/ITS.png" alt="ITS" class="w-100">
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="kos-kampus-text">
                                    <h3>ITS</h3>
                                    <p>Surabaya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="kos-kampus-card">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <img src="assets/images/UGM.png" alt="UGM" class="w-100">
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="kos-kampus-text">
                                    <h3>UGM</h3>
                                    <p>Yogyakarta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="kos-kampus-card">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <img src="assets/images/IPB.png" alt="IPB" class="w-100">
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="kos-kampus-text">
                                    <h3>IPB</h3>
                                    <p>Bogor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="kos-kampus-card">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <img src="assets/images/ITB.png" alt="ITB" class="w-100">
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="kos-kampus-text">
                                    <h3>ITB</h3>
                                    <p>Bandung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
