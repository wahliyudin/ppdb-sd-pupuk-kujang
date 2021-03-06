<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">PPDB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('panitia.dashboard') }}"
                        class="nav-link {{ request()->routeIs('panitia.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">NAVIGATION</li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('panitia.transaksi-pembayaran') ? 'active' : '' }}"
                        href="{{ route('panitia.transaksi-pembayaran') }}">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>
                            Transaksi Pembayaran
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('panitia.tarif-pembayaran.index') ? 'active' : '' }}"
                        href="{{ route('panitia.tarif-pembayaran.index') }}">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>
                            Tarif Pembayaran
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('panitia.tipe-pembayaran.index') || request()->routeIs('panitia.account.index') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('panitia.tipe-pembayaran.index') || request()->routeIs('panitia.account.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('panitia.tipe-pembayaran.index') }}"
                                class="nav-link {{ request()->routeIs('panitia.tipe-pembayaran.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tipe Pembayaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('panitia.account.index') }}"
                                class="nav-link {{ request()->routeIs('panitia.account.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Rekening</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengguna Aplikasi</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('panitia.siswa.index') ? 'active' : '' }}"
                        href="{{ route('panitia.siswa.index') }}">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Calon Siswa
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('panitia.pengaturan.form-pendaftaran') || request()->routeIs('panitia.pengaturan.form-login') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('panitia.pengaturan.form-pendaftaran') || request()->routeIs('panitia.pengaturan.form-login') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Pengaturan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('panitia.pengaturan.form-pendaftaran') }}"
                                class="nav-link {{ request()->routeIs('panitia.pengaturan.form-pendaftaran') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Form Pendaftaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('panitia.pengaturan.form-login') }}"
                                class="nav-link {{ request()->routeIs('panitia.pengaturan.form-login') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Form Login</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('panitia.laporan.index') ? 'active' : '' }}"
                        href="{{ route('panitia.laporan.index') }}">
                        <i class="nav-icon fas fa-file-contract"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('panitia.backup') }}">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Backup Database
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>{{ __('Logout') }}</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
