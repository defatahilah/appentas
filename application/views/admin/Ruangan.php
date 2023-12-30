<div class="container-fluid">




    <!-- Main content -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fasilitas/Ruangan</li>
        </ol>
    </nav>
    <div class="card mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h3 class="card-title">Fasilitas/Ruangan</h3>
        </div>


        <?= $this->session->flashdata('pesan'); ?>
        <div id="tambahruangan" class="card-body"><a class="btn btn-outline-success mb-3 border-left-success" href="#" data-toggle="modal" data-target="#tambahruanganModal" class="tomboltambahruangan">
                <i class=" fa fa-plus fa-fw"></i>Tambah data</a>
            <div class="card-body border-bottom-primary">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped" width="fixed-size px" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" width="50px">No</th>
                                <th class="text-center">Nama Ruangan</th>
                                <th class="text-center" width="140px">Harga/Hari</th>
                                <th class="text-center" width="140px">Potongan Instansi</th>
                                <th class="text-center" width="100px">Jumlah Ruangan</th>
                                <th class="text-center">Kapasitas</th>

                                <th class="text-center" width="140px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            <?php foreach ($truangan as $rgn) {
                                $no++; ?>
                                <tr>
                                    <td class="text-center"><?php echo "$no" ?></td>
                                    <td><?php echo $rgn->nm_ruangan ?></td>
                                    <td>Rp <?php echo number_format("$rgn->harga", 0, ",", ".") ?></td>
                                    <td>Rp (-) <?php echo number_format("$rgn->potongan", 0, ",", ".") ?></td>
                                    <td><?php echo $rgn->jmlh_r ?> Ruangan</td>
                                    <td><?php echo $rgn->kapasitas ?> Orang</td>
                                    <td class="text-center">
                                        <a href="<?= base_url('C_Admin/Ruangan/editruanganmodal/') . $rgn->id_ruangan ?>" data-toggle="modal" data-target="#editruanganModal" class="tomboleditruangan" data-id_ruangan="<?= $rgn->id_ruangan ?>" data-nm_ruangan="<?= $rgn->nm_ruangan ?>" data-harga="<?= $rgn->harga ?>" data-potongan="<?= $rgn->potongan ?>" data-jmlh_r="<?= $rgn->jmlh_r ?>" data-kapasitas="<?= $rgn->kapasitas ?>">
                                            <div class="badge badge-primary"><i class="fas fa-edit"> Edit</i></div>
                                        </a>
                                        <a href="<?php echo site_url('C_Admin/ruangan/hapus_ruangan_aksi/' . $rgn->id_ruangan) ?>">
                                            <div class="badge badge-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?');"><i class="fas fa-trash"> Hapus</i></div>
                                        </a>
                                </tr>
                            <?php
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambah ruangan Modal-->
    <div class="modal fade" id="tambahruanganModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-primary bg-gradient-light">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Ruangan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url('C_Admin/Ruangan/tambahruanganmodal'); ?>">

                            <div class="form-row ">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Id Ruangan</label>
                                    <input type="text" name="id_ruangan" class="form-control" id="id_ruangan" placeholder="Masukkan Id Ruangan" autocomplete="off" autofocus required>
                                    <?php echo form_error('id_ruangan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Nama Ruangan</label>
                                    <input type="text" name="nm_ruangan" class="form-control" id="nm_ruangan" placeholder="Masukkan Nama Ruangan" autocomplete="off" required>
                                    <?php echo form_error('nm_ruangan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Harga</label>
                                    <input type="text" name="harga" placeholder="Masukkan Harga" class="form-control" id="harga" autocomplete="off" required>
                                    <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Potongan Instansi</label>
                                    <input type="text" name="potongan" placeholder="Masukkan Potongan Harga" class="form-control" id="potongan" autocomplete="off" required>
                                    <?php echo form_error('potongan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Jumlah Ruangan</label>
                                    <input type="text" name="jmlh_r" placeholder="Masukkan Jumlah Ruangan" class="form-control" id="jmlh_r" autocomplete="off" required>
                                    <?php echo form_error('jmlh_r', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Kapasitas</label>
                                    <input type="text" name="kapasitas" placeholder="Masukkan Kapasitas" class="form-control" id="kapasitas" autocomplete="off" required>
                                    <?php echo form_error('kapasitas', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>

                            <!--div class="form-row">
                    <div class="col-md-12 form-group">
                        <label class="font-weight-bold">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                        <?php echo form_error('keterangan', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                </!--div-->
                            <!--div class="form-row" hidden>
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Luas Ruangan</label>
                                    <input type="text" name="luas" placeholder="Masukkan Luas Ruangan" class="form-control" autocomplete="off">
                                    <?php echo form_error('luas', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            <div>

                            <div class="form-row">
                <div class="col-md-12 form-group">
                    <label class="font-weight-bold">Gambar Ruangan</label> <br>
                    <div class="custom-file">
                        <input class="custom-file-input" type="file" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Pilih gambar</label>
                        <?php echo form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
            </!div-->

                            <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                            <!--a href="<!?php echo base_url('Ruangan') ?>"></!a-->

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit ruangan Modal-->
    <div class="modal fade" id="editruanganModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-primary bg-gradient-light">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Ruangan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url('C_Admin/Ruangan/editruanganmodal'); ?>">

                            <div class="form-row ">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Id Ruangan</label>
                                    <input type="text" name="id_ruangan" class="form-control" id="id_ruanganedit" autocomplete="off" autofocus>
                                    <?php echo form_error('id_ruangan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Nama Ruangan</label>
                                    <input type="text" name="nm_ruangan" class="form-control" id="nm_ruanganedit" autocomplete="off">
                                    <?php echo form_error('nm_ruangan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Harga</label>
                                    <input type="text" name="harga" class="form-control" id="hargaedit" autocomplete="off">
                                    <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Potongan Instansi</label>
                                    <input type="text" name="potongan" class="form-control" id="potonganedit" autocomplete="off">
                                    <?php echo form_error('potongan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Jumlah Ruangan</label>
                                    <input type="text" name="jmlh_r" class="form-control" id="jmlh_redit" autocomplete="off">
                                    <?php echo form_error('jmlh_r', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Kapasitas</label>
                                    <input type="text" name="kapasitas" class="form-control" id="kapasitasedit" autocomplete="off">
                                    <?php echo form_error('kapasitas', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>

                            <!--div class="form-row">
                    <div class="col-md-12 form-group">
                        <label class="font-weight-bold">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                        <?php echo form_error('keterangan', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                </!--div-->
                            <!--div class="form-row" hidden>
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Luas Ruangan</label>
                                    <input type="text" name="luas" placeholder="Masukkan Luas Ruangan" class="form-control" autocomplete="off">
                                    <?php echo form_error('luas', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            <div>

                            <div class="form-row">
                <div class="col-md-12 form-group">
                    <label class="font-weight-bold">Gambar Ruangan</label> <br>
                    <div class="custom-file">
                        <input class="custom-file-input" type="file" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Pilih gambar</label>
                        <?php echo form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
            </!div-->

                            <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                            <!--a href="<!?php echo base_url('Ruangan') ?>"></!a-->

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>