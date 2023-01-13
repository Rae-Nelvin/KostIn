@extends('layouts.templateHalfBlue')

@section('title', 'KostIn - Penyedia Kos Mahasiswa')

@section('cssPage')
    <link rel="stylesheet" href={{ asset('assets/css/kampus.css') }}>
@endsection

@section('headContent')
    <section class="bg-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h1>Kampus Poluper</h1>
                </div>
                {{-- Forloop 2 top kampus --}}
                {{-- Link ke halaman search --}}
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="top-campus-card">
                        <div class="top-campus-img">
                            <img src="{{ asset('assets/images/ITB.png') }}" alt="ITB">
                        </div>
                        <div class="top-campus-desc">
                            {{-- Nama Kampus --}}
                            <h3>Institut Teknologi Bandung</h3>
                            {{-- Alamat Kampus --}}
                            <p>
                                Jl. Ganesa No.10, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132
                            </p>
                            {{-- Link ke halaman search --}}
                            <a href="#">Cek Kos Sekitar</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="top-campus-card">
                        <div class="top-campus-img">
                            <img src="{{ asset('assets/images/UNPAD.png') }}" alt="Unpad">
                        </div>
                        <div class="top-campus-desc">
                            <h3>Universitas Padjadjaran</h3>
                            <p>
                                Jl. Raya Bandung Sumedang KM.21, Hegarmanah, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363
                            </p>
                            <a href="#">Cek Kos Sekitar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="bg-other-kampus">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h2>Kampus Lain</h2>
                </div>
                {{-- Forloop kampus --}}
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
                                <img src="{{ asset('assets/images/UB.png') }}" alt="UB" class="w-100">
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
                                <img src="{{ asset('assets/images/ITS.png') }}" alt="ITS" class="w-100">
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
                                <img src="{{ asset('assets/images/UGM.png') }}" alt="UGM" class="w-100">
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
                                <img src="{{ asset('assets/images/IPB.png') }}" alt="IPB" class="w-100">
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
                                <img src="{{ asset('assets/images/ITB.png') }}" alt="ITB" class="w-100">
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
                {{-- Forloop kampus --}}
                <div class="col-xl-4 col-lg-6 col-md-12">
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
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="kos-kampus-card">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <img src="{{ asset('assets/images/UB.png') }}" alt="UB" class="w-100">
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
                                <img src="{{ asset('assets/images/ITS.png') }}" alt="ITS" class="w-100">
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
                                <img src="{{ asset('assets/images/UGM.png') }}" alt="UGM" class="w-100">
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
                                <img src="{{ asset('assets/images/IPB.png') }}" alt="IPB" class="w-100">
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
                                <img src="{{ asset('assets/images/ITB.png') }}" alt="ITB" class="w-100">
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
                {{-- Forloop kampus --}}
                <div class="col-xl-4 col-lg-6 col-md-12">
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
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="kos-kampus-card">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <img src="{{ asset('assets/images/UB.png') }}" alt="UB" class="w-100">
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
                                <img src="{{ asset('assets/images/ITS.png') }}" alt="ITS" class="w-100">
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
                                <img src="{{ asset('assets/images/UGM.png') }}" alt="UGM" class="w-100">
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
                                <img src="{{ asset('assets/images/IPB.png') }}" alt="IPB" class="w-100">
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
                                <img src="{{ asset('assets/images/ITB.png') }}" alt="ITB" class="w-100">
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
