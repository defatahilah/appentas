<body>
    <br>
    <div class="card mb-4">
        <div class="card-header bg-gradient-info py-3">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Konfirmasi Penyewaan</li>
                </ol>
            </nav>
        </div>
    </div>
    <div align="center">
        <a href="<?= base_url(''); ?>"><i class="ri-arrow-left-line"></i>&larr; Kembali</a>
    </div>


    <section>
        <div class="row justify-content-center" style="margin-left: 30px; margin-right: 30px; margin-bottom: 15px; margin-top: 80px;">
            <div class="col-lg-5">
                <div class="facts-box" style="padding: 15px;">
                    <h3 align="center"><b>KONFIRMASI PENYEWAAN</b></h3>
                    <br>
                    <?= form_open_multipart('C_User/Penyewaan/konfirmasipenyewaan'); ?>
                    <div style="margin-left: 30px; margin-right: 30px;">
                        <div style="margin-bottom: 15px;">
                            <div style="margin-left: 15x; margin-right: 15; margin-bottom: 15px">
                                <label for="suratcek">Nomor Id Permohonan</label>
                                <input type="text" class="form-control" id="suratcek" name="suratcek" placeholder="Isi dengan nomor id permohonan anda" autocomplete="off">
                                <?= form_error('suratcek', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <div align="center">
                                <button type="submit" class="btn btn-primary">Proses</button>
                            </div>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <div class="col">

                                <font size=2px color="gray"><i>isi dengan nomor id permohonan anda sesuai id yang diberikan oleh admin BPSDMD Provinsi Kalimantan Selatan.</i></font>
                            </div>


                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <br>




</body>
<br>
<br>
<br>
<br>
<br>