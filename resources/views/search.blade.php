@extends('layouts.templateHalfBlue')

@section('title', 'KostIn - Penyedia Kos Mahasiswa')

@section('cssPage')
    <link rel="stylesheet" href={{ asset('assets/css/search.css') }}>
@endsection

@section('headContent')
    <section class="bg-banner">
        <div class="container">
            <div class="row">
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
    <section class="bg-kos-search">
        <div class="container">
            {{-- Forloop hasil search --}}
            <div class="kos-search-card">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="kos-search-img">
                            {{-- Image Kos --}}
                            <img src="{{ asset('assets/images/kos.png') }}" alt="Kos" class="w-100">
                            <div class="kos-search-category">
                                {{-- Kategori Kos --}}
                                <span>Putri</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="kos-search-desc">
                            <div class="desc-title">
                                <div>
                                    {{-- Nama Kos --}}
                                    <h2>Kos 5 Star Tanjung Duren</h2>
                                    {{-- Kecamatan dan Kota Kos --}}
                                    <p>Tegal Parang, Jakarta Selatan</p>
                                </div>
                                <div class="icon">
                                    {{-- Untuk fitur wishlist trakhir aj kalo sempat --}}
                                    <i class='bx bx-heart'></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-search-icon">
                                        {{-- Forloop Fasilitas Kos --}}
                                        <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                        <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                        <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                        <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                        <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                        <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-search-price">
                                        {{-- Harga Kos --}}
                                        <div class="price">Rp. 1,600,000</div>
                                        <span>/ bulan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- End Forloop (hr kena loop buat ngasi batas) --}}
            <div class="kos-search-card">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="kos-search-img">
                            {{-- Image Kos --}}
                            <img src="{{ asset('assets/images/kos.png') }}" alt="Kos" class="w-100">
                            <div class="kos-search-category">
                                {{-- Kategori Kos --}}
                                <span>Putri</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="kos-search-desc">
                            <div class="desc-title">
                                <div>
                                    {{-- Nama Kos --}}
                                    <h2>Kos 5 Star Tanjung Duren</h2>
                                    {{-- Kecamatan dan Kota Kos --}}
                                    <p>Tegal Parang, Jakarta Selatan</p>
                                </div>
                                <div class="icon">
                                    <i class='bx bx-heart'></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-search-icon">
                                        {{-- Forloop Fasilitas Kos --}}
                                        <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                        <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                        <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                        <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                        <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                        <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-search-price">
                                        {{-- Harga Kos --}}
                                        <div class="price">Rp. 1,600,000</div>
                                        <span>/ bulan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="kos-search-card">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="kos-search-img">
                            {{-- Image Kos --}}
                            <img src="{{ asset('assets/images/kos.png') }}" alt="Kos" class="w-100">
                            <div class="kos-search-category">
                                {{-- Kategori Kos --}}
                                <span>Putri</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="kos-search-desc">
                            <div class="desc-title">
                                <div>
                                    {{-- Nama Kos --}}
                                    <h2>Kos 5 Star Tanjung Duren</h2>
                                    {{-- Kecamatan dan Kota Kos --}}
                                    <p>Tegal Parang, Jakarta Selatan</p>
                                </div>
                                <div class="icon">
                                    <i class='bx bx-heart'></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-search-icon">
                                        {{-- Forloop Fasilitas Kos --}}
                                        <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                        <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                        <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                        <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                        <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                        <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-search-price">
                                        {{-- Harga Kos --}}
                                        <div class="price">Rp. 1,600,000</div>
                                        <span>/ bulan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="kos-search-card">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="kos-search-img">
                            {{-- Image Kos --}}
                            <img src="{{ asset('assets/images/kos.png') }}" alt="Kos" class="w-100">
                            <div class="kos-search-category">
                                {{-- Kategori Kos --}}
                                <span>Putri</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="kos-search-desc">
                            <div class="desc-title">
                                <div>
                                    {{-- Nama Kos --}}
                                    <h2>Kos 5 Star Tanjung Duren</h2>
                                    {{-- Kecamatan dan Kota Kos --}}
                                    <p>Tegal Parang, Jakarta Selatan</p>
                                </div>
                                <div class="icon">
                                    <i class='bx bx-heart'></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-search-icon">
                                        {{-- Forloop Fasilitas Kos --}}
                                        <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                        <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                        <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                        <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                        <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                        <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-search-price">
                                        {{-- Harga Kos --}}
                                        <div class="price">Rp. 1,600,000</div>
                                        <span>/ bulan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="kos-search-card">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="kos-search-img">
                            {{-- Image Kos --}}
                            <img src="{{ asset('assets/images/kos.png') }}" alt="Kos" class="w-100">
                            <div class="kos-search-category">
                                {{-- Kategori Kos --}}
                                <span>Putri</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="kos-search-desc">
                            <div class="desc-title">
                                <div>
                                    {{-- Nama Kos --}}
                                    <h2>Kos 5 Star Tanjung Duren</h2>
                                    {{-- Kecamatan dan Kota Kos --}}
                                    <p>Tegal Parang, Jakarta Selatan</p>
                                </div>
                                <div class="icon">
                                    <i class='bx bx-heart'></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-search-icon">
                                        {{-- Forloop Fasilitas Kos --}}
                                        <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                        <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                        <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                        <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                        <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                        <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-search-price">
                                        {{-- Harga Kos --}}
                                        <div class="price">Rp. 1,600,000</div>
                                        <span>/ bulan</span>
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
