<div class="container-fluid">




    <!-- Main content -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Permohonan</li>
        </ol>
    </nav>
    <div class="card mb-4">
        <div class="card-header py-3 border-bottom-success">
            <h3 class="card-title">Tabel Data Permohonan</h3>
        </div>
        <?= $this->session->flashdata('pesan'); ?>
        <div class="card-body border-bottom-success">
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-striped" width="fixed-size px" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center" width="50px">No</th>
                            <th class="text-center" width="50px">Id Surat</th>
                            <th class="text-center" width="150px">Tanggal Masuk</th>
                            <th class="text-center" width="200px">Nama Pemohon</th>
                            <th class="text-center" width="400px">Alamat</th>
                            <th class="text-center" width="400px">Email</th>
                            <th class="text-center">Telepon/Whatsapp</th>


                            <th class="text-center" width="200px">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($tpermohonan as $pmhn) {
                            $no++; ?>
                            <tr>
                                <td class="text-center"><?php echo "$no" ?></td>
                                <td>#<?php echo $pmhn->id_permohonan ?></td>
                                <td class="text-center"><?php echo date('d-m-Y (H:i:s)', strtotime($pmhn->tgl_surat)) ?></td>
                                <td><?php echo $pmhn->nama ?></td>
                                <td><?php echo $pmhn->alamat ?></td>
                                <td><?php echo $pmhn->email ?></td>
                                <td><a href="https://wa.me/<?php echo $pmhn->no_telp ?>"><?php echo $pmhn->no_telp ?></td>

                                <td class="text-center">
                                    <?php
                                    if ($pmhn->permohonan == null || $pmhn->permohonan == '') { ?>
                                        <a onclick="alert('Surat Permohonan belum diupload')">
                                            <div class="badge badge-info"><i class="fas fa-download"> CekSurat</i></div>
                                        </a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="<?php echo site_url('C_Admin/Permohonan/download/' . $pmhn->permohonan) ?>">
                                            <div class="badge badge-info"><i class="fas fa-download"> CekSurat</i></div>
                                        </a>
                                    <?php
                                    } ?>
                                    <!--a href="<?php echo site_url('C_Admin/Permohonan/acc/' . $pmhn->id_permohonan) ?>">
                                        <div class="badge badge-success"><i class="fas fa-check"> ACC</i></div>
                                    </!--a-->

                                    <br>
                                    <a href="<?php echo base_url('C_Admin/Permohonan/ubah_permohonan_aksi/') . $pmhn->id_permohonan ?>" data-toggle="modal" data-target="#editpermohonanModal" class="tomboleditpermohonan" data-id_permohonan="<?= $pmhn->id_permohonan ?>" data-nama="<?= $pmhn->nama ?>" data-alamat="<?= $pmhn->alamat ?>" data-email="<?= $pmhn->email ?>" data-no_telp="<?= $pmhn->no_telp ?>">
                                        <div class="badge badge-primary"><i class="fas fa-edit"> Edit</i></div>
                                    </a>
                                    <a href="<?php echo site_url('C_Admin/Permohonan/hapus_permohonan_aksi/' . $pmhn->id_permohonan) ?>">
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

    <!-- Edit ruangan Modal-->
    <div class="modal fade" id="editpermohonanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-primary bg-gradient-light">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Permohonan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url('C_Admin/Permohonan/ubah_permohonan_aksi'); ?>">
                            <div class="form-row " hidden>
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Id Permohonan</label>
                                    <input type="text" name="id_permohonan" class="form-control" id="id_permohonanedit" placeholder="Masukkan Id permohonan" autocomplete="off" autofocus required>
                                    <?php echo form_error('id_permohonan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="namaedit" autocomplete="off">
                                    <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamatedit" autocomplete="off">
                                    <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Email</label>
                                    <input type="text" name="email" class="form-control" id="emailedit" autocomplete="off">
                                    <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Nomor Telepon</label>
                                    <input type="text" name="no_telp" class="form-control" id="no_telpedit" autocomplete="off">
                                    <?php echo form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
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
</div>