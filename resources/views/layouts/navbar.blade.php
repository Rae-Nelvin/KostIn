<header>
    <div class="container">
        <nav>
            <div class="logo">
                <span>KostIn</span>
            </div>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/area">Area</a></li>
                <li><a href="/kampus">Kampus</a></li>
                <li><a href="/about">Tentang Kami</a></li>
            </ul>
            @auth
                <!-- With Login -->
                @if (Auth::user()->role_id == 1)
                    <div class="btn-akun">
                        <a href="{{ route('admin.dashboard') }}"><i class='bx bxs-user-circle'></i></a>
                    </div>
                @elseif (Auth::user()->role_id == 2)
                    <div class="btn-akun">
                        <a href="{{ route('owner.dashboard') }}"><i class='bx bxs-user-circle'></i></a>
                    </div>
                @else
                    <div class="btn-akun">
                        <a href="{{ route('user.dashboard') }}"><i class='bx bxs-user-circle'></i></a>
                    </div>
                @endif
            @else
                <!-- Without Login -->
                <div class="btn-header">
                    <a href="{{ route('login') }}">Masuk</a>
                </div>
            @endauth
        </nav>
    </div>
</header>
