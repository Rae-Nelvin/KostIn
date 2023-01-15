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
                                <a href="#"><i class='bx bx-arrow-back'></i></a>
                            </div>
                            <h1>Register</h1>
                        </div>
                        <div class="layer-form">
                            <form action="" method="">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <h2>User Data</h2>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-email">Email</label>
                                        <input type="email" placeholder="Email ..." id="form-email" name="form-email">
                                        {{-- Error Message --}}
                                        <span class="text-danger">Ini error message</span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-password">Password</label>
                                        <input type="password" placeholder="Passoword ..." id="form-password" name="form-password">
                                        {{-- Error Message --}}
                                        <span class="text-danger">Ini error message</span>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <h2>Personal Data</h2>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-name">Name</label>
                                        {{-- Nama Akun, isi value kalau udh ada data --}}
                                        <input type="text" placeholder="Name ..." value="Leo Leo" id="form-name" name="form-name">
                                        {{-- Error Message --}}
                                        <span class="text-danger">Ini error message</span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-phone">Phone</label>
                                        {{-- Phone Akun, isi value kalau udh ada data --}}
                                        <input type="text" placeholder="Phone ..." id="form-phone" name="form-phone">
                                        {{-- Error Message --}}
                                        <span class="text-danger">Ini error message</span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kecamatan">Kecamatan</label>
                                        {{-- Kecamatan Akun, isi value kalau udh ada data --}}
                                        <input type="text" placeholder="Kecamatan ..." id="form-kecamatan" name="form-kecamatan">
                                        {{-- Error Message --}}
                                        <span class="text-danger">Ini error message</span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kota">Kota</label>
                                        {{-- Kota Akun, isi value kalau udh ada data --}}
                                        <input type="text" placeholder="Kota ..." id="form-kota" name="form-kota">
                                        {{-- Error Message --}}
                                        <span class="text-danger">Ini error message</span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-provinsi">Provinsi</label>
                                        {{-- Provinsi Akun, pilih value kalau udh ada data --}}
                                        <select name="form-provinsi" id="form-provinsi">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                            <option value="Malang">Malang</option>
                                            <option value="Semarang">Semarang</option>
                                            <option value="Medan">Medan</option>
                                            <option value="Surabaya">Surabaya</option>
                                            <option value="Bandung">Bandung</option>
                                            <option value="Denpasar">Denpasar</option>
                                            <option value="Tangerang">Tangerang</option>
                                            <option value="Palembang">Palembang</option>
                                        </select>
                                        {{-- Error Message --}}
                                        <span class="text-danger">Ini error message</span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kode-pos">Kode Pos</label>
                                        {{-- Kode Pos Akun, isi value kalau udh ada data --}}
                                        <input type="text" placeholder="Kode Pos ..." id="form-kode-pos" name="form-kode-pos">
                                        {{-- Error Message --}}
                                        <span class="text-danger">Ini error message</span>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <label for="form-detail-alamat">Detail Alamat</label>
                                        {{-- Detail Alamat Akun, isi value kalau udh ada data --}}
                                        <textarea name="form-detail-alamat" id="form-detail-alamat" placeholder="Detail Alamat ..."></textarea>
                                        {{-- Error Message --}}
                                        <span class="text-danger">Ini error message</span>
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
