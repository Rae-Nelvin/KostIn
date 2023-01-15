<div class="akun-nav">
    <ul>
        {{-- Untuk User --}}
        @auth
            @if (Auth::user()->role_id == 1)
                {{-- Untuk Admin --}}
                <li><a href="#">Manage Request Owner</a></li>
                <li><a href="#">Manage Request Kos</a></li>
                <li><a href="#">Manage Kos</a></li>
                <li><a href="#">Manage Transaksi</a></li>
                <li><a href="#">Manage User</a></li>
            @elseif (Auth::user()->role_id == 2)
                {{-- Untuk Owner --}}
                <li><a href="{{ route('owner.dashboard') }}">Manage Kos</a></li>
                <li><a href="{{ route('owner.manage-transactions') }}">Manage Transaksi</a></li>
            @else
                <li><a href="#">Manage Transaksi</a></li>
                <li><a href="#" class="kos-owner">Jadi Kos Owner</a></li>
            @endif
            <li><a href="#">Manage Profile</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="logout">
                    @csrf
                    <button class="logout">
                        <i class='bx bxs-user-circle'></i> Logout
                    </button>
                </form>
            </li>
        @endauth

        {{-- Request kos owner hanya bisa dikirim jika data diri lengkap --}}
        {{-- Untuk pop up alert notif buat ngasi tau ap yang terjadi kayanya skip dlu, yang penting skema aplikasinya jalan dlu --}}

    </ul>
</div>
