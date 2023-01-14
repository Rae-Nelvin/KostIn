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
                    <div class="akun-nav">
                        <ul>
                            {{-- Untuk User --}}
                            {{--                            <li><a href="#">Manage Profile</a></li>--}}
                            {{--                            <li><a href="#">Manage Transaksi</a></li>--}}
                            {{--                            <li><a href="#" class="kos-owner">Jadi Kos Owner</a></li>--}}
                            {{--                            <li><a href="#" class="logout"><i class='bx bxs-user-circle'></i> Logout</a></li>--}}

                            {{-- Request kos owner hanya bisa dikirim jika data diri lengkap --}}
                            {{-- Untuk pop up alert notif buat ngasi tau ap yang terjadi kayanya skip dlu, yang penting skema aplikasinya jalan dlu --}}

                            {{-- Untuk Owner --}}
                            <li><a href="#">Manage Kos</a></li>
                            <li><a href="#">Manage Transaksi</a></li>
                            <li><a href="#">Manage Profile</a></li>
                            <li><a href="#" class="logout"><i class='bx bxs-user-circle'></i> Logout</a></li>

                            {{-- Untuk Admin --}}
                            {{--                            <li><a href="#">Manage Request Owner</a></li>--}}
                            {{--                            <li><a href="#">Manage Request Kos</a></li>--}}
                            {{--                            <li><a href="#">Manage Kos</a></li>--}}
                            {{--                            <li><a href="#">Manage Transaksi</a></li>--}}
                            {{--                            <li><a href="#">Manage User</a></li>--}}
                            {{--                            <li><a href="#">Manage Profile</a></li>--}}
                            {{--                            <li><a href="#" class="logout"><i class='bx bxs-user-circle'></i> Logout</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 no-padding">
                    <div class="akun-layer">
                        <div class="layer-title-inside">
                            <div class="back">
                                <a href="#"><i class='bx bx-arrow-back'></i></a>
                            </div>
                            <h1>Edit Kos</h1>
                        </div>
                        <div class="layer-form">
                            <form action="" method="">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-nama">Nama Kos</label>
                                        <input type="text" placeholder="Nama Kos ..." id="form-nama" name="form-nama" value="9 Square VIP">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-jenis">Jenis Kos</label>
                                        <select name="form-jenis" id="form-jenis">
                                            <option value="Campur">Campur</option>
                                            <option value="Putra">Putra</option>
                                            <option value="Putri">Putri</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-panjang">Ukuran Panjang Kos (dalam Meter)</label>
                                        <input type="number" placeholder="Ukuran Panjang Kos ..." id="form-panjang" name="form-panjang" value="3">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-lebar">Ukuran Lebar Kos (dalam Meter)</label>
                                        <input type="number" placeholder="Ukuran Lebar Kos ..." id="form-lebar" name="form-lebar" value="4">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-harga">Harga Kos Bulanan</label>
                                        <input type="number" placeholder="Harga Kos Bulanan ..." id="form-harga" name="form-harga" value="2000000">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-cover">Foto Cover Kos</label>
                                        <input type="file" id="form-cover" name="form-cover">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <h3>Fasilitas</h3>
                                        <div class="fasilitas-container">
                                            <div class="checkbox-card">
                                                <input type="checkbox" checked id="check-kasur" name="check-kasur" value="<i class='bx bx-bed' ></i><span>Kasur</span>">
                                                <label for="check-kasur"><i class='bx bx-bed' ></i><span>Kasur</span></label>
                                            </div>
                                            <div class="checkbox-card">
                                                <input type="checkbox" checked id="check-km-dalam" name="check-km-dalam" value="<i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span>">
                                                <label for="check-km-dalam"><i class='bx bx-bath' ></i><span>KM Dalam</span></label>
                                            </div>
                                            <div class="checkbox-card">
                                                <input type="checkbox" id="check-km-luar" name="check-km-luar" value="<i class='bx bx-bath' ></i><span>Kamar Mandi Luar</span>">
                                                <label for="check-km-luar"><i class='bx bx-bath' ></i><span>KM Luar</span></label>
                                            </div>
                                            <div class="checkbox-card">
                                                <input type="checkbox" checked id="check-internet" name="check-internet" value="<i class='bx bx-wifi' ></i><span>Internet</span>">
                                                <label for="check-internet"><i class='bx bx-wifi' ></i><span>Internet</span></label>
                                            </div>
                                            <div class="checkbox-card">
                                                <input type="checkbox" id="check-laundry" name="check-laundry" value="<i class='bx bxs-washer'></i><span>Laundry</span>">
                                                <label for="check-laundry"><i class='bx bxs-washer'></i><span>Laundry</span></label>
                                            </div>
                                            <div class="checkbox-card">
                                                <input type="checkbox" checked id="check-ac" name="check-ac" value="<i class='bx bx-wind' ></i><span>Air Conditioner</span>">
                                                <label for="check-ac"><i class='bx bx-wind' ></i><span>AC</span></label>
                                            </div>
                                            <div class="checkbox-card">
                                                <input type="checkbox" checked id="check-lemari" name="check-lemari" value="<i class='bx bx-cabinet'></i><span>Lemari</span>">
                                                <label for="check-lemari"><i class='bx bx-cabinet'></i><span>Lemari</span></label>
                                            </div>
                                            <div class="checkbox-card">
                                                <input type="checkbox" id="check-meja" name="check-meja" value="<i class='bx bxs-dock-bottom'></i><span>Meja</span>">
                                                <label for="check-meja"><i class='bx bxs-dock-bottom'></i><span>Meja</span></label>
                                            </div>
                                            <div class="checkbox-card">
                                                <input type="checkbox" id="check-kursi" name="check-kursi" value="<i class='bx bx-chair' ></i><span>Kursi</span>">
                                                <label for="check-kursi"><i class='bx bx-chair' ></i><span>Kursi</span></label>
                                            </div>
                                            <div class="checkbox-card">
                                                <input type="checkbox" id="check-parkir" name="check-parkir" value="<i class='bx bxs-parking' ></i><span>Lahan Parkir</span>">
                                                <label for="check-parkir"><i class='bx bxs-parking' ></i><span>Lahan Parkir</span></label>
                                            </div>
                                            <div class="checkbox-card">
                                                <input type="checkbox" id="check-dapur" name="check-dapur" value="<i class='bx bx-fridge'></i><span>Dapur</span>">
                                                <label for="check-dapur"><i class='bx bx-fridge'></i><span>Dapur</span></label>
                                            </div>
                                            <div class="checkbox-card">
                                                <input type="checkbox" checked id="check-listrik" name="check-listrik" value="<i class='bx bxs-bolt-circle'></i><span>Listrik</span>">
                                                <label for="check-listrik"><i class='bx bxs-bolt-circle'></i><span>Listrik</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <label for="form-detail-kos">Detail Kos</label>
                                        <textarea name="form-detail-kos" id="form-detail-kos" placeholder="Detail Kos ...">La lalalalalala</textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <h2>Address Data</h2>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kecamatan">Kecamatan</label>
                                        <input type="text" placeholder="Kecamatan ..." id="form-kecamatan" name="form-kecamatan" value="Kebon Jeruk">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kota">Kota</label>
                                        <input type="text" placeholder="Kota ..." id="form-kota" name="form-kota" value="Jakarta Barat">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-provinsi">Provinsi</label>
                                        <select name="form-provinsi" id="form-provinsi">
                                            <option value="Jakarta" selected>Jakarta</option>
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
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="form-kode-pos">Kode Pos</label>
                                        <input type="text" placeholder="Kode Pos ..." id="form-kode-pos" name="form-kode-pos" value="80222">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <label for="form-detail-alamat">Detail Alamat</label>
                                        <textarea name="form-detail-alamat" id="form-detail-alamat" placeholder="Detail Alamat ...">kashgfkagsfkjgasfkjgasfkj</textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 no-padding">
                                        <div class="form-button">
                                            <button>Edit Kos</button>
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
