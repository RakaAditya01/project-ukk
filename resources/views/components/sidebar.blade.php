<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('dashboard-general-dashboard') }}">Pembayaran SPP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('dashboard-general-dashboard') }}">SPP</a>
        </div>
        @if (session('role') == 'admin')
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard Admin</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                    <li class="{{ Request::is('data-siswa') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('data-siswa') }}">Data Siswa</a>
                    </li>
                    <li class="{{ Request::is('data-user') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('data-user') }}">Data User</a>
                    </li>
                    <li class="{{ Request::is('data-kelas') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('data-kelas') }}">Data Kelas</a>
                    </li>
                    <li class="{{ Request::is('data-spp') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('data-spp') }}">Data SPP</a>
                    </li>
                    <li class="{{ Request::is('data-pembayaran') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('data-pembayaran') }}">Pembayaran</a>
                    </li>
                </ul>
            </li>
        </ul>
        @endif

        @if (session('role') == 'siswa')
        {{-- {{var_dump(session('role'))}} --}}
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard Siswa</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>
        </ul>
        @endif

        {{-- @if (auth()->user()->role == 'petugas')
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard Petugas</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                    <li class="{{ Request::is('data-pembayaran') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('data-pembayaran') }}">Pembayaran</a>
                    </li>
                </ul>
            </li>
        </ul>
        @endif  --}}
        {{-- <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div> --}}
    </aside>
</div>
