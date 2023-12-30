<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Jadwal Seluruh.xls");
?>


<html>

<body>

    <!-- Main content -->
    <table border="0">
        <tbody>
            <tr>
                <th colspan="13" style="text-align: center; vertical-align: middle;">
                    <h1>Badan Pengembangan Sumber Daya Manusia Daerah
                        <br>Provinsi Kalimantan Selatan
                    </h1>
                </th>
            </tr>
            <tr>
                <th colspan="13" style="text-align: center; vertical-align: middle;">
                    <h3>Rekap Penyewaan Gedung/Aula,Asrama
                        <br> Kampus I dan Kampus II
                        <br> BPSDMD Provinsi Kalimantan Selatan <?= date('Y'); ?>
                    </h3>

                </th>
            </tr>
        </tbody>
    </table>
    <div class="card-body border-bottom-danger">
        <div class="table-responsive">
            <table id="dataTable" border="1" class="table" class="table table-bordered table-striped" width="fixed-size px" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Penyelenggara</th>
                        <th class="text-center" width="150px">Nama Kegiatan</th>
                        <th class="text-center" width="200px">Ruangan</th>

                        <th class="text-center">Lama Sewa</th>
                        <th class="text-center">Jumlah Peserta</th>
                        <th class="text-center" width="120px">Tanggal Mulai</th>
                        <th class="text-center" width="120px">Tanggal Berakhir</th>
                        <th class="text-center" width="120px">Status</th>
                        <th class="text-center" width="100px">Total Biaya</th>


                    </tr>
                </thead>

                <tbody>
                    <?php $no = 0;
                    foreach ($tpenyewaan as $row) {
                        $no++;
                    ?>
                        <tr>
                            <td class="text-center" scope="row"><?php echo "$no" ?></td>
                            <td><?php echo $row['penyelenggara'] ?></td>
                            <td><?php echo $row['nm_kegiatan'] ?></td>
                            <td><?php echo $row['nm_ruangan'] ?></td>

                            <td><?php echo $row['lm_sewa'] ?> Hari</td>
                            <td><?php echo $row['peserta'] ?> Org</td>
                            <td><?php echo $row['tgl_mulai'] ?></td>
                            <td><?php echo $row['tgl_berakhir'] ?></td>
                            <td><?php echo $row['konfirmasi'] ?></td>
                            <td>Rp <?php echo number_format($row['total_biaya'], 2, ",", ".") ?></td>

                        </tr>

                    <?php } ?>
                </tbody>
            </table>

</body>

</html>