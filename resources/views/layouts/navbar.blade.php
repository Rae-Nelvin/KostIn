<header>
    <div class="container">
        <nav>
            <div class="logo">
                <span>KostIn</span>
            </div>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="#">Area</a></li>
                <li><a href="#">Kampus</a></li>
                <li><a href="#">Tentang Kami</a></li>
            </ul>
            @auth
                <!-- With Login -->
                <!-- <div class="btn-akun">
                    <a href="#"><i class='bx bxs-user-circle'></i></a>
                </div> -->
            @else
                <!-- Without Login -->
                <div class="btn-header">
                    <a href="{{ route('register') }}">Masuk</a>
                </div>
            @endauth
        </nav>
    </div>
</header>
