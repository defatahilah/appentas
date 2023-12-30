<!-- Begin Page Content -->
<div class="container-fluid">
    <h1>APPENTAS</h1>

    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h3 class="card-title">Form Input Data Ruangan</h3>

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
            <?= form_open_multipart('C_Admin/ruangan/tambah_ruangan_aksi'); ?>

            <div class="form-row justify-content-center">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Id Ruangan</label>
                    <input type="text" name="id_ruangan" class="form-control" id="id_ruangan" placeholder="Masukkan Nama Ruangan" autocomplete="off" autofocus>
                    <?php echo form_error('id_ruangan', '<div class="text-small text-danger">', '</div>') ?>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Nama Ruangan</label>
                    <input type="text" name="nm_ruangan" class="form-control" id="nm_ruangan" placeholder="Masukkan Nama Ruangan" autocomplete="off" autofocus>
                    <?php echo form_error('nm_ruangan', '<div class="text-small text-danger">', '</div>') ?>
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Harga</label>
                    <input type="text" name="harga" placeholder="Masukkan Harga" class="form-control" autocomplete="off">
                    <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Potongan Instansi</label>
                    <input type="text" name="potongan" placeholder="Masukkan Potongan Harga" class="form-control" autocomplete="off">
                    <?php echo form_error('potongan', '<div class="text-small text-danger">', '</div>') ?>
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Jumlah Ruangan</label>
                    <input type="text" name="jmlh_r" placeholder="Masukkan Jumlah Ruangan" class="form-control" autocomplete="off">
                    <?php echo form_error('jmlh_r', '<div class="text-small text-danger">', '</div>') ?>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Kapasitas</label>
                    <input type="text" name="kapasitas" placeholder="Masukkan Kapasitas" class="form-control" autocomplete="off">
                    <?php echo form_error('kapasitas', '<div class="text-small text-danger">', '</div>') ?>
                </div>
            </div>

            <!--div class="form-row justify-content-center">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                        <?php echo form_error('keterangan', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                </!--div-->
            <div class="form-row justify-content-center" hidden>
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Luas Ruangan</label>
                    <input type="text" name="luas" placeholder="Masukkan Luas Ruangan" class="form-control" autocomplete="off">
                    <?php echo form_error('luas', '<div class="text-small text-danger">', '</div>') ?>
                </div>
            </div>

            <!--div class="form-row justify-content-center">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Gambar Ruangan</label> <br>
                    <div class="custom-file">
                        <input class="custom-file-input" type="file" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Pilih gambar</label>
                        <?php echo form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
            </!div-->

            <center><button type="submit" class="btn btn-primary">Simpan</button></center>
            <a href="<?php echo base_url('Ruangan') ?>"></a>

            <? form_close(); ?>

        </div>
    </div>