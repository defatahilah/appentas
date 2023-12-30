<!-- Begin Page Content -->
<div class="container-fluid" style="background-image: url('assets/img/bg1.jpg')">
    <h1 class="h5 mb-0 text-gray-800"><b>Beranda Admin</b></h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-2">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Beranda</li>
        </ol>
    </nav>


    <!-- Page Heading -->
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <!--Card-->
        <div class="col-xl-4 col-md-6 mb-0">
            <div class="card bg-gradient-primary shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <!--div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div-->
                            <div class="h2 mb-0 font-weight-bold mr-2 text-gray-100"><?php echo $data_ruangan ?></div>
                            <div class="h5 mt-3 font-weight-bold text-center text-gray-100">Data Ruangan</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-home fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('Ruangan') ?>" class="card-footer bg-transparent text-center text-gray-100">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-0">
            <div class="card bg-gradient-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <!--div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div-->
                            <div class="h2 mb-0 font-weight-bold mr-2 text-gray-100"><?php echo $data_permohonan ?></div>
                            <div class="h5 mt-3 font-weight-bold text-center text-gray-100">Data Permohonan</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('Permohonan') ?>" class="card-footer bg-transparent text-center text-gray-100">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-0">
            <div class="card bg-gradient-danger shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <!--div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div-->
                            <div class="h2 mb-0 mr-2 font-weight-bold text-gray-100"><?php echo $data_penyewaan ?></div>
                            <div class="h5 mt-3 font-weight-bold text-center text-gray-100">Jadwal Penyewaan</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('Penyewaan') ?>" class="card-footer bg-transparent text-center text-gray-100">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-12 mt-5" width="fixed-size px">
            <div class="card-header bg-transparent py-5 text-center text-light">

            </div>
            <div class="card-body ">

            </div>
        </div>

    </div>
    </!--div>


    <!-- /.container-fluid -->


</div>

<!-- End of Main Content -->