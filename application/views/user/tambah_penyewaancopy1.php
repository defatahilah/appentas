<!-- Begin Page Content -->
<div class="container-fluid" style="background: linear-gradient(to left, #000046, #1cb5e0);">
    <h1 class="text-gray-100">APPENTAS</h1>

    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header bg-gradient-info py-3">

            <div class="breadcrumb">
                <div class="breadcrumb-item">
                    <a href="<?= base_url('') ?>">
                        <i>Home</i></a>

                </div>
                <div class="breadcrumb-item active">
                    <i>Pemesanan</i>
                </div>
            </div>
        </div>



        <!--?php var_dump($data_ruangan) ?-->

        <div class="card bg-gradient-light border-bottom-danger col-lg-12" style="padding: 15px; ">
            <h3 class="card-title text-center mt-2  ">Form Pemesanan</h3>
            <form action="<?php echo base_url() . 'C_User/Penyewaan/tambah_penyewaan_aksi'; ?>" method="post" class="form-horizontal">
                <input type="text" class="form-control" id="id_permohonan" name="id_permohonan" placeholder="id_permohonan" autocomplete="off" hidden readonly value="<?= $detail[0]->id_permohonan ?>">
                <div class="form-row justify-content-center" hidden>
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Tanggal dan Waktu Pemesanan</label>
                        <!--?php
                            date_default_timezone_set('Asia/Makassar'); ?-->
                        <input name="tgl_sewa" class="form-control" value="<?= date('Y/m/d G:i:s'); ?> " id="tgl_sewa" readonly>
                        <?php echo form_error('tgl_sewa', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Isi nama anda" class="form-control" autofocus readonly value="<?= $detail[0]->nama ?>">
                        <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Alamat</label>
                        <textarea type="text" rows="3" name="alamat" placeholder="Isi alamat anda" class="form-control" readonly><?= $detail[0]->alamat ?></textarea>
                        <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                    </div>


                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Email</label>
                        <input type="text" name="email" placeholder="Isi email anda" class="form-control" readonly value="<?= $detail[0]->email ?>">
                        <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                    </div>


                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Telepon/Whatsapp</label>
                        <input type="text" name="no_telp" placeholder="Isi nomor anda" class="form-control" readonly value="<?= $detail[0]->no_telp ?>">
                    </div>
                    <?php echo form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>



                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Nama Kegiatan</label>
                        <input type="text" name="nm_kegiatan" placeholder='Isi kegiatan (contoh:"Pelatihan,Pernikahan")' class="form-control" required autocomplete="off" value="<?= set_value('nm_kegiatan'); ?>">
                        <?php echo form_error('nm_kegiatan', '<div class="text-small text-danger">', '</div>') ?>
                    </div>


                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Ruangan</label>
                        <select onchange="ubahharga(event);cektanggal(event) " id="nm_ruangan" name="id_ruangan[]" multiple="multiple" class="js-example-basic-multiple form-control">
                            <option value="" disabled>-- Pilih Nama Ruangan --</option>
                            <?php foreach ($data_ruangan as $ruangan) : ?>
                                <option value="<?php echo $ruangan->id_ruangan ?>">
                                    <?php echo $ruangan->nm_ruangan ?> | (Rp <?php echo number_format($ruangan->harga, 0, ",", ".") ?>)

                                </option>
                            <?php endforeach ?>

                        </select>
                        <?php echo form_error('nm_ruangan', '<div class="text-small text-danger">', '</div>') ?>
                    </div>


                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Harga Ruangan/Hari (Rp)</label>
                        <input onchange="allharga(event)" type="text" id="harga" name="harga" placeholder="0" class="form-control" readonly>

                    </div>


                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Jumlah Ruangan </label>
                        <input id="jmlh_r" type="text" name="jmlh_r" placeholder="0" class="form-control" readonly>
                        <?php echo form_error('jmlh_r', '<div class="text-small text-danger">', '</div>') ?>
                    </div>


                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Kapasitas Max (Orang)</label>
                        <input type="text" id="kapasitas" name="kapasitas" placeholder="0" class="form-control" readonly>

                    </div>
                </div>

                <div class="form-row ">
                    <div class="col-md-6 form-group">
                        <input id="instansi" onchange="ubahpotongan(event)" type="checkbox" name="instansi" class="checkbox" aria-label="Checkbox for following text input">
                        <label class="font-weight-bold ">Instansi (jika untuk pemesanan instansi)</label>
                        <?php echo form_error('instansi', '<div class="text-small text-danger">', '</div>') ?>
                    </div>



                    <div id="ptg" class="col-md-6 form-group">
                        <label class="font-weight-bold ">Potongan Instansi (Rp)</label>
                        <input id="potongan" type="text" name="potongan" value="0" placeholder="0" class="form-control" readonly>
                        <?php echo form_error('potongan', '<div class="text-small text-danger">', '</div>') ?>
                    </div>


                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Tanggal Mulai</label>
                        <input onchange="cektanggal(event); bandingkantanggal(event); diffDates(event.target.value,$('#tgl_berakhir').val())" id="tgl_mulai" type="date" name="tgl_mulai" class="form-control">
                        <?php echo form_error('tgl_mulai', '<div class="text-small text-danger">', '</div>') ?>
                    </div>



                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Tanggal Berakhir</label>
                        <input onchange="cektanggal(event); bandingkantanggal2(event); diffDates($('#tgl_mulai').val(),event.target.value)" type="date" id="tgl_berakhir" name="tgl_berakhir" class="form-control">
                        <?php echo form_error('tgl_berakhir', '<div class="text-small text-danger">', '</div>') ?>
                    </div>


                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Lama Sewa (Hari)</label>
                        <input onchange="ubahlama(event)" id="lm_sewa" type="text" name="lm_sewa" placeholder="0" readonly class="form-control">
                        <?php echo form_error('lm_sewa', '<div class="text-small text-danger">', '</div>') ?>
                    </div>



                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Jumlah Ruangan (yang digunakan)</label>
                        <input onchange="ubahjumlah(event); maxjmlh(event)" id="quantity" type="text" name="quantity_r" value="1" class="form-control" autocomplete="off">
                        <?php echo form_error('quantity_r', '<div class="text-small text-danger">', '</div>') ?>
                    </div>




                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Jumlah Peserta (Orang)</label>
                        <input onchange="maximum(event)" id="peserta" type="text" name="peserta" class="form-control" placeholder="0" autocomplete="off">
                        <?php echo form_error('peserta', '<div class="text-small text-danger">', '</div>') ?>
                    </div>



                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold ">Penyelenggara</label>
                        <input type="text" name="penyelenggara" class="form-control" placeholder="Isi Penyelenggara acara" autocomplete="off" required>
                        <?php echo form_error('penyelenggara', '<div class="text-small text-danger">', '</div>') ?>
                    </div>



                    <div class="col-md-6 form-group" hidden>
                        <label class="font-weight-bold">Total Biaya</label>
                        <input id="total_biaya" type="text" name="total_biaya" class="form-control" placeholder="0" readonly>
                        <?php echo form_error('total_biaya', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                </div>

                <div style="margin-left: 30px; margin-right: 30px; margin-bottom: 15px;">
                    <div align="center">
                        <font size=2px color="black"><i>Keterangan: (Harga - Potongan) x Jumlah Ruangan (yang digunakan) x Lama Sewa .</i></font>
                    </div>
                    <br>
                </div>

                <div style="margin-left: 30px; margin-right: 30px; margin-bottom: 15px">
                    <div align="center">
                        <p class="mb-0 ">Total</p>
                        <h3 id="total_bayar" class="">Rp 0</h3>
                    </div>
                </div>
                <center><button id="tombolpesan" type="submit" class="btn btn-primary">Pesan</button></center>
                <a href="<?php echo base_url('C_User/Penyewaan/checkout') ?>"></a>

            </form>

        </div>

    </div>