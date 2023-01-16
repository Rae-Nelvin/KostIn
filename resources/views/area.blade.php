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
                @foreach ($kabupatensTop as $kabupaten)
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="area-card">
                            {{-- Image Kota --}}
                            <img src="{{ asset('storage/' . $kabupaten->picture->path) }}" alt="{{ $kabupaten->name }}"
                                class="w-100">
                            <div class="area-title">
                                {{-- Nama Kota --}}
                                <span>{{ $kabupaten->name }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                @foreach ($kabupatens as $kabupaten)
                    <a class="col-xl-3 col-lg-3 col-md-12" href="#">
                        <div class="area-card">
                            {{-- Image Kota --}}
                            <img src="{{ asset('storage/' . $kabupaten->picture->path ) }}" alt="{{ $kabupaten->name }}" class="w-100">
                            <div class="area-title">
                                {{-- Nama Kota --}}
                                <span>{{ $kabupaten->name }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
