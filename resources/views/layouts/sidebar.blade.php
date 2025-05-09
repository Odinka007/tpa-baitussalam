<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SiBais</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('pages.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span class="fs-2">Dashboard</span></a>
    </li>

    <!-- Divider -->



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('datasantri.index') }}">
            <i class="fas fa-fw fa-users"></i>  
            <span class="fs-2">Data Santri</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('datasantri.index') }}">
            <i class="fas fa-fw fa-users"></i>  
            <span>Data Pengajar</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('matapelajaran.index') }}">
            <i class="bi bi-journal-bookmark-fill"></i>
            <span>Matapelajaran</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('datanilai.index') }}">
            <i class="bi bi-layers-half"></i>
            <span>Data Nilai</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('nilai.index') }}">
            <i class="bi bi-archive-fill"></i>
            <span>Nilai</span>
        </a>
    </li>
    

    <!-- Nav Item - Utilities Collapse Menu -->
    

    <!-- Divider -->
   

    <!-- Nav Item - Pages Collapse Menu -->
    

    <!-- Nav Item - Charts -->
    

    <!-- Nav Item - Tables -->
  

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->

</ul>