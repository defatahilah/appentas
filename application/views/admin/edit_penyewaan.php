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
                    <i>Data Penyewaan</i>
                </div>
            </div>
        </div>

        <div class="card-body">

            <?php foreach ($data_penyewaan as $row) { ?>

                <form action="<?php echo base_url() . 'C_Admin/Penyewaan/ubah_penyewaan_aksi'; ?>" method="post" class="form-horizontal">

                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group" hidden>
                            <label class="font-weight-bold">Tanggal Pemesanan</label>
                            <input type="hidden" name="id_sewa" value="<?php echo $row->id_sewa; ?>">
                            <input type="hidden" name="id_permohonan" value="<?php echo $row->id_permohonan; ?>">
                            <input type="datetime" name="tgl_sewa" class="form-control" value="<?php echo $row->tgl_sewa ?>" autocomplete="off" readonly>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $row->nama ?>" autocomplete="off" autofocus>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $row->alamat ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $row->email ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Telepon/Whatsapp</label>
                            <input type="text" name="no_telp" class="form-control" value="<?php echo $row->no_telp ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Nama Kegiatan</label>
                            <input type="text" name="nm_kegiatan" class="form-control" value="<?php echo $row->nm_kegiatan ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Ruangan</label>
                            <input type="hidden" name="id_ruangan" value="<?php echo $row->id_ruangan; ?>">
                            <select name="nm_ruangan" class="form-control">
                                <?php foreach ($data_ruangan as $ruangan) : ?>
                                    <option <?php if ($row->id_ruangan == $ruangan->id_ruangan) {
                                                echo "selected='selected'";
                                            } ?> value="<?php echo $ruangan->id_ruangan ?>">
                                        <?php echo $ruangan->nm_ruangan ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Jumlah ruangan</label>
                            <input type="text" name="quantity_r" class="form-control" value="<?php echo $row->quantity_r ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Tanggal Mulai</label>
                            <input type="date" id="tgl_mulai" onchange="diffDates(event.target.value,$('#tgl_berakhir').val())" name=" tgl_mulai" class="form-control" value="<?php echo $row->tgl_mulai ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Tanggal Berakhir</label>
                            <input type="date" id="tgl_berakhir" onchange="diffDates($('#tgl_mulai').val(),event.target.value)" name="tgl_berakhir" class="form-control" value="<?php echo $row->tgl_berakhir ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Lama Sewa</label>
                            <input type="text" id="lm_sewa" name="lm_sewa" class="form-control" value="<?php echo $row->lm_sewa ?>" autocomplete="off" readonly>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Jumlah Peserta</label>
                            <input type="text" name="peserta" class="form-control" value="<?php echo $row->peserta ?>" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Penyelenggara</label>
                            <input type="text" name="penyelenggara" class="form-control" value="<?php echo $row->penyelenggara ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Status</label>
                            <input type="text" name="konfirmasi" class="form-control" value="<?php echo $row->konfirmasi ?>" readonly>
                        </div>
                    </div>
                    <input type="hidden" name="total_biaya" class="form-control" value="<?php echo $row->total_biaya ?>" autocomplete="off" readonly>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url('Penyewaan') ?>">
                        <button type="button" class="btn btn-secondary float-right">Kembali</button>
                    </a>

                </form>
            <?php } ?>
        </div>
    </div>