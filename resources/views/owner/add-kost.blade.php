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
                                <a href="{{ route('owner.dashboard') }}"><i class='bx bx-arrow-back'></i></a>
                            </div>
                            <h1>Tambah Kos</h1>
                        </div>
                        <div class="layer-form">
                            <form action="/owner/add-kost" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-nama">Nama Kos</label>
                                        <input type="text" placeholder="Nama Kos ..." id="form-nama" name="name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-jenis">Jenis Kos</label>
                                        <select name="tipe_kost" id="form-jenis">
                                            <option value="Campur">Campur</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        @error('tipe_kost')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-panjang">Ukuran Kamar (dalam Meter X Meter)</label>
                                        <input type="text" placeholder="Contoh : 4 x 5 M" id="form-panjang"
                                            name="ukuran_kamar">
                                        @error('ukuran_kamar')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kamar">Kamar Kost</label>
                                        <input type="number" placeholder="Jumlah Kamar Kost ..." id="form-harga"
                                            name="jumlah_kamar" min="1">
                                        @error('jumlah_kamar')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-penghuni">Penghuni Sekarang</label>
                                        <input type="number" placeholder="Jumlah Penghuni Sekarang ..." id="form-harga"
                                            name="jumlah_penghuni">
                                        @error('jumlah_penghuni')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-harga">Harga Kos Bulanan</label>
                                        <input type="number" placeholder="Harga Kos Bulanan ..." id="form-harga"
                                            name="price" min="1000">
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-cover">Foto Cover Kos</label>
                                        <input type="file" id="form-cover" name="image">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-date">Jatuh Tempo</label>
                                        <input type="text" placeholder="Contoh : Tanggal 5 " id="form-harga"
                                            name="jatuh_tempo">
                                        @error('jatuh_tempo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <h3>Fasilitas</h3>
                                        <div class="fasilitas-container">
                                            @foreach ($facilities as $facility)
                                                <div class="checkbox-card">
                                                    <input type="checkbox" id="check-kasur" name="facility_id[]"
                                                        value="{{ $facility->id }}">
                                                    <label
                                                        for="check-kasur">{!! $facility->logo !!}<span>{{ $facility->name }}</span></label>
                                                </div>
                                            @endforeach
                                        </div>
                                        @error('facility_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <label for="form-detail-kos">Detail Kos</label>
                                        <textarea name="description" id="form-detail-kos" placeholder="Detail Kos ..."></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <h2>Address Data</h2>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kecamatan">Kecamatan</label>
                                        <input type="text" placeholder="Kecamatan ..." id="form-kecamatan"
                                            name="kecamatan">
                                        @error('kecamatan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kabupaten">Kabupaten</label>
                                        <input type="text" placeholder="Kabupaten ..." id="form-kecamatan"
                                            name="kabupaten">
                                        @error('kabupaten')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-provinsi">Provinsi</label>
                                        <select name="provinsi_id" id="form-provinsi">
                                            @foreach ($provinces as $provinsi)
                                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('provinsi_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kode-pos">Kode Pos</label>
                                        <input type="number" placeholder="Kode Pos ..." id="form-kode-pos"
                                            name="kode_pos">
                                        @error('kode_pos')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <label for="form-detail-alamat">Detail Alamat</label>
                                        <textarea name="alamat" id="form-detail-alamat" placeholder="Detail Alamat ..."></textarea>
                                        @error('alamat')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <div class="form-button">
                                            <button>Tambah Kos</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
