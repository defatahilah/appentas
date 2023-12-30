<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(''); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url(); ?>assets/img/kalsel.png" height="15%" width="15%">
            <div class="sidebar-brand-text text-lg mx-3">APPENTAS</div>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-gray-100">
        Menu
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link text-gray-100" href="<?= base_url(''); ?>">
            <i class="fas fa-fw fa-tachometer-alt text-gray-100"></i>
            <span>Beranda</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-gray-100" href="<?= base_url('Profiluser'); ?>">
            <i class="fas fa-fw fa-address-card text-gray-100"></i>
            <span>Profil</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link text-gray-100 collapsed" href="<?= base_url('Data_Ruangan'); ?>" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-home text-gray-100"></i>
            <span>Data Ruangan</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link text-gray-100" href="<?= base_url('Data_Penyewaan'); ?>" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-calendar text-gray-100"></i>
            <span>Jadwal Penyewaan</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading text-gray-100">
        Konfirmasi
    </div>
    <li class="nav-item">
        <a class="nav-link text-gray-100" href="<?= base_url('C_User/Penyewaan/konfirmasipenyewaan'); ?>" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-envelope-open-text text-gray-100"></i>
            <span>Konfirmasi Penyewaan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-gray-100" href="<?= base_url('C_User/Penyewaan/konfirmasipembayaran'); ?>" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-money-check text-gray-100"></i>
            <span>Konfirmasi Pembayaran</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading text-gray-100">
        Panduan
    </div>
    <li class="nav-item">
        <a class="nav-link text-gray-100" href="<?= base_url('Panduan'); ?>" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-book-reader text-gray-100"></i>
            <span>Panduan Pemesanan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-gray-100" href="<?= base_url('C_User/Tentang'); ?>" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-book-reader text-gray-100"></i>
            <span>Tentang</span>
        </a>
    </li>
</ul>
<!-- End of Sidebar -->