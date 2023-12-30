<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Main content -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Jadwal Penyewaan</li>
        </ol>
    </nav>
    <div class="card mb-4">
        <div class="card-header py-3 border-bottom-danger">
            <h3 class="card-title">Jadwal Penyewaan</h3>
        </div>
        <?= $this->session->flashdata('pesan'); ?>
        <div class="card-body border-bottom-danger">
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-striped" width="fixed-size px" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center" width="140px">Tanggal Pemesanan</th>
                            <th class="text-center" width="150px">Nama</th>
                            <th class="text-center" width="150px">Alamat</th>
                            <th class="text-center" width="150px">Email</th>
                            <th class="text-center">Telepon/Whatsapp</th>
                            <th class="text-center" width="150px">Nama Kegiatan</th>
                            <th class="text-center" width="200px">Ruangan</th>
                            <th class="text-center">Jumlah Ruangan</th>
                            <th class="text-center">Lama Sewa</th>
                            <th class="text-center">Jumlah Peserta</th>
                            <th class="text-center" width="85px">Tanggal Mulai</th>
                            <th class="text-center" width="85px">Tanggal Berakhir</th>
                            <th class="text-center">Penyelenggara</th>
                            <th class="text-center" width="150px">Status</th>
                            <th class="text-center" width="150px">Total Biaya</th>
                            <th class="text-center" width="200px">Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 0;
                        foreach ($tpenyewaan as $row) {
                            $no++; ?>

                            <tr>
                                <td class="text-center"><?php echo "$no" ?></td>
                                <td class="text-center"><?php echo date('d-m-Y (H:i:s)', strtotime($row->tgl_sewa)) ?></td>
                                <td><?php echo $row->nama ?></td>
                                <td><?php echo $row->alamat ?></td>
                                <td><a href="https://<?php echo $row->email ?>"><?php echo $row->email ?></td>
                                <td><a href="https://wa.me/<?php echo $row->no_telp ?>"><?php echo $row->no_telp ?></td>
                                <td><?php echo $row->nm_kegiatan ?></td>
                                <td><?php echo $row->nm_ruangan ?></td>
                                <td><?php echo $row->quantity_r ?></td>
                                <td><?php echo $row->lm_sewa ?> Hari</td>
                                <td><?php echo $row->peserta ?> Org</td>
                                <td><?php echo date('d-m-Y', strtotime($row->tgl_mulai)) ?></td>
                                <td><?php echo date('d-m-Y', strtotime($row->tgl_berakhir)) ?></td>
                                <td><?php echo $row->penyelenggara ?></td>
                                <td <?php if ($row->konfirmasi == 'Menunggu') { ?>style="display:block; margin:auto;" class="mx-4 my-4 badge badge-pill badge-warning"><?php echo $row->konfirmasi ?></td>
                                <td <?php } else { ?> style="display:block; margin:auto;" class="mx-4 my-4 badge badge-pill badge-success"><?php echo $row->konfirmasi ?></td><?php } ?>
                            <td class="text-center">Rp <?php echo number_format("$row->total_biaya", 0, ",", ".") ?></td>
                            <td class="text-center">
                                <?php
                                if ($row->buktibyr == null || $row->buktibyr == '') { ?>
                                    <a onclick="alert('Bukti transfer belum diupload')">
                                        <div class="badge badge-info"><i class="fas fa-download"> CekBukti</i></div>
                                    </a>
                                <?php
                                } else {
                                ?>
                                    <a href="<?php echo site_url('C_Admin/Penyewaan/download/' . $row->buktibyr) ?>">
                                        <div class="badge badge-info"><i class="fas fa-download"> CekBukti</i></div>
                                    </a>
                                <?php
                                } ?>
                                <a href="<?php echo site_url('C_Admin/Penyewaan/acc/' . $row->id_sewa) ?>">
                                    <div class="badge badge-success"><i class="fas fa-check"> ACC</i></div>
                                </a>
                                <!--a href="<?php echo site_url('C_Admin/Penyewaan/tolak/' . $row->id_sewa) ?>">
                                        <div class="badge badge-secondary"><i class="far fa-sad-cry"> Ditolak</i></div>
                                    </!a-->
                                <br>
                                <a href="<?php echo site_url('Edit_Penyewaan/' . $row->id_sewa) ?>" data-toggle="modal" data-target="#editpenyewaanModal" class="tomboleditpenyewaan" data-id_sewa="<?= $row->id_sewa ?>" data-nama="<?= $row->nama ?>" data-alamat="<?= $row->alamat ?>" data-email="<?= $row->email ?>" data-no_telp="<?= $row->no_telp ?>" data-nm_kegiatan="<?= $row->nm_kegiatan ?>" data-id_ruangan="<?= $row->id_ruangan ?>" data-nm_ruangan="<?= $row->nm_ruangan ?>" data-total_biaya="<?= $row->total_biaya ?>" data-harga="<?= $row->harga ?>" data-peserta="<?= $row->peserta ?>" data-lm_sewa="<?= $row->lm_sewa ?>" data-penyelenggara="<?= $row->penyelenggara ?>" data-konfirmasi="<?= $row->konfirmasi ?>">
                                    <div class="badge badge-primary"><i class="fas fa-edit"> Edit</i></div>
                                </a>
                                <a href="<?php echo site_url('C_Admin/penyewaan/hapus_penyewaan_aksi/' . $row->id_sewa) ?>">
                                    <div class="badge badge-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?');"><i class="fas fa-trash"> Hapus</i></div>
                                </a>
                            </tr>
                        <?php
                        }
                        ?>

                </table>

            </div>
        </div>
    </div>
    <!-- Edit penyewaan Modal-->
    <div class="modal fade" id="editpenyewaanModal" tabindex="-1" role="dialog" aria-labelledby="editsewaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-primary bg-gradient-light">
                    <h5 class="modal-title" id="editsewaModalLabel">Edit Penyewaan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url('C_Admin/Penyewaan/ubah_penyewaan_aksi'); ?>">
                            <div class="form-row " hidden>
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Id Penyewaan</label>
                                    <input type="text" name="id_sewa" class="form-control" id="id_sewaedit" placeholder="Masukkan Id sewa" autocomplete="off" autofocus required>
                                    <?php echo form_error('id_sewa', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="namasewaedit" autocomplete="off">
                                    <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamatsewaedit" autocomplete="off">
                                    <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Email</label>
                                    <input type="text" name="email" class="form-control" id="emailsewaedit" autocomplete="off">
                                    <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Telepon/Whatsapp</label>
                                    <input type="text" name="no_telp" class="form-control" id="no_telpsewaedit" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Nama Kegiatan</label>
                                    <input type="text" name="nm_kegiatan" id="nm_kegiatanedit" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Ruangan</label>
                                    <!-- <input type="hidden" name="id_ruangan" id="nm_ruangedit" value="<?php echo $row->id_ruangan; ?>"> -->
                                    <select onchange="ubahharga1(event)" name="id_ruangan" id="id_ruangedit" class=" form-control">
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
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Harga</label>
                                    <input type="text" id="hargaedit" name="harga" class="form-control" value="<?php echo $row->harga ?>" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-row ">
                                <div class="col-md-6 form-group">
                                    <input id="instansiedit" onchange="ubahpotongan1(event)" type="checkbox" name="instansi" class="checkbox" aria-label="Checkbox for following text input">
                                    <label class="font-weight-bold ">Instansi (jika untuk pemesanan instansi)</label>

                                </div>
                            </div>


                            <div class="form-row justify-content-center">
                                <div id="ptg" class="col-md-12 form-group">
                                    <label class="font-weight-bold ">Potongan Instansi (Rp)</label>
                                    <input id="potongedit" type="text" name="potongan" value="0" placeholder="0" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Jumlah ruangan</label>
                                    <input type="text" name="quantity_r" class="form-control" value="<?php echo $row->quantity_r ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Tanggal Mulai</label>
                                    <input type="date" id="tgl_mulai" onchange="diffDates(event.target.value,$('#tgl_berakhir').val())" name=" tgl_mulai" class="form-control" value="<?php echo $row->tgl_mulai ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Tanggal Berakhir</label>
                                    <input type="date" id="tgl_berakhir" onchange="diffDates($('#tgl_mulai').val(),event.target.value)" name="tgl_berakhir" class="form-control" value="<?php echo $row->tgl_berakhir ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Lama Sewa</label>
                                    <input type="text" id="lm_sewaedit" name="lm_sewa" class="form-control" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Jumlah Peserta</label>
                                    <input type="text" id="pesertaedit" name="peserta" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Penyelenggara</label>
                                    <input type="text" id="penyelenggaraedit" name="penyelenggara" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Status</label>
                                    <input type="text" id="konfirmasiedit" name="konfirmasi" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-md-12 form-group">
                                    <label class="font-weight-bold">Total Biaya</label>
                                    <input type="text" id="total_biayaedit" name="total_biaya" class="form-control" placeholder="0" readonly>
                                </div>
                            </div>


                            <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                            <!--a href="<!?php echo base_url('Ruangan') ?>"></!a-->

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function ubahharga1(event) {

        $.ajax({
            url: '<?= base_url('C_Admin/Penyewaan/ruangan') ?>',
            method: "POST",
            data: 'id_ruangan=' + event.target.value,

            dataType: 'json',
            success: function(data) {
                console.log(data)


                $('#hargaedit').val(data[0].harga);
                // $('#total_biayaedit').val(data[0].total_biaya);
                $('#jmlh_r').val(data[0].jmlh_r);
                $('#kapasitas').val(data[0].kapasitas);
                if ($('#instansiedit').is(':checked')) {
                    $('#potongedit').val(data[0].potongan);
                } else {
                    $('#potongedit').val(0);
                }
                // $('#quantity').on('keyup', function() {
                //     var total_harga = (parseInt($('#harga').val()) - parseInt($('#potongan').val())) * parseInt($('#quantity').val()) * parseInt($('#lm_sewa').val());
                //     const format = total_harga.toString().split('').reverse().join('');
                //     const convert = format.match(/\d{1,3}/g);
                //     const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
                //     $('#total_biaya').val(total_harga);
                //     $('#total_bayar').html(rupiah);
                // })
                var total_harga = $('#hargaedit').val() - $('#potongedit').val();
                // const format = total_harga.toString().split('').reverse().join('');
                // const convert = format.match(/\d{1,3}/g);
                // const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
                $('#total_biayaedit').val(total_harga);
                // $('#total_bayar').html(rupiah);
            }

        });
    }

    function ubahpotongan1(event) {
        var nm_ruangan = $('#id_ruangedit').val();
        //console.log(id_ruangan)
        var total_harga;
        if ($('#instansiedit').is(':checked')) {
            $.ajax({
                url: '<?= base_url('C_Admin/Penyewaan/ruangan') ?>',
                method: "POST",
                data: 'id_ruangan=' + nm_ruangan,

                dataType: 'json',
                success: function(data) {


                    console.log(data)
                    $('#potongedit').val(data[0].potongan);
                    total_harga = $('#hargaedit').val() - $('#potongedit').val();
                    // const format = total_harga.toString().split('').reverse().join('');
                    // const convert = format.match(/\d{1,3}/g);
                    // const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
                    $('#total_biayaedit').val(total_harga);
                    // $('#total_bayar').html(rupiah);
                }

            });
        } else {
            $('#potongedit').val(0);
            total_harga = $('#hargaedit').val() - $('#potongedit').val();
            // const format = total_harga.toString().split('').reverse().join('');
            // const convert = format.match(/\d{1,3}/g);
            // const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
            $('#total_biayaedit').val(total_harga);
            // $('#total_bayar').html(rupiah);
        }


    }
</script>