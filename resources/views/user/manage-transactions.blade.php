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
                            <h1>Manage Transaction</h1>
                        </div>
                        <table id="datatables">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Kos</td>
                                    <td>Tanggal Masuk</td>
                                    <td>Lama Sewa</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($transactions->count() == 0)
                                    <td colspan="5">There are no transactions yet</td>
                                @else
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaction->kost->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($transaction->mulai_stay)->format('j F Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($transaction->akhir_stay)->diffInMonths(\Carbon\Carbon::parse($transaction->mulai_stay)) }}
                                                Bulan</td>
                                            <td>{{ $transaction->status }}</td>
                                            <td>
                                                @if ($transaction->status == 'Unpaid')
                                                    <button class="default-btn" data-micromodal-trigger="modal-1">Payment</button>
                                                    <a href="{{ route('user.delete-transaction', $transaction->id ) }}"><button
                                                        class="default-btn">Delete</button></a>
                                                @endif
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
    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-1-title">
                        {{-- Judul Modal --}}
                        Upload Bukti Pembayaran
                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-1-content">
                    {{-- Isi Modal --}}
                    <form action="/user/pay-transaction" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="transaction_id"
                               value="{{ $transaction->id }}">
                        <input type="file" name="image">
                        <button class="true-btn">Bayar</button></a>
                    </form>
                </main>
                {{-- Footer Modal (Buat Button) --}}
{{--                <footer class="modal__footer">--}}
{{--                    <button class="modal__btn modal__btn-primary">Continue</button>--}}
{{--                    <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>--}}
{{--                </footer>--}}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js"></script>
    <script>
        MicroModal.init();
    </script>
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
    </script>
@endsection
