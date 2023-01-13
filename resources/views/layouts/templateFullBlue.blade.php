<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Css Link -->
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/style.css">
    @yield('cssPage')
    <!-- Extention Link -->
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    @yield('additionalExtention')
</head>
<body>
    <div class="wrapper">
        <div class="blue-background">
            @include('layouts.navbar')
            @yield('content')
        </div>
    </div>
</body>
</html>
