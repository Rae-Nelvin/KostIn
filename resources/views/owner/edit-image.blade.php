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
                                <a href="#"><i class='bx bx-arrow-back'></i></a>
                            </div>
                            <h1>Edit Image</h1>
                        </div>
                        <div class="layer-detail">
                            <form action="/owner/image-kost/add" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="kost_id" value="{{ $album->kost_id }}">
                                <input type="hidden" name="album_id" value="{{ $album->id }}">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 no-padding">
                                        <label for="form-image">Add Image</label>
                                        <input type="file" id="form-image" name="image">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 no-padding">
                                        <button class="accept-btn">Add Image</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="layer-image">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 no-padding">
                                    <h2 align="center">Current Image</h2>
                                </div>
                                @if ($pictures->count() == 0)
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <h2 align="center">There are no images yet!</h2>
                                    </div>
                                @else
                                    @foreach ($pictures as $picture)
                                        <div class="col-xl-4 col-lg-4 col-md-12">
                                            <img src="{{ asset('storage/' . $picture->path) }}" class="w-100">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
