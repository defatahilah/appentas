<!-- Sidebar -->
<ul class="navbar-nav border-left-danger bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin'); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url(); ?>assets/img/kalsel.png" height="15%" width="15%">
            <div class="sidebar-brand-text text-lg mx-3">APPENTAS</div>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Profil'); ?>">
            <i class="fas fa-fw fa-address-card"></i>
            <span>Profil</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link  collapsed" href="<?= base_url('Ruangan'); ?>" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-home"></i>
            <span>Data Ruangan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link  collapsed" href="<?= base_url('Permohonan'); ?>" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Data Permohonan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Penyewaan'); ?>" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Jadwal Penyewaan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!--li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-upload"></i>
            <span>Input Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('Tambah_Ruangan'); ?>">Ruangan</a>
                <a class="collapse-item" href="<?= base_url('Tambah_Jadwal'); ?>">Jadwal Penyewaan</a-->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-archive"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('Laporan'); ?>">Jadwal Penyewaan</a>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('C_Admin/Tentang'); ?>" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Tentang</span>
        </a>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(''); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>
</ul>
<!-- End of Sidebar -->