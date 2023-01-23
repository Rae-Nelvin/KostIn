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
                                <a href="{{ route('admin.manage-kosts') }}"><i class='bx bx-arrow-back'></i></a>
                            </div>
                            <h1>Detail Kos</h1>
                        </div>
                        <div class="layer-detail">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 no-padding">
                                    <div class="kos-detail-img">
                                        <img src="{{ asset('storage/' . $kost->detail->cover->path ) }}" alt="{{ $kost->name }}" class="w-100">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12">
                                    <div class="kos-detail-text">
                                        {{-- Nama dan Kategori Kos --}}
                                        <h1>{{ $kost->name }} <span>({{ $kost->detail->tipe_kost }})</span></h1>
                                        {{-- Harga Kos --}}
                                        <h2>Rp {{ $kost->price }}</h2>
                                        <div class="fasilitas-icon">
                                            {{-- Forloop Fasilitas Kos --}}
                                            @foreach ($kost->facilities as $facility)
                                            <div>{!! $facility->facility->logo !!}<span>{{ $facility->facility->name }}</span></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 no-padding">
                                    <div class="kos-detail-kamar-text">
                                        {{-- Ukuran Kamar Kos (Panjang X Lebar) --}}
                                        <div>Ukuran Kamar Kos : <span>{{ $kost->detail->ukuran_kamar }}</span></div>
                                        {{-- Jumlah Kamar Kos --}}
                                        <div>Jumlah Kamar Kos : <span>{{ $kost->detail->jumlah_kamar }}</span></div>
                                        {{-- Jumlah Penghuni Kos --}}
                                        <div>Jumlah Penghuni Kos : <span>{{ $kost->detail->jumlah_penghuni }}</span></div>
                                    </div>
                                    <div class="kos-detail-text">
                                        <strong>Alamat Kos :</strong>
                                        {{-- Detail Alamat Kos (termasuk kecamatan dan kota) --}}
                                        <p>
                                            {{ $kost->detail->alamat->alamat }}
                                        </p>
                                        <strong>Deskripsi Kos :</strong>
                                        {{-- Detail Kos --}}
                                        <p>
                                            {{ $kost->detail->description }}
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
