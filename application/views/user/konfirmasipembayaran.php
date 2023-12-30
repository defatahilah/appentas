<body>
    <br>
    <div class="card mb-4">
        <div class="card-header bg-gradient-info py-3">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Konfirmasi Pembayaran</li>
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
                    <h3 align="center"><b>KONFIRMASI PEMBAYARAN</b></h3>
                    <br>
                    <?= form_open_multipart('C_User/Penyewaan/detailpembayaran'); ?>
                    <div style="margin-left: 30px; margin-right: 30px;">
                        <div style="margin-bottom: 15px;">
                            <div style="margin-left: 15x; margin-right: 15; margin-bottom: 15px">
                                <label for="invoicecek">Nomor Invoice</label>
                                <input type="text" class="form-control" id="invoicecek" name="invoicecek" placeholder="Isi dengan nomor invoice kamu..." autocomplete="off">
                                <?= form_error('invoicecek', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                            <div align="center">
                                <button type="submit" class="btn btn-primary">Cek Invoice</button>
                            </div>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <div class="col">

                                <font size=2px color="gray"><i>isi dengan nomor invoicemu sesuai yang tertera di pojok kiri atas halaman 'Checkout'. contoh #1 cukup isi dengan '1'</i></font>
                            </div>


                            <br>
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