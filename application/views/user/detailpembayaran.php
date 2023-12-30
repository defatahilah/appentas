<body>
    <br>


    <div align="center">
        <a href="<?= base_url('C_User/Penyewaan/konfirmasipembayaran'); ?>"><i class="ri-arrow-left-line badge badge-pill badge-primary"></i>&larr; Kembali</a>
    </div>


    <section>
        <div class="card-body row justify-content-center" style="margin-left: 30px; margin-right: 30px; margin-bottom: 15px; margin-top: 80px;">
            <div class="card bg-gradient-light col-lg-6">
                <div class="facts-box" style="padding: 15px;">
                    <h3 align="center"><b>INVOICE #<?= $detail[0]->id_sewa ?></b></h3>
                    <br>
                    <?= form_open_multipart('C_User/Penyewaan/berhasil'); ?>
                    <div style="margin-left: 30px; margin-right: 30px;">




                        <input type="hidden" class="form-control" id="id_sewa" name="id_sewa" placeholder="nama" autocomplete="off" readonly value="<?= $detail[0]->id_sewa ?>">

                        <div style="margin-bottom: 15px;">
                            <label for="namakonfirmasi" class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control" id="namakonfirmasi" name="namakonfirmasi" placeholder="nama" autocomplete="off" readonly value="<?= $detail[0]->nama ?>">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="alamatkonfirmasi" class="font-weight-bold">Alamat</label>
                            <input type="text" class="form-control" id="alamatkonfirmasi" name="alamatkonfirmasi" placeholder="alamat" autocomplete="off" readonly value="<?= $detail[0]->alamat ?>">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="emailkonfirmasi" class="font-weight-bold">Email</label>
                            <input type="text" class="form-control" id="emailkonfirmasi" name="emailkonfirmasi" placeholder="email" autocomplete="off" readonly value="<?= $detail[0]->email ?>">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="whatsappkonfirmasi" class="font-weight-bold">Telepon/WhatsApp</label>
                            <input type="text" class="form-control" id="whatsappkonfirmasi" name="whatsappkonfirmasi" placeholder="nomor whatsapp" autocomplete="off" readonly value="<?= $detail[0]->no_telp ?>">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="kegiatankonfirmasi" class="font-weight-bold">Nama Kegiatan</label>
                            <input type="text" class="form-control" id="kegiatankonfirmasi" name="kegiatankonfirmasi" placeholder="kegiatan" autocomplete="off" readonly value="<?= $detail[0]->nm_kegiatan ?>">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="ruangankonfirmasi" class="font-weight-bold">Ruangan</label>
                            <input type="text" class="form-control" id="ruangankonfirmasi" name="ruangankonfirmasi" placeholder="ruangan" autocomplete="off" readonly value="<?= $detail[0]->nm_ruangan ?>">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="hargakonfirmasi" class="font-weight-bold">Harga (Rp)</label>
                            <input type="text" class="form-control" id="hargakonfirmasi" name="hargakonfirmasi" placeholder="harga" autocomplete="off" readonly value="<?= $detail[0]->harga ?>">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="potongankonfirmasi" class="font-weight-bold">Potongan (Rp)</label>
                            <input type="text" class="form-control" id="potongankonfirmasi" name="potongankonfirmasi" placeholder="potongan" autocomplete="off" readonly value="<?= $detail[0]->potongan ?>">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="jumlahkonfirmasi" class="font-weight-bold">Jumlah Ruangan</label>
                            <input type="text" class="form-control" id="jumlahkonfirmasi" name="jumlahkonfirmasi" placeholder="jumlah" autocomplete="off" readonly value="<?= $detail[0]->quantity_r ?>">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="lamakonfirmasi" class="font-weight-bold">Lama Sewa (Hari)</label>
                            <input type="text" class="form-control" id="lamakonfirmasi" name="lamakonfirmasi" placeholder="lama" autocomplete="off" readonly value="<?= $detail[0]->lm_sewa ?>">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="totalkonfirmasi" class="font-weight-bold">Total Biaya (Rp)</label>
                            <input type="text" class="form-control" id="totalkonfirmasi" name="totalkonfirmasi" placeholder="total" autocomplete="off" readonly value="<?= $detail[0]->total_biaya ?>">
                        </div>

                        <div style="margin-bottom: 15px">
                            <label for="buktibayar" class="font-weight-bold">Upload Bukti Transfer (Jpg / Png)</label> <br>
                            <div class="custom-file">
                                <input class="custom-file-input" type="file" id="buktibayar" name="buktibayar" size="20">
                                <label class="custom-file-label" for="buktibayar">Pilih gambar</label>
                                <?= form_error('buktibayar', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div align="center">
                        <button type="submit" class="btn btn-primary">Konfirmasi Pembayaran</button>
                    </div>
                    <?= '</form>' ?>
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
</div>