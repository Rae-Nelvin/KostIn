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
                        <form action="{{ route('search') }}" method="POST">
                            @csrf
                            <div>
                                <label for="name">Nama Kos</label>
                                <input type="text" placeholder="Nama Kos" id="name" name="name">
                            </div>
                            <div>
                                {{-- Cek nama kota --}}
                                <label for="area">Area</label>
                                <input type="text" placeholder="Area" id="area" name="kabupaten">
                            </div>
                            <div>
                                <label for="minPrice">Harga</label>
                                <div class="harga">
                                    <input type="number" placeholder="Minimal" id="minPrice" name="minimum_price">
                                    <input type="number" placeholder="Maksimal" id="maxPrice" name="maximum_price">
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
            @foreach ($result as $kost)
                <div class="kos-search-card">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="kos-search-img">
                                {{-- Image Kos --}}
                                <img src="{{ asset('storage/' . $kost->detail->cover->path) }}" alt="{{ $kost->name }}"
                                    class="w-100">
                                <div class="kos-search-category">
                                    {{-- Kategori Kos --}}
                                    <span>{{ $kost->detail->tipe_kost }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12">
                            <div class="kos-search-desc">
                                <div class="desc-title">
                                    <div>
                                        {{-- Nama Kos --}}
                                        <h2><a href="{{ route('kost-detail', $kost->id) }}">{{ $kost->name }}</a></h2>
                                        {{-- Kecamatan dan Kota Kos --}}
                                        <p>{{ $kost->detail->alamat->kecamatan }},
                                            {{ $kost->detail->alamat->kabupaten->name }}</p>
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
                                            @foreach ($kost->facilities as $facility)
                                                <div>{!! $facility->facility->logo !!}<span>{{ $facility->facility->name }}</span></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 no-padding">
                                        <div class="kos-search-price">
                                            {{-- Harga Kos --}}
                                            <div class="price">Rp. {{ $kost->price }}</div>
                                            <span>/ bulan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
            {{-- End Forloop (hr kena loop buat ngasi batas) --}}
        </div>
    </section>
@endsection
