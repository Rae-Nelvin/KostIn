@extends('layouts.templateFullBlue')

@section('title', 'KostIn - Penyedia Kos Mahasiswa')

@section('cssPage')
    <link rel="stylesheet" href={{ asset('assets/css/akun.css') }}>
@endsection

@section('content')
    <section class="bg-banner">
        <div class="container">
            <div class="row with-gap">
                <div class="col-xl-12 col-lg-12 col-md-12 no-padding">
                    <div class="akun-layer">
                        <div class="layer-title-inside">
                            <div class="back">
                                <a href="{{ route('login') }}"><i class='bx bx-arrow-back'></i></a>
                            </div>
                            <h1>Register</h1>
                        </div>
                        <div class="layer-form">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <h2>User Data</h2>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-email">Email</label>
                                        <input type="email" placeholder="Email ..." id="form-email" name="email">
                                        {{-- Error Message --}}
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-password">Password</label>
                                        <input type="password" placeholder="Password ..." id="form-password"
                                            name="password">
                                        {{-- Error Message --}}
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <h2>Personal Data</h2>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-name">Name</label>
                                        {{-- Nama Akun, isi value kalau udh ada data --}}
                                        <input type="text" placeholder="Name ..." id="form-name"
                                            name="name">
                                        {{-- Error Message --}}
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-phone">Phone</label>
                                        {{-- Phone Akun, isi value kalau udh ada data --}}
                                        <input type="text" placeholder="Phone ..." id="form-phone" name="phone">
                                        {{-- Error Message --}}
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kecamatan">Kecamatan</label>
                                        {{-- Kecamatan Akun, isi value kalau udh ada data --}}
                                        <input type="text" placeholder="Kecamatan ..." id="form-kecamatan"
                                            name="kecamatan">
                                        {{-- Error Message --}}
                                        @error('kecamatan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kabupaten">Kabupaten</label>
                                        <select name="kabupaten_id" id="form-kabupaten">
                                            @foreach ($kabupatens as $kabupaten)
                                                <option value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('kabupaten_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-provinsi">Provinsi</label>
                                        <select name="provinsi" id="form-provinsi">
                                            <option value="DKI Jakarta">DKI Jakarta</option>
                                            <option value="Jawa Barat">Jawa Barat</option>
                                            <option value="Jawa Tengah">Jawa Tengah</option>
                                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                                            <option value="Jawa Timur">Jawa Timur</option>
                                        </select>
                                        @error('provinsi')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kode-pos">Kode Pos</label>
                                        {{-- Kode Pos Akun, isi value kalau udh ada data --}}
                                        <input type="number" placeholder="Kode Pos ..." id="form-kode-pos" name="kode_pos">
                                        {{-- Error Message --}}
                                        @error('kode_pos')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <label for="form-detail-alamat">Detail Alamat</label>
                                        {{-- Detail Alamat Akun, isi value kalau udh ada data --}}
                                        <textarea name="alamat" id="form-detail-alamat" placeholder="Detail Alamat ..."></textarea>
                                        {{-- Error Message --}}
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <div class="form-button">
                                            <button>Register</button>
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
