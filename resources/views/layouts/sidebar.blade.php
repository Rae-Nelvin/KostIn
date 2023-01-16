<div class="akun-nav">
    <ul>
        {{-- Untuk User --}}
        @auth
            @if (Auth::user()->role_id == 1)
                {{-- Untuk Admin --}}
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.manage-requests') }}">Manage Request Owner</a></li>
                <li><a href="{{ route('admin.manage-kosts') }}">Manage Kos</a></li>
                <li><a href="{{ route('admin.manage-transactions') }}">Manage Transaksi</a></li>
                <li><a href="{{ route('admin.manage-users') }}">Manage User</a></li>
            @elseif (Auth::user()->role_id == 2)
                {{-- Untuk Owner --}}
                <li><a href="{{ route('owner.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('owner.manage-transactions') }}">Manage Transaksi</a></li>
                @else
                <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('user.manage-transactions') }}">Manage Transaksi</a></li>
            @endif
            <li><a href="{{ route('manage-profile') }}">Manage Profile</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="logout">
                    @csrf
                    <button class="logout">
                        <i class='bx bxs-user-circle'></i> Logout
                    </button>
                </form>
            </li>
        @endauth
    </ul>
</div>
