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
                <h1>Register</h1>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Nama ...">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="email" name="email" id="email" placeholder="Email ...">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="password" name="password" id="password" placeholder="Password ...">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <button>Sign Up</button>
                </form>
                <div class="login-addition">
                    <a href="{{ route('login') }}">Sudah punya account? Silahkan Login</a>
                </div>
            </div>
        </div>
    </section>
@endsection
