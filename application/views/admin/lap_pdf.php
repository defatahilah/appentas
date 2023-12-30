<!-- Begin Page Content -->
<div class="container-fluid">

    <body>

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laporan Jadwal</h1>


        </div>
        <!-- ======================================================================================= -->

        <!-- Begin Page Content -->

        <!-- Main content -->
        <div class="card mb-4">
            <div class="card-header py-3 border-bottom-danger">
                <h3 class="card-title">Jadwal Penyewaan</h3>
            </div>
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
                                <th class="text-center">Status</th>
                                <th class="text-center" width="100px">Total Biaya</th>


                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 0;
                            foreach ($tpenyewaan as $row) {
                                $no++; ?>

                                <tr>
                                    <td class="text-center"><?php echo "$no" ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($row->tgl_sewa)) ?></td>
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
                                    <td><?php echo $row->keterangan ?></td>
                                    <td><?php echo $row->konfirmasi ?></td>
                                    <td>Rp <?php echo number_format("$row->total_biaya", 2, ",", ".") ?></td>

                                </tr>
                            <?php
                            }
                            ?>
                    </table>
                    <script type="text/javascript">
                        window.print();
                    </script>
                </div>
            </div>
        </div>
    </body>

</div>