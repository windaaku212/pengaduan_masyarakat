<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #6A5ACD;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('backend') }}/img/logoo.png" alt="" style="width: 40px; height: 40px;">
        </div>
        <div class="sidebar-brand-text mx-3" style="color: black;">Pengaduan Online</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link text-white" href="/dashboardpetugas">
            <!-- Updated icon for Dashboard -->
            <i class="fas fa-fw fa-tachometer-alt" style="color: #FFFFFF;"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-white">
        Laporan
    </div>

    <!-- Nav Item - Laporan -->
    <li class="nav-item">
        <a class="nav-link text-white" href="/pengaduanpetugas">
            <!-- Updated icon for Laporan -->
            <i class="fas fa-fw fa-file-alt" style="color: #FFFFFF;"></i>
            <span>Laporan</span>
        </a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading text-white">
        Report
    </div>

    <li class="nav-item">
        <a class="nav-link text-white" href="/generatereportpetugas">
            <!-- Updated icon for Generate Report -->
            <i class="fas fa-fw fa-file-export" style="color: #FFFFFF;"></i>
            <span>Generate Report</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="nav-link text-white" href="#" onclick="document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-sign-out-alt" style="color: #FFFFFF;"></i>
            <span>Logout</span>
        </a>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
