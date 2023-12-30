<!-- Begin Page Content -->
<div class="container-fluid">
    <h1>APPENTAS</h1>

    <!-- Main content -->

    <div class="card-header bg-gradient-info py-3">

        <div class="breadcrumb">
            <div class="breadcrumb-item">
                <a href="<?= base_url('') ?>">
                    <i>Home</i></a>

            </div>
            <div class="breadcrumb-item active">
                <i>Permohonan</i>
            </div>
        </div>
    </div>


    <!--?php var_dump($data_ruangan) ?-->

    <div class="card border-bottom-danger col-lg-12" style="padding: 15px; background: linear-gradient(to left, #000046, #1cb5e0); ">
        <h3 class="card-title text-center mt-2 text-gray-100 ">Form Permohonan</h3>
        <?= form_open_multipart('C_User/Permohonan/tambah_permohonan_aksi'); ?>
        <div class="form-row justify-content-center" hidden>
            <div class="col-md-6 form-group">
                <label class="font-weight-bold">Tanggal dan Waktu Surat</label>
                <!--?php
                            date_default_timezone_set('Asia/Makassar'); ?-->
                <input name="tgl_surat" class="form-control" value="<?= date('Y/m/d G:i:s'); ?> " id="tgl_surat" readonly>
                <?php echo form_error('tgl_surat', '<div class="text-small text-danger">', '</div>') ?>
            </div>
        </div>




        <div class="form-row justify-content-center">
            <div class="col-md-4 form-group">
                <label class="font-weight-bold text-gray-100">Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Isi nama anda" class="form-control" autofocus autocomplete="off" value="<?= set_value('nama'); ?>">
                <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
            </div>
        </div>
        <div class="form-row justify-content-center">
            <div class="col-md-4 form-group">
                <label class="font-weight-bold text-gray-100">Alamat</label>
                <textarea type="text" rows="5" name="alamat" placeholder="Isi alamat anda" class="form-control" value=><?= set_value('alamat'); ?></textarea>
                <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
            </div>
        </div>

        <div class="form-row justify-content-center">
            <div class="col-md-4 form-group">
                <label class="font-weight-bold text-gray-100">Email</label>
                <input type="text" name="email" placeholder="Isi email anda" class="form-control" autocomplete="off" value="<?= set_value('email'); ?>">
                <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
            </div>
        </div>

        <div class="form-row justify-content-center">
            <div class="col-md-1 form-group">
                <label class="font-weight-bold text-gray-100">Telepon/Whatsapp</label>
                <input value="+62" type="text" name="kodearea" class=" form-control" readonly>
            </div>
            <div class="col-md-3 form-group">
                <label class="font-weight-bold">.</label>


                <input type="text" name="no_telp" placeholder="Isi nomor anda" class="form-control" autocomplete="off" value="<?= set_value('no_telp'); ?>">

                <?php echo form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
            </div>
        </div>

        <div class="form-row justify-content-center">
            <div class="col-md-4 form-group">
                <label for="surat" class="text-gray-100">Upload Surat Permohonan(Word / PDF)</label> <br>
                <div class="custom-file">
                    <input class="custom-file-input" type="file" id="surat" name="surat" size="20">
                    <label class="custom-file-label" for="surat">Pilih file</label>
                </div>
                <?php echo form_error('surat', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
        </div>

        <center>
            <button type="submit" class="btn btn-dark">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Upload
            </button>
        </center>
        <style>
            .btn {
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 95px;
                height: 38px;
                background: #4e73df;

            }

            button {
                position: relative;
                display: inline-block;
                padding: 15px 30px;
                color: #4e73df;



                overflow: hidden;
                transition: 0.2s;
            }



            button:hover {
                color: #255784;
                background: #4e73df;
                box-shadow: 0 0 10px #4e73df, 0 0 40px #4e73df, 0 0 80px #4e73df;
                transition-delay: 1s;
            }


            button span {
                position: absolute;
                display: block;
            }




            button span:nth-child(1) {
                top: 0;
                left: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, transparent, #4e73df);
            }



            button:hover span:nth-child(1) {
                left: 100%;
                transition: 1s;
            }


            button span:nth-child(3) {
                bottom: 0;
                right: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(270deg, transparent, #4e73df);
            }

            button:hover span:nth-child(3) {
                right: 100%;
                transition: 1s;
                transition-delay: 0.5s;
            }



            button span:nth-child(2) {
                top: -100%;
                right: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(180deg, transparent, #4e73df);
            }

            button:hover span:nth-child(2) {
                top: 100%;
                transition: 1s;
                transition-delay: 0.25s;
            }



            button span:nth-child(4) {
                bottom: -100%;
                left: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(360deg, transparent, #4e73df);
            }

            button:hover span:nth-child(4) {
                bottom: 100%;
                transition: 1s;
                transition-delay: 0.75s;
            }
        </style>

        <? form_close(); ?>

    </div>