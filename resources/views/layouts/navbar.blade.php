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
                <!-- <div class="btn-akun">
                    <a href="#"><i class='bx bxs-user-circle'></i></a>
                </div> -->
            @else
                <!-- Without Login -->
                <div class="btn-header">
                    <a href="{{ route('login') }}">Masuk</a>
                </div>
            @endauth
        </nav>
    </div>
</header>
