<!-- Begin Page Content -->
<div class="container-fluid">
    <h1>APPENTAS</h1>

    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h3 class="card-title">Edit Profil</h3>

            <div class="breadcrumb">
                <div class="breadcrumb-item">
                    <a href="<?= base_url('Admin') ?>">
                        <i>Dashboard</i></a>

                </div>
                <div class="breadcrumb-item active">
                    <i>Edit Profil</i>
                </div>
            </div>
        </div>




        <?= form_open_multipart('C_Admin/Admin/editprofil'); ?>

        <div class="form-row justify-content-center">
            <div class="col-md-6 form-group" hidden>
                <label class="font-weight-bold">Username</label>

                <input type="text" id="username" name="username" class="form-control" value="<?php echo $admin['username']; ?>" readonly>
            </div>
        </div>
        <div class="form-row justify-content-center mt-4">
            <div class="col-md-6 form-group">
                <label class="font-weight-bold">Nama Admin</label>
                <input type="hidden" id="id_admin" name="id_admin">
                <input type="text" id="admin" name="admin" class="form-control" value="<?php echo $admin['admin']; ?>" autocomplete="off" autofocus>
            </div>
        </div>
        <div class="form-row justify-content-center">
            <div class="col-sm-2"></div>
            <label class="font-weight-bold">Foto Profil</label>
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="<?= base_url('assets/img/profile/') . $admin['foto']; ?>" class="img-thumbnail">
                    </div>
                    <div class="col-md-6 form-group">
                        <div class="custom-file">
                            <input class="custom-file-input" type="file" id="foto" name="foto" autocomplete="off">
                            <label class="custom-file-label" for="foto">Pilih gambar</label><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-4 my-3">
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="<?php echo base_url('Admin') ?>">
                <button type="button" class="btn btn-secondary float-right">Kembali</button>
            </a>
        </div>

        </form>
    </div>

</div>
</div>