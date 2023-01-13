@extends('layouts.templateHalfBlue')

@section('title', 'KostIn - Penyedia Kos Mahasiswa')

@section('cssPage')
    <link rel="stylesheet" href={{ asset('assets/css/area.css') }}>
@endsection

@section('headContent')
    <section class="bg-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h1>Area Kos Poluper</h1>
                </div>
                {{-- Forloop 4 top area / kota --}}
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        {{-- Image Kota --}}
                        <img src="{{ asset('assets/images/Jakarta.png') }}" alt="Jakarta" class="w-100">
                        <div class="area-title">
                            {{-- Nama Kota --}}
                            <span>Jakarta</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Yogyakarta.png') }}" alt="Yogyakarta" class="w-100">
                        <div class="area-title">
                            <span>Yogyakarta</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Surabaya.png') }}" alt="Surabaya" class="w-100">
                        <div class="area-title">
                            <span>Surabaya</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Bandung.png') }}" alt="Bandung" class="w-100">
                        <div class="area-title">
                            <span>Bandung</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="bg-other-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h2>Area Kos Lain</h2>
                </div>
                {{-- Forloop area / kota --}}
                {{-- Link ke halaman search --}}
                <a class="col-xl-3 col-lg-3 col-md-12" href="#">
                    <div class="area-card">
                        {{-- Image Kota --}}
                        <img src="{{ asset('assets/images/Jakarta.png') }}" alt="Jakarta" class="w-100">
                        <div class="area-title">
                            {{-- Nama Kota --}}
                            <span>Jakarta</span>
                        </div>
                    </div>
                </a>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Yogyakarta.png') }}" alt="Yogyakarta" class="w-100">
                        <div class="area-title">
                            <span>Yogyakarta</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Surabaya.png') }}" alt="Surabaya" class="w-100">
                        <div class="area-title">
                            <span>Surabaya</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Bandung.png') }}" alt="Bandung" class="w-100">
                        <div class="area-title">
                            <span>Bandung</span>
                        </div>
                    </div>
                </div>
                {{-- Forloop 4 top area / kota --}}
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        {{-- Image Kota --}}
                        <img src="{{ asset('assets/images/Jakarta.png') }}" alt="Jakarta" class="w-100">
                        <div class="area-title">
                            {{-- Nama Kota --}}
                            <span>Jakarta</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Yogyakarta.png') }}" alt="Yogyakarta" class="w-100">
                        <div class="area-title">
                            <span>Yogyakarta</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Surabaya.png') }}" alt="Surabaya" class="w-100">
                        <div class="area-title">
                            <span>Surabaya</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Bandung.png') }}" alt="Bandung" class="w-100">
                        <div class="area-title">
                            <span>Bandung</span>
                        </div>
                    </div>
                </div>
                {{-- Forloop 4 top area / kota --}}
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        {{-- Image Kota --}}
                        <img src="{{ asset('assets/images/Jakarta.png') }}" alt="Jakarta" class="w-100">
                        <div class="area-title">
                            {{-- Nama Kota --}}
                            <span>Jakarta</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Yogyakarta.png') }}" alt="Yogyakarta" class="w-100">
                        <div class="area-title">
                            <span>Yogyakarta</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Surabaya.png') }}" alt="Surabaya" class="w-100">
                        <div class="area-title">
                            <span>Surabaya</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Bandung.png') }}" alt="Bandung" class="w-100">
                        <div class="area-title">
                            <span>Bandung</span>
                        </div>
                    </div>
                </div>
                {{-- Forloop 4 top area / kota --}}
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        {{-- Image Kota --}}
                        <img src="{{ asset('assets/images/Jakarta.png') }}" alt="Jakarta" class="w-100">
                        <div class="area-title">
                            {{-- Nama Kota --}}
                            <span>Jakarta</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Yogyakarta.png') }}" alt="Yogyakarta" class="w-100">
                        <div class="area-title">
                            <span>Yogyakarta</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Surabaya.png') }}" alt="Surabaya" class="w-100">
                        <div class="area-title">
                            <span>Surabaya</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="area-card">
                        <img src="{{ asset('assets/images/Bandung.png') }}" alt="Bandung" class="w-100">
                        <div class="area-title">
                            <span>Bandung</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
