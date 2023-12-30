<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan</h1>

    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Laporan</li>
        </ol>
    </nav>
    <!-- ======================================================================================= -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="mb-3"><a href="<?= base_url('C_Admin/Penyewaan/tampilperiode'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-fw fa-clipboard-list"></i> Laporan Perbulan</a>
            <a href="<?= base_url('C_Admin/Penyewaan/cetakpriode'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-plus fa-sm text-white-50"></i> Cetak Laporan</a>



        </div>


        <!-- Main content -->
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
                                <th class="text-center">Invoice</th>
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
                                <th class="text-center">Status</th>
                                <th class="text-center" width="150px">Total Biaya</th>


                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 0;
                            foreach ($tpenyewaan as $row) {
                                $no++; ?>

                                <tr>
                                    <td class="text-center"><?php echo "$no" ?></td>
                                    <td class="text-center"># <?php echo $row->id_sewa ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($row->tgl_sewa)); ?></td>
                                    <td><?php echo $row->nama ?></td>
                                    <td><?php echo $row->alamat ?></td>
                                    <td><?php echo $row->email ?></td>
                                    <td><a href="https://wa.me/<?php echo $row->no_telp ?>"><?php echo $row->no_telp ?></td>
                                    <td><?php echo $row->nm_kegiatan ?></td>
                                    <td><?php echo $row->nm_ruangan ?></td>
                                    <td><?php echo $row->quantity_r ?></td>
                                    <td><?php echo $row->lm_sewa ?> Hari</td>
                                    <td><?php echo $row->peserta ?> Org</td>
                                    <td><?php echo $row->tgl_mulai ?></td>
                                    <td><?php echo $row->tgl_berakhir ?></td>
                                    <td><?php echo $row->penyelenggara ?></td>
                                    <td><?php echo $row->konfirmasi ?></td>
                                    <td>Rp <?php echo number_format("$row->total_biaya", 0, ",", ".") ?></td>

                                </tr>
                            <?php
                            }
                            ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>