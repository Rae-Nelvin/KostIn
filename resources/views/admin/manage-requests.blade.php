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
                            <h1>Manage Request Kos Owner</h1>
                        </div>
                        <table id="datatables">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama User</td>
                                    <td>Kota</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($requests->count() == 0)
                                    <td colspan="5">There is no new requests</td>
                                @else
                                    <tr>
                                        @foreach ($requests as $request)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $request->user->name }}</td>
                                            <td>{{ $request->user->alamat->provinsi->name }}</td>
                                            <td>
                                                <a href="{{ route('admin.request-detail', $request->id ) }}"><button class="default-btn">Detail</button></a>
                                                <a href="{{ route('admin.accept-request', $request->id ) }}"><button class="true-btn">Accept Request</button></a>
                                            </td>
                                        @endforeach
                                    </tr>
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
