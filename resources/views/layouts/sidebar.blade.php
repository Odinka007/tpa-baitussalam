<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebar-bordered" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('image/BAITUSSALAM.png') }}" alt="Logo" width="60">
        </div>
        <div class="sidebar-brand-text mx-3">SiBais</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('pages.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span class="fs-2">Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    @if (auth()->user()->role === 'admin')
        <!-- Nav Item - Data Santri -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('datasantri.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span class="fs-2">Data Santri</span>
            </a>
        </li>

        <!-- Nav Item - Data Pengajar -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('datapengajar.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Pengajar</span>
            </a>
        </li>

        <!-- Nav Item - Mata Pelajaran -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('matapelajaran.index') }}">
                <i class="bi bi-journal-bookmark-fill"></i>
                <span>Mata Pelajaran</span>
            </a>
        </li>

        <!-- Nav Item - Data Nilai -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('datanilai.index') }}">
                <i class="bi bi-layers-half"></i>
                <span>Data Nilai</span>
            </a>
        </li>

        <!-- Nav Item - Nilai -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('nilai.index') }}">
                <i class="bi bi-archive-fill"></i>
                <span>Cetak Nilai</span>
            </a>
        </li>
    @elseif(auth()->user()->role === 'pengajar')
        <!-- Nav Item - Mata Pelajaran -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('matapelajaran.index') }}">
                <i class="bi bi-journal-bookmark-fill"></i>
                <span>Mata Pelajaran</span>
            </a>
        </li>
        <!-- Nav Item - Data Nilai -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('datanilai.index') }}">
                <i class="bi bi-layers-half"></i>
                <span>Data Nilai</span>
            </a>
        </li>

        <!-- Nav Item - Nilai -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('nilai.index') }}">
                <i class="bi bi-archive-fill"></i>
                <span>Cetak Nilai</span>
            </a>
        </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
</ul>
