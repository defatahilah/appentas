<div id="content-wrapper" class="d-flex flex-column">
    <!--div style="background: linear-gradient(to left, #000046, #1cb5e0); "-->
    <!-- Main Content -->
    <div id="content">
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to left, #000046, #1cb5e0); ">
            <div class="container px-5">
                <a class="navbar-brand" href="#">APPENTAS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="Auth/index">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('C_User/Penyewaan/konfirmasipenyewaan'); ?>">Konfirmasi Penyewaan</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('C_User/Penyewaan/konfirmasipembayaran'); ?>">Konfirmasi Pembayaran</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('C_User/Tentang'); ?>">Tentang</a></li>
                    </ul>
                </div>
            </div>
        </nav>