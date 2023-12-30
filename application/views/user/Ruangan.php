<div class="container-fluid">




    <!-- Main content -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fasilitas/Ruangan</li>
        </ol>
    </nav>
    <div class="card mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h3 class="card-title">Fasilitas/Ruangan</h3>
        </div>

        <div class="card-body border-bottom-primary">
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">No</th>
                            <th class="text-center">Nama Ruangan</th>
                            <th class="text-center">Harga/Hari(Swasta)</th>
                            <th class="text-center">Harga/Hari( Instansi)</th>
                            <th class="text-center">Jumlah Ruangan</th>
                            <th class="text-center">Kapasitas</th>
                            <th class="text-center">Detail Ruangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>

                        <?php foreach ($truangan as $rgn) {
                            $no++; ?>
                            <tr>
                                <td class="text-center"><?php echo "$no" ?></td>
                                <td><?php echo $rgn['nm_ruangan'] ?></td>
                                <td>Rp <?php echo number_format("$rgn[harga]", 0, ",", ".") ?></td>
                                <td>Rp <?php echo number_format("$rgn[harga]" - "$rgn[potongan]", 0, ",", ".") ?></td>
                                <td><?php echo $rgn['jmlh_r'] ?> Ruangan</td>
                                <td><?php echo $rgn['kapasitas'] ?> Orang</td>
                                <td class="text-center"><a href="<?= base_url('Data_Ruangan/') . $rgn['id_ruangan'] ?> " data-toggle="modal" data-target="#ruanganModal" class="tomboldetailruangan  badge badge-info" data-id_ruangan="<?= $rgn['id_ruangan']; ?>" data-nm_ruangan="<?= $rgn['nm_ruangan'] ?>" data-jmlh_r="<?= $rgn['jmlh_r'] ?>" data-kapasitas="<?= $rgn['kapasitas'] ?>" data-harga="<?= $rgn['harga'] ?>" data-potongan="<?= $rgn['potongan'] ?>"><i class="fas fa-search"></i> Lihat Detail </td>

                                <!--td class="text-center">
                                    <a href="">Lihat Detail</a-->
                            </tr>
                        <?php
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Detail ruangan Modal-->
<div class="modal fade" id="ruanganModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-primary bg-gradient-light">
                <h5 class="modal-title" id="exampleModalLabel">Detail Ruangan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" id="gambarcarousel">
                        <!--div class="carousel-item active">
                            <img class="d-block w-100" src="" id="gambardetail" alt="First slide">
                        </!div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="" id="gambardetail" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="" id="gambardetail" alt="Third slide">
                        </div-->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="text-dark text-center">
                    <div class="row">
                        <div class="col">
                            <h3 id="nm_ruangandetail"></h3>
                        </div>
                    </div>
                </div>


                <hr>
                <div class="row">
                    <table style="margin-left: 10px; margin-right: 10px;" width=100%>
                        <tr height="30px">
                            <td class="text-dark">Jumlah Ruangan</td>
                            <td class="text-dark">:</td>
                            <td class="text-dark">
                                <font id="jmlh_rdetail"></font>
                            </td>
                        </tr>
                        <tr height="30px">
                            <td class="text-dark">Kapasitas</td>
                            <td class="text-dark">:</td>
                            <td class="text-dark">
                                <font id="kapasitasdetail"></font>
                            </td>
                        </tr>
                        <tr height="30px">
                            <td class="text-dark">Harga (Swasta)</td>
                            <td class="text-dark">:</td>
                            <td class="text-dark">
                                <font id="hargadetail"></font>
                            </td>
                        </tr>
                        <tr height="30px">
                            <td class="text-dark">Harga (Instansi)</td>
                            <td class="text-dark">:</td>
                            <td class="text-dark">
                                <font id="potongandetail"></font>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer ">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>

                </div>
            </div>
        </div>
    </div>
</div>
</div>