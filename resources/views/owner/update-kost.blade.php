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
                            <h1>Edit Kos</h1>
                        </div>
                        <div class="layer-form">
                            <form action="/owner/update-kost" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-nama">Nama Kos</label>
                                        <input type="text" placeholder="Nama Kos ..." id="form-nama" name="name" value="{{ $kost->name }}">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-jenis">Jenis Kos</label>
                                        <select name="tipe_kost" id="form-jenis">
                                            <option value="{{ $kost->detail->tipe_kost }}" selected>{{ $kost->detail->tipe_kost }}</option>
                                            <option value="Campur">Campur</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-panjang">Ukuran Kamar (dalam Meter X Meter)</label>
                                        <input type="text" placeholder="Contoh : 4 x 5 M" id="form-panjang" name="ukuran_kamar" value="{{ $kost->detail->ukuran_kamar }}">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kamar">Kamar Kost</label>
                                        <input type="number" placeholder="Jumlah Kamar Kost ..." id="form-harga" name="jumlah_kamar" min="1" value="{{ $kost->detail->jumlah_kamar }}">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-penghuni">Penghuni Sekarang</label>
                                        <input type="number" placeholder="Jumlah Penghuni Sekarang ..." id="form-harga" name="jumlah_penghuni" value="{{ $kost->detail->jumlah_penghuni }}">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-harga">Harga Kos Bulanan</label>
                                        <input type="number" placeholder="Harga Kos Bulanan ..." id="form-harga" name="price" min="1000" value="{{ $kost->price }}">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-cover">Foto Cover Kos</label>
                                        <input type="file" id="form-cover" name="image" value="{{ $kost->detail->cover->path }}">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-date">Jatuh Tempo</label>
                                        <input type="text" placeholder="Contoh : Tanggal 5 " id="form-harga" name="jatuh_tempo" value="{{ $kost->detail->jatuh_tempo }}">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <h3>Fasilitas</h3>
                                        <div class="fasilitas-container">
                                            @foreach ($facilities as $facility)
                                                <div class="checkbox-card">
                                                    <input type="checkbox" id="check-kasur" name="facility_id[]" value="{{ $facility->id }}">
                                                    <label for="check-kasur">{!! $facility->logo !!}<span>{{ $facility->name }}</span></label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <label for="form-detail-kos">Detail Kos</label>
                                        <input type="hidden" name="description" value="{{ $kost->detail->description }}">
                                        <textarea name="description" id="form-detail-kos" placeholder="Detail Kos ...">{{ $kost->detail->description }}</textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <h2>Address Data</h2>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kecamatan">Kecamatan</label>
                                        <input type="text" placeholder="Kecamatan ..." id="form-kecamatan" name="kecamatan" value="{{ $kost->detail->alamat->kecamatan }}">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kabupaten">Kabupaten</label>
                                        <input type="text" placeholder="Kabupaten ..." id="form-kecamatan" name="kabupaten" value="{{ $kost->detail->alamat->kabupaten }}">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-provinsi">Provinsi</label>
                                        <select name="provinsi_id" id="form-provinsi">
                                            <option value="{{ $kost->detail->alamat->provinsi->id }}">{{ $kost->detail->alamat->provinsi->name }}</option>
                                            @foreach ($provinces as $provinsi)
                                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kode-pos">Kode Pos</label>
                                        <input type="number" placeholder="Kode Pos ..." id="form-kode-pos" name="kode_pos" value="{{ $kost->detail->alamat->kode_pos }}">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <label for="form-detail-alamat">Detail Alamat</label>
                                        <input type="hidden" name="alamat" value="{{ $kost->detail->alamat->alamat }}">
                                        <textarea name="alamat" id="form-detail-alamat" placeholder="Detail Alamat ...">{{ $kost->detail->alamat->alamat }}</textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <div class="form-button">
                                            <button>Ubah Kos</button>
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
