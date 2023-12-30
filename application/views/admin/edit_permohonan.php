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

            <?php foreach ($tpermohonan as $pmhn) { ?>

                <form action="<?php echo base_url() . 'C_Admin/Permohonan/ubah_permohonan_aksi'; ?>" method="post" class="form-horizontal">

                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Nama </label>
                            <input type="hidden" name="id_permohonan" value="<?php echo $pmhn->id_permohonan; ?>">
                            <input type="text" name="nama" class="form-control" value="<?php echo $pmhn->nama ?>" autocomplete="off" autofocus>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $pmhn->alamat ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $pmhn->email ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Telepon/Whatsapp</label>
                            <input type="text" name="no_telp" class="form-control" value="<?php echo $pmhn->no_telp ?>" autocomplete="off">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url('Permohonan') ?>">
                        <button type="button" class="btn btn-secondary float-right">Kembali</button>
                    </a>

                </form>
            <?php } ?>
        </div>
    </div>