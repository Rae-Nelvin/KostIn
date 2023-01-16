@extends('layouts.templateHalfBlue')

@section('title', 'KostIn - Penyedia Kos Mahasiswa')

@section('cssPage')
    <link rel="stylesheet" href={{ asset('assets/css/detail.css') }}>
@endsection

@section('additionalExtention')
    <!-- Flickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endsection

@section('headContent')
    <section class="bg-detail-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="detail-img">
                        {{-- Image Kos --}}
                        <img src="{{ asset('storage/' . $kost->detail->cover->path) }}" alt="{{ $kost->name }}"
                            class="w-100">
                        <div class="detail-category">
                            {{-- Kategori Kos --}}
                            <span>{{ $kost->detail->tipe_kost }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="detail-head">
                        <div class="detail-title">
                            <div>
                                {{-- Nama Kos --}}
                                <h1>{{ $kost->name }}</h1>
                                {{-- Kecamatan dan Kota Kos --}}
                                <p>{{ $kost->detail->alamat->kecamatan }}, {{ $kost->detail->alamat->kabupaten->name }}</p>
                            </div>
                            @auth
                                <div class="icon">
                                    <i class='bx bx-heart'></i>
                                </div>
                            @else
                                <a href="{{ route('register') }}">
                                    <div class="icon">
                                        <i class='bx bx-heart'></i>
                                    </div>
                                </a>
                            @endauth
                        </div>
                    </div>
                    <div class="detail-price">
                        {{-- Harga Kos --}}
                        <div class="price">Rp. {{ $kost->price }}</div>
                        <span>/ bulan</span>
                    </div>
                    {{-- Transaction akan bertambah hanya jika user login --}}
                    {{-- Selama user udh login dan udh isi semua data diri, abis klik ajukan sewa, transaction langsung bertambah, tanpa ada form lanjutan --}}
                    @auth
                        @if (Auth::user()->role_id == 3 && $kost->detail->jumlah_penghuni != $kost->detail->jumlah_kamar)
                            <form action="/user/store/kost" method="POST">
                                @csrf
                                <input type="hidden" name="kost_id" value="{{ $kost->id }}">
                                <div class="row" style="gap: 1rem;">
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="tanggal">Tanggal Mulai</label>
                                        <input type="date" placeholder="Tanggal Mulai" id="tanggal" name="mulai_stay">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="lama">Lama Sewa</label>
                                        <select name="lama_sewa" id="lama">
                                            <option value="1">1 Bulan</option>
                                            <option value="3">3 Bulan</option>
                                            <option value="6">6 Bulan</option>
                                            <option value="9">9 Bulan</option>
                                            <option value="12">12 Bulan</option>
                                        </select>
                                    </div>
                                </div>
                                <button>Ajukan Sewa</button>
                            </form>
                        @endif
                    @else
                        <a href="{{ route('login') }}"><button>Ajukan Sewa</button></a>
                    @endauth
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    {{-- If data kos punya album, display section ini --}}
    {{-- Implementasi section ini kayanya kalo cukup waktu aj, yang penting data utama kos kaya detail + cover aman --}}
    <section class="bg-img-carousel">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="main-carousel" data-flickity='{ "wrapAround": true, "pageDots": false }'>
                        {{-- Forloop album / image tambahan --}}
                        @foreach ($kost->album->pictures as $picture)
                            <div class="carousel-cell">
                                <img src="{{ asset('storage/' . $picture->path) }}" alt="{{ $kost->name }}"
                                    class="w-100">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-fasilitas">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-12">
                    <h2>Fasilitas</h2>
                    <div class="fasilitas-icon">
                        {{-- Forloop fasilitas kos --}}
                        @foreach ($kost->facilities as $facility)
                            <div>{!! $facility->facility->logo !!}<span>{{ $facility->facility->name }}</span></div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12">
                    <div class="ukuran-kamar">
                        <img src="{{ asset('assets/images/kamar.png') }}" alt="Ukuran Kamar">
                        <span>Ukuran Kamar</span>
                        {{-- Ukuran kamar kos --}}
                        <div>{{ $kost->detail->ukuran_kamar }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-lokasi">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <h2>Lokasi Kos</h2>
                    <p>
                        {{-- Detail alamat + kecamatan + kota kos --}}
                        {{ $kost->detail->alamat->alamat }}
                    </p>

                    {{-- Iframe kayanya ga bisa dibuat nyesuaiin data yang kita punya --}}
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7004517210116!2d106.7804403149724!3d-6.170848562190957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f65a77df90f9%3A0x92f75fa57964d5ac!2sJl.%20Tj.%20Duren%20Utara%20VII%20No.7%2C%20RT.11%2FRW.3%2C%20Tj.%20Duren%20Utara%2C%20Kec.%20Grogol%20petamburan%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011470!5e0!3m2!1sid!2sid!4v1652272862592!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="bg-deskripsi">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-12">
                    <h2>Keterangan Deskripsi Kos</h2>
                    <p>
                        {{-- Detail kos --}}
                        {{ $kost->detail->description }}
                    </p>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12">
                    <div class="pemilik-kos">
                        <i class='bx bxs-user-circle'></i>
                        <div>
                            {{-- Nama Owner --}}
                            <h3>{{ $kost->owner->name }}</h3>
                            {{-- Phone Owner --}}
                            <span>{{ $kost->owner->phone }}</span>
                            {{-- Email Owner --}}
                            <span>{{ $kost->owner->email }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-rekomendasi">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <h2>Rekomendasi Kos Serupa</h2>
                </div>
                {{-- Forloop top 2 kos --}}
                @foreach ($others as $other)
                    <a class="col-xl-6 col-lg-6 col-md-12" href="{{ route('kost-detail', $other->id) }}">
                        <div class="kos-card">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-img">
                                        {{-- Image Kos --}}
                                        <img src="{{ asset('storage/' . $other->detail->cover->path) }}"
                                            alt="{{ $other->name }}">
                                        <div class="blackdrop">
                                            {{-- Kategori Kos --}}
                                            <div class="kos-type">{{ $other->detail->tipe_kost }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-detail">
                                        {{-- Nama Kos --}}
                                        <h3>{{ $other->name }}</h3>
                                        {{-- Kecamatan dan Kota Kos --}}
                                        <span>{{ $other->detail->alamat->kecamatan }},
                                            {{ $other->detail->alamat->kabupaten->name }}</span>
                                        <div class="kos-icon">
                                            @foreach ($other->facilities as $facility)
                                                {!! $facility->facility->logo !!}
                                            @endforeach
                                        </div>
                                        {{-- Harga Kos --}}
                                        <span class="kos-price">Rp. {{ $other->price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
