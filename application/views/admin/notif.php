<div class="container-fluid">




    <!-- Main content -->
    <nav aria-label="breadcrumb">

        <div class="card mb-4">
            <div class="card-header py-3 border-bottom-primary">
                <h3 class="card-title">Tabel Data Ruangan</h3>
            </div>




            <i class="fa fa-plus fa-fw"></i>Tambah data</a>
            <div class="card-body border-bottom-primary">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" width="50px">No</th>
                                <th class="text-center">Nama Ruangan</th>
                                <th class="text-center">Harga/Hari</th>
                                <th class="text-center">Potongan Instansi</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            <?php foreach ($tpermohonan as $pmhn) {
                                $no++; ?>
                                <tr>
                                    <td class="text-center"><?php echo "$no" ?></td>
                                    <td><?php echo $rgn->nm_ruangan ?></td>
                                    <td>Rp <?php echo number_format("$rgn->harga", 2, ",", ".") ?></td>
                                    <td>Rp <?php echo number_format("$rgn->potongan", 2, ",", ".") ?></td>
                                    <td><?php echo $rgn->keterangan ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo site_url('Edit_Ruangan/' . $rgn->id_ruangan) ?>">
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