{{--Ini catetan buat nambahin modal--}}
{{--Modalnya pake library--}}
{{--Link Dokumentasi : https://micromodal.vercel.app/--}}

{{--Contoh Penggunaan--}}

{{--Ga Berubah--}}
@extends('layouts.templateFullBlue')

{{--Ga Berubah--}}
@section('title', 'KostIn - Penyedia Kos Mahasiswa')

{{--  Ga Berubah  --}}
@section('cssPage')
@endsection

{{--  Ga Berubah  --}}
@section('additionalExtention')
@endsection

{{--  Isi button buat trigger modalnya  --}}
@section('content')
    <button data-micromodal-trigger="modal-1">Ini Button Buka Modal</button>
@endsection

{{--  Ini section buat nambahin tambahan script  --}}
{{--  Kalo mau pake modal, masukin modalnya disini  --}}
@section('additionalScript')
<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header">
                <h2 class="modal__title" id="modal-1-title">
                    {{-- Judul Modal --}}
                    Micromodal
                </h2>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="modal-1-content">
                {{-- Isi Modal --}}
                <p>
                    Try hitting the <code>tab</code> key and notice how the focus stays within the modal itself. Also, <code>esc</code> to close modal.
                </p>
            </main>
            {{-- Footer Modal (Buat Button) --}}
            <footer class="modal__footer">
                <button class="modal__btn modal__btn-primary">Continue</button>
                <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
            </footer>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js"></script>
<script>
    MicroModal.init();
</script>
@endsection
