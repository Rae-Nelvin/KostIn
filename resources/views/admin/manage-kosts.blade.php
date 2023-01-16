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
                        <div class="layer-title">
                            <h1>Manage Kos</h1>
                            {{-- If admin, tombol ga ditampilin --}}
                            <button>Tambah Kos</button>
                        </div>
                        <table id="datatables">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Kos</td>
                                    <td>Verified</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($kosts->count() == 0)
                                    <td colspan="4">There are no Kosts yet</td>
                                @else
                                    @foreach ($kosts as $kost)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kost->name }}</td>
                                            @if ($kost->status == 0)
                                                <td>Not Verified</td>
                                            @elseif ($kost->status == 1)
                                                <td>Verified</td>
                                            @else
                                                <td>Declined</td>
                                            @endif
                                            <td>
                                                {{-- Buat If --}}
                                                {{-- Untuk Admin cuma bisa tampil Detail & Delete --}}
                                                {{-- Button verify cuma kalo masih pending --}}
                                                @if ($kost->status == 0)
                                                    <a href="{{ route('admin.accept-kost', $kost->id) }}"><button
                                                        class="true-btn">Verify</button></a>
                                                @endif
                                                <a href="{{ route('admin.detail-kost', $kost->id) }}"><button
                                                        class="default-btn">Detail</button></a>
                                                <a href="{{ route('admin.decline-kost', $kost->id) }}"><button
                                                        class="default-btn">Delete</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('additionalScript')
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
    </script>
@endsection
