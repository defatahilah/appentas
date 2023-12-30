<html>

<head>
    <div class="card-body row justify-content-center">
        <div class="card col-md-8 ">
            <table align="center">

                <tbody>
                    <tr>
                        <td rowspan="4"><img src="/BPSDMD/img/kalsel.png" width="100" height="130" style="margin-right: 15px;"></td>
                        <td style="text-align: center; vertical-align:middle;" width="800px">
                            <h3>Badan Pengembangan Sumber Daya Manusia Daerah
                                <br>Provinsi Kalimantan Selatan</br>
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align:middle;">Jalan Panglima Batur Timur Nomor 1A, Banjarbaru Utara</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align:middle;">Kota Banjarbaru</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align:middle;">Kalimantan Selatan 70711</td>
                    </tr>
                </tbody>
            </table>
</head>

<body>

    <section>

        <hr class="bg-gradient-dark">
        <div class="row justify-content-center" style="margin-left: 30px; margin-right: 30px; margin-bottom: 15px; margin-top: 120px;">
            <div class="col-lg-12">
                <div class="facts-box" style="padding: 15px;">
                    <h3 align="center"><b>CHECKOUT</b></h3>
                    <br>
                    <div style="margin-left: 30px; margin-right: 30px;">
                        <div class="row">
                            <div class="col">

                                <h3>Invoice # <?= $tpenyewaan[0]->id_sewa ?></h3>
                                <font size=1px>Nama : <?= $tpenyewaan[0]->nama ?> <font </font> | <?= $tpenyewaan[0]->tgl_sewa ?> </font>
                            </div>
                            <div class="col">
                                <h3 align="right">Rp <?= number_format($tpenyewaan[0]->total_biaya, 0, ",", ".") ?></h3>
                            </div>
                        </div>
                        <hr class="bg-gradient-dark">
                        <div class="row">
                            <div class="col">
                                <h8><b>Rincian</b></h8>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <font size=2px><b><?= $tpenyewaan[0]->nm_ruangan ?></b></font>
                            </div>
                            <div class="col" align="right">
                                <font size=2px>Rp <?= number_format($tpenyewaan[0]->harga, 0, ",", ".") ?> </font>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <font size=1px><b></b></font>
                            </div>
                            <div class="col" align="right">

                            </div>
                        </div>
                        <div class="row">
                            <!--?php if (["instansi"] == 'checked') : ?-->
                            <div class="col">
                                <font size=2px><b>Potongan Instansi</b></font>
                            </div>
                            <div class="col" align="right">
                                <font size=2px>(Rp -<?= number_format($tpenyewaan[0]->potongan, 0, ",", ".") ?>)</font>
                            </div>
                            <!--?php endif; ?-->
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <font size=1px><b>Jumlah Ruangan</b></font>
                            </div>
                            <div class="col" align="right">
                                <font size=2px><?= $tpenyewaan[0]->quantity_r ?> Ruangan</font>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <font size=1px><b>Lama Sewa</b></font>
                            </div>
                            <div class="col" align="right">
                                <font size=2px><?= $tpenyewaan[0]->lm_sewa ?> Hari</font>
                            </div>

                        </div>



                        <hr class="bg-gradient-dark">
                        <div class="row">

                            <div class="col" align="right">
                                <font size=2px>Total </b>Rp <?= number_format($tpenyewaan[0]->total_biaya, 0, ",", ".") ?></font>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <div align="center">
            <font size=2px color="gray">**Harap untuk screenshot halaman ini atau tekan " Ctrl + P untuk cetak"<br> pada keyboard komputer anda untuk memudahkan anda<br>ketika melakukan pembayaran dan konfirmasi nantinya.</font>
        </div>

        <div class="row justify-content-center" style="margin-left: 30px; margin-right: 30px; margin-bottom: 15px; margin-top: 120px;">
            <div class="col-lg-5">
                <div class="facts-box" style="padding: 15px;">
                    <div style="margin-left: 30px; margin-right: 30px;">
                        <p size=3px align="center">Silahkan transfer sesuai dengan nominal yang tertera dengan metode pembayaran dibawah ini</p>
                        <hr class="bg-gradient-dark">

                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col" align="center">
                                <b>XXXX XXXX XXXX XXXX (Bank Kalsel)</b>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <p size=3px align="center">Alamat pembayaran atas nama <b>BPSDMD Provinsi Kalimantan Selatan</b></p>

            </div>
        </div>
        </div>
    </section>
    <br>
    <div align="center">
        <a href="<?= base_url('C_User/Penyewaan/konfirmasipembayaran'); ?>" class="btn btn-primary">Konfirmasi Pembayaran</a>
    </div>

</html>
<script type="text/javascript">
    window.print();
</script>
</body>
<br>
<br>
<br>
<br>
<br>