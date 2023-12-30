<!-- Begin Page Content -->
<div style="background-image: url('assets/img/bg1.jpg')">
    <div class="container-fluid">
        <h1 class="h5 mb-0 text-gray-800">Beranda</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Beranda</li>
            </ol>
        </nav>

        <!-- Page Heading -->
        <div class="row">
            <!--Card-->
            <div class="col-xl-8 col-lg-7">
                <!--div class="card shadow mb-4"-->
                <!--div class="card-body"-->
                <div class="row">

                    <div class="col-xl-6 col-md-6 mb-0">
                        <div class="card bg-gradient-primary">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <!--div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div-->
                                        <div class="h2 mb-0 font-weight-bold mr-2 text-gray-100"><?php echo $data_ruangan ?></div>
                                        <div class="h5  font-weight-bold text-center text-gray-100">Data Ruangan</div>
                                    </div>
                                    <div class="col-mx-my">
                                        <i class="fas fa-home fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url('Data_Ruangan') ?>" class="card-footer bg-transparent text-center text-gray-100">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6 mb-0">
                        <div class="card bg-gradient-danger">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <!--div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div-->
                                        <div class="h2 mb-0 mr-2 font-weight-bold text-gray-100"><?php echo $data_penyewaan ?></div>
                                        <div class="h5  font-weight-bold text-center text-gray-100">Jadwal Penyewaan</div>
                                    </div>
                                    <div class="col-mx-my">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url('Data_Penyewaan') ?>" class="card-footer bg-transparent text-center text-gray-100">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-4 col-mb-4 ">
                <div class="card-header bg-gradient-primary py-3">
                    <img class=" rounded float-left img-profile" src="<?= base_url('assets/img/kalsel.png') ?>" height="15%" width="15%"></img>
                    <h4 class="text-center text-gray-100"><b>BPSDMD Provinsi Kalimantan Selatan</b></h4>
                </div>
                <div class="card bg-gradient-light">
                    <div class="card-body pt-4">
                        <div class="row">
                            <div class="col-12">
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat : Jalan Panglima Batur Timur Nomor 1A, Banjarbaru Utara,Kota Banjarbaru,70711 Kalimantan Selatan.
                                        <br class="small">Jalan Ambulung Banjarbaru,70712.
                                    </li>

                                    <li class="small mt-2"><span class="fa-li"><i class="fas fa-lg fa-at"></i></span> Email : diklat@kalselprov.go.id</li>
                                    <li class="small mt-2"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Kontak : 0511-4772551 / 0511-4772171
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-4" width="fixed-size px">
                <div class="card bg-transparent py-3 text-center text-light">
                    Untuk melakukan pemesanan klik tombol "Ajukan Permohonan" terlebih dahulu di bawah
                </div>
                <div class="card-body ">
                    <center><a href="<?php echo base_url('Tambah_Permohonan') ?>" class="btn btn-info btn-lg  mt-4 px-4">Ajukan Permohonan <i class="fas fa-book align-middle"></i></a></center>
                </div>
            </div>


        </div>
    </div>



    <!-- /.container-fluid -->


</div>

<!-- End of Main Content -->