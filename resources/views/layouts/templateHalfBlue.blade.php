<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Css Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('cssPage')
    <!-- Extention Link -->
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Micromodal -->
    <link rel="stylesheet" href="{{ asset('assets/css/micromodal.css') }}">
    @yield('additionalExtention')
</head>
<body>
    <div class="wrapper">
        <div class="blue-background">
            @include('layouts.navbar')
            @yield('headContent')
        </div>
        @yield('content')
        @include('layouts.footer')
    </div>
    @yield('additionalScript')
</body>
</html>
