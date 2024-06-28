<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-lightbulb"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Divine Light</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    @if (Auth::user()->role == 'admin')
        <!-- Nav Item Kelola User-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-user"></i>
                <span>User</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Menu Kelola User:</h6>
                    <a class="collapse-item" href="{{ route('society.index') }}">Masyarakat</a>
                    <a class="collapse-item" href="{{ route('technician.index') }}">Teknisi</a>
                </div>
            </div>
        </li>

        <!-- Nav Item Laporan -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-list"></i>
                <span>Laporan</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Menu Laporan</h6>
                    @if (Auth::user()->role == 'society')
                        <a class="collapse-item" href="{{ route('report.create') }}">Buat Laporan</a>
                    @endif
                    <a class="collapse-item" href="{{ route('report.index') }}">Riwayat Laporan</a>
                </div>
            </div>
        </li>

        <!-- Nav Item Kontrol & Monitoring-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMonitoring"
                aria-expanded="true" aria-controls="collapseMonitoring">
                <i class="fas fa-fw fa-robot"></i>
                <span>Control & Monitor</span>
            </a>
            <div id="collapseMonitoring" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kontrol & Monitoring <br> Lampu Jalan</h6>
                    <a class="collapse-item" href="{{ route('controlling') }}">Kontrol Manual</a>
                    <a class="collapse-item" href="{{ route('monitoring') }}">Konsumsi Daya</a>
                </div>
            </div>
        </li>

        <!-- Nav Item Perbaikan-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRepair"
                aria-expanded="true" aria-controls="collapseRepair">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Perbaikan</span>
            </a>
            <div id="collapseRepair" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Menu Perbaikan</h6>
                    <a class="collapse-item" href="{{ route('repair.index') }}">Daftar Perbaikan</a>
                </div>
            </div>
        </li>
    @elseif (Auth::user()->role == 'technician')
        <!-- Nav Item Perbaikan-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRepair"
                aria-expanded="true" aria-controls="collapseRepair">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Perbaikan</span>
            </a>
            <div id="collapseRepair" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Menu Perbaikan</h6>
                    <a class="collapse-item" href="{{ route('repair.index') }}">Daftar Perbaikan</a>
                </div>
            </div>
        </li>

        <!-- Nav Item Kontrol & Monitoring-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMonitoring"
                aria-expanded="true" aria-controls="collapseMonitoring">
                <i class="fas fa-fw fa-robot"></i>
                <span>Control & Monitor</span>
            </a>
            <div id="collapseMonitoring" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kontrol & Monitoring <br> Lampu Jalan</h6>
                    <a class="collapse-item" href="{{ route('controlling') }}">Kontrol Manual</a>
                    <a class="collapse-item" href="{{ route('monitoring') }}">Konsumsi Daya</a>
                </div>
            </div>
        </li>
    @elseif (Auth::user()->role == 'society')
        <!-- Nav Item Laporan -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-list"></i>
                <span>Laporan</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Menu Laporan</h6>
                    @if (Auth::user()->role == 'society')
                        <a class="collapse-item" href="{{ route('report.create') }}">Buat Laporan</a>
                    @endif
                    <a class="collapse-item" href="{{ route('report.index') }}">Riwayat Laporan</a>
                </div>
            </div>
        </li>
    @endif


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
