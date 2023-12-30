        <?php
        $tpermohonan = $this->m_permohonan->tampil_data_notif();
        $data_permohonan = $this->m_jumlah->data_permohonan_notif();
        $tpenyewaan = $this->m_penyewaan->tampil_data_notif();
        $data_penyewaan = $this->m_jumlah->data_penyewaan_notif(); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">



                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" id="sidebarToggle" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <button type="button" class="btn btn-light btn-md mt-3" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <marquee>Selamat Datang di Aplikasi Penggunaan Fasilitas BPSDMD Provinsi Kalimantan Selatan</marquee>
                            </button>
                        </li>
                        <!-- Nav Item - Messages -->

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-success badge-counter" id="totpermohonan"><?= $data_permohonan ?></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Notifikasi Data Permohonan
                                </h6>
                                <?php foreach ($tpermohonan as $pmhn) {
                                ?>
                                    <a class="dropdown-item d-flex align-items-center" href=<?= base_url("C_Admin/Permohonan/notifpermohonan/");
                                                                                            echo $pmhn->id_permohonan; ?>>
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">

                                                <i class="fas fa-envelope text-white"></i>
                                            </div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">

                                                <td><?php echo $pmhn->nama ?></td>
                                                <br>
                                                <td><?php echo $pmhn->no_telp ?></td>

                                            </div>
                                            <div class="small text-gray-500"></div>
                                        </div>
                                    </a>
                                <?php } ?>
                                <a class="dropdown-item text-center small text-gray-500" href=<?= base_url('Permohonan') ?>>Show All</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter" id="totpenyewaan"><?= $data_penyewaan ?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notifikasi Penyewaan
                                </h6>
                                <?php foreach ($tpenyewaan as $row) {
                                ?>
                                    <a class="dropdown-item d-flex align-items-center" href=<?= base_url('C_Admin/Penyewaan/notifpenyewaan/');
                                                                                            echo $row->id_sewa; ?>>
                                        <div class="mr-3">
                                            <div class="icon-circle bg-danger">
                                                <i class="fas fa-calendar text-white"></i>
                                            </div>
                                        </div>
                                        <div>

                                            <span class="font-weight-bold">
                                                <td><?php echo $row->nama ?></td>
                                                <br>
                                                <td><?php echo $row->no_telp ?></td>
                                            </span>
                                        </div>
                                    </a>

                                <?php } ?>
                                <a class="dropdown-item text-center small text-gray-500" href=<?= base_url('Penyewaan') ?>>Show All</a>
                            </div>
                        </li>



                        <div class=" topbar-divider d-none d-sm-block">
                        </div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="mr-2 img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $admin['foto']; ?>"></img><span class="mr-3 d-none d-lg-inline text-primary font-weight-bold"><?= $admin['admin']; ?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('Profil'); ?> ">
                                    <i class="fas fa-address-card fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil Admin
                                </a>
                                <a class="dropdown-item" href="<?= base_url('C_Admin/Admin/editprofil'); ?> ">
                                    <i class="fas fa-address-card fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profil
                                </a>
                                <a class="dropdown-item" href="<?= base_url(''); ?> " data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>


                    <script type="text/javascript">
                        $(document).ready(function() {
                            setInterval(function() {


                                $.ajax({

                                    url: "<?= base_url() ?>C_Admin/Permohonan/gettot",
                                    type: "POST",
                                    dataType: "json",
                                    data: {},
                                    success: function(data) {
                                        $("#totpermohonan").html(data.tot);
                                    }
                                });
                            }, 2000);
                        })

                        $(document).ready(function() {
                            setInterval(function() {

                                $.ajax({

                                    url: "<?= base_url() ?>C_Admin/Penyewaan/gettot",
                                    type: "POST",
                                    dataType: "json",
                                    data: {

                                    },
                                    success: function(data) {
                                        $("#totpenyewaan").html(data.tot);

                                    }
                                });
                            }, 2000);
                        })
                    </script>

                </nav>

                <!-- End of Topbar -->