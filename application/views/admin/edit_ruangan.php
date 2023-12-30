<!-- Begin Page Content -->
<div class="container-fluid">
    <h1>APPENTAS</h1>

    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h3 class="card-title">Form Edit Data Ruangan</h3>

            <div class="breadcrumb">
                <div class="breadcrumb-item">
                    <a href="<?= base_url('Admin') ?>">
                        <i>Dashboard</i></a>

                </div>
                <div class="breadcrumb-item active">
                    <i>Data Ruangan</i>
                </div>
            </div>
        </div>

        <div class="card-body">

            <?php foreach ($truangan as $rgn) { ?>

                <?= form_open_multipart('C_Admin/ruangan/ubah_ruangan_aksi'); ?>

                <div class="form-row justify-content-center">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Id Ruangan</label>
                        <input type="text" name="id_ruangan" class="form-control" value="<?php echo $rgn->id_ruangan; ?>" autofocus>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Nama Ruangan</label>
                        <input type="text" name="nm_ruangan" class="form-control" value="<?php echo $rgn->nm_ruangan ?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Harga (Rp)</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $rgn->harga ?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Potongan Instansi (Rp)</label>
                        <input type="text" name="potongan" class="form-control" value="<?php echo $rgn->potongan ?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Jumlah Ruangan</label>
                        <input type="text" name="jmlh_r" class="form-control" value="<?php echo $rgn->jmlh_r ?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Kapasitas (Orang)</label>
                        <input type="text" name="kapasitas" class="form-control" value="<?php echo $rgn->kapasitas ?>" autocomplete="off">
                    </div>
                </div>
                <!--div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="<?php echo $rgn->keterangan ?>" autocomplete="off">
                        </div>
                    </!--div-->
                <div class="form-row justify-content-center">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Luas Ruangan (m<sup>2</sup>)</label>
                        <input type="text" name="luas" class="form-control" value="<?php echo $rgn->luas ?>" autocomplete="off">
                    </div>
                </div>



                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('Ruangan') ?>">
                    <button type="button" class="btn btn-secondary float-right">Kembali</button>
                </a>

                <? form_close(); ?>
            <?php } ?>
        </div>
    </div>