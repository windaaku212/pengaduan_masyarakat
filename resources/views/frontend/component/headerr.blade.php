<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Pengaduan Online</h1>
            <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/laporan">Laporan</a></li>
                <li><a href="/tanggapan">Tanggapan</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn-getstarted daftar"
                onclick="return confirm('Yakin ingin logout?')">Logout</button>
        </form>

        <style>
            .daftar {
                background-color: #ffffff;
                /* Putih */
                color: #000001;
                /* Teks berwarna hitam */
                border: 2px solid #003366;
                /* Border biru tua */
            }

            .login {
                background-color: #ffffff;
                /* Biru Tua */
                color: #000001;
                /* Teks berwarna putih */
                border: 2px solid #003366;
                /* Border biru tua pada login */
            }
        </style>

    </div>
</header>
