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
                        <img src="{{ asset('assets/images/kos.png') }}" alt="Kos" class="w-100">
                        <div class="detail-category">
                            {{-- Kategori Kos --}}
                            <span>Putri</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="detail-head">
                        <div class="detail-title">
                            <div>
                                {{-- Nama Kos --}}
                                <h1>Kos 5 Star Tanjung Duren</h1>
                                {{-- Kecamatan dan Kota Kos --}}
                                <p>Tegal Parang, Jakarta Selatan</p>
                            </div>
                            <div class="icon">
                                <i class='bx bx-heart'></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail-price">
                        {{-- Harga Kos --}}
                        <div class="price">Rp. 1,600,000</div>
                        <span>/ bulan</span>
                    </div>
                    {{-- Transaction akan bertambah hanya jika user login --}}
                    {{-- Selama user udh login dan udh isi semua data diri, abis klik ajukan sewa, transaction langsung bertambah, tanpa ada form lanjutan --}}
                    <form action="" method="">
                        <div class="row" style="gap: 1rem;">
                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                <label for="tanggal">Tanggal Mulai</label>
                                <input type="date" placeholder="Tanggal Mulai" id="tanggal" name="tanggalMulai">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                <label for="lama">Lama Sewa</label>
                                <select name="lamaSewa" id="lama">
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
                        <div class="carousel-cell">
                            <img src="assets/images/datailKos/detail1.png" alt="Detail" class="w-100">
                        </div>
                        <div class="carousel-cell">
                            <img src="assets/images/datailKos/detail2.png" alt="Detail" class="w-100">
                        </div>
                        <div class="carousel-cell">
                            <img src="assets/images/datailKos/detail3.png" alt="Detail" class="w-100">
                        </div>
                        <div class="carousel-cell">
                            <img src="assets/images/datailKos/detail4.png" alt="Detail" class="w-100">
                        </div>
                        <div class="carousel-cell">
                            <img src="assets/images/datailKos/detail5.png" alt="Detail" class="w-100">
                        </div>
                        <div class="carousel-cell">
                            <img src="assets/images/datailKos/detail6.png" alt="Detail" class="w-100">
                        </div>
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
                        <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                        <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                        <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                        <div><i class='bx bxs-washer'></i><span>Laundry</span></div>
                        <div><i class='bx bx-wind' ></i><span>Air Conditioner</span></div>
                        <div><i class='bx bx-cabinet'></i><span>Lemari</span></div>
                        <div><i class='bx bxs-dock-bottom'></i><span>Meja</span></div>
                        <div><i class='bx bx-chair' ></i><span>Kursi</span></div>
                        <div><i class='bx bxs-parking' ></i><span>Lahan Parkir</span></div>
                        <div><i class='bx bx-fridge'></i><span>Dapur</span></div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12">
                    <div class="ukuran-kamar">
                        <img src="{{ asset('assets/images/kamar.png') }}" alt="Ukuran Kamar">
                        <span>Ukuran Kamar</span>
                        {{-- Ukuran kamar kos --}}
                        <div>3 x 4</div>
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
                        Jl. Tj. Duren Utara 7/7 No.561, Tj. Duren Utara, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470
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
                        Kost Eksklusif Putri New 5 Star Tanjung Duren dengan Konsep Luxury Minimalis di Jalan Tj Duren 7 Grogol Petamburan.
                        Kost yang sangat strategis dekat dengan: *Halte busway Grogol 1 *Kampus Untar *Kampus Ukrida *Mall Citraland *RS Tarumanegara *Mall Central Park *Mall Taman Anggrek *Stasiun Grogol *Toll Gate Grogol.
                        Kost ini sangat cocok untuk Eksekutif muda Karyawati dan Mahasiswi yang mencari hunian berkualitas dengan harga terjangkau. Kost Baru selesai dibangun September 2021.
                    </p>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12">
                    <div class="pemilik-kos">
                        <img src="{{ asset('assets/images/pemilikKos.jpg') }}" alt="Pemilik Kos">
                        <div>
                            {{-- Nama Owner --}}
                            <h3>Bella</h3>
                            {{-- Phone Owner --}}
                            <span>0812-4686-8369</span>
                            {{-- Email Owner --}}
                            <span>bella.aja@gmail.com</span>
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
                <a class="col-xl-6 col-lg-6 col-md-12" href="#">
                    <div class="kos-card">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-img">
                                    {{-- Image Kos --}}
                                    <img src="{{ asset('assets/images/kos.png') }}" alt="Kos">
                                    <div class="blackdrop">
                                        {{-- Kategori Kos --}}
                                        <div class="kos-type">Campur</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-detail">
                                    {{-- Nama Kos --}}
                                    <h3>Kost Mampang Residence 94 Mampang Prapatan</h3>
                                    {{-- Kecamatan dan Kota Kos --}}
                                    <span>Tegal Parang, Jakarta Selatan</span>
                                    <div class="kos-icon">
                                        <i class='bx bx-bed' ></i><i class='bx bx-bath' ></i><i class='bx bxs-washer' ></i><i class='bx bx-wifi' ></i><span>6+</span>
                                    </div>
                                    {{-- Harga Kos --}}
                                    <span class="kos-price">Rp. 2,750,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="col-xl-6 col-lg-6 col-md-12" href="#">
                    <div class="kos-card">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-img">
                                    {{-- Image Kos --}}
                                    <img src="{{ asset('assets/images/kos.png') }}" alt="Kos">
                                    <div class="blackdrop">
                                        {{-- Kategori Kos --}}
                                        <div class="kos-type">Campur</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 no-padding">
                                <div class="kos-detail">
                                    {{-- Nama Kos --}}
                                    <h3>Kost Mampang Residence 94 Mampang Prapatan</h3>
                                    {{-- Kecamatan dan Kota Kos --}}
                                    <span>Tegal Parang, Jakarta Selatan</span>
                                    <div class="kos-icon">
                                        <i class='bx bx-bed' ></i><i class='bx bx-bath' ></i><i class='bx bxs-washer' ></i><i class='bx bx-wifi' ></i><span>6+</span>
                                    </div>
                                    {{-- Harga Kos --}}
                                    <span class="kos-price">Rp. 2,750,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
