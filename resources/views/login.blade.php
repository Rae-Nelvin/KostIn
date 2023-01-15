@extends('layouts.templateFullBlue')

@section('title', 'KostIn - Penyedia Kos Mahasiswa')

@section('cssPage')
    <link rel="stylesheet" href={{ asset('assets/css/login.css') }}>
@endsection

@section('content')
    <section class="bg-banner">
        <div class="login-card">
            <div class="login-img">
                <img src="{{ asset('assets/images/login.png') }}" alt="Login">
            </div>
            <div class="login-form">
                <h1>Login</h1>
                {{-- Form Login --}}
                <form action="" method="">
                    {{-- Sementara error message ga ush dlu kayanya --}}
                    <input type="email" name="email" id="email" placeholder="Email ...">
                    {{-- Error Message --}}
                    <span class="text-danger">Ini error message</span>
                    <input type="password" name="password" id="password" placeholder="Password ...">
                    {{-- Error Message --}}
                    <span class="text-danger">Ini error message</span>
                    <button>Sign In</button>
                </form>
                <div class="login-addition">
                    <span>Belum punya akun?</span>
                    <a href="#">Register</a>
                </div>
            </div>
        </div>
    </section>
@endsection
